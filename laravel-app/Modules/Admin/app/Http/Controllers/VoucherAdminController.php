<?php

declare(strict_types=1);

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use App\Models\OrganizationEnquiry;
use App\Models\OrganizationQuote;
use App\Models\OrganizationSeat;
use App\Models\PricingPackage;
use App\Models\Voucher;
use App\Services\Billing\OrganizationSeatService;
use App\Services\Billing\OrganizationCodeService;
use App\Services\Billing\PackageCatalog;
use App\Services\Billing\VoucherService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use RuntimeException;

class VoucherAdminController extends Controller
{
    public function vouchers(Request $request)
    {
        $query = Voucher::query()->latest();
        if ($request->filled('status')) {
            $query->where('status', (string) $request->string('status'));
        }
        if ($request->filled('package')) {
            $query->where('package_slug', (string) $request->string('package'));
        }
        return view('admin::vouchers.index', [
            'vouchers' => $query->paginate(30)->withQueryString(),
            'packages' => PricingPackage::orderBy('sort_order')->get(),
        ]);
    }

    public function createVoucher()
    {
        return view('admin::vouchers.create', ['packages' => PricingPackage::where('is_visible', true)->orderBy('sort_order')->get()]);
    }

    public function storeVoucher(Request $request, VoucherService $vouchers, PackageCatalog $catalog): RedirectResponse
    {
        $data = $request->validate([
            'code' => ['nullable', 'string', 'max:64'],
            'recipient_email' => ['required', 'email:filter', 'max:255'],
            'package_slug' => ['required', 'string', 'max:120'],
            'purpose' => ['required', 'in:checkout_discount,permanent_access'],
            'discount_type' => ['nullable', 'in:percentage,fixed'],
            'percent_off' => ['nullable', 'integer', 'min:1', 'max:99'],
            'amount_off' => ['nullable', 'regex:/^\d+(\.\d{1,2})?$/'],
            'minimum_order_amount' => ['nullable', 'regex:/^\d+(\.\d{1,2})?$/'],
            'expires_at' => ['nullable', 'date', 'after:now'],
        ]);

        if (!$catalog->exists($data['package_slug']) || $data['package_slug'] === $catalog->freeSlug()) {
            return back()->withInput()->with('fail', 'Choose a valid paid package.');
        }
        if ($data['purpose'] === 'checkout_discount') {
            if (empty($data['discount_type'])) {
                return back()->withInput()->with('fail', 'Choose percentage or fixed USD discount.');
            }
            if ($data['discount_type'] === 'percentage' && empty($data['percent_off'])) {
                return back()->withInput()->with('fail', 'Enter a percentage discount.');
            }
            if ($data['discount_type'] === 'fixed' && empty($data['amount_off'])) {
                return back()->withInput()->with('fail', 'Enter a fixed USD discount.');
            }
        }

        $minor = fn (?string $amount): ?int => $amount === null || $amount === '' ? null : $this->usdToMinor($amount);
        $amountOff = $minor($data['amount_off'] ?? null);
        $minimum = $minor($data['minimum_order_amount'] ?? null);
        if ($amountOff !== null && $minimum !== null && $minimum < $amountOff) {
            return back()->withInput()->with('fail', 'Minimum order amount cannot be lower than the fixed discount.');
        }

        try {
            $result = $vouchers->create([
                ...$data,
                'amount_off_minor' => $amountOff,
                'minimum_order_amount_minor' => $minimum,
            ], Auth::id());
            return redirect('admin/vouchers')
                ->with('success', 'Voucher created. Copy the full code below and send it to the recipient.')
                ->with('voucher_code', $result['code']);
        } catch (RuntimeException $e) {
            return back()->withInput()->with('fail', $e->getMessage());
        }
    }

    public function disableVoucher(int $id): RedirectResponse
    {
        $voucher = Voucher::findOrFail($id);
        if (in_array($voucher->status, ['redeemed', 'expired'], true)) {
            return back()->with('fail', 'Completed or expired vouchers cannot be changed.');
        }

        try {
            if ($voucher->stripe_promotion_code_id) {
                $secret = (string) config('cashier.secret');
                if ($secret === '') {
                    throw new RuntimeException('Stripe is not configured, so this payment voucher cannot be safely disabled.');
                }
                (new \Stripe\StripeClient($secret))->promotionCodes->update($voucher->stripe_promotion_code_id, ['active' => false]);
            }
            $voucher->update(['status' => 'disabled', 'claim_reserved_until' => null]);
            return back()->with('success', 'Voucher disabled.');
        } catch (\Throwable $e) {
            report($e);
            return back()->with('fail', 'Stripe could not disable this voucher. No local change was made.');
        }
    }

