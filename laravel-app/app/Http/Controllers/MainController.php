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
use Carbon\Carbon;
use setasign\Fpdi\Fpdi;
use setasign\Fpdf\Fpdf;
use App\Imports\CareersImport;
use Maatwebsite\Excel\Facades\Excel;
use File;
use Mail;
use PDF;
use Image;
use Redirect;
use Session;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\WPUsers;
use App\Models\Questions;
use App\Models\QuestionAnswerMain;
use App\Models\QuestionAnswers;
use App\Models\CustomerDetails;
use App\Models\BrainScores;
use App\Models\Events;
use App\Models\StarRatings;
use App\Models\VideoTips;
use App\Models\Careers;
use App\Models\CareerRatings;
use App\Http\Controllers\BrainResultsController;
use App\Services\AssessmentResumeService;

class MainController extends Controller
{
    public function index(){



        return view('home');
    }

    // Public landing page (replaces the WordPress front page). Visitors pick a
    // plan here; the funnel takes over from the "Book Today" buttons.
    public function landing(AssessmentResumeService $resume){
        $packages = \App\Models\PricingPackage::whereIn('slug', [
            'decodemybrain-deep-dive',
            'decodemybrain-guided-friend-and-family-connect',
        ])->get()->keyBy('slug');

        $userId = (int) session('user_id');
        $dateOfBirth = session('user_dob') ?: ($userId ? WPUsers::where('user_id', $userId)->value('date_of_birth') : null);

        return view('public.landing', [
            'packages' => $packages,
            'resumeRoute' => $userId ? $resume->resumeRoute($userId, $dateOfBirth) : null,
        ]);
    }
    public function packages(){

        return view('dashboard/packages');
    }
   public function dashboard(){
        // $events_data = Events::where('status', 'active')->get();
        // $brain_profile_id = WPUsers::where('user_id', session('user_id'))->value('brain_profile_id');
        // $management_tips = VideoTips::where('category', "management")->where('brain_profile_id', $brain_profile_id)->get();
        // $sport_tips = VideoTips::where('category', "sport")->where('brain_profile_id', $brain_profile_id)->get();
        // $creative_tips = VideoTips::where('category', "creative-thinking")->where('brain_profile_id', $brain_profile_id)->get();
        // $self_tips = VideoTips::where('category', "self-learning")->where('brain_profile_id', $brain_profile_id)->get();
        // $events = [];
        // foreach ($events_data as $event) {
        //     $start_date_time = $event->date . ' ' . $event->start_time;
        //     $end_date_time = $event->date . ' ' . $event->end_time;

        //     $final_start_date = Carbon::createFromFormat('Y-m-d H:i:s', $start_date_time);
        //     $final_end_date = Carbon::createFromFormat('Y-m-d H:i:s', $end_date_time);

        //     $events[] = [
        //         'title' => $event->name,
        //         'start' =>  $final_start_date,
        //         'end' => $final_end_date,
        //         'url' => url('events/'.$event->slug.'')
        //     ];
        // }
        return view('dashboard/dashboard');
    }
    public function tips(){
        
        $brain_profile_id = WPUsers::where('user_id', session('user_details')['id'])->value('brain_profile_id');
        $management_tips = VideoTips::where('category', "management")->where('brain_profile_id', $brain_profile_id)->get();
        $sport_tips = VideoTips::where('category', "sport")->where('brain_profile_id', $brain_profile_id)->get();
        $creative_tips = VideoTips::where('category', "creative-thinking")->where('brain_profile_id', $brain_profile_id)->get();
        $self_tips = VideoTips::where('category', "self-learning")->where('brain_profile_id', $brain_profile_id)->get();
        
        return view('dashboard/tips',['management_tips' => $management_tips,'sport_tips' => $sport_tips,
        'creative_tips' => $creative_tips,'self_tips' => $self_tips]);

    }

    public function consultationBooking(){

        return view('dashboard/consultation-booking');
    }

    public function multitasking(){
        return view('dashboard/multi-tasking');
        
    }

    public function multitaskinginner(){
        return view('dashboard/multi-task-inner');
        
    }
    
     public function events_new(){
          $events_data = Events::where('status', 'active')->get();
          $events = [];
        foreach ($events_data as $event) {
            $start_date_time = $event->date . ' ' . $event->start_time;
            $end_date_time = $event->date . ' ' . $event->end_time;

            $final_start_date = Carbon::createFromFormat('Y-m-d H:i:s', $start_date_time);
            $final_end_date = Carbon::createFromFormat('Y-m-d H:i:s', $end_date_time);

            $events[] = [
                'title' => $event->name,
                'start' =>  $final_start_date,
                'end' => $final_end_date,
                'url' => url('events/'.$event->slug.'')
            ];
        }
        return view('events_new', ['events' => $events] );
        
    }
    
