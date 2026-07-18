<?php
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Controllers\VoucherAdminController;
use Modules\Admin\Http\Middleware\AdminAuthenticated;
use Illuminate\Http\Request;
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
$router->aliasMiddleware('authAdmin', AdminAuthenticated::class);
Route::prefix('admin')->group(function() {
    Route::get( '/logout', [AdminController::class, 'logout']);
    Route::match(['get', 'post'],'/', [AdminController::class, 'login']);
    Route::match(['get', 'post'],'/admins', [AdminController::class, 'admins'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/dashboard', [AdminController::class, 'dashboard'])->middleware('authAdmin');
    Route::get('/users', [AdminController::class, 'users'])->middleware('authAdmin');
    Route::get('/payments', [AdminController::class, 'payments'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/add-admin', [AdminController::class, 'add_admin'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/edit-admin/{user_id}', [AdminController::class, 'edit_admin'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/deactivate-admin/{user_id}', [AdminController::class, 'deactivate_admin'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/activate-admin/{user_id}', [AdminController::class, 'activate_admin'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/events', [AdminController::class, 'events'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/add-event', [AdminController::class, 'add_event'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/edit-event/{id}', [AdminController::class, 'edit_event'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/deactivate-event/{id}', [AdminController::class, 'deactivate_event'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/activate-event/{id}', [AdminController::class, 'activate_event'])->middleware('authAdmin');

    Route::match(['get', 'post'],'/access-codes', [AdminController::class, 'access_codes'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/create-access-codes', [AdminController::class, 'create_access_codes'])->middleware('authAdmin');

    // Isolated v2 billing administration. Legacy access codes stay intact.
    Route::get('/vouchers', [VoucherAdminController::class, 'vouchers'])->middleware('authAdmin');
    Route::get('/vouchers/create', [VoucherAdminController::class, 'createVoucher'])->middleware('authAdmin');
    Route::post('/vouchers', [VoucherAdminController::class, 'storeVoucher'])->middleware('authAdmin');
    Route::post('/vouchers/{id}/disable', [VoucherAdminController::class, 'disableVoucher'])->middleware('authAdmin');
    Route::post('/vouchers/{id}/retry-sync', [VoucherAdminController::class, 'retryVoucherSync'])->middleware('authAdmin');
    Route::post('/vouchers/{id}/reveal-code', [VoucherAdminController::class, 'revealVoucherCode'])->middleware('authAdmin');
    Route::get('/enterprise-codes', [VoucherAdminController::class, 'enterpriseCodes'])->middleware('authAdmin');
    Route::get('/enterprise-codes/export', [VoucherAdminController::class, 'exportEnterpriseCodeUsage'])->middleware('authAdmin');
    Route::get('/organization-quotes', [VoucherAdminController::class, 'quotes'])->middleware('authAdmin');
    Route::get('/organization-enquiries', [VoucherAdminController::class, 'enquiries'])->middleware('authAdmin');
    Route::post('/organization-enquiries/{id}', [VoucherAdminController::class, 'updateEnquiry'])->middleware('authAdmin');
    Route::get('/organization-enquiries/{id}/create-deal', [VoucherAdminController::class, 'createQuoteFromEnquiry'])->middleware('authAdmin');
    // Keep older bookmarks safe, but new corporate agreements must begin with an enquiry.
    Route::get('/organization-quotes/create', [VoucherAdminController::class, 'createQuote'])->middleware('authAdmin');
    Route::post('/organization-quotes', [VoucherAdminController::class, 'storeQuote'])->middleware('authAdmin');
    Route::get('/organization-quotes/{id}', [VoucherAdminController::class, 'showQuote'])->middleware('authAdmin');
    Route::post('/organization-quotes/{id}/mark-paid', [VoucherAdminController::class, 'markQuotePaid'])->middleware('authAdmin');
    Route::post('/organization-quotes/{id}/shared-code', [VoucherAdminController::class, 'createSharedCode'])->middleware('authAdmin');
    Route::post('/organization-quotes/{id}/shared-code/rotate', [VoucherAdminController::class, 'rotateSharedCode'])->middleware('authAdmin');
    Route::post('/organization-quotes/{id}/shared-code/send-email', [VoucherAdminController::class, 'sendSharedCodeEmail'])->middleware('authAdmin');
    Route::post('/organization-quotes/{id}/shared-code/reveal', [VoucherAdminController::class, 'revealSharedCode'])->middleware('authAdmin');
    Route::post('/organization-quotes/{id}/shared-code/status', [VoucherAdminController::class, 'setSharedCodeEnabled'])->middleware('authAdmin');
    Route::post('/organization-quotes/{id}/shared-code/disable', [VoucherAdminController::class, 'disableSharedCode'])->middleware('authAdmin');
    Route::post('/organization-quotes/{id}/invite-seats', [VoucherAdminController::class, 'inviteSeats'])->middleware('authAdmin');
    Route::post('/organization-quotes/{quoteId}/seats/{seatId}/resend', [VoucherAdminController::class, 'resendSeat'])->middleware('authAdmin');
    Route::post('/organization-quotes/{quoteId}/seats/{seatId}/revoke', [VoucherAdminController::class, 'revokeSeat'])->middleware('authAdmin');

    Route::match(['get', 'post'],'/ads', [AdminController::class, 'ads'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/add-ad', [AdminController::class, 'add_ad'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/edit-ad/{id}', [AdminController::class, 'edit_ad'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/deactivate-ad/{id}', [AdminController::class, 'deactivate_ad'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/activate-ad/{id}', [AdminController::class, 'activate_ad'])->middleware('authAdmin');

    Route::match(['get', 'post'],'/brain-profiles', [AdminController::class, 'brain_profiles'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/edit-brain-profile/{id}', [AdminController::class, 'edit_brain_profile'])->middleware('authAdmin');

    Route::match(['get', 'post'],'/brain-code-results', [AdminController::class, 'brain_code_results'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/edit-brain-code-results/{id}', [AdminController::class, 'edit_brain_code_results'])->middleware('authAdmin');

    Route::match(['get', 'post'],'/dimension-questions', [AdminController::class, 'dimension_questions'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/edit-dimension-question/{id}', [AdminController::class, 'edit_dimension_question'])->middleware('authAdmin');

    Route::match(['get', 'post'],'/normal-questions', [AdminController::class, 'normal_questions'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/edit-normal-question/{id}', [AdminController::class, 'edit_normal_question'])->middleware('authAdmin');

    Route::match(['get', 'post'],'/star-ratings', [AdminController::class, 'star_ratings'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/add-star-rating', [AdminController::class, 'add_star_rating'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/edit-star-rating/{id}', [AdminController::class, 'edit_star_rating'])->middleware('authAdmin');

    Route::match(['get', 'post'],'/video-tips', [AdminController::class, 'video_tips'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/add-video-tip', [AdminController::class, 'add_video_tip'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/edit-video-tip/{id}', [AdminController::class, 'edit_video_tip'])->middleware('authAdmin');

    // User Management System
    Route::match(['get', 'post'],'/user-plan', [AdminController::class, 'user_plan'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/user-transaction', [AdminController::class, 'user_transaction'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/user-brain-profiles', [AdminController::class, 'user_brain_profiles'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/user-results', [AdminController::class, 'user_results'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/user-status', [AdminController::class, 'user_status'])->middleware('authAdmin');

    // Pricing Packages (admin-managed pricing catalog)
    Route::match(['get', 'post'],'/pricing-packages', [AdminController::class, 'pricing_packages'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/edit-pricing-package/{id}', [AdminController::class, 'edit_pricing_package'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/toggle-pricing-package/{id}', [AdminController::class, 'toggle_pricing_package'])->middleware('authAdmin');
});
