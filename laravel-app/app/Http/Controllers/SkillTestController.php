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
use File;
use Mail;
use PDF;
use Image;
use Redirect;
use Session;
use Carbon\Carbon;

use App\Models\User;
use App\Models\Questions;
use App\Models\ChildQuestions;

use App\Models\DimensionQuestions;
use App\Models\SkillTestAnswersMain;
use App\Models\SkillTestQuestionAnswers;
use App\Models\CustomerDetails;
use App\Models\BrainScores;
use App\Models\DimensionalQuestionAnswerMain;
use App\Models\DimensionalQuestionAnswers;
use App\Models\SkillTestQuestions;

use App\Http\Controllers\BrainResultsController;

class SkillTestController extends Controller
{
 

    
    public function skill_test($question) {
    if (SkillTestAnswersMain::where('user_id', session('user_id'))
    ->where('status', 'complete')
    ->whereBetween('created_at', [Carbon::now()->subDays(365), Carbon::now()])
    ->count() < 4) {
    $dob = session('user_dob'); 
    $age = \Carbon\Carbon::parse($dob)->age;

    $category_from_age = ($age < 18) ? 'child' : 'adult';
       
    if($question == "q1") {
        if ($category_from_age == 'adult') {
            $question = SkillTestQuestions::where('id', 1)->first();
            return view('skill-test/question', ['question' => $question, 'question_no' => 1]);
        }
        else{
            $question = SkillTestQuestions::where('id', 13)->first();
            return view('skill-test/question', ['question' => $question, 'question_no' => 1]);
        }
    }
    
    if($question == "q2") {
        if ($category_from_age == 'adult') {
            $question = SkillTestQuestions::where('id', 2)->first();
            return view('skill-test/question', ['question' => $question, 'question_no' => 2]);
        }
        else{
            $question = SkillTestQuestions::where('id', 14)->first();
            return view('skill-test/question', ['question' => $question, 'question_no' => 2]);
        }
       
    }
    if($question == "q3") {
        
        if ($category_from_age == 'adult') {
            $question = SkillTestQuestions::where('id', 3)->first();
            return view('skill-test/question', ['question' => $question, 'question_no' => 3]);
        }
        else{
            $question = SkillTestQuestions::where('id', 15)->first();
            return view('skill-test/question', ['question' => $question, 'question_no' => 3]);
        }
    }
    if($question == "q4") {
        if ($category_from_age == 'adult') {
            $question = SkillTestQuestions::where('id', 4)->first();
            return view('skill-test/question', ['question' => $question, 'question_no' => 4]);
        }
        else{
            $question = SkillTestQuestions::where('id', 16)->first();
            return view('skill-test/question', ['question' => $question, 'question_no' => 4]);
        }
    }
    if($question == "q5") {
        if ($category_from_age == 'adult') {
            $question = SkillTestQuestions::where('id', 5)->first();
            return view('skill-test/question', ['question' => $question, 'question_no' => 5]);
        }
        else{
            $question = SkillTestQuestions::where('id', 17)->first();
            return view('skill-test/question', ['question' => $question, 'question_no' => 5]);
        }
       
    }
    if($question == "q6") {
        if ($category_from_age == 'adult') {
            $question = SkillTestQuestions::where('id', 6)->first();
            return view('skill-test/question', ['question' => $question, 'question_no' => 6]);
        }
        else{
            $question = SkillTestQuestions::where('id', 18)->first();
            return view('skill-test/question', ['question' => $question, 'question_no' => 6]);
        }
       
    }
    if($question == "q7") {
        if ($category_from_age == 'adult') {
            $question = SkillTestQuestions::where('id', 7)->first();
            return view('skill-test/question', ['question' => $question, 'question_no' => 7]);
        }
        else{
            $question = SkillTestQuestions::where('id', 19)->first();
            return view('skill-test/question', ['question' => $question, 'question_no' => 7]);
        }
        
    }
    if($question == "q8") {
        if ($category_from_age == 'adult') {
            $question = SkillTestQuestions::where('id', 8)->first();
            return view('skill-test/question', ['question' => $question, 'question_no' => 8]);
        }
        else{
            $question = SkillTestQuestions::where('id', 20)->first();
            return view('skill-test/question', ['question' => $question, 'question_no' => 8]);
        }
        
    }
    if($question == "q9") {
        if ($category_from_age == 'adult') {
            $question = SkillTestQuestions::where('id', 9)->first();
            return view('skill-test/question', ['question' => $question, 'question_no' => 9]);
        }
        else{
            $question = SkillTestQuestions::where('id', 21)->first();
            return view('skill-test/question', ['question' => $question, 'question_no' => 9]);
        }
        
    }
    if($question == "q10") {
        if ($category_from_age == 'adult') {
            $question = SkillTestQuestions::where('id', 10)->first();
            return view('skill-test/question', ['question' => $question, 'question_no' => 10]);
        }
        else{
            $question = SkillTestQuestions::where('id', 22)->first();
            return view('skill-test/question', ['question' => $question, 'question_no' => 10]);
        }
        
    }
    if($question == "q11") {
        if ($category_from_age == 'adult') {
            $question = SkillTestQuestions::where('id', 11)->first();
            return view('skill-test/question', ['question' => $question, 'question_no' => 11]);
        }
        else{
            $question = SkillTestQuestions::where('id', 23)->first();
            return view('skill-test/question', ['question' => $question, 'question_no' => 11]);
        }
       
    }
    if($question == "q12") {
        if ($category_from_age == 'adult') {
            $question = SkillTestQuestions::where('id', 12)->first();
            return view('skill-test/question', ['question' => $question, 'question_no' => 12]);
        }
        else{
            $question = SkillTestQuestions::where('id', 24)->first();
            return view('skill-test/question', ['question' => $question, 'question_no' => 12]);
        }
        
    }
    }
    else{
        return redirect('dashboard')->with('fail', 'Attempts limit reached');
    }
}

