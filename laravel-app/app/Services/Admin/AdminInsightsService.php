<?php

declare(strict_types=1);

namespace App\Services\Admin;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AdminInsightsService
{
    public function range(string $range): array
    {
        $end = now();
        $start = match ($range) {
            '7d' => $end->copy()->subDays(6)->startOfDay(),
            '90d' => $end->copy()->subDays(89)->startOfDay(),
            'all' => null,
            default => $end->copy()->subDays(29)->startOfDay(),
        };

        return [$start, $end];
    }

    public function users(string $search = '', string $filter = 'all'): Collection
    {
        $completed = DB::table('question_answers_main')
            ->where('status', 'complete')
            ->selectRaw('user_id, MAX(created_at) as completed_at')
            ->groupBy('user_id');
        $started = DB::table('question_answers_main')
            ->selectRaw('user_id, MAX(created_at) as started_at')
            ->groupBy('user_id');
        $latestGrant = DB::table('entitlement_grants')->where('status', 'active')
            ->selectRaw('wp_user_id, MAX(id) as id')->groupBy('wp_user_id');

        $query = DB::table('wp_users')
            ->leftJoin('users', 'users.wp_user_id', '=', 'wp_users.user_id')
            ->leftJoinSub($completed, 'completed_attempt', 'completed_attempt.user_id', '=', 'wp_users.user_id')
            ->leftJoinSub($started, 'started_attempt', 'started_attempt.user_id', '=', 'wp_users.user_id')
            ->leftJoinSub($latestGrant, 'latest_grant', 'latest_grant.wp_user_id', '=', 'wp_users.user_id')
            ->leftJoin('entitlement_grants as grants', 'grants.id', '=', 'latest_grant.id')
            ->where(function ($query) {
                $query->where('users.user_role', 2)->orWhereNotNull('wp_users.email');
            });

        if ($search !== '') {
            $like = '%'.addcslashes($search, '%_\\').'%';
            $query->where(function ($query) use ($like) {
                $query->where('wp_users.display_name', 'like', $like)
                    ->orWhere('users.display_name', 'like', $like)
                    ->orWhere('wp_users.email', 'like', $like)
                    ->orWhere('users.email', 'like', $like);
            });
        }
        if ($filter === 'completed') {
            $query->whereNotNull('completed_attempt.completed_at');
        } elseif ($filter === 'progress') {
            $query->whereNotNull('started_attempt.started_at')->whereNull('completed_attempt.completed_at');
        } elseif ($filter === 'corporate') {
            $query->where('grants.source_type', 'organization_seat');
        }

        return $query->orderByDesc(DB::raw('COALESCE(users.created_at, wp_users.created_at)'))->get([
            'wp_users.user_id as wp_user_id',
            DB::raw('COALESCE(NULLIF(wp_users.display_name, ""), users.display_name) as display_name'),
            DB::raw('COALESCE(NULLIF(wp_users.email, ""), users.email) as email'),
            'wp_users.package',
            'completed_attempt.completed_at',
            'started_attempt.started_at',
            'grants.source_type',
            DB::raw('COALESCE(users.created_at, wp_users.created_at) as registered_at'),
        ])->map(function ($user) {
            $user->is_corporate = $user->source_type === 'organization_seat';
            $user->assessment_status = $user->completed_at ? 'Completed' : ($user->started_at ? 'In progress' : 'Not started');
            $user->progress = $user->completed_at ? 100 : ($user->started_at ? 50 : 0);
            $user->joined_via = $user->is_corporate
                ? 'Corporate'
                : 'Individual · '.($user->package && $user->package !== 'free' ? ucfirst(str_replace(['-', '_'], ' ', $user->package)) : 'Free');
            return $user;
        });
    }