    public function retryVoucherSync(int $id, VoucherService $vouchers): RedirectResponse
    {
        $voucher = Voucher::findOrFail($id);
        try {
            $vouchers->retryStripeSync($voucher);
            return back()->with('success', 'Voucher activated in Stripe.');
        } catch (RuntimeException $e) {
            return back()->with('fail', $e->getMessage());
        }
    }

    /**
     * Admin-only operational recovery: a list hint is deliberately not a
     * redeemable value. Reveal the encrypted original only after an explicit
     * action so staff can copy/send a voucher they previously created.
     */
    public function revealVoucherCode(int $id): RedirectResponse
    {
        $voucher = Voucher::findOrFail($id);
        try {
            return back()
                ->with('success', 'Full voucher code revealed. Copy it exactly; the masked table value cannot be redeemed.')
                ->with('voucher_code', Crypt::decryptString($voucher->code_encrypted));
        } catch (\Throwable $e) {
            report($e);
            return back()->with('fail', 'This voucher code could not be revealed.');
        }
    }

    public function quotes()
    {
        return view('admin::organization_quotes.index', [
            'quotes' => OrganizationQuote::with(['organization', 'enquiry'])
                ->withCount(['seats as used_seats_count' => fn ($query) => $query->where('status', 'claimed')])
                ->latest()
                ->paginate(30),
        ]);
    }

    public function enquiries()
    {
        return view('admin::organization_enquiries.index', [
            'enquiries' => OrganizationEnquiry::with('quote')->latest()->paginate(30),
        ]);
    }

    public function updateEnquiry(Request $request, int $id): RedirectResponse
    {
        $data = $request->validate(['status' => ['required', 'in:new,reviewed,converted,closed']]);
        $enquiry = OrganizationEnquiry::findOrFail($id);
        $enquiry->update([
            'status' => $data['status'],
            'reviewed_by_admin_id' => Auth::id(),
        ]);
        return back()->with('success', 'Enquiry status updated.');
    }

    public function createQuote()
    {
        return redirect('admin/organization-enquiries')
            ->with('fail', 'Create an agreement from the organisation enquiry that started the deal.');
    }

    public function createQuoteFromEnquiry(int $id)
    {
        $enquiry = OrganizationEnquiry::with('quote')->findOrFail($id);
        if ($enquiry->quote) {
            return redirect('admin/organization-quotes/'.$enquiry->quote->id)
                ->with('success', 'This enquiry already has an agreement.');
        }

        return view('admin::organization_quotes.create', [
            'enquiry' => $enquiry,
            'packages' => PricingPackage::where('is_visible', true)->orderBy('sort_order')->get(),
        ]);
    }

