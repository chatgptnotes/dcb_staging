<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use File;
use Mail;
use PDF;
use Image;
use Redirect;
use Session;

use App\Models\User;
use App\Models\Questions;
use App\Models\DimensionQuestions;
use App\Models\QuestionAnswerMain;
use App\Models\QuestionAnswers;
use App\Models\CustomerDetails;
use App\Models\BrainScores;
use App\Models\DimensionalQuestionAnswerMain;
use App\Models\DimensionalQuestionAnswers;
use App\Models\AccessCodes;
use App\Models\WPUsers;

use App\Http\Controllers\BrainResultsController;

class UserController extends Controller
{
//     public function sign_in(Request $request) {

//     if ($request->isMethod('get')) {
//         return view('user/sign_in');
//     }

//     if ($request->isMethod('post')) {
       
//         $this->validate($request, [
//             'user_name' => 'required',
//             'password'  => 'required',
//         ]);

        
//         $firstUrl = 'https://projects.genaitech.dev/zebrabrain-wordpress-api/api/v1/get_nonce/?controller=user&method=generate_auth_cookie';
//         $firstResponse = $this->performCurlRequest($firstUrl);
        
//         if ($firstResponse) {
//             $res2_data = json_decode($firstResponse, true);

            
//             $secondUrl = 'https://projects.genaitech.dev/zebrabrain-wordpress-api/api/v1/user/generate_auth_cookie/';
//             $secondUrlWithParams = $secondUrl . '?' . http_build_query([
//                 'username' => $request->user_name,
//                 'password' => $request->password,
//                 'nonce'    => $res2_data['nonce'],
//             ]);

//             $secondResponse = $this->performCurlRequest($secondUrlWithParams);

//             if ($secondResponse) {
//                 $data = json_decode($secondResponse, true);

//                 if ($data['status'] === 'ok') {
                  
//                     session(['user_id' => $data['user']['id']]);
//                     session(['user_details' => $data['user']]);
//                     $auth_cookie = $data['cookie']; 
//                     session(['auth_cookie' => $auth_cookie]);
                    
//                     $userId = $data['user']['id'];
//                     $metaUrl = 'https://projects.genaitech.dev/zebrabrain-wordpress-api/api/v1/user/get_user_meta/';
//                     $metaUrlWithParams = $metaUrl . '?' . http_build_query([
//                         'user_id' => $userId,
//                         'meta_key' => 'dob',
//                         'cookie' => session('auth_cookie')
//                     ]);
                    
//                     $metaResponse = $this->performCurlRequest($metaUrlWithParams);
                    
//                   if ($metaResponse) {
//                         $metaData = json_decode($metaResponse, true);
                    
                    
//                         if (isset($metaData['dob']) && is_array($metaData['dob'])) {
//                             $dob = $metaData['dob'][0];
                            
//                             session(['user_dob' => $dob]);
//                         }
//                     }
//                   // return var_dump(session('user_dob'));
                    
//                     if (session('answer_main_id')) {
//                         if (QuestionAnswerMain::where("user_id", session('user_id'))->exists()) {
//                             QuestionAnswerMain::where("id", session('answer_main_id'))->delete();
//                             QuestionAnswers::where("answer_main_id", session('answer_main_id'))->delete();
//                             $request->session()->forget(['answer_main_id']);
//                         } else {
//                             $QuestionAnswerMain = QuestionAnswerMain::where('id', session('answer_main_id'))->first();
//                             if ($QuestionAnswerMain) {
//                                 $QuestionAnswerMain->user_id = session('user_id');
//                                 $QuestionAnswerMain->update();

//                                 $BrainResultsController = new BrainResultsController();
//                                 $BrainResultsController->add_brain_results(session('answer_main_id'));

//                                 $request->session()->forget(['answer_main_id']);
//                             }
//                         }
//                     }

                  
//                     if (session('d_answer_main_id')) {
//                         $DimensionalQuestionAnswerMain = DimensionalQuestionAnswerMain::where('id', session('d_answer_main_id'))->first();
                        
//                         if ($DimensionalQuestionAnswerMain) {
//                             $DimensionalQuestionAnswerMain->user_id = session('user_id');
//                             $DimensionalQuestionAnswerMain->update();

//                             $BrainResultsController = new BrainResultsController();
//                             $BrainResultsController->add_dimensional_brain_results(session('d_answer_main_id'));

//                             $request->session()->forget(['d_answer_main_id']);
//                         }
//                     }

//                     // Redirect based on brain_profile_id
//                     if (WPUsers::where('user_id', session('user_id'))->value('brain_profile_id') == null) {
//                         return redirect('intro');
//                     } else {
//                         return redirect('dashboard');
//                     }

//                 } else {
//                     return back()->with('fail', $data['error']);
//                 }
//             }
//         }
//     }
// }


public function sign_in(Request $request)
{
    $this->rememberIntendedPackage($request);
    $this->rememberPurchaseFlow($request);

    if ($request->isMethod('get')) {
        return view('public.sign_in');
    }

    if ($request->isMethod('post')) {
        $this->validate($request, [
            'user_name' => 'required',
            'password'  => 'required',
        ]);

        if (config('app.auth_driver') === 'native') {
            return $this->signInNative($request);
        }

        $payload = [
            'username' => $request->user_name,
            'password' => $request->password,
            'ttl' => 86400,
        ];

        $response = $this->performCurlRequest('https://decodemybrain.com/wp-json/custom/v1/login', true, $payload);
        // Do not log the full response: it carries the sso_link (a 24h magic-login
        // token) and, in the user lookup below, PII. Log only status + id.
        \Log::info('WP login response', ['status' => $response['status'] ?? null, 'user_id' => $response['user_id'] ?? null]);

        if ($response && isset($response['status']) && $response['status'] === 'success') {

            $user_id = $response['user_id'];
            $request->session()->regenerate();
            session(['user_id' => $user_id]);

            if (isset($response['sso_link'])) {
                $ssoLink = $response['sso_link'];

                session(['sso_link' => $ssoLink]);
            }

            $url = 'https://decodemybrain.com/wp-json/custom/v1/user?user_id='.$user_id.'';
            $response2 = $this->performCurlRequest($url);
            \Log::info('WP user lookup', ['status' => $response2['status'] ?? null, 'user_id' => $user_id]);
            if ($response2 && isset($response2['status']) && $response2['status'] === 'success') {
                $userData = $response2['data'] ?? null;
                  if ($userData) {
                        session(['user_details' => $userData]);
                        session(['user_dob' => $userData['date_of_birth']]);
                        
                        if(!WPUsers::where("user_id", session('user_id'))->exists()){
                            
                            $dob = session('user_dob'); 
                            $age = \Carbon\Carbon::parse($dob)->age;
                            
                            $wp_user = new WPUsers();
                            $wp_user->user_id = session('user_id');
                            $wp_user->email = session('user_details')['email'];
                            $wp_user->display_name = session('user_details')['display_name'];
                            $wp_user->date_of_birth = session('user_details')['date_of_birth'];
                            $wp_user->age = $age;
                            $wp_user->package = 'free';
                            $wp_user->save();
                            
                        }

                    }
            }
            else {
            $errorMessage = $response['message'] ?? 'Login failed. Please try again.';
            return back()->with('fail', $errorMessage);
            }

            return $this->adoptGuestAnswersAndRedirect($request);
        } else {

            $errorMessage = $response['message'] ?? 'Login failed. Please try again.';
            return back()->with('fail', $errorMessage);
        }
    }

    return back()->with('fail', 'Invalid request method.');
}

/**
 * Native sign-in (AUTH_DRIVER=native): verifies the password against the
 * local users table (WordPress hashes supported via WpHashService) and sets
 * the exact same session keys as the legacy WordPress flow, so all
 * middleware and views keep working unchanged.
 */
private function signInNative(Request $request)
{
    $login = trim((string) $request->user_name);

    // Throttle online password guessing (the WP path paid a remote round-trip;
    // native verifies locally, so we must limit attempts ourselves).
    $throttleKey = 'login:'.Str::lower($login).'|'.$request->ip();
    if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
        $seconds = RateLimiter::availableIn($throttleKey);
        return back()->with('fail', "Too many login attempts. Please try again in {$seconds} seconds.");
    }