    public function internships(){
         $brain_profile_id = WPUsers::where('user_id', session('user_details')['id'])->value('brain_profile_id');
        $star_ratings = StarRatings::where('brain_profile_id', $brain_profile_id)->where('category', 'internships')->get();
        return view('dashboard/internships',['star_ratings' => $star_ratings]);
    }
    public function scholarships(){
        $brain_profile_id = WPUsers::where('user_id', session('user_details')['id'])->value('brain_profile_id');
        $star_ratings = StarRatings::where('brain_profile_id', $brain_profile_id)->where('category', 'scholarships')->get();
        return view('dashboard/scholarships',['star_ratings' => $star_ratings]);
    }
    public function universityPrograms(){
        $brain_profile_id = WPUsers::where('user_id', session('user_details')['id'])->value('brain_profile_id');
        $star_ratings = StarRatings::where('brain_profile_id', $brain_profile_id)->where('category', 'university-programs')->get();
        return view('dashboard/university-programs',['star_ratings' => $star_ratings]);

    }
    public function testAttempt(){

        $attempts = QuestionAnswerMain::where("user_id", session('user_id'))->where('status', 'complete')->get();
        return view('dashboard/test-attempt',['attempts' => $attempts]);

    }
    
    public function testAttempt_2(){
    $dob = session('user_dob'); 
    $age = \Carbon\Carbon::parse($dob)->age;

    // if($age < 14) {
    //     return view('dashboard/test-attempt-1');
    // } 
    // elseif($age >= 14 && $age < 20) {
    //     return view('dashboard/test-attempt-2');
    // } 
    // else {  
    //     return view('dashboard/test-attempt-3');
    // }
     
    $attempts = QuestionAnswerMain::where("user_id", session('user_id'))->where('status', 'complete')->get();

    return view('dashboard/test-attempt-2',['attempts' => $attempts]);
    
    
    
}

    
    
    public function suparFutureClub(){

        return view('dashboard/supar-future-club');
    }

    public function events(){
        $events = Events::where('status', 'active')->get();
        // return view('dashboard/events-new',['events' => $events]);
        return view('events_new',['events' => $events]);
    }
    public function parentCommunity(Request $request){
        if ($request->isMethod('get')) {
         return view('dashboard/parent-community');
        }
        if ($request->isMethod('post')) {
         return back()->with('success', 'Your message has been sent');
        }
       
    }
    public function tipInner($id,Request $request){
        $tip_details = VideoTips::where('id', $id)->first();
        $other_tips = VideoTips::where('category', $tip_details->category)->get();
        return view('dashboard/tip-inner',['tip_details' => $tip_details,'other_tips' => $other_tips]);
    }
    public function uniInner($id,Request $request){
        $uni_details = StarRatings::where('id', $id)->first();
        return view('dashboard/university-inner',['uni_details' => $uni_details]);
    }
    public function internInner($id,Request $request){

        $internship_details = StarRatings::where('id', $id)->first();
        return view('dashboard/internship-inner',['internship_details' => $internship_details]);

    }
    public function scholarshipInner($id,Request $request){

        $scholar_details = StarRatings::where('id', $id)->first();
        return view('dashboard/scholarship-inner',['scholar_details' => $scholar_details]);
 
    }
    public function superFutureInner(){

        return view('dashboard/super-futer-inner');
    }
    public function consultStepTwo(){

        return view('dashboard/consultation-booking-step-2');
    }
    public function searchBuddy(){

        return view('dashboard/search-buddy');
    }
    public function jobs(){

        return view('dashboard/jobs');
    }
    public function jobsInner(){

        return view('dashboard/jobs-inner');
    }

    public function aboutus(){

        return view('aboutus');
    }

    public function blogs(){

        return view('blogs');
    }

    public function braintour(){

        return view('braintour');
    }

    public function bloginner(){

        return view('bloginner');
    }

    public function ourmarketplace(){

        return view('ourmarketplace');
    }

    public function marketplaceinner(){

        return view('marketplaceinner');
    }

    public function homeevents(){

        return view('homeevents');
    }

    public function homeeventsinner($slug){

        $event_details = Events::where('slug', $slug)->first();
        return view('homeeventsinner',['event_details' => $event_details]);

    }


    public function swetaadatia(){

        return view('swetaadatia');
    }

    public function hussain(){

        return view('hussain');
    }