    public function payments(?Carbon $start, Carbon $end, string $search = '', string $plan = ''): Collection
    {
        $stored = Schema::hasTable('payment_records')
            ? DB::table('payment_records')
                ->leftJoin('wp_users', 'wp_users.user_id', '=', 'payment_records.wp_user_id')
                ->leftJoin('users', 'users.wp_user_id', '=', 'payment_records.wp_user_id')
                ->when($start, fn ($query) => $query->whereBetween('payment_records.paid_at', [$start, $end]))
                ->orderByDesc('payment_records.paid_at')
                ->get([
                    'payment_records.*',
                    DB::raw('COALESCE(NULLIF(wp_users.display_name, ""), users.display_name) as local_display_name'),
                    DB::raw('COALESCE(NULLIF(wp_users.email, ""), users.email) as local_email'),
                    'users.billing_phone as local_phone',
                ])
            : collect();
        $storedByIntent = $stored->filter(fn ($row) => ! empty($row->stripe_payment_intent_id))
            ->keyBy('stripe_payment_intent_id');

        $voucherRows = DB::table('voucher_redemptions')
            ->leftJoin('vouchers', 'vouchers.id', '=', 'voucher_redemptions.voucher_id')
            ->leftJoin('wp_users', 'wp_users.user_id', '=', 'voucher_redemptions.wp_user_id')
            ->leftJoin('users', 'users.wp_user_id', '=', 'voucher_redemptions.wp_user_id')
            ->when($start, fn ($query) => $query->whereBetween('voucher_redemptions.redeemed_at', [$start, $end]))
            ->orderByDesc('voucher_redemptions.redeemed_at')
            ->get([
                'voucher_redemptions.stripe_payment_intent_id',
                'voucher_redemptions.package_slug',
                'voucher_redemptions.final_amount_minor',
                'voucher_redemptions.currency',
                'voucher_redemptions.redeemed_at',
                'vouchers.code_hint',
                DB::raw('COALESCE(NULLIF(wp_users.display_name, ""), users.display_name) as display_name'),
                DB::raw('COALESCE(NULLIF(wp_users.email, ""), users.email) as email'),
                'users.billing_phone as phone',
            ]);
        $vouchersByIntent = $voucherRows->filter(fn ($row) => ! empty($row->stripe_payment_intent_id))
            ->keyBy('stripe_payment_intent_id');
        $rows = collect();
        $usedStoredIds = [];
        $knownVoucherIntents = [];

        $secret = (string) config('cashier.secret');
        if ($secret !== '') {
            try {
                $params = ['limit' => 100, 'expand' => ['data.latest_charge', 'data.customer']];
                if ($start) {
                    $params['created'] = ['gte' => $start->timestamp, 'lte' => $end->timestamp];
                }
                $intents = (new \Stripe\StripeClient($secret))->paymentIntents->all($params);
                foreach ($intents->data as $intent) {
                    $storedRow = $storedByIntent->get($intent->id);
                    $voucherRow = $vouchersByIntent->get($intent->id);
                    $metadata = (array) ($intent->metadata ?? []);
                    $wpUserId = (int) ($metadata['wp_user_id'] ?? 0);
                    $user = $wpUserId > 0 ? $this->customer($wpUserId) : null;
                    $charge = is_object($intent->latest_charge) ? $intent->latest_charge : null;
                    $stripeCustomer = $this->stripeCustomer($intent, $charge);
                    $status = $charge && ((int) ($charge->amount_refunded ?? 0) > 0 || ! empty($charge->refunded))
                        ? 'Refunded'
                        : ($intent->status === 'succeeded' ? 'Paid' : 'Failed');
                    if ($storedRow) {
                        $usedStoredIds[(int) $storedRow->id] = true;
                    }
                    if ($voucherRow) {
                        $knownVoucherIntents[] = $intent->id;
                    }
                    $rows->push((object) [
                        'transaction_id' => $intent->id,
                        'display_name' => $this->firstPresent(
                            $storedRow?->local_display_name,
                            $storedRow?->customer_name,
                            $voucherRow?->display_name,
                            $user?->display_name,
                            $stripeCustomer['name'],
                            'Customer'
                        ),
                        'email' => $this->firstPresent(
                            $storedRow?->local_email,
                            $storedRow?->customer_email,
                            $voucherRow?->email,
                            $user?->email,
                            $stripeCustomer['email']
                        ),
                        'phone' => $this->firstPresent($storedRow?->local_phone, $user?->billing_phone, $stripeCustomer['phone']),
                        'package' => $storedRow?->package_slug ?? $voucherRow?->package_slug ?? ($metadata['package'] ?? '—'),
                        'coupon' => $storedRow?->coupon_code ?? $voucherRow?->code_hint ?? '—',
                        'amount_minor' => $status === 'Refunded' && $charge ? (int) ($charge->amount_refunded ?? $intent->amount_received) : (int) ($intent->amount_received ?: $intent->amount),
                        'currency' => (string) $intent->currency,
                        'status' => $status,
                        'created_at' => Carbon::createFromTimestamp((int) $intent->created),
                    ]);
                }
            } catch (\Throwable $exception) {
                report($exception);
            }
        }

        foreach ($stored as $row) {
            if (isset($usedStoredIds[(int) $row->id])) {
                continue;
            }
            $rows->push((object) [
                'transaction_id' => $row->stripe_payment_intent_id ?: ($row->stripe_subscription_id ?: $row->checkout_session_id),
                'display_name' => $this->firstPresent($row->local_display_name, $row->customer_name, 'Customer'),
                'email' => $this->firstPresent($row->local_email, $row->customer_email),
                'phone' => $row->local_phone,
                'package' => $row->package_slug ?: '—',
                'coupon' => $row->coupon_code ?: '—',
                'amount_minor' => (int) ($row->amount_total_minor ?? $row->amount_subtotal_minor ?? 0),
                'currency' => $row->currency ?: 'usd',
                'status' => $row->status === 'refunded' ? 'Refunded' : ($row->status === 'paid' ? 'Paid' : 'Failed'),
                'created_at' => Carbon::parse($row->paid_at ?? $row->created_at),
            ]);
        }

        foreach ($voucherRows as $row) {
            if (($row->stripe_payment_intent_id && in_array($row->stripe_payment_intent_id, $knownVoucherIntents, true))
                || ($row->stripe_payment_intent_id && $storedByIntent->has($row->stripe_payment_intent_id))) {
                continue;
            }
            $rows->push((object) [
                'transaction_id' => $row->stripe_payment_intent_id ?: 'Recorded locally',
                'display_name' => $row->display_name ?: 'Customer',
                'email' => $row->email,
                'phone' => $row->phone,
                'package' => $row->package_slug ?: '—',
                'coupon' => $row->code_hint ?: '—',
                'amount_minor' => (int) $row->final_amount_minor,
                'currency' => $row->currency ?: 'usd',
                'status' => 'Paid',
                'created_at' => Carbon::parse($row->redeemed_at),
            ]);
        }

        $planTitles = DB::table('pricing_packages')->pluck('title', 'slug');

        return $rows->map(function ($row) use ($planTitles) {
            $row->plan_slug = $row->package;
            $row->package = $row->plan_slug === '—'
                ? '—'
                : ($planTitles->get($row->plan_slug) ?: str($row->plan_slug)->headline());
            return $row;
        })->when($plan !== '', fn (Collection $rows) => $rows->where('plan_slug', $plan))
            ->when($search !== '', function (Collection $rows) use ($search) {
                $needle = mb_strtolower($search);
                return $rows->filter(function ($row) use ($needle) {
                    return str_contains(mb_strtolower(implode(' ', [
                        $row->display_name ?? '', $row->email ?? '', $row->phone ?? '',
                    ])), $needle);
                });
            })->sortByDesc('created_at')->values();
    }

