<?php

declare(strict_types=1);

namespace App\Services\Billing;

use App\Models\User;
use App\Models\WPUsers;
use App\Models\EntitlementGrant;
use App\Models\OrganizationSeat;
use Carbon\Carbon;

/**
 * Single place that writes a user's package entitlement.
 *
 * The access gate (ValidatePackage middleware) reads `wp_users.package`, so
 * that is the authoritative target; `users.package` is mirrored for
 * consistency. All entitlement paths (Stripe webhook, buy_package,
 * access codes) go through here so the two tables can never diverge.
 *
 * Keyed by the WordPress user id (what session('user_id') holds).
 */
final class EntitlementService
{
    /**
     * Grant (or downgrade) a package to the user identified by their WP id.
     * Creates the wp_users mirror row if it does not yet exist.
     */
    public function setPackage(int $wpUserId, string $package): void
    {
        $mirror = WPUsers::where('user_id', $wpUserId)->first();

        if ($mirror === null) {
            $mirror = new WPUsers();
            $mirror->user_id = $wpUserId;
        }

        $mirror->package = $package;
        $mirror->save();

        // Some legacy imports have sparse/incomplete mirror rows; force the
        // entitlement column by user_id because middleware reads this table.
        WPUsers::where('user_id', $wpUserId)->update(['package' => $package]);

        // Mirror onto the native users row when one exists.
        $user = User::where('wp_user_id', $wpUserId)->first();
        if ($user !== null) {
            $user->package = $package;
            $user->activated_date = Carbon::now()->format('Y-m-d');
            $user->save();
        }
    }

    /**
     * Convenience for cancellations / lapses.
     */
    public function downgradeToFree(int $wpUserId): void
    {
        // A Stripe cancellation must never erase a permanent voucher or an
        // organisation entitlement. The old system only had one package
        // column, so resolve durable grants before applying the legacy
        // downgrade behaviour.
        $permanent = EntitlementGrant::where('wp_user_id', $wpUserId)
            ->where('status', 'active')
            ->where('is_permanent', true)
            ->orderByDesc('id')
            ->first();

        if ($permanent !== null) {
            $this->setPackage($wpUserId, $permanent->package_slug);
            return;
        }

        $this->setPackage($wpUserId, (string) config('packages.free_slug', 'free'));
    }

    public function grantPermanent(int $wpUserId, string $package, string $sourceType, int $sourceId): void
    {
        EntitlementGrant::updateOrCreate(
            ['wp_user_id' => $wpUserId, 'source_type' => $sourceType, 'source_id' => $sourceId],
            [
                'package_slug' => $package,
                'is_permanent' => true,
                'starts_at' => now(),
                'ends_at' => null,
                'status' => 'active',
            ]
        );

        $this->setPackage($wpUserId, $package);
    }

    public function grantOrganizationSeat(int $wpUserId, OrganizationSeat $seat): void
    {
        $permanent = $seat->access_term === 'permanent';
        EntitlementGrant::updateOrCreate(
            ['wp_user_id' => $wpUserId, 'source_type' => 'organization_seat', 'source_id' => $seat->id],
            [
                'package_slug' => $seat->package_slug,
                'is_permanent' => $permanent,
                'starts_at' => now(),
                'ends_at' => $seat->access_ends_at,
                'status' => 'active',
            ]
        );

        $this->setPackage($wpUserId, $seat->package_slug);
    }
}