    public function partneredconsultant(){

        return view('partneredconsultant');
    }


    
    public function download_brain_results(Request $request)
    {
        if(QuestionAnswerMain::where("user_id",session('user_id'))->where('status', 'complete')->exists()){
            $answer_main_id = QuestionAnswerMain::where("user_id",session('user_id'))->where('status', 'complete')->value('id');
            $brain_score = BrainScores::where("answer_main_id", $answer_main_id)->first();
            $contact_details = CustomerDetails::where("user_id", session('user_id'))->first();
            // session('user_id') holds the WordPress id, not users.id.
            $user_details = User::where("wp_user_id", session('user_id'))->first();
    
            $pdf = PDF::loadView('pdfs.brain_results',['brain_score' => $brain_score,'contact_details' => $contact_details,'user_details' => $user_details]);
            return $pdf->download('brain_results_'.session('user_id').'.pdf');
        }
        else{
            return redirect('questions/q1');
        }
       
    }
    public function stars_filter($type,Request $request){
         $brain_profile_id = WPUsers::where('user_id', session('user_details')['id'])->value('brain_profile_id');
       if($type == "internships"){
        if($request->stars == "all"){
            $star_ratings = StarRatings::where('brain_profile_id', $brain_profile_id)->where('category', 'internships')->get();
        }
        else{
            $star_ratings = StarRatings::where('brain_profile_id', $brain_profile_id)->where('category', 'internships')->where('rating', $request->stars)->get();
        }
        $data = '';
        if($star_ratings->isEmpty()){
            $data .= 'No data avilable';
            
        }
        else{
            foreach ($star_ratings as $star_rating) {
                $data .= '<div class="d-flex flex-column mt-3 mb-3">
    
                <div class="d-flex w-100 d-flex justify-content-between">
                    <h3 class="section-title2  text-purple" style="font-weight: 500 !important">
                        '.$star_rating->title.'
                    </h3>
                    <span class="rating-stars">';
    
                    for ($i = 0; $i < 5; $i++){
                    if ($i < $star_rating->rating){
                    $data .= '<i class="bi bi-star-fill"></i>';
                    }
                    else{
                    $data .= '<i class="bi bi-star"></i>';
                    }
                    }
                     $data .= '</span>
                </div>
                <p class="section-description-intentship mt-1 pe-lg-5">
                '.$star_rating->description.'
                </p>
                <div class="d-flex w-100 d-flex justify-content-end">
                    <a href="'.url('view-internship/'.$star_rating->id).'" class="see-more-link">See more</a>
                </div>
            </div>';
            }
        }
       }
       else if($type == "scholarships"){
        if($request->stars == "all"){
            $star_ratings = StarRatings::where('brain_profile_id', $brain_profile_id)->where('category', 'scholarships')->get();
        }
        else{
            $star_ratings = StarRatings::where('brain_profile_id', $brain_profile_id)->where('category', 'scholarships')->where('rating', $request->stars)->get();
        }
        $data = '';
        if($star_ratings->isEmpty()){
            $data .= 'No data avilable';
            
        }
        else{
            foreach ($star_ratings as $star_rating) {
                $data .= '<div class="d-flex flex-column mt-3 mb-3">
    
                <div class="d-flex w-100 d-flex justify-content-between">
                    <h3 class="section-title2  text-purple" style="font-weight: 500 !important">
                        '.$star_rating->title.'
                    </h3>
                    <span class="rating-stars">';
    
                    for ($i = 0; $i < 5; $i++){
                    if ($i < $star_rating->rating){
                    $data .= '<i class="bi bi-star-fill"></i>';
                    }
                    else{
                    $data .= '<i class="bi bi-star"></i>';
                    }
                    }
                     $data .= '</span>
                </div>
                <p class="section-description-intentship mt-1 pe-lg-5">
                '.$star_rating->description.'
                </p>
                <div class="d-flex w-100 d-flex justify-content-end">
                    <a href="'.url('view-scholarship/'.$star_rating->id).'" class="see-more-link">See more</a>
                </div>
            </div>';
            }
        }
       }
       else{
          
        if($request->stars == "all"){
            $star_ratings = StarRatings::where('brain_profile_id', $brain_profile_id)->where('category', 'university-programs')->get();
        }
        else{
            $star_ratings = StarRatings::where('brain_profile_id', $brain_profile_id)->where('category', 'university-programs')->where('rating', $request->stars)->get();
        }
        $data = '';
        if($star_ratings->isEmpty()){
            $data .= 'No data avilable';
            
        }
        else{
            foreach ($star_ratings as $star_rating) {
                $data .= '<div class="d-flex flex-column mt-3 mb-3">
    
                <div class="d-flex w-100 d-flex justify-content-between">
                    <h3 class="section-title2  text-purple" style="font-weight: 500 !important">
                        '.$star_rating->title.'
                    </h3>
                    <span class="rating-stars">';
    
                    for ($i = 0; $i < 5; $i++){
                    if ($i < $star_rating->rating){
                    $data .= '<i class="bi bi-star-fill"></i>';
                    }
                    else{
                    $data .= '<i class="bi bi-star"></i>';
                    }
                    }
                     $data .= '</span>
                </div>
                <p class="section-description-intentship mt-1 pe-lg-5">
                '.$star_rating->description.'
                </p>
                <div class="d-flex w-100 d-flex justify-content-end">
                    <a href="'.url('view-university/'.$star_rating->id).'" class="see-more-link">See more</a>
                </div>
            </div>';
            }
        }
       }
       echo json_encode(array("status"=> "success","data"=> $data));
    }
    
    public function event_filter(Request $request){

        if($request->type == "all"){
            $events = Events::where('status', 'active')->get();
        }
        else{
            $events = Events::where('status', 'active')->where('event_type', $request->type)->get();
        }
        $data = '';
        if($events->isEmpty()){
            $data .= 'No data avilable';
            
        }
        else{
            foreach ($events as $event) {
                $data .= ' <div class="col p-2">
                    <div class="eventcard p-3">
                        <div class="eventImgWrapper">
                            <a href="'.url('event/'.$event->slug).'"><img src="'.asset('db_files/events/featured/'.$event->featured_image).'" class="w-100 eventImage"
                                style="border-radius: 10px"></a>
                        </div>
                        <a href="'.url('event/'.$event->slug).'"><p class="yellow-text-lg mt-3 px-2" style="font-weight: 700">
                           '.$event->name.'
                        </p></a>
                        <p class="white-text-lg  px-2">'.$event->short_description.'</p>
                        <div class="d-flex justify-content-between px-2 pt-5">
                            <p class="eventDateTime">'.$event->date.'</p>
                            <p class="eventDateTime">'.$event->start_time.' - '.$event->end_time.'</p>
                        </div>
                    </div>
                </div>';
            }
        }
       
       
       echo json_encode(array("status"=> "success","data"=> $data));
    }
    