    public function save_skill_test_answers(Request $request){
        // if (SkillTestAnswersMain::where('user_id', session('user_id'))
        // ->where('status', 'complete')
        // ->whereBetween('created_at', [Carbon::now()->subDays(365), Carbon::now()])
        // ->count() < 4) {
            if(session('skill_test_answer_main_id')){
                $question_no = $request->question_no;
    
                if(SkillTestQuestionAnswers::where("skill_test_answer_main_id", session('skill_test_answer_main_id'))->where("question_no", $request->question_no)
                        ->where("question_id", $request->question_id)->exists()){
    
                            $QuestionAnswers = SkillTestQuestionAnswers::where("skill_test_answer_main_id", session('skill_test_answer_main_id'))->where("question_no", $request->question_no)
                            ->where("question_id", $request->question_id)->first();
                            $QuestionAnswers->first_answer = $request->first_answer;
                            $QuestionAnswers->second_answer = $request->second_answer;
                            $QuestionAnswers->third_answer = $request->third_answer;
                            $QuestionAnswers->forth_answer = $request->forth_answer;
                            $QuestionAnswers->update();
                        }
                        else{
                            $QuestionAnswers = new SkillTestQuestionAnswers();
                            $QuestionAnswers->skill_test_answer_main_id = session('skill_test_answer_main_id');
                            $QuestionAnswers->question_no = $request->question_no;
                            $QuestionAnswers->question_id = $request->question_id;
                            $QuestionAnswers->first_answer = $request->first_answer;
                            $QuestionAnswers->second_answer = $request->second_answer;
                            $QuestionAnswers->third_answer = $request->third_answer;
                            $QuestionAnswers->forth_answer = $request->forth_answer;
                            $QuestionAnswers->save();
                        }
    
                                if($question_no == 12){
                                    $QuestionAnswerMain = SkillTestAnswersMain::where('id',session('skill_test_answer_main_id'))->first();
                                    $QuestionAnswerMain->status = "complete";
                                    $QuestionAnswerMain->update();

                                    $BrainResultsController = new BrainResultsController();
                                    $BrainResultsController->add_skill_brain_results(session('skill_test_answer_main_id'));

                                    $request->session()->forget(['skill_test_answer_main_id']);

                                    return redirect('skill-assestment');
                                }
                                else{
                                    $next_page = $question_no +1;
                                    return redirect('skill-test/q'.$next_page.'');
                                }
            }
            else{
                if($request->question_no == 1){
                    $QuestionAnswerMain = new SkillTestAnswersMain();
                    $QuestionAnswerMain->user_id = session('user_id');
                    $QuestionAnswerMain->save();
        
                    $QuestionAnswers = new SkillTestQuestionAnswers();
                    $QuestionAnswers->skill_test_answer_main_id = $QuestionAnswerMain->id;
                    $QuestionAnswers->question_no = $request->question_no;
                    $QuestionAnswers->question_id = $request->question_id;
                    $QuestionAnswers->first_answer = $request->first_answer;
                    $QuestionAnswers->second_answer = $request->second_answer;
                    $QuestionAnswers->third_answer = $request->third_answer;
                    $QuestionAnswers->forth_answer = $request->forth_answer;
                    $QuestionAnswers->save();
        
                    session(['skill_test_answer_main_id' => $QuestionAnswerMain->id]);
        
                    return redirect('skill-test/q2');
                }
                else{
                    return redirect('skill-test/q1')->with('message', 'Please answer this question first');
                }
            }
        // }
        // else{
        //     return back()->with('message', 'Attempts limit reached');
        // }
       

    }
    

    
}
