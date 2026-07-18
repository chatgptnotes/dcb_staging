<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Voucher;
use App\Services\Billing\OrganizationSeatService;
use App\Services\Billing\OrganizationCodeService;
use App\Services\Billing\VoucherService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use RuntimeException;

class VoucherController extends Controller
{
    public function __construct(
        private readonly VoucherService $vouchers,
        private readonly OrganizationSeatService $seats,
        private readonly OrganizationCodeService $organizationCodes,
    ) {
    }

    public function accessChoice()
    {
        return view('public.access_choice');
    }

    public function payMyself(): RedirectResponse
    {
        session()->forget(['intended_package', 'new_purchase_flow']);
        return redirect()->route('public.plans');
    }

    /** Validate a visitor's code, then defer its secure claim until sign-in. */
    public function beginCode(Request $request): RedirectResponse
    {
        $data = $request->validate(['code' => ['required', 'string', 'max:64']]);
        $code = trim($data['code']);
        $voucher = $this->vouchers->findByCode($code);

        try {
            if ($voucher) {
                $this->vouchers->validateForPackage($voucher, $voucher->package_slug);
                session([
                    'pending_voucher_id' => $voucher->id,
                    'intended_package' => $voucher->package_slug,
                ]);
                return session('user_id')
                    ? redirect()->route('voucher.complete')
                    : redirect('sign-up')->with('success', 'Create or sign in to securely redeem your code.');
            }

            $this->organizationCodes->validateAvailability($code);
            session(['pending_organization_code' => Crypt::encryptString($code)]);
            return session('user_id')
                ? redirect()->route('access.code.complete')
                : redirect('sign-up')->with('success', 'Create or sign in to securely claim your organisation seat.');
        } catch (RuntimeException $e) {
            return back()->withInput()->with('fail', $e->getMessage());
        }
    }

    public function completeAccessCode(): RedirectResponse
    {
        $encryptedCode = (string) session('pending_organization_code');
        $user = User::where('wp_user_id', session('user_id'))->first();
        if ($encryptedCode === '' || ! $user) {
            session()->forget('pending_organization_code');
            return redirect()->route('access.choice')->with('fail', 'Your code session has expired. Please enter it again.');
        }

        try {
            $seat = $this->organizationCodes->claim(Crypt::decryptString($encryptedCode), $user);
            session()->forget(['pending_organization_code', 'intended_package', 'new_purchase_flow']);
            return redirect('/questions/q1')->with('success', 'Your organisation code has been accepted for '.$seat->package_slug.'.');
        } catch (RuntimeException $e) {
            session()->forget('pending_organization_code');
            return redirect()->route('access.choice')->with('fail', $e->getMessage());
        } catch (\Throwable $e) {
            session()->forget('pending_organization_code');
            return redirect()->route('access.choice')->with('fail', 'The code is invalid or unavailable.');
        }
    }

    /** Redeem either an individual voucher or an organisation's shared code. */
    public function redeemCode(Request $request): RedirectResponse
    {
        $data = $request->validate(['code' => ['required', 'string', 'max:64']]);
        $user = User::where('wp_user_id', session('user_id'))->first();
        if (!$user) {
            return redirect('sign-in')->with('fail', 'Please sign in again to continue.');
        }

        $voucher = $this->vouchers->findByCode($data['code']);
        if ($voucher) {
            try {
                $this->vouchers->validateForPackage($voucher, $voucher->package_slug, $user);
                session(['intended_package' => $voucher->package_slug]);
                if ($voucher->purpose === 'permanent_access') {
                    $this->vouchers->claimPermanent($voucher, $user);
                    session()->forget(['intended_package', 'new_purchase_flow']);
                    return redirect('/questions/q1')->with('success', 'Your voucher has been redeemed.');
                }
                session(['pending_checkout_voucher_id' => $voucher->id]);
                session()->forget('new_purchase_flow');
                return redirect()->route('checkout.start', $voucher->package_slug);
            } catch (RuntimeException $e) {
                return back()->withInput()->with('fail', $e->getMessage());
            }
        }

        try {
            $seat = $this->organizationCodes->claim($data['code'], $user);
            session()->forget(['intended_package', 'new_purchase_flow']);
            return redirect('/questions/q1')->with('success', 'Your organisation code has been accepted for '.$seat->package_slug.'.');
        } catch (RuntimeException $e) {
            return back()->withInput()->with('fail', $e->getMessage());
        }
    }

    /** Store a pending code before authentication; do not consume it yet. */
    public function start(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'code' => ['required', 'string', 'max:64'],
            'package' => ['nullable', 'string', 'max:120'],
        ]);

        $voucher = $this->vouchers->findByCode($data['code']);
        if (!$voucher) {
            return back()->withInput()->with('fail', 'The voucher code is invalid or unavailable.');
        }

        try {
            $package = (string) ($data['package'] ?: $voucher->package_slug);
            $this->vouchers->validateForPackage($voucher, $package);
        } catch (RuntimeException $e) {
            return back()->withInput()->with('fail', $e->getMessage());
        }

        session([
            'pending_voucher_id' => $voucher->id,
            'intended_package' => $package,
        ]);

        if (!session('user_id')) {
            return redirect('sign-up')->with('success', 'Create or sign in to your account to securely claim this voucher.');
        }

        return redirect()->route('voucher.complete');
    }

    public function complete(): RedirectResponse
    {
        $voucherId = (int) session('pending_voucher_id');
        $wpUserId = (int) session('user_id');
        $voucher = Voucher::find($voucherId);
        $user = User::where('wp_user_id', $wpUserId)->first();

        if (!$voucher || !$user) {
            session()->forget(['pending_voucher_id', 'pending_checkout_voucher_id']);
            return redirect('/')->with('fail', 'Your voucher session has expired. Please enter the code again.');
        }

        try {
            $this->vouchers->validateForPackage($voucher, $voucher->package_slug, $user);
            if ($voucher->purpose === 'permanent_access') {
                $this->vouchers->claimPermanent($voucher, $user);
                session()->forget(['pending_voucher_id', 'pending_checkout_voucher_id', 'intended_package']);
                return redirect('/questions/q1')->with('success', 'Your permanent access voucher has been redeemed.');
            }

            session(['pending_checkout_voucher_id' => $voucher->id]);
            session()->forget('pending_voucher_id');
            return redirect()->route('checkout.start', $voucher->package_slug);
        } catch (RuntimeException $e) {
            session()->forget(['pending_voucher_id', 'pending_checkout_voucher_id']);
            return redirect('/')->with('fail', $e->getMessage());
        }
    }

    public function invitation(string $token): RedirectResponse
    {
        session(['pending_organization_invite_token' => $token]);
        if (!session('user_id')) {
            return redirect('sign-up')->with('success', 'Create or sign in to your account to claim your organisation invitation.');
        }
        return redirect()->route('organization.invitation.complete');
    }

    public function completeInvitation(): RedirectResponse
    {
        $token = (string) session('pending_organization_invite_token');
        $user = User::where('wp_user_id', session('user_id'))->first();
        if ($token === '' || !$user) {
            return redirect('/')->with('fail', 'Your organisation invitation has expired.');
        }

        try {
            $seat = $this->seats->claim($token, $user);
            session()->forget('pending_organization_invite_token');
            return redirect('/questions/q1')->with('success', 'Your organisation seat has been claimed for '.$seat->package_slug.'.');
        } catch (RuntimeException $e) {
            return redirect('/')->with('fail', $e->getMessage());
        }
    }
}
