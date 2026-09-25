<?php
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\PublicPurchaseController;
use App\Http\Controllers\OrganizationEnquiryController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\StripeWebhookController;
use App\Http\Controllers\ComparisonController;
use App\Http\Controllers\SkillTestController;
use App\Http\Controllers\IntrovertExtrovertQuestionController;
use App\Http\Controllers\ConsultantTestController;
use Illuminate\Http\Request;
use App\Http\Middleware\AuthCustomer;
use App\Http\Middleware\AuthQuestionAnswered;
use App\Http\Middleware\checkUserPacakge;
use App\Http\Middleware\ValidatePackage;
use App\Http\Middleware\RequirePaidPackage;
use Google\Client as GoogleClient;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
$router->aliasMiddleware('authCustomer', AuthCustomer::class);
$router->aliasMiddleware('AuthQuestionAnswered', AuthQuestionAnswered::class);
$router->aliasMiddleware('checkUserPacakge', checkUserPacakge::class);
$router->aliasMiddleware('validatePackage', ValidatePackage::class);
$router->aliasMiddleware('requirePaid', RequirePaidPackage::class);

Route::get('/', [MainController::class, 'landing'])->name('landing');
Route::view('/science', 'public.science')->name('public.science');
Route::view('/our-method', 'public.science', ['sciencePage' => 'method'])->name('public.method');

// Public program details linked from the landing-page Read More buttons.
foreach (['quest', 'evolve', 'summit'] as $program) {
    Route::view('/'.$program, 'public.program', [
        'program' => $program,
    ])->name('public.program.'.$program);
}

Route::match(['get', 'post'],'/intro', [QuestionsController::class, 'intro'])->middleware('requirePaid');
Route::match(['get', 'post'],'/questions/{question}', [QuestionsController::class, 'question'])->middleware('authCustomer')->middleware('requirePaid');
Route::match(['get', 'post'],'/childquestions/{question}', [QuestionsController::class, 'childquestions'])->middleware('requirePaid');
Route::match(['get', 'post'],'/questions-completed', [QuestionsController::class, 'thankyou']);
Route::post('/assessment/pause', [QuestionsController::class, 'pause'])->name('assessment.pause')->middleware('authCustomer');
Route::get('/assessment/resume', [QuestionsController::class, 'resume'])->name('assessment.resume')->middleware(['authCustomer', 'requirePaid']);

Route::match(['get', 'post'],'/start-dimentaional-questions', [QuestionsController::class, 'start_dimentational_questions'])->middleware('requirePaid');

Route::match(['get', 'post'],'/save-answers', [QuestionsController::class, 'save_answers'])->middleware('requirePaid');
Route::match(['get', 'post'],'/save-child-answers', [QuestionsController::class, 'save_child_answers'])->middleware('requirePaid');