    public function storeQuote(
        Request $request,
        PackageCatalog $catalog,
    ): RedirectResponse
    {
        $data = $request->validate([
            'organization_enquiry_id' => ['required', 'integer', 'exists:organization_enquiries,id'],
            'organization_name' => ['required', 'string', 'max:255'],
            'contact_name' => ['required', 'string', 'max:255'],
            'contact_email' => ['required', 'email:filter', 'max:255'],
            'contact_phone' => ['nullable', 'string', 'max:50'],
            'package_slug' => ['required', 'string', 'max:120'],
            'seat_count' => ['required', 'integer', 'min:1', 'max:100000'],
            'unit_amount' => ['required', 'regex:/^\d+(\.\d{1,2})?$/'],
            'discount_amount' => ['nullable', 'regex:/^\d+(\.\d{1,2})?$/'],
            'billing_type' => ['required', 'in:one_time,subscription'],
            'access_term' => ['required', 'in:permanent,fixed_term,subscription_active'],
            'access_ends_at' => ['nullable', 'date', 'after:now'],
            'expires_at' => ['nullable', 'date', 'after:now'],
            'internal_notes' => ['nullable', 'string', 'max:5000'],
            'customer_notes' => ['nullable', 'string', 'max:5000'],
        ]);
        if (!$catalog->exists($data['package_slug']) || $data['package_slug'] === $catalog->freeSlug()) {
            return back()->withInput()->with('fail', 'Choose a valid paid package.');
        }
        if ($data['access_term'] === 'fixed_term' && empty($data['access_ends_at'])) {
            return back()->withInput()->with('fail', 'Fixed-term access needs an end date.');
        }

        $unit = $this->usdToMinor($data['unit_amount']);
        $discount = $this->usdToMinor($data['discount_amount'] ?? '0');
        $subtotal = $unit * (int) $data['seat_count'];
        if ($discount > $subtotal) {
            return back()->withInput()->with('fail', 'Discount cannot exceed the quote subtotal.');
        }

        [$quote, $alreadyExists] = DB::transaction(function () use ($data, $unit, $discount, $subtotal) {
            $enquiry = OrganizationEnquiry::lockForUpdate()->findOrFail($data['organization_enquiry_id']);
            $existingQuote = OrganizationQuote::where('organization_enquiry_id', $enquiry->id)->lockForUpdate()->first();
            if ($existingQuote) {
                return [$existingQuote, true];
            }

            $organization = Organization::firstOrCreate(
                ['name' => trim($data['organization_name']), 'contact_email' => strtolower($data['contact_email'])],
                ['contact_name' => $data['contact_name'], 'contact_phone' => $data['contact_phone'] ?? null, 'status' => 'active']
            );
            $organization->update(['contact_name' => $data['contact_name'], 'contact_phone' => $data['contact_phone'] ?? null]);
            $quote = OrganizationQuote::create([
                'organization_id' => $organization->id,
                'organization_enquiry_id' => $enquiry->id,
                'quote_number' => $this->nextQuoteNumber(),
                'package_slug' => $data['package_slug'],
                'seat_count' => $data['seat_count'],
                'unit_amount_minor' => $unit,
                'discount_amount_minor' => $discount,
                'total_amount_minor' => $subtotal - $discount,
                'currency' => 'usd',
                'billing_type' => $data['billing_type'],
                'access_term' => $data['access_term'],
                'access_ends_at' => $data['access_ends_at'] ?? null,
                'expires_at' => $data['expires_at'] ?? null,
                'internal_notes' => $data['internal_notes'] ?? null,
                'customer_notes' => $data['customer_notes'] ?? null,
                'created_by_admin_id' => Auth::id(),
                'status' => 'draft',
            ]);
            $enquiry->update([
                'status' => 'converted',
                'reviewed_by_admin_id' => Auth::id(),
            ]);

            return [$quote, false];
        });

        if ($alreadyExists) {
            return redirect('admin/organization-quotes/'.$quote->id)
                ->with('fail', 'This enquiry already has an agreement.');
        }

        return redirect('admin/organization-quotes/'.$quote->id)
            ->with('success', 'Agreement created. Record payment to generate the organisation access code.');
    }

    public function showQuote(int $id)
    {
        return view('admin::organization_quotes.show', ['quote' => OrganizationQuote::with(['organization', 'seats'])->findOrFail($id)]);
    }

    public function markQuotePaid(int $id, OrganizationSeatService $seats, OrganizationCodeService $codes): RedirectResponse
    {
        try {
            [$quote, $code] = DB::transaction(function () use ($id, $seats, $codes) {
                $quote = OrganizationQuote::lockForUpdate()->findOrFail($id);
                if (in_array($quote->status, ['cancelled', 'expired'], true)) {
                    throw new RuntimeException('This agreement cannot be paid in its current state.');
                }
                if ($quote->status !== 'paid') {
                    $quote->update(['status' => 'paid', 'paid_at' => now()]);
                }
                $seats->allocatePaidSeats($quote);
                $quote->refresh();

                return [$quote, $quote->shared_code_enabled ? null : $codes->createOrReplace($quote)];
            });
        } catch (RuntimeException $e) {
            return back()->with('fail', $e->getMessage());
        }

        $response = back()->with(
            'success',
            $code ? 'Payment recorded. Seats and the shared organisation access code are active.' : 'Payment was already recorded; organisation access remains active.'
        );
        if ($code) {
            $response->with('organization_code', $code);
        }
        return $response;
    }

    public function createSharedCode(int $id, OrganizationCodeService $codes): RedirectResponse
    {
        try {
            $quote = OrganizationQuote::findOrFail($id);
            $code = $codes->createOrReplace($quote);
            return back()->with('success', 'Shared code created. Copy it now: '.$code);
        } catch (RuntimeException $e) {
            return back()->with('fail', $e->getMessage());
        }
    }

    /** Reveal the real redeemable organisation code; the visible hint is not a code. */
    public function revealSharedCode(int $id): RedirectResponse
    {
        $quote = OrganizationQuote::findOrFail($id);
        if (!$quote->shared_code_encrypted || !$quote->shared_code_enabled) {
            return back()->with('fail', 'This organisation does not have an active member code.');
        }

        try {
            return back()
                ->with('success', 'Full organisation code revealed. Copy it exactly; the quote number and masked hint cannot be redeemed.')
                ->with('organization_code', Crypt::decryptString($quote->shared_code_encrypted));
        } catch (\Throwable $e) {
            report($e);
            return back()->with('fail', 'This organisation code could not be revealed.');
        }
    }

    public function disableSharedCode(int $id, OrganizationCodeService $codes): RedirectResponse
    {
        $quote = OrganizationQuote::findOrFail($id);
        $codes->disable($quote);
        return back()->with('success', 'Shared organisation code disabled.');
    }