    $wpHash = app(\App\Services\Auth\WpHashService::class);
    $user = $this->findNativeLoginUser($login);

    if (!$user || strtolower((string) $user->status) !== 'active' || !$wpHash->check((string) $request->password, (string) $user->password)) {
        // Equalize timing for unknown logins to prevent username enumeration.
        if (!$user) {
            Hash::check((string) $request->password, '$2y$12$EEP6tThykQvxaBf9yuMT8OFw7Cay/13pMPpmhwGnacDo3PdkOg9y6');
        }
        RateLimiter::hit($throttleKey, 60);
        \Log::info('Native login failed', ['login_hash' => sha1($login)]);
        return back()->with('fail', 'Login failed. Please check your username and password.');
    }

    RateLimiter::clear($throttleKey);

    try {
        $user = $this->ensureLoginIdentity($user);
    } catch (\Throwable $e) {
        \Log::error('Native login identity repair failed', ['user_id' => $user->id, 'error' => $e->getMessage()]);

        return back()->with('fail', 'Login failed. Please try again.');
    }

    // Upgrade WordPress-format hashes to native bcrypt on first login.
    if ($wpHash->needsRehash((string) $user->password)) {
        $user->password = Hash::make((string) $request->password);
        $user->save();
    }

    // Best-effort WP sso_link (transition only) — needs the password, so fetch
    // it now, before any OTP split.
    $ssoLink = null;
    if (config('app.wp_sso_bridge')) {
        try {
            $sso = $this->performCurlRequest('https://decodemybrain.com/wp-json/custom/v1/login', true, [
                'username' => $login,
                'password' => (string) $request->password,
                'ttl' => 86400,
            ]);
            if (is_array($sso) && !empty($sso['sso_link'])) {
                $ssoLink = $sso['sso_link'];
            }
        } catch (\Throwable $e) {
            \Log::warning('SSO bridge fetch failed', ['user_id' => $user->wp_user_id]);
        }
    }

    // Login 2FA: email a code and complete the session only after it's confirmed.
    if (config('app.otp_enabled')) {
        // Rotate the session id before stashing identity (anti-fixation).
        $request->session()->regenerate();
        session(['pending_login' => [
            'wp_user_id' => $user->wp_user_id,
            'email' => $user->email,
            'sso_link' => $ssoLink,
        ]]);
        $sent = app(\App\Services\Auth\OtpService::class)->send((string) $user->email, 'login');
        if (! $sent) {
            return back()->with('fail', 'Too many code requests. Please wait a few minutes and try again.');
        }
        return redirect('verify-login-otp')->with('success', 'We emailed a login code to '.$user->email.'.');
    }

    return $this->completeNativeLogin($user, $ssoLink, $request);
}

/**
 * Find a native account by username/email. The wp_users table is an identity
 * and entitlement mirror only; it deliberately has no password hashes. A
 * mirror-only account must therefore activate through the OTP reset flow.
 */
private function findNativeLoginUser(string $login): ?User
{
    return User::where('username', $login)->orderBy('id')->first()
        ?? User::where('email', $login)->where('email', '!=', '')->orderBy('id')->first();
}

/** Ensure a verified user has the legacy identity and mirror expected by the member area. */
private function ensureLoginIdentity(User $user): User
{
    $user = DB::transaction(function () use ($user) {
        $locked = User::whereKey($user->id)->lockForUpdate()->firstOrFail();

        if (! $locked->wp_user_id) {
            $nextId = max(
                (int) User::whereNotNull('wp_user_id')->max('wp_user_id'),
                (int) WPUsers::max('user_id'),
                1000000
            ) + 1;
            $locked->wp_user_id = $nextId;
            $locked->save();
        }

        return $locked;
    });

    if (! WPUsers::where('user_id', $user->wp_user_id)->exists()) {
        $mirror = new WPUsers();
        $mirror->user_id = $user->wp_user_id;
        $mirror->email = $user->email;
        $mirror->display_name = $user->display_name;
        $mirror->date_of_birth = $user->date_of_birth;
        $mirror->age = $user->date_of_birth ? \Carbon\Carbon::parse($user->date_of_birth)->age : null;
        $mirror->package = 'free';
        $mirror->save();
    }

    return $user;
}

/**
 * Finish a native login: set session keys, ensure the WPUsers mirror exists,
 * carry the sso_link, then run the shared post-auth redirect. Shared by the
 * direct login and the 2FA-verified login.
 */
private function completeNativeLogin(User $user, ?string $ssoLink, Request $request)
{
    $request->session()->regenerate();

    session(['user_id' => $user->wp_user_id]);
    session(['user_details' => [
        'id' => $user->wp_user_id,
        'username' => $user->username,
        'email' => $user->email,
        'display_name' => $user->display_name,
        'date_of_birth' => $user->date_of_birth,
        'billing_phone' => $user->billing_phone,
        'billing_country' => $user->billing_country,
    ]]);
    session(['user_dob' => $user->date_of_birth]);

    if (!WPUsers::where('user_id', $user->wp_user_id)->exists()) {
        $wp_user = new WPUsers();
        $wp_user->user_id = $user->wp_user_id;
        $wp_user->email = $user->email;
        $wp_user->display_name = $user->display_name;
        $wp_user->date_of_birth = $user->date_of_birth;
        $wp_user->age = $user->date_of_birth ? \Carbon\Carbon::parse($user->date_of_birth)->age : null;
        $wp_user->package = 'free';
        $wp_user->save();
    }

    if ($ssoLink) {
        session(['sso_link' => $ssoLink]);
    }

    \Log::info('Native login success', ['user_id' => $user->wp_user_id]);

    return $this->adoptGuestAnswersAndRedirect($request);
}

/**
 * Login 2FA: confirm the emailed code, then complete the held login.
 */