Route::match(['get', 'post'],'/questions/game/game-1', [QuestionsController::class, 'game_1'])->middleware('requirePaid');
Route::match(['get', 'post'],'/questions/game/game-2', [QuestionsController::class, 'game_2'])->middleware('requirePaid');
Route::match(['get', 'post'],'/questions/game/game-3', [QuestionsController::class, 'game_3'])->middleware('requirePaid');
Route::match(['get', 'post'],'/questions/game/game-4', [QuestionsController::class, 'game_4'])->middleware('requirePaid');
Route::match(['get', 'post'],'/questions/game/game-5', [QuestionsController::class, 'game_5'])->middleware('requirePaid');
Route::match(['get', 'post'],'/sign-in', [UserController::class, 'sign_in']);
Route::match(['get', 'post'],'/sign-up', [UserController::class, 'sign_up'])->middleware(['throttle:20,1', \App\Http\Middleware\PreventAuthFormCaching::class]);
// Email-OTP steps (active when OTP_ENABLED): registration verification only.
Route::match(['get', 'post'],'/verify-email-otp', [UserController::class, 'verifyEmailOtp'])->middleware(['throttle:20,1', \App\Http\Middleware\PreventAuthFormCaching::class]);
Route::post('/resend-otp', [UserController::class, 'resendOtp'])->middleware('throttle:6,1');
Route::match(['get', 'post'],'/logout', [UserController::class, 'logout']);
Route::match(['get', 'post'],'/forgot-password', [UserController::class, 'forgot_password'])->middleware('throttle:20,1');
Route::match(['get', 'post'],'/verify-otp', [UserController::class, 'verify_otp'])->middleware('throttle:20,1');
Route::match(['get', 'post'],'/packages', [MainController::class, 'packages'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/buy-package/{package}', [UserController::class, 'buy_package'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');

// Native Stripe Checkout (active only when PAYMENTS_DRIVER=cashier). Fixed
// segments are declared before the {package} wildcard so they match first.
Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');
Route::get('/checkout/cancel', [CheckoutController::class, 'cancel'])->name('checkout.cancel');
Route::get('/checkout/{package}', [CheckoutController::class, 'checkout'])->name('checkout.start');

// Stripe webhook (signature-verified by Cashier when STRIPE_WEBHOOK_SECRET set).
Route::post('/stripe/webhook', [StripeWebhookController::class, 'handleWebhook'])->name('cashier.webhook');

// New voucher and organisation-seat flows. Legacy /enter-access-code remains
// separate and continues to work exactly as before.
Route::post('/voucher/start', [VoucherController::class, 'start'])->name('voucher.start')->middleware('throttle:10,1');
Route::get('/voucher/complete', [VoucherController::class, 'complete'])->name('voucher.complete')->middleware('authCustomer');
Route::get('/start/access', [VoucherController::class, 'accessChoice'])->name('access.choice');
Route::post('/start/access/pay', [VoucherController::class, 'payMyself'])->name('access.pay');
Route::post('/start/access/code/validate', [VoucherController::class, 'beginCode'])->name('access.code.begin')->middleware('throttle:10,1');
Route::get('/start/access/code/complete', [VoucherController::class, 'completeAccessCode'])->name('access.code.complete')->middleware('authCustomer');
Route::get('/start/access/code/accepted', [VoucherController::class, 'acceptedAccessCode'])->name('access.code.accepted')->middleware('authCustomer');
Route::post('/start/access/code/accepted/start', [VoucherController::class, 'startAcceptedAccessCode'])->name('access.code.accepted.start')->middleware('authCustomer');
Route::post('/start/access/code', [VoucherController::class, 'redeemCode'])->name('access.code')->middleware(['authCustomer', 'throttle:10,1']);
Route::get('/organization/invitation/complete', [VoucherController::class, 'completeInvitation'])->name('organization.invitation.complete')->middleware('authCustomer');
Route::get('/organization/invitation/{token}', [VoucherController::class, 'invitation'])->name('organization.invitation');
Route::get('/plans', [PublicPurchaseController::class, 'plans'])->name('public.plans');
Route::get('/plans/{package}/continue', [PublicPurchaseController::class, 'continuePlan'])->name('public.plans.continue')->middleware('authCustomer');
Route::get('/organizations/enquiry', [OrganizationEnquiryController::class, 'create'])->name('organization.enquiry.create');
Route::post('/organizations/enquiry', [OrganizationEnquiryController::class, 'store'])->name('organization.enquiry.store')->middleware('throttle:10,1');

Route::match(['get', 'post'],'/dashboard', [MainController::class, 'dashboard'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/tips', [MainController::class, 'tips'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/consultation-booking', [MainController::class, 'consultationBooking'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/internships', [MainController::class, 'internships'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/scholarships', [MainController::class, 'scholarships'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/university-programs', [MainController::class, 'universityPrograms'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/test-attempt', [MainController::class, 'testAttempt'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/supar-future-club', [MainController::class, 'suparFutureClub'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/profile', [UserController::class, 'profile'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/profile-settings', [UserController::class, 'profile_settings'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/events', [MainController::class, 'events'])->middleware('authCustomer')->middleware('AuthQuestionAnswered')->middleware('validatePackage:"decodemybrain-deep-dive","decodemybrain-guided-friend-and-family-connect"');

Route::match(['get', 'post'],'/test-attempt-2', [MainController::class, 'testAttempt_2'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');


Route::match(['get', 'post'],'/parent-community', [MainController::class, 'parentCommunity'])->middleware('authCustomer')->middleware('AuthQuestionAnswered')->middleware('validatePackage:"decodemybrain-deep-dive","decodemybrain-guided-friend-and-family-connect"');


Route::match(['get', 'post'],'/view-tip/{id}', [MainController::class, 'tipInner'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/view-university/{id}', [MainController::class, 'uniInner'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/view-internship/{id}', [MainController::class, 'internInner'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/view-scholarship/{id}', [MainController::class, 'scholarshipInner'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/super-futer-inner', [MainController::class, 'superFutureInner'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/search-buddy', [MainController::class, 'searchBuddy'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/jobs', [MainController::class, 'jobs'])->middleware('authCustomer')->middleware('AuthQuestionAnswered')->middleware('validatePackage:"decodemybrain-deep-dive","decodemybrain-guided-friend-and-family-connect"');
Route::match(['get', 'post'],'/jobs-inner', [MainController::class, 'jobsInner'])->middleware('authCustomer')->middleware('AuthQuestionAnswered')->middleware('validatePackage:"decodemybrain-deep-dive","decodemybrain-guided-friend-and-family-connect"');
Route::match(['get', 'post'],'/consultation-booking-step-2', [MainController::class, 'consultStepTwo'])->middleware('authCustomer')->middleware('AuthQuestionAnswered')->middleware('validatePackage:"decodemybrain-deep-dive","decodemybrain-guided-friend-and-family-connect"');

Route::match(['get', 'post'],'/about-us', [MainController::class, 'aboutus']);
Route::match(['get', 'post'],'/blogs', [MainController::class, 'blogs']);
Route::match(['get', 'post'],'/braintour', [MainController::class, 'braintour']);
Route::match(['get', 'post'],'/blog-inner', [MainController::class, 'bloginner']);
Route::match(['get', 'post'],'/our-marketplace', [MainController::class, 'ourmarketplace']);
Route::match(['get', 'post'],'/marketplace-inner', [MainController::class, 'marketplaceinner']);
Route::match(['get', 'post'],'/home-events', [MainController::class, 'homeevents']);
Route::match(['get', 'post'],'/event/{slug}', [MainController::class, 'homeeventsinner']);
Route::match(['get', 'post'],'/sweta-adatia', [MainController::class, 'swetaadatia']);
Route::match(['get', 'post'],'/hussain-ghadiyali', [MainController::class, 'hussain']);
Route::match(['get', 'post'],'/partnered-consultant', [MainController::class, 'partneredconsultant']);


Route::match(['get', 'post'],'/basic-report-template', [MainController::class, 'basic_report_template'])->middleware('authCustomer')->middleware('AuthQuestionAnswered')->middleware('validatePackage:"decodemybrain-deep-dive","decodemybrain-guided-friend-and-family-connect"');




Route::match(['get', 'post'], '/retake', [QuestionsController::class, 'retake'])->middleware('requirePaid');







Route::match(['get', 'post'],'/download-brain-results', [MainController::class, 'download_brain_results'])->middleware('authCustomer')->middleware('checkUserPacakge');
Route::match(['get', 'post'],'/stars-filter/{type}', [MainController::class, 'stars_filter']);
Route::match(['get', 'post'],'/event-filter', [MainController::class, 'event_filter']);

Route::match(['get', 'post'],'/save-dimensional-answers', [QuestionsController::class, 'save_dimensional_answers'])->middleware('requirePaid');
Route::match(['get', 'post'],'/enter-access-code', [UserController::class, 'enter_access_code'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');


Route::match(['get', 'post'],'/comparison-request', [ComparisonController::class, 'comparison_request'])->middleware('authCustomer')->middleware('AuthQuestionAnswered')->middleware('validatePackage:"decodemybrain-deep-dive","decodemybrain-guided-friend-and-family-connect"');
Route::match(['get', 'post'],'/accept-comparison-request/{id}', [ComparisonController::class, 'accept_comparison_request'])->middleware('authCustomer')->middleware('AuthQuestionAnswered')->middleware('validatePackage:"decodemybrain-deep-dive","decodemybrain-guided-friend-and-family-connect"');
Route::match(['get', 'post'],'/reject-comparison-request/{id}', [ComparisonController::class, 'reject_comparison_request'])->middleware('authCustomer')->middleware('AuthQuestionAnswered')->middleware('validatePackage:"decodemybrain-deep-dive","decodemybrain-guided-friend-and-family-connect"');
Route::match(['get', 'post'],'/compare-results/{type}/{id}', [ComparisonController::class, 'compare_results'])->middleware('authCustomer')->middleware('AuthQuestionAnswered')->middleware('validatePackage:"decodemybrain-deep-dive","decodemybrain-guided-friend-and-family-connect"');


Route::get('/new-dashboard', [MainController::class, 'newDashboard']);
Route::get('/comparison-page', function () {
    return view('comparison.compare_results');
});

Route::get('/careers-inner-page-1', function () {
    return view('careers.inner_page_1');
});

Route::get('/careers-inner-page-2', function () {
    return view('careers.inner_page_2');
});

Route::get('/profile-new', function () {
    return view('profile');
});

Route::get('/pricing', function () {
    $packages = \App\Models\PricingPackage::where('is_visible', 1)
        ->orderBy('sort_order')
        ->get();

    return view('pricing', ['packages' => $packages]);
})->middleware('authCustomer');

// Route::get('/events-new', function () {
//     return view('events_new');
// });

Route::match(['get', 'post'],'/events-new', [MainController::class, 'events_new'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');


Route::get('/intro-extro', function () {
    return view('new_pages.intro_extro');
});


Route::match(['get', 'post'],'/skill-test/{question}', [SkillTestController::class, 'skill_test'])->middleware('authCustomer')->middleware('AuthQuestionAnswered')->middleware('validatePackage:"decodemybrain-deep-dive","decodemybrain-guided-friend-and-family-connect"');
Route::match(['get', 'post'],'/save-skill-test-answers', [SkillTestController::class, 'save_skill_test_answers'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');


Route::match(['get', 'post'],'/introvert-extrovert-question/{question}', [IntrovertExtrovertQuestionController::class, 'introvert_extrovert_question'])->middleware('authCustomer')->middleware('AuthQuestionAnswered')->middleware('validatePackage:"decodemybrain-deep-dive","decodemybrain-guided-friend-and-family-connect"');
Route::match(['get', 'post'],'/save-introvert-extrovert-answers', [IntrovertExtrovertQuestionController::class, 'save_introvert_extrovert_answers'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');


Route::match(['get', 'post'],'/careers', [MainController::class, 'careers'])->middleware('authCustomer')->middleware('AuthQuestionAnswered')->middleware('validatePackage:"decodemybrain-deep-dive","decodemybrain-guided-friend-and-family-connect"');

Route::match(['get', 'post'],'/careers-inner/{id}', [MainController::class, 'careers_inner'])->middleware('authCustomer')->middleware('AuthQuestionAnswered')->middleware('validatePackage:"decodemybrain-deep-dive","decodemybrain-guided-friend-and-family-connect"');
Route::match(['get', 'post'],'/billing', [MainController::class, 'billing'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');



Route::match(['get', 'post'], '/reset-questions', [QuestionsController::class, 'reset_questions']);


Route::match(['get', 'post'], '/introvert-or-extrovert', [MainController::class, 'introvert_or_extrovert'])->middleware('validatePackage:"decodemybrain-deep-dive","decodemybrain-guided-friend-and-family-connect"');
Route::match(['get', 'post'], '/skill-assestment', [MainController::class, 'skill_assestment'])->middleware('validatePackage:"decodemybrain-deep-dive","decodemybrain-guided-friend-and-family-connect"');

Route::match(['get', 'post'], '/report/{type}', [MainController::class, 'report'])->middleware('validatePackage:"decodemybrain-deep-dive","decodemybrain-guided-friend-and-family-connect"');

Route::get('/dashboard-new', function () {
    return view('dashboard.dashboard-new');
});



Route::match(['get', 'post'], '/download-report', [MainController::class, 'download_report'])->middleware('validatePackage:"decodemybrain-deep-dive","decodemybrain-guided-friend-and-family-connect"');

Route::post('careers/import', [MainController::class, 'importCareers']);


Route::match(['get', 'post'],'/complete-profile', [ConsultantTestController::class, 'complete_profile'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');


Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions');
});

Route::get('/google', function () {
    $client = new GoogleClient();
    $client->setClientId(config('mail.mailers.gmail.clientId'));
    $client->setClientSecret(config('mail.mailers.gmail.clientSecret'));
    $client->setRedirectUri('https://app.decodemybrain.com/google');
    $client->addScope('https://mail.google.com/');
    $client->setAccessType('offline');
    $client->setPrompt('consent');

    if (!request()->has('code')) {
        $authUrl = $client->createAuthUrl();
        return redirect($authUrl);
    } else {
        $token = $client->fetchAccessTokenWithAuthCode(request('code'));

        if (isset($token['refresh_token'])) {
            return "Your refresh token is:<br><br><strong>" . $token['refresh_token'] . "</strong>";
        } else {
            return "No refresh token returned. Try again with prompt=consent.";
        }
    }
});

Route::get('/test-mail', function () {
    $toEmail = 'kogeg81346@gopicta.com'; // recipient

    Mail::raw('Test email via Laravel SMTP', function (Message $message) use ($toEmail) {
        $message->to($toEmail)
                ->subject('Laravel SMTP Test');
    });

    return 'Email sent using default Laravel SMTP!';
});
