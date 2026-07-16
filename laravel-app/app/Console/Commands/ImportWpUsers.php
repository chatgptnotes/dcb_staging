<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\User;
use App\Services\Auth\WpHashService;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ImportWpUsers extends Command
{
    protected $signature = 'wp:import-users
                            {--source=decodemy_wp_users : Schema holding the exported wp_users/wp_usermeta tables}
                            {--dry-run : Report what would happen without writing}';

    protected $description = 'Import WordPress users (with password hashes) into the native users table';

    private const META_KEYS = ['date_of_birth', 'billing_phone', 'billing_country'];

    public function handle(WpHashService $wpHash): int
    {
        $source = preg_replace('/[^A-Za-z0-9_]/', '', (string) $this->option('source'));
        $dryRun = (bool) $this->option('dry-run');

        $wpUsers = DB::table(DB::raw("`{$source}`.`wp_users`"))
            ->orderBy('ID')
            ->get();

        if ($wpUsers->isEmpty()) {
            $this->error("No rows found in {$source}.wp_users — wrong source schema?");

            return self::FAILURE;
        }

        $meta = $this->loadUserMeta($source);
        $mirroredIds = DB::table('wp_users')->pluck('user_id')->flip();
        $importedIds = User::whereNotNull('wp_user_id')->pluck('wp_user_id')->flip();

        $winners = $this->resolveDuplicates($wpUsers, $mirroredIds, $importedIds);

        $created = $updated = $skippedDuplicates = $passwordPreserved = 0;

        foreach ($wpUsers as $wpUser) {
            $wpId = (int) $wpUser->ID;

            if (! isset($winners[$wpId])) {
                $skippedDuplicates++;
                $this->warn("Skipping duplicate account wp_user_id={$wpId} (login '{$wpUser->user_login}')");

                continue;
            }

            $userMeta = $meta[$wpId] ?? [];

            $attributes = [
                'username' => $wpUser->user_login,
                'email' => $wpUser->user_email,
                'display_name' => $wpUser->display_name !== '' ? $wpUser->display_name : $wpUser->user_login,
                'date_of_birth' => $this->parseDate($userMeta['date_of_birth'] ?? null),
                'billing_phone' => $userMeta['billing_phone'] ?? null,
                'billing_country' => $userMeta['billing_country'] ?? null,
            ];

            $user = User::where('wp_user_id', $wpId)->first()
                ?? User::whereNull('wp_user_id')->where('email', $wpUser->user_email)->where('email', '!=', '')->first();

            if ($user === null) {
                if (! $dryRun) {
                    $user = new User();
                    $user->wp_user_id = $wpId;
                    $user->password = $wpUser->user_pass;
                    $user->user_role = '2';
                    $user->status = 'active';
                    $user->forceFill($attributes);
                    $user->created_at = $this->parseDate($wpUser->user_registered) !== null
                        ? Carbon::parse($wpUser->user_registered)
                        : now();
                    $user->save();
                }
                $created++;

                continue;
            }

            // Never clobber a password that has already been rehashed to
            // native bcrypt by a successful native login.
            if ($wpHash->needsRehash($user->password ?? '') || ($user->password ?? '') === '') {
                if (! $dryRun) {
                    $user->password = $wpUser->user_pass;
                }
            } else {
                $passwordPreserved++;
            }

            if (! $dryRun) {
                $user->wp_user_id = $wpId;
                $user->forceFill($attributes);
                $user->save();
            }
            $updated++;
        }

        if (! $dryRun) {
            $this->warnOnDuplicateRows();
        }

        $mode = $dryRun ? '[DRY RUN] ' : '';
        $this->info("{$mode}Created: {$created}, Updated: {$updated}, Duplicate artifacts skipped: {$skippedDuplicates}, Native passwords preserved: {$passwordPreserved}");

        return self::SUCCESS;
    }

    /**
     * @return array<int, array<string, string>>
     */
    private function loadUserMeta(string $source): array
    {
        $rows = DB::table(DB::raw("`{$source}`.`wp_usermeta`"))
            ->whereIn('meta_key', self::META_KEYS)
            ->get(['user_id', 'meta_key', 'meta_value']);

        $meta = [];
        foreach ($rows as $row) {
            if ($row->meta_value !== null && $row->meta_value !== '') {
                $meta[(int) $row->user_id][$row->meta_key] = $row->meta_value;
            }
        }

        return $meta;
    }

    /**
     * WP exports can contain duplicate accounts (same login/email created by
     * double-submits). Keep one per login. Preference order, designed so the
     * winner never changes between runs (avoids creating shadow rows):
     *   1. an ID already imported into users (pin to the established account)
     *   2. the account the app already mirrors (it owns packages/results)
     *   3. the lowest source ID
     *
     * @param \Illuminate\Support\Collection<int, object> $wpUsers
     * @param \Illuminate\Support\Collection<int, int> $mirroredIds
     * @param \Illuminate\Support\Collection<int, int> $importedIds
     * @return array<int, true> Map of wp_user_id => keep
     */
    private function resolveDuplicates($wpUsers, $mirroredIds, $importedIds): array
    {
        $winners = [];

        foreach ($wpUsers->groupBy('user_login') as $group) {
            $winner = $group->first(fn ($u) => isset($importedIds[(int) $u->ID]))
                ?? $group->first(fn ($u) => isset($mirroredIds[(int) $u->ID]))
                ?? $group->first();
            $winners[(int) $winner->ID] = true;
        }

        return $winners;
    }

    /**
     * Safety net: a single person must map to a single users row. Warn loudly
     * if any username or email ended up on more than one row.
     */
    private function warnOnDuplicateRows(): void
    {
        foreach (['username', 'email'] as $column) {
            $dups = User::whereNotNull('wp_user_id')
                ->whereNotNull($column)
                ->where($column, '!=', '')
                ->selectRaw("{$column} AS value, COUNT(*) AS c")
                ->groupBy($column)
                ->havingRaw('COUNT(*) > 1')
                ->get();

            foreach ($dups as $dup) {
                $this->warn("Duplicate {$column} across users rows: '{$dup->value}' ({$dup->c} rows) — investigate before relying on native login.");
            }
        }
    }

    private function parseDate(?string $value): ?string
    {
        if ($value === null || $value === '' || str_starts_with($value, '0000')) {
            return null;
        }

        try {
            return Carbon::parse($value)->format('Y-m-d');
        } catch (\Throwable) {
            return null;
        }
    }
}