public function verifyLoginOtp(Request $request)
{
    $pending = session('pending_login');
    if (! $pending) {
        return redirect('sign-in')->with('fail', 'Your login session expired. Please sign in again.');
    }

    if ($request->isMethod('get')) {
        return view('user/verify_login_otp', ['email' => $pending['email']]);
    }

    $request->validate(['otp' => 'required|string']);

    if (! app(\App\Services\Auth\OtpService::class)->verify($pending['email'], 'login', $request->otp)) {
        return back()->with('fail', 'Invalid or expired code. Please try again.');
    }

    $user = User::where('wp_user_id', $pending['wp_user_id'])->first();
    if (! $user) {
        return redirect('sign-in')->with('fail', 'Account not found. Please sign in again.');
    }

    session()->forget('pending_login');

    return $this->completeNativeLogin($user, $pending['sso_link'] ?? null, $request);
}

/**
 * Post-login steps shared by both auth drivers: attach assessment answers
 * taken before logging in to the account, then route to intro/dashboard.
 */
private function adoptGuestAnswersAndRedirect(Request $request)
{
    if (session('answer_main_id')) {
        if (QuestionAnswerMain::where("user_id", session('user_id'))->exists()) {
            QuestionAnswerMain::where("id", session('answer_main_id'))->delete();
            QuestionAnswers::where("answer_main_id", session('answer_main_id'))->delete();
            $request->session()->forget(['answer_main_id']);
        } else {
            $QuestionAnswerMain = QuestionAnswerMain::where('id', session('answer_main_id'))->first();
            if ($QuestionAnswerMain) {
                $QuestionAnswerMain->user_id = session('user_id');
                $QuestionAnswerMain->update();

                $BrainResultsController = new BrainResultsController();
                $BrainResultsController->add_brain_results(session('answer_main_id'));

                $request->session()->forget(['answer_main_id']);
            }
        }
    }

    if (session('d_answer_main_id')) {
        $DimensionalQuestionAnswerMain = DimensionalQuestionAnswerMain::where('id', session('d_answer_main_id'))->first();

        if ($DimensionalQuestionAnswerMain) {
            $DimensionalQuestionAnswerMain->user_id = session('user_id');
            $DimensionalQuestionAnswerMain->update();

            $BrainResultsController = new BrainResultsController();
            $BrainResultsController->add_dimensional_brain_results(session('d_answer_main_id'));

            $request->session()->forget(['d_answer_main_id']);
        }
    }

    // Complete a pending secure voucher/invitation before the ordinary
    // register-then-pay redirect. This keeps the normal flow unchanged when
    // no code is involved.
    if (session('pending_organization_invite_token')) {
        return redirect()->route('organization.invitation.complete');
    }

    if (session('pending_organization_code')) {
        return redirect()->route('access.code.complete');
    }

    if (session('pending_voucher_id')) {
        return redirect()->route('voucher.complete');
    }

    // The public funnel asks about a code before plan selection. Once a plan
    // has been selected, registration/sign-in continues straight to checkout.
    if (session('new_purchase_flow') && session('intended_package')) {
        session()->forget('new_purchase_flow');
        return redirect()->route('checkout.start', session('intended_package'));
    }

    // If the user picked a plan on the landing page, take them straight to that
    // plan's checkout — covers register-then-pay and login-then-pay alike.
    $intended = session('intended_package');
    if ($intended) {
        session()->forget('intended_package');
        $catalog = app(\App\Services\Billing\PackageCatalog::class);
        if ($catalog->exists($intended) && $intended !== $catalog->freeSlug()) {
            return redirect()->route('checkout.start', $intended);
        }
    }

    // Pay-first funnel: a free user must pay before the assessment — send them
    // to pricing instead of /intro. Already-paid users proceed normally.
    if (config('packages.funnel') === 'pay_first') {
        $package = WPUsers::where('user_id', session('user_id'))->value('package');
        $normalized = strtolower(trim((string) $package, " \t\n\r\0\x0B\"'"));
        $paidSlugs = array_keys((array) config('packages.plans', []));
        if (!in_array($normalized, $paidSlugs, true)) {
            return redirect('/')->with('fail', 'Please choose Book Today to select a plan and continue to payment.');
        }
    }

    $resumeRoute = app(\App\Services\AssessmentResumeService::class)
        ->resumeRoute((int) session('user_id'), session('user_dob'));
    if ($resumeRoute) {
        return redirect()->route('landing');
    }

    if (WPUsers::where('user_id', session('user_id'))->value('brain_profile_id') == null) {
        return redirect('intro');
    } else {
        return redirect('dashboard');
    }
}



// public function sign_up(Request $request) {
//     if ($request->isMethod('get')) {
//         return view('user/sign_up');
//     }

//     if ($request->isMethod('post')) {
//         $this->validate($request, [
//             'first_name' => 'required',
//             'last_name' => 'required',
//             'user_name' => 'required',
//             'dob' => 'required|date',
//             'email' => 'required|email',
//             'password_confirmation' => 'required',
//             'password' => 'required|confirmed|min:6',
//         ]);

//         $nonce = $this->getNonce();
//         if (!$nonce) {
//             return back()->with('fail', "Unable to get nonce. Please try again later.");
//         }

//         $registration = $this->registerUser($request, $nonce);
//         if (!$registration || $registration['status'] !== 'ok') {
//             return back()->with('fail', $registration['error'] ?? "User registration failed.");
//         }
//         var_dump($registration);

//         $wp_user = new WPUsers();
//         $wp_user->user_id = $registration['user_id'];
//         $wp_user->save();

//         $auth_cookie = $this->generateAuthCookie($request);
//         if (!$auth_cookie || $auth_cookie['status'] !== 'ok') {
//             return back()->with('fail', $auth_cookie['error'] ?? "Unable to generate auth cookie.");
//         }

//         session(['user_id' => $auth_cookie['user']['id']]);
//         session(['user_details' => $auth_cookie['user']]);
//         session(['auth_cookie' => $auth_cookie['cookie']]);
        
//         $userId = $auth_cookie['user']['id'];
//         $metaUrl = 'https://projects.genaitech.dev/zebrabrain-wordpress-api/api/v1/user/get_user_meta/';
//         $metaUrlWithParams = $metaUrl . '?' . http_build_query([
//             'user_id' => $userId,
//             'meta_key' => 'dob',
//             'cookie' => session('auth_cookie')
//         ]);
        
//         $metaResponse = $this->performCurlRequest($metaUrlWithParams);
        
//       if ($metaResponse) {
//             $metaData = json_decode($metaResponse, true);
        
        
//             if (isset($metaData['dob']) && is_array($metaData['dob'])) {
//                 $dob = $metaData['dob'][0];
                
//                 session(['user_dob' => $dob]);
//             }
//         }

//         $this->handleUserSessions($request);

//         if (WPUsers::where('user_id', session('user_id'))->value('brain_profile_id') == null) {
//             // return redirect('questions/q1');
//             return redirect('intro');
//         } else {
//             return redirect('dashboard');
//         }
//     }
// }

