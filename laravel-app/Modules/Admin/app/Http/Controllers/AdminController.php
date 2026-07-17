<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\User;
use App\Models\AdminDetails;
use App\Models\CustomerDetails;
use App\Models\Orders;
use App\Models\Events;
use App\Models\AccessCodes;
use App\Models\Ads;
use App\Models\ProfileTypes;
use App\Models\BrainCodeResults;
use App\Models\DimensionQuestions;
use App\Models\Questions;
use App\Models\StarRatings;
use App\Models\VideoTips;
use App\Models\PricingPackage;
use App\Services\Admin\AdminInsightsService;
use App\Services\Billing\StripePriceManager;


use File;
use Mail;
use Image;
use PDF;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login(Request $request)
    {
        if($request->isMethod('get')){
            return view('admin::login');
         }
         if($request->isMethod('post')){
            $this->validate($request, [
                'email'   => 'required',
                'password'  => 'required'
               ]);

               $user_data = array(
                'email'  => $request->get('email'),
                'status'  => "active",
                'user_role'  => 1,
                'password' => $request->get('password')
               );

               if(Auth::attempt($user_data))
               {
                return redirect('admin/dashboard');
               }
               else
               {
                return back()->with('fail', 'Wrong Login Details');
               }
         }
    }
    public function dashboard(Request $request, AdminInsightsService $insights)
    {
        $range = (string) $request->query('range', '30d');
        [$start, $end] = $insights->range($range);
        $payments = $insights->payments($start, $end);
        $registered = $insights->users()->count();
        $completed = DB::table('question_answers_main')->where('status', 'complete')->count();
        $inquiries = DB::table('organization_enquiries')
            ->whereIn('status', ['new', 'reviewed'])
            ->orderByDesc('created_at')->limit(3)->get();
        $stats = [
            'registered' => $registered,
            'completed' => $completed,
            'revenue_minor' => $payments->where('status', 'Paid')->sum('amount_minor'),
            'active_codes' => DB::table('organization_quotes')->where('status', 'paid')->where('shared_code_enabled', true)->count(),
        ];
        return view('admin::dashboard', compact('range', 'stats', 'inquiries', 'payments'));
    }

    public function users(Request $request, AdminInsightsService $insights)
    {
        $search = trim((string) $request->query('search', ''));
        $filter = (string) $request->query('filter', 'all');
        $filter = in_array($filter, ['all', 'completed', 'progress', 'corporate'], true) ? $filter : 'all';
        $rows = $insights->users($search, $filter);

        if ($request->boolean('export')) {
            return response()->streamDownload(function () use ($rows) {
                $out = fopen('php://output', 'w');
                fputcsv($out, ['User', 'Email', 'Joined via', 'Assessment', 'Registered', 'Status']);
                foreach ($rows as $row) {
                    fputcsv($out, [$row->display_name, $row->email, $row->joined_via, $row->progress.'%', $row->registered_at, $row->assessment_status]);
                }
                fclose($out);
            }, 'decodemybrain-users.csv', ['Content-Type' => 'text/csv']);
        }

        return view('admin::users', compact('rows', 'search', 'filter'));
    }

    public function payments(Request $request, AdminInsightsService $insights)
    {
        $range = (string) $request->query('range', '30d');
        [$start, $end] = $insights->range($range);
        $rows = $insights->payments($start, $end);
        $summary = [
            'collected_minor' => $rows->where('status', 'Paid')->sum('amount_minor'),
            'collected_count' => $rows->where('status', 'Paid')->count(),
            'refunded_minor' => $rows->where('status', 'Refunded')->sum('amount_minor'),
            'refunded_count' => $rows->where('status', 'Refunded')->count(),
            'failed_count' => $rows->where('status', 'Failed')->count(),
        ];

        if ($request->boolean('export')) {
            return response()->streamDownload(function () use ($rows) {
                $out = fopen('php://output', 'w');
                fputcsv($out, ['Transaction', 'Customer', 'Email', 'Plan', 'Coupon', 'Amount', 'Currency', 'Status', 'Date']);
                foreach ($rows as $row) {
                    fputcsv($out, [$row->transaction_id, $row->display_name, $row->email, $row->package, $row->coupon, number_format($row->amount_minor / 100, 2, '.', ''), strtoupper($row->currency), $row->status, $row->created_at]);
                }
                fclose($out);
            }, 'decodemybrain-payments.csv', ['Content-Type' => 'text/csv']);
        }

        return view('admin::payments', compact('range', 'rows', 'summary'));
    }
    public function add_admin(Request $request)
    { if($request->isMethod('get')){
        return view('admin::add_admin');
    }
    if($request->isMethod('post')){
    $this->validate($request, [
            'name'   => 'required',
            'phone'   => 'required',
            'email'   => 'required | email | unique:users',
            "password" => "required | confirmed | min:6",
           ]);

           DB::beginTransaction();
           $user = User::create([
              "email" => $request->email,
              "password" => Hash::make($request->password),
              "user_role" => 1,
              "status" => "active"
           ]);

           $userDetails = new AdminDetails();
           $userDetails->user_id =$user->id;
           $userDetails->name = $request->name;
           $userDetails->phone = $request->phone;
           $userDetails->save();
           DB::commit();
            return back()->with('success', 'Admin Successfully Added');

    }

    }
    public function admins()
    {
        $admins = User::where('user_role','1')->get();
        return view('admin::admins',['admins' => $admins]);
    }
    public function deactivate_admin($id){
        $user = User::find($id);
        $user->status = "inactive";
        $user->update();
        return back()->with('success', 'Admin Deactivated');

    }
    public function activate_admin($id){
        $user = User::find($id);
        $user->status = "active";
        $user->update();
        return back()->with('success', 'Admin Activated');

    }

    public function edit_admin($id,Request $request)
    {
    if($request->isMethod('get')){
    $login_details = User::where('id',$id)->get();
    $other_details = AdminDetails::where('user_id',$id)->get();
    return view('admin::edit_admin', ['login_details' => $login_details,'other_details' => $other_details]);
    }
    if($request->isMethod('post')){
    $this->validate($request, [
            'name'   => 'required',
            'email'   => 'required',
            'phone'  => 'required',
    ]);

    if(!$request->current_password == null || !$request->password == null || !$request->password_confirmation == null){
        $this->validate($request, [
            "password" => "required | confirmed | min:6",
            "current_password" => "required",
           ]);
           if (Hash::check($request->input('current_password'), User::where('id', $id)->value('password'))) {
            if(User::where("id", "=", $id)->where("email", "=", $request->email)->exists()){
                $email = $request->email;
            }
            elseif(User::where("email", "=", $request->email)->exists()){
             return back()->with('fail', 'This email is already in use');
            }
            else{
             $email = $request->email;
            }

            $userDetails =  AdminDetails::where('user_id', '=', $id)->first();;
            $userDetails->name = $request->name;
            $userDetails->phone = $request->phone;
            $userDetails->update();
            $user = User::find($id);
            $user->email = $email;
            $user->password = Hash::make($request->input('password'));
            $user->update();
            return back()->with('success', 'Admin Details Successfully  Updated');
           }
           else{
            return back()->with('fail', 'Current password is incorrect.');
        }
    }
    else{
        if(User::where("id", "=", $id)->where("email", "=", $request->email)->exists()){
            $email = $request->email;
        }
        elseif(User::where("email", "=", $request->email)->exists()){
         return back()->with('fail', 'This email is already in use');
        }
        else{
         $email = $request->email;
        }

        $userDetails =  AdminDetails::where('user_id', '=', $id)->first();;
        $userDetails->name = $request->name;
        $userDetails->phone = $request->phone;
        $userDetails->update();
        $user = User::find($id);
        $user->email = $email;
        $user->update();
        return back()->with('success', 'Admin Details Successfully  Updated');
    }


    }

    }

    public function events()
    {
        $events = Events::get();
        return view('admin::events',['events' => $events]);
    }

    /*
    |--------------------------------------------------------------------------
    | User Management System (overview tables backed by wp_users + related data)
    |--------------------------------------------------------------------------
    */
    public function user_plan()
    {
        $plans = app(\App\Services\Billing\PackageCatalog::class)->plans();
        $latestGrant = DB::table('entitlement_grants')->where('status', 'active')
            ->selectRaw('wp_user_id, MAX(id) as id')->groupBy('wp_user_id');
        $latestVoucher = DB::table('voucher_redemptions')
            ->selectRaw('wp_user_id, MAX(id) as id')->groupBy('wp_user_id');

        $rows = DB::table('wp_users')
            ->leftJoin('users', 'users.wp_user_id', '=', 'wp_users.user_id')
            ->leftJoin('subscriptions', 'subscriptions.user_id', '=', 'users.id')
            ->leftJoinSub($latestGrant, 'latest_grant', 'latest_grant.wp_user_id', '=', 'wp_users.user_id')
            ->leftJoin('entitlement_grants as grants', 'grants.id', '=', 'latest_grant.id')
            ->leftJoinSub($latestVoucher, 'latest_voucher', 'latest_voucher.wp_user_id', '=', 'wp_users.user_id')
            ->leftJoin('voucher_redemptions as redemptions', 'redemptions.id', '=', 'latest_voucher.id')
            ->orderByDesc('wp_users.id')
            ->get([
                DB::raw('COALESCE(NULLIF(wp_users.display_name, ""), users.display_name) as display_name'),
                DB::raw('COALESCE(NULLIF(wp_users.email, ""), users.email) as email'),
                'wp_users.package',
                'users.activated_date',
                'subscriptions.ends_at',
                DB::raw('COALESCE(users.created_at, wp_users.created_at) as registered_at'),
                DB::raw("CASE WHEN grants.source_type = 'organization_seat' THEN 'Organisation code' WHEN grants.source_type = 'voucher' THEN 'Permanent voucher' WHEN redemptions.id IS NOT NULL THEN 'Voucher checkout' WHEN subscriptions.id IS NOT NULL THEN 'Stripe payment' ELSE 'Registered' END as access_source"),
            ]);

        return view('admin::user_plan', ['rows' => $rows, 'plans' => $plans]);
    }
    public function user_transaction()
    {
        $rows = DB::table('subscriptions')
            ->join('users', 'users.id', '=', 'subscriptions.user_id')
            ->leftJoin('wp_users', 'wp_users.user_id', '=', 'users.wp_user_id')
            ->orderByDesc('subscriptions.created_at')
            ->get([
                'wp_users.display_name',
                'users.email',
                'subscriptions.stripe_status',
                'subscriptions.created_at',
            ]);

        return view('admin::user_transaction', ['rows' => $rows]);
    }
    public function user_brain_profiles()
    {
        $completed = DB::table('question_answers_main')
            ->where('status', 'complete')
            ->select('user_id', DB::raw('MAX(created_at) as completed_on'))
            ->groupBy('user_id');

        $rows = DB::table('wp_users')
            ->join('profile_types', 'profile_types.id', '=', 'wp_users.brain_profile_id')
            ->leftJoinSub($completed, 'qam', 'qam.user_id', '=', 'wp_users.user_id')
            ->whereNotNull('wp_users.brain_profile_id')
            ->orderByDesc('wp_users.id')
            ->get([
                'wp_users.display_name',
                'wp_users.email',
                'profile_types.name',
                'profile_types.code',
                'qam.completed_on',
            ]);

        return view('admin::user_brain_profiles', ['rows' => $rows]);
    }
    public function user_results()
    {
        $rows = DB::table('brain_scores')
            ->join('question_answers_main', 'question_answers_main.id', '=', 'brain_scores.answer_main_id')
            ->join('wp_users', 'wp_users.user_id', '=', 'question_answers_main.user_id')
            ->where('question_answers_main.status', 'complete')
            ->orderByDesc('brain_scores.created_at')
            ->get([
                'wp_users.display_name',
                'wp_users.email',
                'brain_scores.result_code',
                'brain_scores.brain_type',
                'brain_scores.brain_type_description',
                'question_answers_main.created_at',
            ]);

        return view('admin::user_results', ['rows' => $rows]);
    }
    public function user_status()
    {
        $rows = DB::table('wp_users')
            ->leftJoin('users', 'users.wp_user_id', '=', 'wp_users.user_id')
            ->orderByDesc('wp_users.id')
            ->get([
                DB::raw('COALESCE(NULLIF(wp_users.display_name, ""), users.display_name) as display_name'),
                DB::raw('COALESCE(NULLIF(wp_users.email, ""), users.email) as email'),
                'wp_users.brain_profile_id',
                'users.status',
                'users.activated_date',
                DB::raw('COALESCE(users.created_at, wp_users.created_at) as registered_at'),
            ]);

        return view('admin::user_status', ['rows' => $rows]);
    }

    /*
    |--------------------------------------------------------------------------
    | Pricing Packages (admin-managed pricing catalog)
    |--------------------------------------------------------------------------
    | Backs the public /pricing cards AND the billing catalog (PackageCatalog).
    | Slugs are FIXED (entitlement key) and are never editable from here.
    */
    public function pricing_packages()
    {
        $packages = PricingPackage::orderBy('sort_order')->get();
        return view('admin::pricing_packages', ['packages' => $packages]);
    }

    public function edit_pricing_package($id, Request $request)
    {
        $package = PricingPackage::where('id', $id)->first();
        if ($package === null) {
            return redirect('admin/pricing-packages')->with('fail', 'Pricing package not found.');
        }

        if ($request->isMethod('get')) {
            return view('admin::edit_pricing_package', ['package' => $package]);
        }

        $this->validate($request, [
            'title'            => 'required',
            'amount'           => 'required|numeric|min:0',
            'currency'         => 'required|string',
            'button_text'      => 'required',
            'cta_mode'         => 'nullable|in:purchase,enquiry',
            'price_suffix'     => 'nullable|string|max:50',
            'price_label'      => 'nullable|string|max:50',
            'type'             => 'required|in:subscription,one_time',
            'billing_interval' => 'required_if:type,subscription|in:month,year',
            'sort_order'       => 'required|integer|min:0',
        ]);

        $newAmount   = round((float) $request->amount, 2);
        $newCurrency = strtolower(trim($request->currency));
        $newType     = $request->type;
        $newInterval = $newType === 'subscription' ? $request->billing_interval : null;
        $billingChanged = (float) $package->amount !== $newAmount
            || strtolower((string) $package->currency) !== $newCurrency
            || (string) $package->type !== $newType
            || (string) $package->billing_interval !== (string) $newInterval;

        $stripeResult = null;
        $stripeUnavailable = empty(config('cashier.secret'));
        $stripeSyncError = null;

        // Admin catalogue changes must remain usable locally before Stripe is
        // configured. When the real amount changes without Stripe credentials,
        // clear the old Stripe price so checkout cannot charge a stale amount.
        $ctaMode = (string) $request->input('cta_mode', $package->cta_mode ?: 'purchase');
        $isEnquiryOnly = $ctaMode === 'enquiry';
        if (!$stripeUnavailable && !$isEnquiryOnly) {
            try {
                $stripeResult = app(StripePriceManager::class)->ensurePrice(
                    $package,
                    (string) $request->title,
                    $newAmount,
                    $newCurrency,
                    $newType,
                    $newInterval
                );
            } catch (\Throwable $e) {
                // The public catalogue is local data. A temporary Stripe or
                // network failure must not prevent Admin from publishing the
                // correct price to customer-facing pages.
                $stripeSyncError = $e;
                \Log::warning('Pricing package saved without Stripe sync', [
                    'package_id' => $package->id,
                    'package_slug' => $package->slug,
                    'error' => $e->getMessage(),
                ]);
            }
        }


        $package->title             = $request->title;
        $package->subtitle          = $request->subtitle;
        $package->old_price_label   = $request->old_price_label;
        $package->amount            = $newAmount;
        $package->currency          = $newCurrency;
        $package->type              = $newType;
        $package->billing_interval  = $newInterval;
        $package->price_label       = trim((string) $request->price_label) ?: $package->formattedPrice();
        $package->features          = $request->features;
        $package->button_text       = $request->button_text;
        $package->cta_mode          = $ctaMode;
        $package->price_suffix      = $request->price_suffix;
        if ($isEnquiryOnly) {
            $package->stripe_price_id = null;
        } elseif ($stripeResult !== null) {
            $package->stripe_price_id = $stripeResult->priceId;
            $package->stripe_product_id = $stripeResult->productId;
        } elseif ($billingChanged) {
            $package->stripe_price_id = null;
        }
        $package->is_visible        = $request->has('is_visible') ? 1 : 0;
        $package->sort_order        = (int) $request->sort_order;
        $package->save();

        if ($stripeUnavailable) {
            $msg = 'Pricing package updated locally. Stripe is not configured, so online checkout is disabled until Stripe keys are added and this package is saved again.';
        } elseif ($stripeSyncError !== null) {
            $msg = 'Pricing package updated and is live on customer pages. Stripe could not be reached, so online checkout for this package is paused until Stripe sync succeeds.';
        } elseif ($stripeResult->replacedInvalid) {
            $msg = 'Pricing updated. The stale Stripe price was replaced and customers will now be charged ' . $package->formattedPrice() . '.';
        } elseif ($stripeResult->created) {
            $msg = 'Pricing updated. Customers will now be charged ' . $package->formattedPrice() . '.';
        } else {
            $msg = 'Pricing package updated.';
        }

        return redirect('admin/pricing-packages')->with('success', $msg);
    }

    public function toggle_pricing_package($id)
    {
        $package = PricingPackage::find($id);
        if ($package === null) {
            return back()->with('fail', 'Pricing package not found.');
        }
        $package->is_visible = $package->is_visible ? 0 : 1;
        $package->update();

        return back()->with('success', $package->is_visible ? 'Package is now visible.' : 'Package is now hidden.');
    }

    public function add_event(Request $request)
    { if($request->isMethod('get')){
        return view('admin::add_event');
    }
    if($request->isMethod('post')){
    $this->validate($request, [
            'name'   => 'required',
            'date'   => 'required',
            'start_time'   => 'required',
            "end_time" => "required",
           ]);

           if($request->featured_image == null){
            $imag_name =  null;
            }
            else{
            $imag_name = time().'-featured-.'.$request->featured_image->extension();
            $request->featured_image->move(public_path('db_files/events/featured'), $imag_name);
            }

           $event = new Events();
           $event->name =$request->name;
           $event->date = $request->date;
           $event->start_time = $request->start_time;
           $event->end_time = $request->end_time;
           $event->event_type = $request->event_type;
           $event->featured_image = $imag_name;
           $event->description = $request->description;
           $event->status = "active";
           $event->save();

        return back()->with('success', 'Event Created');

    }

    }
    public function deactivate_event($id){
        $event = Events::find($id);
        $event->status = "inactive";
        $event->update();
        return back()->with('success', 'Event Deactivated');

    }
    public function activate_event($id){
        $event = Events::find($id);
        $event->status = "active";
        $event->update();
        return back()->with('success', 'Event Activated');

    }
    public function edit_event($id,Request $request)
    { if($request->isMethod('get')){
        $event_details = Events::where('id',$id)->first();
        return view('admin::edit_event', ['event_details' => $event_details]);
    }
    if($request->isMethod('post')){
    $this->validate($request, [
            'name'   => 'required',
            'date'   => 'required',
            'start_time'   => 'required',
            "end_time" => "required",
           ]);

           if($request->featured_image == null){
            $imag_name =  Events::where('id',$id)->value('featured_image');
            }
            else{
            $imag_name = time().'-featured-.'.$request->featured_image->extension();
            $request->featured_image->move(public_path('db_files/events/featured'), $imag_name);
            }

           $event = Events::where('id',$id)->first();
           $event->name =$request->name;
           $event->date = $request->date;
           $event->start_time = $request->start_time;
           $event->end_time = $request->end_time;
           $event->event_type = $request->event_type;
           $event->featured_image = $imag_name;
           $event->description = $request->description;
           $event->update();

        return back()->with('success', 'Event Updated');

    }

    }
    public function access_codes()
    {
        $codes = AccessCodes::where('status', 'active')->get();
        return view('admin::access_codes',['codes' => $codes]);
    }
    public function create_access_codes(Request $request)
    { if($request->isMethod('get')){
        return view('admin::create_access_codes');
    }
    if($request->isMethod('post')){
    $this->validate($request, [
            'package'   => 'required',
            'codes_count'   => 'required',
           ]);

        $codesCount = $request->codes_count;

        for ($i = 0; $i < $codesCount; $i++) {
            $code = $this->generateUniqueCode();

            $new_code = new AccessCodes();
            $new_code->package =$request->package;
            $new_code->code = $code;
            $new_code->status = "active";
            $new_code->save();
        }

        return redirect('admin/access-codes')->with('success', 'Access Codes Created');

    }

    }
    
    private function generateUniqueCode()
    {
    do {
        $code = strtoupper(Str::random(6));
    } while (AccessCodes::where('code', $code)->exists());

    return $code;
    }

    public function ads()
    {
        $ads = Ads::get();
        return view('admin::ads',['ads' => $ads]);
    }
    public function add_ad(Request $request)
    { if($request->isMethod('get')){
        return view('admin::add_ad');
    }
    if($request->isMethod('post')){
    $this->validate($request, [
            'title'   => 'required',
            'link'   => 'required',
            'featured_image'   => 'required',
           ]);

        $imag_name = time().'-featured-.'.$request->featured_image->extension();
        $request->featured_image->move(public_path('db_files/ads/featured'), $imag_name);


           $ad = new Ads();
           $ad->title =$request->title;
           $ad->link = $request->link;
           $ad->featured_image = $imag_name;
           $ad->status = "active";
           $ad->save();

        return back()->with('success', 'Ad Created');

    }

    }

    public function deactivate_ad($id){
        $ad = Ads::find($id);
        $ad->status = "inactive";
        $ad->update();
        return back()->with('success', 'Ad Deactivated');

    }
    public function activate_ad($id){
        $ad = Ads::find($id);
        $ad->status = "active";
        $ad->update();
        return back()->with('success', 'Ad Activated');

    }
    public function edit_ad($id,Request $request)
    { if($request->isMethod('get')){
        $ad_details = Ads::where('id',$id)->first();
        return view('admin::edit_ad', ['ad_details' => $ad_details]);
    }
    if($request->isMethod('post')){
        $this->validate($request, [
            'title'   => 'required',
            'link'   => 'required',
           ]);

           if($request->featured_image == null){
            $imag_name =  Ads::where('id',$id)->value('featured_image');
            }
            else{
            $imag_name = time().'-featured-.'.$request->featured_image->extension();
            $request->featured_image->move(public_path('db_files/ads/featured'), $imag_name);
            }

           $ad = Ads::where('id',$id)->first();
           $ad->title =$request->title;
           $ad->link = $request->link;
           $ad->featured_image = $imag_name;
           $ad->update();

        return back()->with('success', 'Ad Updated');

    }

    }
    public function brain_profiles()
    {
        $profiles = ProfileTypes::get();
        return view('admin::brain_profiles',['profiles' => $profiles]);
    }
    public function edit_brain_profile($id,Request $request)
    { 
    if($request->isMethod('get')){
        $brain_details = ProfileTypes::where('id',$id)->first();
        return view('admin::edit_brain_profile', ['brain_details' => $brain_details]);
    }
    if($request->isMethod('post')){

        $this->validate($request, [
            'code'   => 'required',
            'name'   => 'required',
        ]);
        
        $brain = ProfileTypes::where('id',$id)->first();
        $brain->code =$request->code;
        $brain->name = $request->name;
        $brain->update();

        return back()->with('success', 'Brain Profile Updated');

    }

    }
    public function brain_code_results()
    {
        $results = BrainCodeResults::get();
        return view('admin::brain_code_results',['results' => $results]);
    }
    public function edit_brain_code_results($id,Request $request)
    { 
    if($request->isMethod('get')){
        $result_details = BrainCodeResults::where('id',$id)->first();
        return view('admin::edit_brain_code_results', ['result_details' => $result_details]);
    }
    if($request->isMethod('post')){

        $this->validate($request, [
            'description'   => 'required',
        ]);
        
        $result = BrainCodeResults::where('id',$id)->first();
        $result->description =$request->description;
        $result->update();

        return back()->with('success', 'Brain Result Updated');

    }

    }
    public function dimension_questions()
    {
        $questions = DimensionQuestions::get();
        return view('admin::dimension_questions',['questions' => $questions]);
    }
    public function edit_dimension_question($id,Request $request)
    { 
    if($request->isMethod('get')){
        $question_details = DimensionQuestions::where('id',$id)->first();
        return view('admin::edit_dimension_question', ['question_details' => $question_details]);
    }
    if($request->isMethod('post')){

        $this->validate($request, [
            'question'   => 'required',
            'l1_analyst_answer'   => 'required',
            'l1_realist_answer'   => 'required',
            'l2_stalwart_answer'   => 'required',
            'l2_organizer_answer'   => 'required',
            'r1_strategist_answer'   => 'required',
            'r1_imagineer_answer'   => 'required',
            'r2_empathizer_answer'   => 'required',
            'r2_empathizer_answer'   => 'required'
        ]);
        
        $q = DimensionQuestions::where('id',$id)->first();
        $q->question =$request->question;
        $q->l1_analyst_answer =$request->l1_analyst_answer;
        $q->l1_realist_answer =$request->l1_realist_answer;
        $q->l2_stalwart_answer =$request->l2_stalwart_answer;
        $q->l2_organizer_answer =$request->l2_organizer_answer;
        $q->r1_strategist_answer =$request->r1_strategist_answer;
        $q->r1_imagineer_answer =$request->r1_imagineer_answer;
        $q->r2_empathizer_answer =$request->r2_empathizer_answer;
        $q->r2_empathizer_answer =$request->r2_empathizer_answer;
        $q->update();

        return back()->with('success', 'Dimension Question Updated');

    }

    }
    public function normal_questions()
    {
        $questions = Questions::get();
        return view('admin::normal_questions',['questions' => $questions]);
    }

    public function edit_normal_question($id,Request $request)
    { 
    if($request->isMethod('get')){
        $question_details = Questions::where('id',$id)->first();
        return view('admin::edit_normal_question', ['question_details' => $question_details]);
    }
    if($request->isMethod('post')){

        $this->validate($request, [
            'question'   => 'required',
            'l1_answer'   => 'required',
            'l2_answer'   => 'required',
            'r1_answer'   => 'required',
            'r2_answer'   => 'required',
        ]);
        
        $q = Questions::where('id',$id)->first();
        $q->question =$request->question;
        $q->answer_1 =$request->l1_answer;
        $q->answer_2 =$request->l2_answer;
        $q->answer_3 =$request->r1_answer;
        $q->answer_4 =$request->r2_answer;
        $q->update();

        return back()->with('success', 'Normal Question Updated');

    }

    }
    public function star_ratings()
    {
        $ratings = StarRatings::get();
        return view('admin::star_ratings',['ratings' => $ratings]);
    }
    public function add_star_rating(Request $request)
    { if($request->isMethod('get')){
        $profiles = ProfileTypes::get();
        return view('admin::add_star_rating',['profiles' => $profiles]);
    }
    if($request->isMethod('post')){
    $this->validate($request, [
            'brain_profile'   => 'required',
            'category'   => 'required',
            'title'   => 'required',
            'rating'   => 'required',
            'short_description' => 'required',
           ]);


           $star = new StarRatings();
           $star->brain_profile_id =$request->brain_profile;
           $star->category = $request->category;
           $star->title = $request->title;
           $star->rating = $request->rating;
           $star->description = $request->description;
            $star->short_description = $request->short_description; 
           $star->save();

        return back()->with('success', 'Star Rating Created');

    }

    }
    public function edit_star_rating($id,Request $request)
    { 
    if($request->isMethod('get')){
        $rating_details = StarRatings::where('id',$id)->first();
        $profiles = ProfileTypes::get();
        return view('admin::edit_star_rating', ['rating_details' => $rating_details,'profiles' => $profiles]);
    }
    if($request->isMethod('post')){

        $this->validate($request, [
            'brain_profile'   => 'required',
            'category'   => 'required',
            'title'   => 'required',
            'rating'   => 'required',
            'short_description' => 'required',
           ]);
        
        $star = StarRatings::where('id',$id)->first();
        $star->brain_profile_id =$request->brain_profile;
        $star->category = $request->category;
        $star->title = $request->title;
        $star->rating = $request->rating;
        $star->description = $request->description;
        $star->short_description = $request->short_description;
        $star->update();

        return back()->with('success', 'Star Rating Updated');

    }

    }
    public function video_tips()
    {
        $tips = VideoTips::get();
        return view('admin::video_tips',['tips' => $tips]);
    }
    public function add_video_tip(Request $request)
    { if($request->isMethod('get')){
        $profiles = ProfileTypes::get();
        return view('admin::add_video_tip',['profiles' => $profiles]);
    }
    if($request->isMethod('post')){
    $this->validate($request, [
            'brain_profile'   => 'required',
            'category'   => 'required',
            'title'   => 'required',
            'video'   => 'required',
            'featured_image'   => 'required',
           ]);

           $imag_name = time().'-featured-.'.$request->featured_image->extension();
           $request->featured_image->move(public_path('db_files/tips/featured'), $imag_name);

           $tip = new VideoTips();
           $tip->brain_profile_id =$request->brain_profile;
           $tip->category = $request->category;
           $tip->title = $request->title;
           $tip->video = $request->video;
           $tip->featured_image = $imag_name;
           $tip->description = $request->description;
           $tip->save();

        return back()->with('success', 'Star Rating Created');

    }

    }
    public function edit_video_tip($id,Request $request)
    { 
    if($request->isMethod('get')){
        $tip_details = VideoTips::where('id',$id)->first();
        $profiles = ProfileTypes::get();
        return view('admin::edit_video_tip', ['tip_details' => $tip_details,'profiles' => $profiles]);
    }
    if($request->isMethod('post')){

        $this->validate($request, [
            'brain_profile'   => 'required',
            'category'   => 'required',
            'title'   => 'required',
            'video'   => 'required'
           ]);
       
           if($request->featured_image == null){
            $imag_name =  VideoTips::where('id',$id)->value('featured_image');
            }
            else{
            $imag_name = time().'-featured-.'.$request->featured_image->extension();
            $request->featured_image->move(public_path('db_files/tips/featured'), $imag_name);
            }


        $tip = VideoTips::where('id',$id)->first();
        $tip->brain_profile_id =$request->brain_profile;
        $tip->category = $request->category;
        $tip->title = $request->title;
        $tip->video = $request->video;
        $tip->featured_image = $imag_name;
        $tip->description = $request->description;
        $tip->update();

        return back()->with('success', 'Star Rating Updated');

    }

    }
    function logout()
    {
     Auth::logout();
     return redirect('admin');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('admin::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