    public function inviteSeats(Request $request, int $id, OrganizationSeatService $seats): RedirectResponse
    {
        $data = $request->validate([
            'emails' => ['nullable', 'string', 'max:100000', 'required_without:email_file'],
            'email_file' => ['nullable', 'file', 'mimes:csv,txt', 'max:2048', 'required_without:emails'],
        ]);
        $quote = OrganizationQuote::findOrFail($id);
        if ($quote->status !== 'paid') {
            return back()->with('fail', 'Record payment before inviting learners.');
        }
        $rawEmails = (string) ($data['emails'] ?? '');
        if ($request->hasFile('email_file')) {
            $rows = file($request->file('email_file')->getRealPath(), FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) ?: [];
            $rawEmails .= "\n".implode("\n", array_map(static function (string $row): string {
                $columns = str_getcsv($row);
                return (string) ($columns[0] ?? '');
            }, $rows));
        }
        $emails = collect(preg_split('/[\s,;]+/', strtolower(trim($rawEmails))))
            ->filter()->unique()->values();
        if ($emails->isEmpty() || $emails->contains(fn ($email) => !filter_var($email, FILTER_VALIDATE_EMAIL))) {
            return back()->with('fail', 'Enter one valid email per line (or separated by commas).');
        }
        try {
            $invitations = DB::transaction(function () use ($quote, $emails, $seats) {
                $available = $quote->seats()->where('status', 'available')->orderBy('id')->lockForUpdate()->get();
                if ($emails->count() > $available->count()) {
                    throw new RuntimeException('Only '.$available->count().' unassigned seats remain.');
                }
                $invitations = [];
                foreach ($emails as $index => $email) {
                    $invitations[] = ['email' => $email, 'token' => $seats->invite($available[$index], $email)];
                }
                return $invitations;
            });
        } catch (RuntimeException $e) {
            return back()->with('fail', $e->getMessage());
        }

        $failed = 0;
        foreach ($invitations as $invitation) {
            try {
                Mail::raw(
                    'You have been invited to access '.$quote->package_slug.'. Create or sign in to your DecodeMyBrain account using this secure link: '.url('organization/invitation/'.$invitation['token']),
                    fn ($message) => $message->to($invitation['email'])->subject('Your DecodeMyBrain organisation invitation')
                );
            } catch (\Throwable $e) {
                report($e);
                $failed++;
            }
        }
        return back()->with($failed ? 'fail' : 'success', $failed ? ($emails->count() - $failed).' invitations sent; '.$failed.' failed and can be resent below.' : $emails->count().' invitations sent.');
    }

    public function resendSeat(int $quoteId, int $seatId): RedirectResponse
    {
        $seat = OrganizationSeat::where('organization_quote_id', $quoteId)->findOrFail($seatId);
        if ($seat->status !== 'invited' || !$seat->invited_email || !$seat->invite_token_encrypted) {
            return back()->with('fail', 'Only an active invitation can be resent.');
        }
        try {
            $token = Crypt::decryptString($seat->invite_token_encrypted);
            Mail::raw(
                'You have been invited to access '.$seat->package_slug.'. Create or sign in using this secure link: '.url('organization/invitation/'.$token),
                fn ($message) => $message->to($seat->invited_email)->subject('Your DecodeMyBrain organisation invitation')
            );
            return back()->with('success', 'Invitation resent to '.$seat->invited_email.'.');
        } catch (\Throwable $e) {
            report($e);
            return back()->with('fail', 'The invitation could not be resent.');
        }
    }

    public function revokeSeat(int $quoteId, int $seatId): RedirectResponse
    {
        $seat = OrganizationSeat::where('organization_quote_id', $quoteId)->findOrFail($seatId);
        if ($seat->status === 'claimed') {
            return back()->with('fail', 'Claimed seats need an explicit access-revocation policy and cannot be silently revoked.');
        }
        $seat->update(['status' => 'revoked', 'invite_token_hash' => null, 'invite_token_encrypted' => null, 'invite_expires_at' => null]);
        return back()->with('success', 'Unused seat revoked.');
    }

    private function usdToMinor(string $amount): int
    {
        [$whole, $fraction] = array_pad(explode('.', $amount, 2), 2, '');
        return ((int) $whole * 100) + (int) str_pad(substr($fraction, 0, 2), 2, '0');
    }

    private function nextQuoteNumber(): string
    {
        do {
            $number = 'ORG-'.now()->format('Ymd').'-'.strtoupper(Str::random(6));
        } while (OrganizationQuote::where('quote_number', $number)->exists());
        return $number;
    }
}
