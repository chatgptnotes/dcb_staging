<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\PaymentRecord;
use App\Models\User;
use App\Models\WPUsers;
use App\Services\Billing\EntitlementService;
use App\Services\Billing\PackageCatalog;
use Illuminate\Console\Command;

/**
 * Repairs a missing/stale local entitlement only when a local successful
 * checkout record identifies both the customer and a current paid plan.
 */
class ReconcilePaidEntitlement extends Command
{
    protected $signature = 'billing:reconcile-entitlement
                            {email : Customer email address}
                            {--apply : Persist the verified entitlement; without this option the command is read-only}';

    protected $description = 'Reconcile a customer package from their successful local payment record';

    public function handle(PackageCatalog $catalog, EntitlementService $entitlements): int
    {
        $email = strtolower(trim((string) $this->argument('email')));
        $user = User::whereRaw('LOWER(email) = ?', [$email])->first();
        $mirror = $user?->wp_user_id
            ? WPUsers::where('user_id', $user->wp_user_id)->first()
            : WPUsers::whereRaw('LOWER(email) = ?', [$email])->first();
        $wpUserId = (int) ($user?->wp_user_id ?: $mirror?->user_id);

        if ($wpUserId <= 0) {
            $this->error('No local customer identity matches that email.');

            return self::FAILURE;
        }

        $payment = PaymentRecord::query()
            ->where('status', 'paid')
            ->where(function ($query) use ($wpUserId, $email): void {
                $query->where('wp_user_id', $wpUserId)
                    ->orWhereRaw('LOWER(customer_email) = ?', [$email]);
            })
            ->orderByDesc('paid_at')
            ->orderByDesc('id')
            ->first();

        $package = (string) ($payment?->package_slug ?? '');
        if ($payment === null || ! $catalog->isPaid($package)) {
            $this->error('No successful payment for a current paid package was found; entitlement was not changed.');

            return self::FAILURE;
        }

        $this->line("Verified payment #{$payment->id}: {$package} for WP user {$wpUserId}.");
        if (! $this->option('apply')) {
            $this->comment('Dry run only. Re-run with --apply to update the local entitlement.');

            return self::SUCCESS;
        }

        $entitlements->setPackage($wpUserId, $package);
        $this->info("Entitlement updated to {$package}.");

        return self::SUCCESS;
    }
}
