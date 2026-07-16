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

use Illuminate\Mail\Message;
use App\Mail\ComparisonRequestMail;
use File;
use Mail;
use PDF;
use Image;
use Redirect;
use Session;

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
use App\Models\ComparisonRequests;


use App\Http\Controllers\BrainResultsController;

class ComparisonController extends Controller
{
    public function comparison_request(Request $request)
    { if($request->isMethod('get')){
        
        $recieved_requests = ComparisonRequests::where('to_email', session('user_details')['email'])->where('status', 'pending')->get();
        $accepted_requests = ComparisonRequests::where('to_email', session('user_details')['email'])->where('status', 'accepted')->get();
        
        foreach($accepted_requests as $accepted_request){
            $accepted_request->name = WPUsers::where('user_id',$accepted_request->user_id)->value('display_name') ?? '-';
            $accepted_request->email = WPUsers::where('user_id',$accepted_request->user_id)->value('email') ?? '-';
        }
        
        foreach($recieved_requests as $recieved_request){
            $recieved_request->name = WPUsers::where('user_id',$recieved_request->user_id)->value('display_name') ?? '-';
            $recieved_request->email = WPUsers::where('user_id',$recieved_request->user_id)->value('email') ?? '-';
        }
        
        
        $sent_requests = ComparisonRequests::where('user_id', session('user_id'))->get();
        
        return view('comparison.comparison_request', ['recieved_requests' => $recieved_requests, 'sent_requests' => $sent_requests, 'accepted_requests' => $accepted_requests]);
    }
    if($request->isMethod('post')){
        
        $wp_user =  WPUsers::where('user_id', session('user_id'))->first();
        $user_package = $wp_user->package ?? null;

    $this->validate($request, [
            'email'   => 'required',
           ]);

        //   $acceptedRequestCount = ComparisonRequests::where('user_id', session('user_id'))
        // ->where('status', 'accepted')
        // ->count();

        $maxRequests = 0;
    if ($user_package == 'decodemybrain-deep-dive') {
        $maxRequests = 1;
    } elseif ($user_package == 'decodemybrain-guided-friend-and-family-connect') {
        $maxRequests = 2;
    }
    $totalSentRequests = ComparisonRequests::where('user_id', session('user_id'))
    ->whereIn('status', ['pending', 'approved', 'accepted'])
    ->count();

    if ($totalSentRequests >= $maxRequests) {
        return back()->with('fail', 'You have reached the maximum number of comparison requests for your package.');
    }
    //  if ($acceptedRequestCount >= $maxRequests) {
    //     return back()->with('fail', 'You have reached the maximum number of accepted comparison requests for your package.');
    // }

       $existingRequest = ComparisonRequests::where('user_id', session('user_id'))
        ->where('to_email', $request->email)
        ->whereIn('status', ['pending', 'approved', 'accepted'])
        ->first();

    if (!$existingRequest) {
        $comparison = new ComparisonRequests();
        $comparison->user_id = session('user_id');
        $comparison->to_email = $request->email;
        $comparison->requested_date = date('Y-m-d');
        $comparison->status = 'pending';
        $comparison->save();
        
        Mail::to($request->email)->send(new ComparisonRequestMail(
            session('user_details')['display_name'], 
            session('user_details')['email']
        ));
        return back()->with('success', 'Request successfully sent');
    } else {
        return back()->with('fail', 'A request has already been sent or approved for this email.');
    }

    }

    }
    
     public function accept_comparison_request($id){
        $comparison = ComparisonRequests::find($id);
        $comparison->status = "accepted";
        $comparison->update();
        return redirect(url('compare-results/received/'.$id.''));

    }
     public function reject_comparison_request($id){
        $comparison = ComparisonRequests::find($id);
        $comparison->status = "rejected";
        $comparison->update();
        return back()->with('success', 'Request Rejected');

    }
    
    
    public function compare_results($type,$id,Request $request)
    { if($request->isMethod('get')){
        
        $comparison_detail = ComparisonRequests::where('id', $id)->first();
        if($type=="sent"){
            $user_attempt = QuestionAnswerMain::where("user_id", session('user_id'))->where('status', 'complete')->first();
            $user_brain_score = BrainScores::where("answer_main_id", $user_attempt->id)->first(); 
            $user_brain_profile_id = WPUsers::where("user_id", session('user_id'))->value('brain_profile_id');
            $user_dob =  WPUsers::where("user_id", session('user_id'))->value('date_of_birth');
            $user_age = \Carbon\Carbon::parse($user_dob)->age;  
            $user_dtails = WPUsers::where("user_id", session('user_id'))->first();
            
            $other_user_id = WPUsers::where("email", $comparison_detail->to_email)->value('user_id');
            $other_attempt = QuestionAnswerMain::where("user_id", $other_user_id)->where('status', 'complete')->first();
            $other_brain_score = BrainScores::where("answer_main_id", $other_attempt->id)->first(); 
            $other_brain_profile_id = WPUsers::where("user_id", $other_user_id)->value('brain_profile_id');
            $other_dob =  WPUsers::where("user_id", $other_user_id)->value('date_of_birth');
            $other_age = \Carbon\Carbon::parse($other_dob)->age; 
            $other_dtails = WPUsers::where("user_id", $other_user_id)->first();
        }
        else{
            $user_user_id = WPUsers::where("email", $comparison_detail->to_email)->value('user_id');
            $user_attempt = QuestionAnswerMain::where("user_id", $user_user_id)->where('status', 'complete')->first();
            $user_brain_score = BrainScores::where("answer_main_id", $user_attempt->id)->first(); 
            $user_brain_profile_id = WPUsers::where("user_id", $user_user_id)->value('brain_profile_id');
            $user_dob =  WPUsers::where("user_id", $user_user_id)->value('date_of_birth');
            $user_age = \Carbon\Carbon::parse($user_dob)->age;  
            $user_dtails = WPUsers::where("user_id", $user_user_id)->first();
            
            $other_user_id = $comparison_detail->user_id;
            $other_attempt = QuestionAnswerMain::where("user_id", $other_user_id)->where('status', 'complete')->first();
            $other_brain_score = BrainScores::where("answer_main_id", $other_attempt->id)->first(); 
            $other_brain_profile_id = WPUsers::where("user_id", $other_user_id)->value('brain_profile_id');
            $other_dob =  WPUsers::where("user_id", $other_user_id)->value('date_of_birth');
            $other_age = \Carbon\Carbon::parse($other_dob)->age; 
            $other_dtails = WPUsers::where("user_id", $other_user_id)->first();
        }
       
        
        return view('comparison.compare_results', ['user_brain_score' => $user_brain_score, 'user_brain_profile_id' => $user_brain_profile_id, 'user_age' => $user_age,
        'user_dtails' => $user_dtails, 'other_brain_score' => $other_brain_score, 'other_brain_profile_id' => $other_brain_profile_id, 'other_age' => $other_age, 'other_dtails' => $other_dtails]);
    }
    }
  
}