public function sign_up(Request $request) {
    if ($request->isMethod('get')) {
        $this->rememberIntendedPackage($request);
        $this->rememberPurchaseFlow($request);
        return view('public.sign_up');
    }

    // A plan picked on the landing page is carried through registration (and
    // the email-OTP step) in the session, so the shared post-auth redirect can
    // send the new user straight to that plan's checkout.
    $this->rememberIntendedPackage($request);
    $this->rememberPurchaseFlow($request);

    if (config('app.auth_driver') === 'native') {
        return $this->signUpNative($request);
    }

    if ($request->isMethod('post')) {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'user_name' => 'required',
            'dob' => 'required|date_format:d/m/Y',
            'email' => 'required|email',
            'password_confirmation' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);

        $dateOfBirth = \Carbon\Carbon::createFromFormat('!d/m/Y', (string) $request->dob);
        if (! $dateOfBirth->lt(today())) {
            return back()->withInput()->withErrors(['dob' => 'Date of birth must be before today.']);
        }
        $age = $dateOfBirth->age;
        
         if ($age < 12) {
             return back()->with('fail', 'You must be at least 12 years old to register.');
        }
        try {
            $this->validatePendingOrganizationCodeAge($age);
        } catch (\RuntimeException $e) {
            return back()->withInput()->withErrors(['dob' => $e->getMessage()]);
        }

        $payload = [
            'username' => $request->user_name,
            'email' => $request->email,
            'display_name' => $request->first_name . ' ' . $request->last_name,
            'date_of_birth' => $dateOfBirth->format('Y-m-d'),
            'password' => $request->password,
        ];

        $response = $this->performCurlRequest('https://decodemybrain.com/wp-json/custom/v1/register', true, $payload);
        

        if ($response && isset($response['status']) && $response['status'] === 'success') {
            
            $user_id = $response['user_id'];
            session(['user_id' => $user_id]);
            
            
            $age = $dateOfBirth->age;
    
            $wp_user = new WPUsers();
            $wp_user->user_id = $user_id;
            $wp_user->email = $request->email;
            $wp_user->display_name = $request->first_name . ' ' . $request->last_name;
            $wp_user->date_of_birth = $dateOfBirth->format('Y-m-d');
            $wp_user->age = $age;
            $wp_user->package = 'free';
            $wp_user->save();
            
            
            $url = 'https://decodemybrain.com/wp-json/custom/v1/user?user_id='.$user_id.'';
            $response2 = $this->performCurlRequest($url);
            
            
            if ($response2 && isset($response2['status']) && $response2['status'] === 'success') {
                $userData = $response2['data'] ?? null;
                  if ($userData) {
                        session(['user_details' => $userData]);
                        session(['user_dob' => $userData['date_of_birth']]);
 
                    }
            }
            else {
            $errorMessage = $response['message'] ?? 'Login failed. Please try again.';
            return back()->with('fail', $errorMessage);
            }
            
            if (session('answer_main_id')) {
                if (QuestionAnswerMain::where("user_id", session('user_id'))->exists()) {
                    QuestionAnswerMain::where("id", session('answer_main_id'))->delete();
                    QuestionAnswers::where("answer_main_id", session('answer_main_id'))->delete();
                    $request->session()->forget(['answer_main_id']);
                } else {
                    $QuestionAnswerMain = QuestionAnswerMain::where('id', session('answer_main_id'))->first();
                    if ($QuestionAnswerMain) {
                        $QuestionAnswerMain->user_id = session('user_id');
                        $QuestionAnswerMain->update();

                        $BrainResultsController = new BrainResultsController();
                        $BrainResultsController->add_brain_results(session('answer_main_id'));

                        $request->session()->forget(['answer_main_id']);
                    }
                }
            }

            if (session('d_answer_main_id')) {
                $DimensionalQuestionAnswerMain = DimensionalQuestionAnswerMain::where('id', session('d_answer_main_id'))->first();

                if ($DimensionalQuestionAnswerMain) {
                    $DimensionalQuestionAnswerMain->user_id = session('user_id');
                    $DimensionalQuestionAnswerMain->update();

                    $BrainResultsController = new BrainResultsController();
                    $BrainResultsController->add_dimensional_brain_results(session('d_answer_main_id'));

                    $request->session()->forget(['d_answer_main_id']);
                }
            }
            
            // $dob = session('user_dob'); 
            // $age = \Carbon\Carbon::parse($dob)->age;
    
            // $wp_user = new WPUsers();
            // $wp_user->user_id = session('user_id');
            // $wp_user->email = session('user_details')['email'];
            // $wp_user->display_name = session('user_details')['display_name'];
            // $wp_user->date_of_birth = session('user_details')['date_of_birth'];
            // $wp_user->age = $age;
            // $wp_user->save();
            if (WPUsers::where('user_id', session('user_id'))->value('brain_profile_id') == null) {
                return redirect('intro');
            } else {
                return redirect('dashboard');
            }
            
        } else {

            $errorMessage = $response['message'] ?? 'Login failed. Please try again.';
            return back()->with('fail', $errorMessage);
        }


    }
}

/**
 * Native registration (AUTH_DRIVER=native): creates the account directly in
 * the local users table (no WordPress call), mirrors it into wp_users with the
 * free package, logs the user in with the same session keys as signInNative,
 * then runs the shared post-auth redirect.
 */
private function signUpNative(Request $request)
{
    $this->validate($request, [
        'first_name' => 'required|string|max:100',
        'last_name'  => 'required|string|max:100',
        'user_name'  => 'required|string|max:60',
        'dob'        => 'required|date_format:d/m/Y',
        'email'      => 'required|email|max:191',
        'phone'      => 'nullable|string|max:32',
        'password_confirmation' => 'required',
        'password'   => 'required|confirmed|min:6',
    ]);

    // Throttle signups per IP. Count EVERY attempt (not just failures) so a
    // script of valid, unique signups can't mass-create accounts from one IP.
    $throttleKey = 'signup:'.$request->ip();
    if (RateLimiter::tooManyAttempts($throttleKey, 10)) {
        $seconds = RateLimiter::availableIn($throttleKey);
        return back()->withInput()->with('fail', "Too many attempts. Please try again in {$seconds} seconds.");
    }
    RateLimiter::hit($throttleKey, 60);

    $dateOfBirth = \Carbon\Carbon::createFromFormat('!d/m/Y', (string) $request->dob);
    if (! $dateOfBirth->lt(today())) {
        return back()->withInput()->withErrors(['dob' => 'Date of birth must be before today.']);
    }
    $age = $dateOfBirth->age;
    if ($age < 12) {
        return back()->withInput()->with('fail', 'You must be at least 12 years old to register.');
    }
    try {
        $this->validatePendingOrganizationCodeAge($age);
    } catch (\RuntimeException $e) {
        return back()->withInput()->withErrors(['dob' => $e->getMessage()]);
    }

    $username = trim($request->user_name);
    $email = mb_strtolower(trim($request->email));

    // Fast, friendly pre-check (the DB unique indexes below are the real guard).
    if (User::whereRaw('LOWER(username) = ?', [mb_strtolower($username)])->exists()) {
        return back()->withInput()->withErrors([
            'user_name' => 'That username is already taken.',
        ]);
    }
    if (User::whereRaw('LOWER(email) = ?', [$email])->exists()
        || WPUsers::whereRaw('LOWER(email) = ?', [$email])->exists()) {
        return back()->withInput()->withErrors([
            'email' => 'An account with that email already exists. Please sign in.',
        ]);
    }

    // Validated, unique signup data. Password is pre-hashed so it is never
    // held in plaintext (in session during OTP, or anywhere).
    $data = [
        'username' => $username,
        'email' => $email,
        'display_name' => trim($request->first_name.' '.$request->last_name),
        'date_of_birth' => $dateOfBirth->format('Y-m-d'),
        'billing_phone' => trim((string) $request->phone),
        'password_hash' => Hash::make($request->password),
    ];

    RateLimiter::clear($throttleKey);

    // Email-OTP verification: hold the signup in session, email a code, and
    // create the account only after the code is confirmed.
    if (config('app.otp_enabled')) {
        session(['pending_signup' => $data]);
        $sent = app(\App\Services\Auth\OtpService::class)->send($email, 'register');
        if (! $sent) {
            return back()->withInput()->with('fail', 'Too many code requests. Please wait a few minutes and try again.');
        }
        return redirect('verify-email-otp')->with('success', 'We emailed a verification code to '.$email.'.');
    }

    return $this->createNativeUserFromData($data, $request);
}