    private function customer(int $wpUserId): ?object
    {
        return DB::table('users')->where('wp_user_id', $wpUserId)->first(['display_name', 'email', 'billing_phone'])
            ?: DB::table('wp_users')->where('user_id', $wpUserId)->first(['display_name', 'email']);
    }

    /** @return array{name: ?string, email: ?string, phone: ?string} */
    private function stripeCustomer(object $intent, ?object $charge): array
    {
        $customer = $intent->customer ?? null;
        $billing = $charge->billing_details ?? null;

        return [
            'name' => $this->objectValue($customer, 'name') ?: $this->objectValue($billing, 'name'),
            'email' => $this->objectValue($customer, 'email') ?: $this->objectValue($billing, 'email'),
            'phone' => $this->objectValue($customer, 'phone') ?: $this->objectValue($billing, 'phone'),
        ];
    }

    private function objectValue(mixed $object, string $key): ?string
    {
        $value = is_array($object) ? ($object[$key] ?? null) : (is_object($object) ? ($object->{$key} ?? null) : null);
        return is_string($value) && trim($value) !== '' ? trim($value) : null;
    }

    private function firstPresent(?string ...$values): ?string
    {
        foreach ($values as $value) {
            if ($value !== null && trim($value) !== '') {
                return trim($value);
            }
        }

        return null;
    }
}