    public function basic_report_template(){

        return view('report_templates/basic_report_template');
    }
    
    public function newDashboard()
{
    return view('new-dashboard');
}
public function careers(Request $request)
{
    $brain_profile_id = WPUsers::where("user_id", session('user_id'))->value('brain_profile_id');

    $query = Careers::with(['ratings' => function ($q) use ($brain_profile_id) {
        $q->where('brain_profile_id', $brain_profile_id);
    }]);

    // Add a virtual column "rating_value" for sorting
    $query->withCount([
        'ratings as rating_value' => function ($q) use ($brain_profile_id) {
            $q->where('brain_profile_id', $brain_profile_id)
              ->select(\DB::raw('coalesce(max(rating), 0)'));
        }
    ]);

    if ($request->filled('stars')) {
        $query->whereHas('ratings', function ($q) use ($request, $brain_profile_id) {
            $q->where('brain_profile_id', $brain_profile_id)
              ->where('rating', $request->stars);
        });
    } else {
        // Order careers by stars descending when no filter
        $query->orderByDesc('rating_value');
    }

    $careers = $query->paginate(9);

    return view('careers.inner_page_1', ['careers' => $careers]);
}


public function careers_inner($id)
{
    // Find the StarRatings record by ID
    $star_rating = Careers::find($id);

    // Check if record exists
    if (!$star_rating) {
        abort(404, 'Star rating not found'); // Handle case where no matching record is found
    }

    // Pass the retrieved data to the view
    return view('careers.inner_page_2', ['star_rating' => $star_rating]);
}
public function billing()
{
    // Native Stripe checkout: keep users in the Laravel pricing/checkout flow.
    if (config('packages.driver') === 'cashier') {
        return redirect('/');
    }

    $pricingUrl = 'https://decodemybrain.com/pricing/';
    $ssoLink = session('sso_link');

    if ($ssoLink) {
        return redirect($ssoLink . '&path=' . urlencode($pricingUrl));
    }

    return redirect($pricingUrl);
}

public function introvert_or_extrovert(){

    return view('new_pages.intro_extro');
}
public function skill_assestment(){

    return view('new_pages.skill_report');
}
// public function download_report(){

// $user_attempt = QuestionAnswerMain::where("user_id", session('user_id'))->where('status', 'complete')->first();
// $user_brain_score = BrainScores::where("answer_main_id", $user_attempt->id)->first(); 
// $user_details =  WPUsers::where("user_id", session('user_id'))->first();
// $brain_profile_id = $user_details->brain_profile_id;
// $dob = session('user_dob'); 
// $age = \Carbon\Carbon::parse($dob)->age; 

// $pdf_url = "";
// if($brain_profile_id == 1){
// if ($age >= 12 && $age <= 14){
// $pdf_url = public_path('reports_pdfs/1/L1 Dominant_12-14.pdf');
// }
// if ($age >= 15 && $age <= 18){
// $pdf_url = public_path('reports_pdfs/1/L1 Dominant_15-18.pdf');
// }
// if ($age > 18){
// $pdf_url = public_path('reports_pdfs/1/L1 Dominant_18+.pdf');
// }
// }

// if($brain_profile_id == 2){
// if ($age >= 12 && $age <= 14){
// $pdf_url = public_path('reports_pdfs/2/2. L2 Dominant_12-14.pdf');
// }
// if ($age >= 15 && $age <= 18){
// $pdf_url = public_path('reports_pdfs/2/2. L2 Dominant_15-18.pdf');
// }
// if ($age > 18){
// $pdf_url = public_path('reports_pdfs/2/2. L2 Dominant_18+.pdf');
// }
// }

// if($brain_profile_id == 3){
// if ($age >= 12 && $age <= 14){
// $pdf_url = public_path('reports_pdfs/3/R2 Dominant_12-14.pdf');
// }
// if ($age >= 15 && $age <= 18){
// $pdf_url = public_path('reports_pdfs/3/R2 Dominant_15-18.pdf');
// }
// if ($age > 18){
// $pdf_url = public_path('reports_pdfs/3/R2 Dominant_18+.pdf');
// }
// }

// if($brain_profile_id == 4){
// if ($age >= 12 && $age <= 14){
// $pdf_url = public_path('reports_pdfs/4/R1 Dominant_12-14.pdf');
// }
// if ($age >= 15 && $age <= 18){
// $pdf_url = public_path('reports_pdfs/4/R1 Dominant_15-18.pdf');
// }
// if ($age > 18){
// $pdf_url = public_path('reports_pdfs/4/R1 Dominant_18+.pdf');
// }
// }

// if($brain_profile_id == 5){
// if ($age >= 12 && $age <= 14){
// $pdf_url = public_path('reports_pdfs/5/L1L2_12-14.pdf');
// }
// if ($age >= 15 && $age <= 18){
// $pdf_url = public_path('reports_pdfs/5/L1L2_15-18.pdf');
// }
// if ($age > 18){
// $pdf_url = public_path('reports_pdfs/5/L1L2_18+.pdf');
// }
// }

// if($brain_profile_id == 6){
// if ($age >= 12 && $age <= 14){
// $pdf_url = public_path('reports_pdfs/6/R1R2_12-14.pdf');
// }
// if ($age >= 15 && $age <= 18){
// $pdf_url = public_path('reports_pdfs/6/R1R2_15-18.pdf');
// }
// if ($age > 18){
// $pdf_url = public_path('reports_pdfs/6/R1R2_18+.pdf');
// }
// }

// if($brain_profile_id == 7){
// if ($age >= 12 && $age <= 14){
// $pdf_url = public_path('reports_pdfs/7/L1R1_12-14.pdf');
// }
// if ($age >= 15 && $age <= 18){
// $pdf_url = public_path('reports_pdfs/7/L1R1_15-18.pdf');
// }
// if ($age > 18){
// $pdf_url = public_path('reports_pdfs/7/L1R1_18+.pdf');
// }
// }

// if($brain_profile_id == 8){
// if ($age >= 12 && $age <= 14){
// $pdf_url = public_path('reports_pdfs/8/L2R2_12-14.pdf');
// }
// if ($age >= 15 && $age <= 18){
// $pdf_url = public_path('reports_pdfs/8/L2R2_15-18.pdf');
// }
// if ($age > 18){
// $pdf_url = public_path('reports_pdfs/8/L2R2_18+.pdf');
// }
// }

// if($brain_profile_id == 9){
// if ($age >= 12 && $age <= 14){
// $pdf_url = public_path('reports_pdfs/9/L1R2_12-14.pdf');
// }
// if ($age >= 15 && $age <= 18){
// $pdf_url = public_path('reports_pdfs/9/L1R2_15-18.pdf');
// }
// if ($age > 18){
// $pdf_url = public_path('reports_pdfs/9/L1R2_18+.pdf');
// }
// }

// if($brain_profile_id == 10){
// if ($age >= 12 && $age <= 14){
// $pdf_url = public_path('reports_pdfs/10/L2R1_12 - 14.pdf');
// }
// if ($age >= 15 && $age <= 18){
// $pdf_url = public_path('reports_pdfs/10/L2R1_15 - 18.pdf');
// }
// if ($age > 18){
// $pdf_url = public_path('reports_pdfs/10/L2R1_18+.pdf');
// }
// }

// if($brain_profile_id == 11){
// if ($age >= 12 && $age <= 14){
// $pdf_url = public_path('reports_pdfs/11/LOW R1_12 - 14.pdf');
// }
// if ($age >= 15 && $age <= 18){
// $pdf_url = public_path('reports_pdfs/11/LOW R1_15 - 18.pdf');
// }
// if ($age > 18){
// $pdf_url = public_path('reports_pdfs/11/LOW R1_18+.pdf');
// }
// }

// if($brain_profile_id == 12){
// if ($age >= 12 && $age <= 14){
// $pdf_url = public_path('reports_pdfs/12/LOW L1_12 - 14.pdf');
// }
// if ($age >= 15 && $age <= 18){
// $pdf_url = public_path('reports_pdfs/12/LOW L1_15 - 18.pdf');
// }
// if ($age > 18){
// $pdf_url = public_path('reports_pdfs/12/LOW L1_18+.pdf');
// }
// }

// if($brain_profile_id == 13){
// if ($age >= 12 && $age <= 14){
// $pdf_url = public_path('reports_pdfs/13/LOW L2_12 - 14.pdf');
// }
// if ($age >= 15 && $age <= 18){
// $pdf_url = public_path('reports_pdfs/13/LOW L2_15 - 18.pdf');
// }
// if ($age > 18){
// $pdf_url = public_path('reports_pdfs/13/LOW L2_18+.pdf');
// }
// }

// if($brain_profile_id == 14){
// if ($age >= 12 && $age <= 14){
// $pdf_url = public_path('reports_pdfs/14/LOW R2_12 - 14.pdf');
// }
// if ($age >= 15 && $age <= 18){
// $pdf_url = public_path('reports_pdfs/14/LOW R2_15 - 18.pdf');
// }
// if ($age > 18){
// $pdf_url = public_path('reports_pdfs/14/LOW R2_18+.pdf');
// }
// }

// if($brain_profile_id == 15){
// if ($age >= 12 && $age <= 14){
// $pdf_url = public_path('reports_pdfs/15/Quadruple Pie_12 - 14.pdf');
// }
// if ($age >= 15 && $age <= 18){
// $pdf_url = public_path('reports_pdfs/15/Quadruple Pie_15 - 18.pdf');
// }
// if ($age > 18){
// $pdf_url = public_path('reports_pdfs/15/Quadruple Pie_18+.pdf');
// }
// }

// if (!File::exists($pdf_url)) {
//     abort(404, 'Report PDF not found.');
// }
    
// // Create the new custom page
// $newCustomPage = PDF::loadView('pdfs.new_user_page', [
//     'user_details' => $user_details
// ])->setPaper('a4', 'portrait');
// $customPagePath = public_path('db_files/reports/new_user_page_temp.pdf');
// $newCustomPage->save($customPagePath);

// $outputPath = public_path('db_files/reports/brain_report_final.pdf');
// $pdf = new Fpdi();
// $pdf->AddFont('Aptos Display', '', 'Aptos-Display.php');
// $pdf->SetFont('Aptos Display', '', 12);

// // Load original PDF
// $pageCount = $pdf->setSourceFile($pdf_url);

// // ✅ Add first page (keep as is)
// $tplIdx = $pdf->importPage(1);
// $specs = $pdf->getTemplateSize($tplIdx);
// $pdf->AddPage($specs['orientation'], [210, 297]);
// $pdf->useTemplate($tplIdx);

// // ✅ Add the NEW custom page (replace original page 2)
// $pdf->setSourceFile($customPagePath);
// $tplIdx = $pdf->importPage(1);
// $specs = $pdf->getTemplateSize($tplIdx);
// $pdf->AddPage($specs['orientation'], [210, 297]);
// $pdf->useTemplate($tplIdx);

// // ✅ Continue with original pages from page 3 onwards
// $pdf->setSourceFile($pdf_url);
// for ($pageNo = 3; $pageNo <= $pageCount; $pageNo++) {
//     $tplIdx = $pdf->importPage($pageNo);
//     $specs = $pdf->getTemplateSize($tplIdx);
//     $pdf->AddPage($specs['orientation'], [210, 297]);
//     $pdf->useTemplate($tplIdx);
// }

// $pdf->Output('F', $outputPath);

// // Cleanup
// File::delete($customPagePath);

// return response()->download($outputPath, 'brain_report.pdf')->deleteFileAfterSend(true);

//     // $coverPdf1 = PDF::loadView('pdfs.cover', [
//     // 'dob' => $dob,
//     // 'age' => $age
//     // ])->setPaper('a4', 'portrait');
//     // $coverPath1 = public_path('db_files/reports/cover1_temp.pdf');
//     // $coverPdf1->save($coverPath1);

//     // $coverPdf2 = PDF::loadView('pdfs.cover2', [
//     // 'user_brain_score' => $user_brain_score
//     // ])->setPaper('a4', 'portrait');
//     // $coverPath2 = public_path('db_files/reports/cover2_temp.pdf');
//     // $coverPdf2->save($coverPath2);
    
// //     $newCustomPage = PDF::loadView('pdfs.new_user_page', [
// //     'user_details' => $user_details
// //     ])->setPaper('a4', 'portrait');
// //     $customPagePath = public_path('db_files/reports/new_user_page_temp.pdf');
// //     $newCustomPage->save($customPagePath);

    
// //     $outputPath = public_path('db_files/reports/brain_report_final.pdf');
// //     $pdf = new Fpdi();
// //     $pdf->AddFont('Aptos Display', '', 'Aptos-Display.php');
// //     $pdf->SetFont('Aptos Display', '', 12);
    
// //   $pageCount = $pdf->setSourceFile($coverPath1);
// //     for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
// //         $tplIdx = $pdf->importPage($pageNo);
// //         $specs = $pdf->getTemplateSize($tplIdx);
// //         $pdf->AddPage('P', [214, 297]);
// //         $pdf->useTemplate($tplIdx);
// //     }

// //     $pageCount = $pdf->setSourceFile($coverPath2);
// //     for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
// //         $tplIdx = $pdf->importPage($pageNo);
// //         $specs = $pdf->getTemplateSize($tplIdx);
// //         $pdf->AddPage('P', [214, 297]);
// //         $pdf->useTemplate($tplIdx);
// //     }

// //     $pageCount = $pdf->setSourceFile($pdf_url);
// //     for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
// //         $tplIdx = $pdf->importPage($pageNo);
// //         $specs = $pdf->getTemplateSize($tplIdx);
// //         $pdf->AddPage($specs['orientation'], [210, 297]);
// //         $pdf->useTemplate($tplIdx);
// //     }

// //     $pdf->Output('F', $outputPath);

// //     File::delete($coverPath1);
// //     File::delete($coverPath2);

// //     return response()->download($outputPath, 'brain_report.pdf')->deleteFileAfterSend(true);
 
// // $pdf_name ='brain_report.pdf';
// // $pdf = PDF::loadView('pdfs.report');
// // $pdf->setPaper('a4', 'portrait')->save(public_path('db_files/reports/').$pdf_name);
// // return $pdf->download();
// }

private function resolveLocalReportPdf($brainProfileId, $ageGroup)
{
    $directory = public_path('reports_pdfs/' . $brainProfileId);

    if (!$ageGroup || !File::isDirectory($directory)) {
        return null;
    }

    $tokens = [
        '12-14' => ['12-14', '12 - 14'],
        '15-18' => ['15-18', '15 - 18'],
        '18+' => ['18+'],
    ][$ageGroup] ?? [];

    foreach (File::files($directory) as $file) {
        $filename = strtolower($file->getFilename());

        if (substr($filename, -4) !== '.pdf') {
            continue;
        }

        foreach ($tokens as $token) {
            if (strpos($filename, strtolower($token)) !== false) {
                return $file->getPathname();
            }
        }
    }

    return null;
}

public function download_report()
{
    $userId = session('user_id');

    if (!$userId) {
        return redirect('/sign-in')->with('fail', 'Please login to download your report.');
    }

    $user_attempt = QuestionAnswerMain::where("user_id", $userId)
        ->where('status', 'complete')
        ->first();

    if (!$user_attempt) {
        return redirect('/questions/q1')->with('fail', 'Please complete the assessment before downloading your report.');
    }

    $user_brain_score = BrainScores::where("answer_main_id", $user_attempt->id)->first();
    $user_details = WPUsers::where("user_id", $userId)->first();

    if (!$user_details) {
        return redirect('/billing')->with('fail', 'Your profile was not found. Please login again.');
    }

    $brain_profile_id = $user_details->brain_profile_id;
    $dob = session('user_dob') ?: $user_details->date_of_birth;

    if (!$dob) {
        return redirect('/complete-profile')->with('fail', 'Please add your date of birth before downloading your report.');
    }

    $age = Carbon::parse($dob)->age;
    $ageGroup = null;

    if ($age >= 12 && $age <= 14) {
        $ageGroup = '12-14';
    } elseif ($age >= 15 && $age <= 18) {
        $ageGroup = '15-18';
    } elseif ($age > 18) {
        $ageGroup = '18+';
    }

    $pdf_url = "";

    /* =========================
       PDF MAPPING (UNCHANGED)
    ========================== */

    if ($brain_profile_id == 1) {
        if ($age >= 12 && $age <= 14) $pdf_url = "https://video.decodemybrain.com/reports/1.pdf";
        if ($age >= 15 && $age <= 18) $pdf_url = "https://video.decodemybrain.com/reports/2.pdf";
        if ($age > 18) $pdf_url = "https://video.decodemybrain.com/reports/3.pdf";
    }

    if ($brain_profile_id == 2) {
        if ($age >= 12 && $age <= 14) $pdf_url = "https://video.decodemybrain.com/reports/4.pdf";
        if ($age >= 15 && $age <= 18) $pdf_url = "https://video.decodemybrain.com/reports/5.pdf";
        if ($age > 18) $pdf_url = "https://video.decodemybrain.com/reports/6.pdf";
    }

    if ($brain_profile_id == 3) {
        if ($age >= 12 && $age <= 14) $pdf_url = "https://video.decodemybrain.com/reports/7.pdf";
        if ($age >= 15 && $age <= 18) $pdf_url = "https://video.decodemybrain.com/reports/8.pdf";
        if ($age > 18) $pdf_url = "https://video.decodemybrain.com/reports/9.pdf";
    }

    if ($brain_profile_id == 4) {
        if ($age >= 12 && $age <= 14) $pdf_url = "https://video.decodemybrain.com/reports/10.pdf";
        if ($age >= 15 && $age <= 18) $pdf_url = "https://video.decodemybrain.com/reports/11.pdf";
        if ($age > 18) $pdf_url = "https://video.decodemybrain.com/reports/12.pdf";
    }

    if ($brain_profile_id == 5) {
        if ($age >= 12 && $age <= 14) $pdf_url = "https://video.decodemybrain.com/reports/13.pdf";
        if ($age >= 15 && $age <= 18) $pdf_url = "https://video.decodemybrain.com/reports/14.pdf";
        if ($age > 18) $pdf_url = "https://video.decodemybrain.com/reports/15.pdf";
    }

    if ($brain_profile_id == 6) {
        if ($age >= 12 && $age <= 14) $pdf_url = "https://video.decodemybrain.com/reports/16.pdf";
        if ($age >= 15 && $age <= 18) $pdf_url = "https://video.decodemybrain.com/reports/17.pdf";
        if ($age > 18) $pdf_url = "https://video.decodemybrain.com/reports/18.pdf";
    }

    if ($brain_profile_id == 7) {
        if ($age >= 12 && $age <= 14) $pdf_url = "https://video.decodemybrain.com/reports/19.pdf";
        if ($age >= 15 && $age <= 18) $pdf_url = "https://video.decodemybrain.com/reports/20.pdf";
        if ($age > 18) $pdf_url = "https://video.decodemybrain.com/reports/21.pdf";
    }

    if ($brain_profile_id == 8) {
        if ($age >= 12 && $age <= 14) $pdf_url = "https://video.decodemybrain.com/reports/22.pdf";
        if ($age >= 15 && $age <= 18) $pdf_url = "https://video.decodemybrain.com/reports/23.pdf";
        if ($age > 18) $pdf_url = "https://video.decodemybrain.com/reports/24.pdf";
    }

    if ($brain_profile_id == 9) {
        if ($age >= 12 && $age <= 14) $pdf_url = "https://video.decodemybrain.com/reports/25.pdf";
        if ($age >= 15 && $age <= 18) $pdf_url = "https://video.decodemybrain.com/reports/26.pdf";
        if ($age > 18) $pdf_url = "https://video.decodemybrain.com/reports/27.pdf";
    }

    if ($brain_profile_id == 10) {
        if ($age >= 12 && $age <= 14) $pdf_url = "https://video.decodemybrain.com/reports/28.pdf";
        if ($age >= 15 && $age <= 18) $pdf_url = "https://video.decodemybrain.com/reports/29.pdf";
        if ($age > 18) $pdf_url = "https://video.decodemybrain.com/reports/30.pdf";
    }

    if ($brain_profile_id == 11) {
        if ($age >= 12 && $age <= 14) $pdf_url = "https://video.decodemybrain.com/reports/31.pdf";
        if ($age >= 15 && $age <= 18) $pdf_url = "https://video.decodemybrain.com/reports/32.pdf";
        if ($age > 18) $pdf_url = "https://video.decodemybrain.com/reports/33.pdf";
    }

    if ($brain_profile_id == 12) {
        if ($age >= 12 && $age <= 14) $pdf_url = "https://video.decodemybrain.com/reports/34.pdf";
        if ($age >= 15 && $age <= 18) $pdf_url = "https://video.decodemybrain.com/reports/35.pdf";
        if ($age > 18) $pdf_url = "https://video.decodemybrain.com/reports/36.pdf";
    }

    if ($brain_profile_id == 13) {
        if ($age >= 12 && $age <= 14) $pdf_url = "https://video.decodemybrain.com/reports/37.pdf";
        if ($age >= 15 && $age <= 18) $pdf_url = "https://video.decodemybrain.com/reports/38.pdf";
        if ($age > 18) $pdf_url = "https://video.decodemybrain.com/reports/39.pdf";
    }

    if ($brain_profile_id == 14) {
        if ($age >= 12 && $age <= 14) $pdf_url = "https://video.decodemybrain.com/reports/40.pdf";
        if ($age >= 15 && $age <= 18) $pdf_url = "https://video.decodemybrain.com/reports/41.pdf";
        if ($age > 18) $pdf_url = "https://video.decodemybrain.com/reports/42.pdf";
    }

    if ($brain_profile_id == 15) {
        if ($age >= 12 && $age <= 14) $pdf_url = "https://video.decodemybrain.com/reports/43.pdf";
        if ($age >= 15 && $age <= 18) $pdf_url = "https://video.decodemybrain.com/reports/44.pdf";
        if ($age > 18) $pdf_url = "https://video.decodemybrain.com/reports/45.pdf";
    }

    if (!$pdf_url) {
        abort(404, 'Report PDF not mapped.');
    }

    /* =========================
       RESOLVE REPORT PDF
    ========================== */

    $dir = public_path('db_files/reports');
    if (!File::exists($dir)) {
        File::makeDirectory($dir, 0755, true);
    }

    $localPdfPath = $this->resolveLocalReportPdf($brain_profile_id, $ageGroup);
    $remotePdfPath = $dir . '/external_report_temp_' . $userId . '.pdf';
    $sourcePdfPath = $localPdfPath;

    if (!$sourcePdfPath || !File::exists($sourcePdfPath)) {
        try {
            $response = Http::connectTimeout(5)->timeout(15)->get($pdf_url);

            if (!$response->successful()) {
                return redirect('/dashboard')->with('fail', 'Report PDF is temporarily unavailable. Please try again.');
            }

            File::put($remotePdfPath, $response->body());
            $sourcePdfPath = $remotePdfPath;
        } catch (\Throwable $exception) {
            logger()->warning('Report PDF download failed', [
                'user_id' => $userId,
                'brain_profile_id' => $brain_profile_id,
                'age_group' => $ageGroup,
                'pdf_url' => $pdf_url,
                'error' => $exception->getMessage(),
            ]);

            return redirect('/dashboard')->with('fail', 'Report PDF is temporarily unavailable. Please try again.');
        }
    }

    /* =========================
       CREATE CUSTOM PAGE
    ========================== */

    $customPagePath = $dir . '/new_user_page_temp.pdf';

    PDF::loadView('pdfs.new_user_page', [
        'user_details' => $user_details
    ])->setPaper('a4', 'portrait')
      ->save($customPagePath);

    /* =========================
       MERGE WITH FPDI
    ========================== */

    $outputPath = $dir . '/brain_report_final.pdf';

    $pdf = new Fpdi();
    // Aptos Display was referenced here without its generated FPDF font
    // definition being deployed, which made every download fail with HTTP 500.
    // The merged pages do not need a custom font; use FPDF's bundled Helvetica
    // for any future overlay text instead.
    $pdf->SetFont('Helvetica', '', 12);

    $pageCount = $pdf->setSourceFile($sourcePdfPath);

    // Page 1
    $tplIdx = $pdf->importPage(1);
    $specs = $pdf->getTemplateSize($tplIdx);
    $pdf->AddPage($specs['orientation'], [210, 297]);
    $pdf->useTemplate($tplIdx, 0, 0, 210, 297);

    // Custom Page (Page 2)
    $pdf->setSourceFile($customPagePath);
    $tplIdx = $pdf->importPage(1);
    $specs = $pdf->getTemplateSize($tplIdx);
    $pdf->AddPage($specs['orientation'], [210, 297]);
    $pdf->useTemplate($tplIdx, 0, 0, 210, 297);

    // Remaining pages
    $pdf->setSourceFile($sourcePdfPath);
    for ($pageNo = 3; $pageNo <= $pageCount; $pageNo++) {
        $tplIdx = $pdf->importPage($pageNo);
        $specs = $pdf->getTemplateSize($tplIdx);
        $pdf->AddPage($specs['orientation'], [210, 297]);
        $pdf->useTemplate($tplIdx, 0, 0, 210, 297);
    }

    $pdf->Output('F', $outputPath);

    // Cleanup
    File::delete($customPagePath);

    if ($sourcePdfPath === $remotePdfPath) {
        File::delete($remotePdfPath);
    }

    return response()->download($outputPath, 'brain_report.pdf')
        ->deleteFileAfterSend(true);
}
public function report($type,  Request $request){

    // dd($request->all());

    return view('report.report',['type' => $type]);
    // return 123;
}
public function importCareers(Request $request)
{
    $request->validate([
        'file' => 'required|mimes:xlsx,xls,csv',
    ]);

    Excel::import(new CareersImport, $request->file('file'));

    return redirect()->back()->with('success', 'Careers imported successfully!');
}
}