private function rememberIntendedPackage(Request $request): void
{
    $intendedPackage = (string) ($request->input('intended_package') ?: $request->query('intended_package', ''));
    if ($intendedPackage === '') {
        return;
    }

    $catalog = app(\App\Services\Billing\PackageCatalog::class);
    if ($catalog->exists($intendedPackage) && $intendedPackage !== $catalog->freeSlug()) {
        session(['intended_package' => $intendedPackage]);
    }
}

private function rememberPurchaseFlow(Request $request): void
{
    if ((string) $request->input('purchase_flow', $request->query('purchase_flow', '')) === '1') {
        session(['new_purchase_flow' => true]);
    }
}

/** Reject an out-of-range pending organisation code before account creation. */
private function validatePendingOrganizationCodeAge(int $age): void
{
    $encryptedCode = (string) session('pending_organization_code');
    if ($encryptedCode === '') {
        return;
    }

    try {
        $code = Crypt::decryptString($encryptedCode);
    } catch (\Throwable) {
        throw new \RuntimeException('Your organisation code session has expired. Please enter the code again.');
    }

    app(\App\Services\Billing\OrganizationCodeService::class)->validateAgeForCode($code, $age);
}

/**
 * Create the native account from validated, pre-hashed signup data, then log
 * the user in (same session keys as signInNative) and run the shared redirect.
 * Shared by direct signup and the OTP-verified signup.
 */
private function createNativeUserFromData(array $data, Request $request)
{
    $user = null;
    for ($attempt = 0; $attempt < 3; $attempt++) {
        try {
            $user = DB::transaction(function () use ($data) {
                $maxId = (int) User::max('wp_user_id');
                $newWpId = max($maxId, 1000000) + 1;

                $u = new User();
                $u->wp_user_id = $newWpId;
                $u->username = $data['username'];
                $u->email = $data['email'];
                $u->display_name = $data['display_name'];
                $u->date_of_birth = $data['date_of_birth'];
                $u->billing_phone = $data['billing_phone'] ?: null;
                $u->password = $data['password_hash'];
                $u->user_role = '2';
                $u->status = 'active';
                $u->save();

                return $u;
            });
            break;
        } catch (QueryException $e) {
            if (str_contains($e->getMessage(), 'users_email_unique')) {
                return redirect('sign-up')->with('fail', 'An account with that email already exists. Please sign in.');
            }
            if (str_contains($e->getMessage(), 'users_wp_user_id_unique') && $attempt < 2) {
                continue;
            }
            \Log::error('Native signup DB error', ['error' => $e->getMessage()]);
            return redirect('sign-up')->with('fail', 'Could not create your account. Please try again.');
        }
    }

    if ($user === null) {
        return redirect('sign-up')->with('fail', 'Could not create your account. Please try again.');
    }

    app(\App\Services\Billing\EntitlementService::class)
        ->setPackage((int) $user->wp_user_id, (string) config('packages.free_slug', 'free'));

    // setPackage() created the wp_users mirror but only set user_id + package.
    // Populate the profile fields so the views that read wp_users (dashboard,
    // tips, admin user pages) show the new user's name/email — matching what
    // the legacy WordPress signup path wrote.
    $wp = WPUsers::where('user_id', $user->wp_user_id)->first();
    if ($wp) {
        $wp->email = $user->email;
        $wp->display_name = $user->display_name;
        $wp->date_of_birth = $user->date_of_birth;
        $wp->age = $user->date_of_birth ? \Carbon\Carbon::parse($user->date_of_birth)->age : null;
        $wp->save();
    }

    $request->session()->regenerate();
    session(['user_id' => $user->wp_user_id]);
    session(['user_details' => [
        'id' => $user->wp_user_id,
        'username' => $user->username,
        'email' => $user->email,
        'display_name' => $user->display_name,
        'date_of_birth' => $user->date_of_birth,
        'billing_phone' => $user->billing_phone,
        'billing_country' => $user->billing_country,
    ]]);
    session(['user_dob' => $user->date_of_birth]);

    \Log::info('Native signup success', ['user_id' => $user->wp_user_id]);

    return $this->adoptGuestAnswersAndRedirect($request);
}

/**
 * Registration OTP: confirm the emailed code, then create the held account.
 */
public function verifyEmailOtp(Request $request)
{
    $data = session('pending_signup');
    if (! $data) {
        return redirect('sign-up')->with('fail', 'Your signup session expired. Please register again.');
    }

    // A log-only mailer cannot deliver a verification code to a customer.
    // If OTP is disabled (the correct local configuration until SMTP is set),
    // allow a signup that was already waiting at this screen to continue
    // instead of leaving the customer trapped on the OTP page.
    if (! config('app.otp_enabled')) {
        session()->forget('pending_signup');

        return $this->createNativeUserFromData($data, $request);
    }

    if ($request->isMethod('get')) {
        return view('user/verify_email_otp', ['email' => $data['email']]);
    }

    $request->validate(['otp' => 'required|string']);

    $otp = app(\App\Services\Auth\OtpService::class);
    if (! $otp->verify($data['email'], 'register', $request->otp)) {
        return back()->with('fail', 'Invalid or expired code. Please try again.');
    }

    session()->forget('pending_signup');

    return $this->createNativeUserFromData($data, $request);
}

/**
 * Resend a code for whichever OTP flow is pending in the session.
 */
public function resendOtp(Request $request)
{
    $otp = app(\App\Services\Auth\OtpService::class);

    if ($data = session('pending_signup')) {
        $sent = $otp->send($data['email'], 'register');
        return back()->with($sent ? 'success' : 'fail',
            $sent ? 'A new code has been sent.' : 'Too many code requests. Please wait a few minutes.');
    }
    if ($pending = session('pending_login')) {
        $sent = $otp->send($pending['email'], 'login');
        return back()->with($sent ? 'success' : 'fail',
            $sent ? 'A new code has been sent.' : 'Too many code requests. Please wait a few minutes.');
    }

    return redirect('sign-in')->with('fail', 'Nothing to resend. Please start again.');
}

    public function profile(Request $request){
        if ($request->isMethod('get')) {

            return view('profile');

        }
      
    }
    public function profile_settings(Request $request){
        if ($request->isMethod('get')) {
            // $login_details = User::where('id', Auth::user()->id)->first();
            // $other_details = CustomerDetails::where('user_id', Auth::user()->id)->first();

            // return view('dashboard/profile', ['login_details' => $login_details, 'other_details' => $other_details]);
            //  return view('dashboard/profile');

            return view('dashboard/profile_settings');

        }
        if($request->isMethod('post')){
            
            if ($request->submit_type === 'basic_details') {
            
            $this->validate($request, [
                'name'   => 'required',
                'date_of_birth'   => 'required',
                'email'   => 'required | email',
                'password'   => 'required',
            ]);
            
            $token_payload = [
            'username' => session('user_details')['username'],
            'password' => $request->password,
            ];
            
            
            $token_response = $this->performCurlRequest('https://decodemybrain.com/wp-json/jwt-auth/v1/token', true, $token_payload);
            
            if ($token_response) {
                $token =  $token_response['token'];
                
                $payload = [
                // 'email' => $request->email,
                'display_name' => $request->name,
                // 'date_of_birth' => $request->date_of_birth,
                'billing_phone' => $request->phone_number,
                'user_id' => session('user_id'),
                ];
                
        
                $response = $this->performCurlRequest('https://decodemybrain.com/wp-json/custom/v1/update', true, $payload,$token);
        
                if ($response && isset($response['status']) && $response['status'] === 'success') {
                    
                    $url = 'https://decodemybrain.com/wp-json/custom/v1/user?user_id='.session('user_id').'';
                    $response2 = $this->performCurlRequest($url);
                    
                    
                    if ($response2 && isset($response2['status']) && $response2['status'] === 'success') {
                        $userData = $response2['data'] ?? null;
                          if ($userData) {
                                session(['user_details' => $userData]);
                                session(['user_dob' => $userData['date_of_birth']]);
         
                            }
                    }
                    else {
                    $errorMessage = $response['message'] ?? 'Login failed. Please try again.';
                    return back()->with('fail', $errorMessage);
                    }
                    
                    return back()->with('success', 'Profile Updated');
                    
                    $wp_user = WPUsers::where('user_id',session('user_id'))->first();
                    $wp_user->email = session('user_details')['email'];
                    $wp_user->display_name = session('user_details')['display_name'];
                    $wp_user->date_of_birth = session('user_details')['date_of_birth'];
                    $wp_user->update();
                    
                } else {
    
                $errorMessage = $response['message'] ?? 'Login failed. Please try again.';
                return back()->with('fail', $errorMessage);
                }
            }
            else{
                $errorMessage = $response['message'] ?? 'Something went wrong. Please try again.';
                return back()->with('fail', $errorMessage); 
            }
            
            
            }
            if ($request->submit_type === 'change_password') {
                
            $this->validate($request, [
                'current_password' => 'required',
                'password_confirmation' => 'required',
                'password' => 'required|confirmed|min:6',
            ]);
            
             $token_payload = [
            'username' => session('user_details')['username'],
            'password' => $request->current_password
            ];
            
            
            $token_response = $this->performCurlRequest('https://decodemybrain.com/wp-json/jwt-auth/v1/token', true, $token_payload);
            
            if ($token_response) {
                $token =  $token_response['token'];
                
                $payload = [
                'current_password' => $request->current_password,
                'new_password' => $request->password,
                'user_id' => session('user_id'),
                ];
                
        
                $response = $this->performCurlRequest('https://decodemybrain.com/wp-json/custom/v1/change-password', true, $payload,$token);

                if ($response && isset($response['status']) && $response['status'] === 'success') {

                    // Keep the local credential in sync so native login accepts the new password.
                    $localUser = User::where('wp_user_id', session('user_id'))->first();
                    if ($localUser) {
                        $localUser->password = Hash::make($request->password);
                        $localUser->save();
                    }

                    $url = 'https://decodemybrain.com/wp-json/custom/v1/user?user_id='.session('user_id').'';
                    $response2 = $this->performCurlRequest($url);
                    
                    
                    if ($response2 && isset($response2['status']) && $response2['status'] === 'success') {
                        $userData = $response2['data'] ?? null;
                          if ($userData) {
                                session(['user_details' => $userData]);
                                session(['user_dob' => $userData['date_of_birth']]);
         
                            }
                    }
                    else {
                    $errorMessage = $response['message'] ?? 'Login failed. Please try again.';
                    return back()->with('fail', $errorMessage);
                    }
                    
                    return back()->with('success', 'Password Updated');
                    
                } else {
    
                $errorMessage = $response['message'] ?? 'Login failed. Please try again.';
                return back()->with('fail', $errorMessage);
                }
            }
            else{
                $errorMessage = $response['message'] ?? 'Something went wrong. Please try again.';
                return back()->with('fail', $errorMessage); 
            }
            
                
            }
            return back()->withErrors(['fail' => 'Invalid form submission.']);
            }
    }
    public function buy_package($package, Request $request){
        if($request->isMethod('get')){
            $catalog = app(\App\Services\Billing\PackageCatalog::class);

            // SECURITY: never grant a PAID package from this GET route — that would
            // be a free upgrade bypassing payment. Paid packages must go through
            // Stripe Checkout (cashier) or the WooCommerce flow (wp). Only the
            // free tier may be self-selected here.
            if ($package !== $catalog->freeSlug()) {
                if (!$catalog->exists($package)) {
                    return redirect('/')->with('fail', 'Unknown package.');
                }
                if ($catalog->isCashier()) {
                    return redirect()->route('checkout.start', $package);
                }
                return redirect('/');
            }

            if (session('user_id')) {
                app(\App\Services\Billing\EntitlementService::class)
                    ->setPackage((int) session('user_id'), $catalog->freeSlug());
            }
            return back()->with('success', 'Package activated');
        }
        if($request->isMethod('post')){
         return redirect('questions/q6');
        }
    }
    public function check_user_package($type,Request $request){
        $user_package = Auth::user()->package;
        if($user_package == "paid"){

        }
        else{

        }
    }
    public function enter_access_code(Request $request){
        if($request->isMethod('get')){
            return view('user/enter_access_code');
        }
        if($request->isMethod('post')){
            $this->validate($request, [
                'access_code'   => 'required',
            ]);

            if(AccessCodes::where("status", "active")->where("code", $request->access_code)->exists()){
                $code = AccessCodes::where("code", $request->access_code)->first();
                // session('user_id') is the WP id; Auth::user() is unused in this
                // session-based app. Record the redeemer and grant entitlement
                // via the central service (writes the enforced wp_users.package).
                $catalog = app(\App\Services\Billing\PackageCatalog::class);
                if (!$catalog->exists($code->package)) {
                    \Log::warning('Access code carries unknown package slug', ['code_id' => $code->id, 'package' => $code->package]);
                    return back()->with('fail', 'This access code is misconfigured. Please contact support.');
                }

                $code->used_by = session('user_id');
                $code->status = "used";
                $code->update();

                app(\App\Services\Billing\EntitlementService::class)
                    ->setPackage((int) session('user_id'), $code->package);

                return back()->with('success', 'Access code accepted');
            }
            else{
                return back()->with('fail', 'Invalid Access Code');
            }
            
        }
    }
    
// private function performCurlRequest($url) {
//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_URL, $url);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     $response = curl_exec($ch);

//     if(curl_errno($ch)) {
//         curl_close($ch);
//         return null;
//     }

//     curl_close($ch);
//     return $response;
// }

// private function performCurlPostRequest($url, $formData) {
//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_URL, $url);
//     curl_setopt($ch, CURLOPT_POST, true);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($formData));
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($ch, CURLOPT_HTTPHEADER, [
//         'Content-Type: application/json',
//     ]);
//     $response = curl_exec($ch);
//     if(curl_errno($ch)) {
//         return 'Error:' . curl_error($ch);
//     }
//     curl_close($ch);
//     return $response;
// }

private function getNonce() {
    $url = 'https://projects.genaitech.dev/zebrabrain-wordpress-api/api/v1/get_nonce/?json=get_nonce&controller=user&method=register';
    $response = $this->performCurlRequest($url);
    if ($response) {
        $data = json_decode($response, true);
        return $data['nonce'] ?? null;
    }
    return null;
}

private function registerUser($request, $nonce) {
    $url = 'https://projects.genaitech.dev/zebrabrain-wordpress-api/api/v1/user/register/';
    $formData = [
        'username' => $request->user_name,
        'email' => $request->email,
        'nonce' => $nonce,
        'notify' => 'both',
        'display_name' => $request->first_name . ' ' . $request->last_name,
        'user_pass' => $request->password,
        'firstname' => $request->first_name,
        'lastname' => $request->last_name,
        'custom_fields[dob]' => $request->dob,
    ];
    $urlWithParams = $url . '?' . http_build_query($formData);
    $response = $this->performCurlRequest($urlWithParams, true); // Send data as URL parameters
    return $response ? json_decode($response, true) : null;
}

private function generateAuthCookie($request) {
    $nonceUrl = 'https://projects.genaitech.dev/zebrabrain-wordpress-api/api/v1/get_nonce/?controller=user&method=generate_auth_cookie';
    $nonceResponse = $this->performCurlRequest($nonceUrl);
    if ($nonceResponse) {
        $nonce_data = json_decode($nonceResponse, true);
        $loginUrl = 'https://projects.genaitech.dev/zebrabrain-wordpress-api/api/v1/user/generate_auth_cookie/';
        $loginUrlWithParams = $loginUrl . '?' . http_build_query([
            'username' => $request->user_name,
            'password' => $request->password,
            'nonce' => $nonce_data['nonce'],
        ]);

        $loginResponse = $this->performCurlRequest($loginUrlWithParams);
        return $loginResponse ? json_decode($loginResponse, true) : null;
    }
    return null;
}

private function handleUserSessions($request) {
    if (session('answer_main_id')) {
        if (QuestionAnswerMain::where("user_id", session('user_id'))->exists()) {
            QuestionAnswerMain::where("id", session('answer_main_id'))->delete();
            QuestionAnswers::where("answer_main_id", session('answer_main_id'))->delete();
            $request->session()->forget(['answer_main_id']);
        } else {
            $QuestionAnswerMain = QuestionAnswerMain::where('id', session('answer_main_id'))->first();
            $QuestionAnswerMain->user_id = session('user_id');
            $QuestionAnswerMain->update();

            $BrainResultsController = new BrainResultsController();
            $BrainResultsController->add_brain_results(session('answer_main_id'));

            $request->session()->forget(['answer_main_id']);
        }
    }

    if (session('d_answer_main_id')) {
        $DimensionalQuestionAnswerMain = DimensionalQuestionAnswerMain::where('id', session('d_answer_main_id'))->first();
        $DimensionalQuestionAnswerMain->user_id = session('user_id');
        $DimensionalQuestionAnswerMain->update();
        
        $BrainResultsController = new BrainResultsController();
        $BrainResultsController->add_dimensional_brain_results(session('d_answer_main_id'));

        $request->session()->forget(['d_answer_main_id']);
    }
}

private function performCurlRequest($url, $isPost = false, $payload = [], $token = null)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $headers = [
        'Content-Type: application/json',
        'Accept: application/json',
    ];

    if ($token) {
        $headers[] = 'Authorization: Bearer ' . $token;
    }

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    if ($isPost) {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
    }
    
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        curl_close($ch);
        return null;
    }

    curl_close($ch);
    return json_decode($response, true);
}

    function logout(Request $request)
    {
        // Fully invalidate the session so a stolen cookie can't be replayed.
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('sign-in');
    }


    public function update_package_status(Request $request)
{
    try {
        // SECURITY: this endpoint writes the enforced entitlement (wp_users.package).
        // It is server-to-server (the WordPress membership plugin). When a shared
        // secret is configured, require it; otherwise warn so the gap is visible.
        // Lock this down (set DMB_PACKAGE_SYNC_SECRET on both sides) before cutover.
        $expectedSecret = config('packages.sync_secret');
        if (!empty($expectedSecret)) {
            $provided = $request->header('X-DMB-Sync-Secret', $request->input('sync_secret'));
            if (!is_string($provided) || !hash_equals($expectedSecret, $provided)) {
                return response()->json(['status' => 'fail', 'message' => 'Unauthorized.'], 401);
            }
        } else {
            Log::warning('update_package_status called without a configured sync secret (endpoint is unauthenticated).');
        }

        // Step 1: Base validation
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer',
            'status'  => 'nullable|string',
            'package' => 'string|nullable'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => "fail",
                'message' => 'Validation errors',
                'errors' => $validator->errors()
            ], 422);
        }

        // This is the live WordPress sync; WordPress may legitimately send a
        // product slug we have not catalogued. Don't reject (that would break
        // sync) — just record it. Unknown slugs grant no access anyway, since
        // ValidatePackage only matches known paid slugs.
        $catalog = app(\App\Services\Billing\PackageCatalog::class);
        $package = $request->package ?? $catalog->freeSlug();
        if (!$catalog->exists($package)) {
            Log::warning('update_package_status received an uncatalogued package slug', ['package' => $package]);
        }

        // Step 2: Fetch user
        $user = WPUsers::where('user_id', $request->user_id)->first();

        if (!$user) {
            return response()->json([
                'status' => 'fail',
                'message' => 'User not found.'
            ], 404);
        }

        // Step 3: Write entitlement through the central service (keeps both
        // wp_users.package and users.package consistent).
        app(\App\Services\Billing\EntitlementService::class)
            ->setPackage((int) $request->user_id, $package);
        $user->refresh();

        // Step 4: Response
        return response()->json([
            'status' => "success",
            'message' => 'Package details updated.',
            'user' => $user
        ], 201);

    } catch (\Exception $e) {
        Log::error('Package update failed: ' . $e->getMessage());

        return response()->json([
            'status' => 'error',
            'message' => 'An error occurred while updating the package.',
            'error' => $e->getMessage(),
        ], 500);
    }
}
public function get_user_details(Request $request)
{
    try {
        // Step 1: Base validation
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => "fail",
                'message' => 'Validation errors',
                'errors' => $validator->errors()
            ], 422);
        }

        // Step 2: Fetch user
        $user = WPUsers::where('user_id', $request->user_id)->first();

        if (!$user) {
            return response()->json([
                'status' => 'fail',
                'message' => 'User not found.'
            ], 404);
        }

        // Step 3: Update logic
        // if ($request->status === 'updated') {
        //     $user->package = $request->package;
        // } else {
        //     $user->package = null;
        // }
        // $user->package = $request->package;
        // $user->save();

        // Step 4: Response
        return response()->json([
            'status' => "success",
            'user' => $user
        ], 201);

    } catch (\Exception $e) {
        Log::error('Package update failed: ' . $e->getMessage());

        return response()->json([
            'status' => 'error',
            'message' => 'An error occurred while updating the package.',
            'error' => $e->getMessage(),
        ], 500);
    }
}

public function forgot_password(Request $request)
{
    if ($request->isMethod('get')) {
        return view('user/forgot_password');
    }

    if ($request->isMethod('post')) {
        $request->validate([
            'identifier' => 'required'
        ]);

        $identifier = trim($request->identifier);

        $email = mb_strtolower($identifier);

        // Prefer a native account. If the person exists only in the legacy
        // mirror, let them prove control of its email before we create their
        // first native password record in verify_otp().
        $user = User::whereNotNull('wp_user_id')->where('username', $identifier)->first()
            ?? User::whereNotNull('wp_user_id')->where('email', $email)->where('email', '!=', '')->first();
        $legacy = $user ? null : WPUsers::whereNotNull('user_id')
            ->where('email', $email)
            ->where('email', '!=', '')
            ->first();

        // Always show the same response (don't reveal whether the account exists).
        $resetEmail = $user?->email ?? $legacy?->email;
        if ($resetEmail && app(\App\Services\Auth\OtpService::class)->send((string) $resetEmail, 'reset')) {
            session([
                'reset_email' => mb_strtolower((string) $resetEmail),
                'reset_wp_user_id' => $legacy?->user_id,
            ]);
        }

        return redirect('verify-otp')->with('success', "If that account exists, we've emailed a reset code.");
    }


}

public function verify_otp(Request $request)
{
    if ($request->isMethod('get')) {
        return view('user/verify_otp');
    }

    if ($request->isMethod('post')) {
        $request->validate([
            'otp' => 'required',
            'password_confirmation' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);

        $email = session('reset_email');
        if (! $email) {
            return redirect('forgot-password')->with('fail', 'Your reset session expired. Please start again.');
        }

        if (! app(\App\Services\Auth\OtpService::class)->verify($email, 'reset', $request->otp)) {
            return back()->with('fail', 'Invalid or expired code. Please try again.');
        }

        try {
            $localUser = $this->resetNativePassword(
                (string) $email,
                (string) $request->password,
                (int) session('reset_wp_user_id') ?: null,
            );
        } catch (\Throwable $e) {
            \Log::error('Password reset account activation failed', ['email_hash' => sha1((string) $email), 'error' => $e->getMessage()]);
            return redirect('forgot-password')->with('fail', 'We could not reset your password. Please try again.');
        }

        if (! $localUser) {
            return redirect('forgot-password')->with('fail', 'Your reset session expired. Please start again.');
        }

        session()->forget(['reset_email', 'reset_wp_user_id']);

        return redirect('sign-in')->with('success', "Password reset successful. Please login.");
    }


}

/**
 * Reset a native password or, after an email OTP proves ownership, activate a
 * mirror-only account in the users table without changing its wp_users row.
 */
private function resetNativePassword(string $email, string $password, ?int $legacyWpUserId): ?User
{
    return DB::transaction(function () use ($email, $password, $legacyWpUserId) {
        $normalizedEmail = mb_strtolower(trim($email));
        $user = User::whereNotNull('wp_user_id')->where('email', $normalizedEmail)->lockForUpdate()->first();

        if (! $user && $legacyWpUserId) {
            $user = User::where('wp_user_id', $legacyWpUserId)->lockForUpdate()->first();
        }

        if (! $user) {
            $legacy = WPUsers::whereNotNull('user_id')
                ->where('email', $normalizedEmail)
                ->lockForUpdate()
                ->first();
            if (! $legacy) {
                return null;
            }

            $user = User::where('wp_user_id', $legacy->user_id)->lockForUpdate()->first();
            if (! $user) {
                $user = new User();
                $user->wp_user_id = (int) $legacy->user_id;
                $user->username = (string) $legacy->email;
                $user->email = $normalizedEmail;
                $user->display_name = $legacy->display_name;
                $user->date_of_birth = $legacy->date_of_birth;
                $user->user_role = '2';
                $user->status = 'active';
            }
        }

        // A linked native row with a different email must not be claimed by
        // this reset. It requires a support-led identity correction instead.
        if (mb_strtolower((string) $user->email) !== $normalizedEmail) {
            return null;
        }

        $user->password = Hash::make($password);
        $user->save();

        return $user;
    });
}

public function register(Request $request)
{
    try {

        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer',
            'email'  => 'required|email|unique:wp_users,email',
            'name' => 'required|string',
            'dob' => 'required|date',
            'package' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => "fail",
                'message' => 'Validation errors',
                'errors' => $validator->errors()
            ], 422);
        }

        $age = \Carbon\Carbon::parse($request->dob)->age;

        if ($age < 12) {
            return response()->json([
                'status' => "fail",
                'message' => 'You must be at least 12 years old to register.',
            ], 422);
        }

        $wp_user = new WPUsers();
        $wp_user->user_id = $request->user_id;
        $wp_user->email = $request->email;
        $wp_user->display_name = $request->name;
        $wp_user->date_of_birth = $request->dob;
        $wp_user->age = $age;
        $wp_user->package = $request->package;
        $wp_user->save();

        return response()->json([
            'status' => "success",
            'message' => 'User registration successful.',
            'user' => $wp_user
        ], 201);

    } catch (\Exception $e) {

        Log::error('User registration failed: ' . $e->getMessage());

        return response()->json([
            'status' => 'error',
            'message' => 'An error occurred while registering the user.',
            'error' => $e->getMessage(),
        ], 500);
    }
}

}
