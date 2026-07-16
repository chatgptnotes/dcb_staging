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

use App\Models\User;
use App\Models\Questions;
use App\Models\ChildQuestions;

use App\Models\DimensionQuestions;
use App\Models\QuestionAnswerMain;
use App\Models\QuestionAnswers;
use App\Models\CustomerDetails;
use App\Models\BrainScores;
use App\Models\DimensionalQuestionAnswerMain;
use App\Models\DimensionalQuestionAnswers;

use App\Http\Controllers\BrainResultsController;

class QuestionsController extends Controller
{
    public function intro(){
        return view('questions/intro');
    }
    
    public function retake()
{
    
    $userId = session('user_id');

    
    $questionAnswerMain = QuestionAnswerMain::where('user_id', $userId)->first();
    if ($questionAnswerMain) {
        
        QuestionAnswers::where('answer_main_id', $questionAnswerMain->id)->delete();

        
        $questionAnswerMain->delete();
    }

    
    DimensionalQuestionAnswerMain::where('user_id', $userId)->delete();
    DimensionalQuestionAnswers::where('user_id', $userId)->delete();

    
    session()->flash('success', 'Retake action completed successfully.');

    
     return redirect('/questions/q1');
    
    
   
    
}

public function start_dimentational_questions() {

    return view('questions/start_dimentational');
}

public function thankyou() {

    return view('questions/thank_you');
}


    
    public function question($question) {
    
    $dob = session('user_dob'); 
    $age = \Carbon\Carbon::parse($dob)->age;

    
    $category_from_age = ($age < 18) ? 'child' : 'adult';

    
    if($question == "q1") {
        
        if ($category_from_age == 'adult') {
            $question = Questions::where('id', 1)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 1]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = Questions::where('id', 28)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 1]);
        }
    }
    
    if($question == "q2") {
        
        if ($category_from_age == 'adult') {
            $question = Questions::where('id', 2)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 2]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = Questions::where('id', 29)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 2]);
        }
    }
    
    if($question == "q3") {
        
        if ($category_from_age == 'adult') {
            $question = Questions::where('id', 4)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 3]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = Questions::where('id', 30)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 3]);
        }
    }
    
     if($question == "q4") {
        
        if ($category_from_age == 'adult') {
            $question = Questions::where('id', 5)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 4]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = Questions::where('id', 31)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 4]);
        }
    }
    
     if($question == "q5") {
        
        if ($category_from_age == 'adult') {
            $question = Questions::where('id', 6)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 5]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = Questions::where('id', 32)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 5]);
        }
    }
    
     if($question == "q6") {
        
        if ($category_from_age == 'adult') {
            $question = Questions::where('id', 7)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 6]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = Questions::where('id', 33)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 6]);
        }
    }
    
     if($question == "q7") {
        
        if ($category_from_age == 'adult') {
            $question = Questions::where('id', 8)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 7]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = Questions::where('id', 34)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 7]);
        }
    }
    
     if($question == "q8") {
        
        if ($category_from_age == 'adult') {
            $question = Questions::where('id', 9)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 8]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = Questions::where('id', 35)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 8]);
        }
    }
    
     if($question == "q9") {
        
        if ($category_from_age == 'adult') {
            $question = Questions::where('id', 10)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 9]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = Questions::where('id', 36)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 9]);
        }
    }
    
     if($question == "q10") {
        
        if ($category_from_age == 'adult') {
            $question = Questions::where('id', 11)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 10]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = Questions::where('id', 37)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 10]);
        }
    }
    
     if($question == "q11") {
        
        if ($category_from_age == 'adult') {
            $question = Questions::where('id', 12)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 11]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = Questions::where('id', 38)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 11]);
        }
    }
    
     if($question == "q12") {
        
        if ($category_from_age == 'adult') {
            $question = Questions::where('id', 13)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 12]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = Questions::where('id', 39)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 12]);
        }
    }
    
     if($question == "q13") {
        
        if ($category_from_age == 'adult') {
            $question = Questions::where('id', 14)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 13]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = Questions::where('id', 40)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 13]);
        }
    }
    
     if($question == "q14") {
        
        if ($category_from_age == 'adult') {
            $question = Questions::where('id', 15)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 14]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = Questions::where('id', 41)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 14]);
        }
    }
    
     if($question == "q15") {
        
        if ($category_from_age == 'adult') {
            $question = Questions::where('id', 16)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 15]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = Questions::where('id', 42)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 15]);
        }
    }
    
    if($question == "q16") {
        
        if ($category_from_age == 'adult') {
            $question = Questions::where('id', 17)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 16]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = Questions::where('id', 43)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 16]);
        }
    }
    
    if($question == "q17") {
        
        if ($category_from_age == 'adult') {
            $question = Questions::where('id', 18)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 17]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = Questions::where('id', 44)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 17]);
        }
    }
    
    if($question == "q18") {
        
        if ($category_from_age == 'adult') {
            $question = Questions::where('id', 19)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 18]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = Questions::where('id', 45)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 18]);
        }
    }
    
    if($question == "q19") {
        
        if ($category_from_age == 'adult') {
            $question = Questions::where('id', 20)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 19]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = Questions::where('id', 46)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 19]);
        }
    }
    
    if($question == "q20") {
        
        if ($category_from_age == 'adult') {
            $question = Questions::where('id', 21)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 20]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = Questions::where('id', 47)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 20]);
        }
    }
    
    if($question == "q21") {
        
        if ($category_from_age == 'adult') {
            $question = Questions::where('id', 22)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 21]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = Questions::where('id', 48)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 21]);
        }
    }
    
    if($question == "q22") {
        
        if ($category_from_age == 'adult') {
            $question = Questions::where('id', 23)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 22]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = Questions::where('id', 49)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 22]);
        }
    }
    
    if($question == "q23") {
        
        if ($category_from_age == 'adult') {
            $question = Questions::where('id', 24)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 23]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = Questions::where('id', 50)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 23]);
        }
    }
    
    if($question == "q24") {
        
        if ($category_from_age == 'adult') {
            $question = Questions::where('id', 25)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 24]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = Questions::where('id', 51)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 24]);
        }
    }
    
    if($question == "q25") {
        
        if ($category_from_age == 'adult') {
            $question = Questions::where('id', 27)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 25]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = Questions::where('id', 52)->first();
            return view('questions/question', ['question' => $question, 'question_no' => 25]);
        }
    }
    
     if($question == "d1") {
        
        if ($category_from_age == 'adult') {
            $question = DimensionQuestions::where('id', 1)->first();
            return view('questions/dimention_question', ['question' => $question, 'question_no' => 1]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = DimensionQuestions::where('id', 13)->first();
            return view('questions/dimention_question', ['question' => $question, 'question_no' => 1]);
        }
    }
    
    if($question == "d2") {
        
        if ($category_from_age == 'adult') {
            $question = DimensionQuestions::where('id', 2)->first();
            return view('questions/dimention_question', ['question' => $question, 'question_no' => 2]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = DimensionQuestions::where('id', 14)->first();
            return view('questions/dimention_question', ['question' => $question, 'question_no' => 2]);
        }
    }
    
    if($question == "d3") {
        
        if ($category_from_age == 'adult') {
            $question = DimensionQuestions::where('id', 3)->first();
            return view('questions/dimention_question', ['question' => $question, 'question_no' => 3]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = DimensionQuestions::where('id', 15)->first();
            return view('questions/dimention_question', ['question' => $question, 'question_no' => 3]);
        }
    }
    
    if($question == "d4") {
        
        if ($category_from_age == 'adult') {
            $question = DimensionQuestions::where('id', 4)->first();
            return view('questions/dimention_question', ['question' => $question, 'question_no' => 4]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = DimensionQuestions::where('id', 16)->first();
            return view('questions/dimention_question', ['question' => $question, 'question_no' => 4]);
        }
    }
    
    if($question == "d5") {
        
        if ($category_from_age == 'adult') {
            $question = DimensionQuestions::where('id', 5)->first();
            return view('questions/dimention_question', ['question' => $question, 'question_no' => 5]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = DimensionQuestions::where('id', 17)->first();
            return view('questions/dimention_question', ['question' => $question, 'question_no' => 5]);
        }
    }
    
    if($question == "d6") {
        
        if ($category_from_age == 'adult') {
            $question = DimensionQuestions::where('id', 6)->first();
            return view('questions/dimention_question', ['question' => $question, 'question_no' => 6]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = DimensionQuestions::where('id', 18)->first();
            return view('questions/dimention_question', ['question' => $question, 'question_no' => 6]);
        }
    }
    
    if($question == "d7") {
        
        if ($category_from_age == 'adult') {
            $question = DimensionQuestions::where('id', 7)->first();
            return view('questions/dimention_question', ['question' => $question, 'question_no' => 7]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = DimensionQuestions::where('id', 19)->first();
            return view('questions/dimention_question', ['question' => $question, 'question_no' => 7]);
        }
    }
    
    if($question == "d8") {
        
        if ($category_from_age == 'adult') {
            $question = DimensionQuestions::where('id', 8)->first();
            return view('questions/dimention_question', ['question' => $question, 'question_no' => 8]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = DimensionQuestions::where('id', 20)->first();
            return view('questions/dimention_question', ['question' => $question, 'question_no' => 8]);
        }
    }
    
    if($question == "d9") {
        
        if ($category_from_age == 'adult') {
            $question = DimensionQuestions::where('id', 9)->first();
            return view('questions/dimention_question', ['question' => $question, 'question_no' => 9]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = DimensionQuestions::where('id', 21)->first();
            return view('questions/dimention_question', ['question' => $question, 'question_no' => 9]);
        }
    }
    
    if($question == "d10") {
        
        if ($category_from_age == 'adult') {
            $question = DimensionQuestions::where('id', 10)->first();
            return view('questions/dimention_question', ['question' => $question, 'question_no' => 10]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = DimensionQuestions::where('id', 22)->first();
            return view('questions/dimention_question', ['question' => $question, 'question_no' => 10]);
        }
    }
    
    if($question == "d11") {
        
        if ($category_from_age == 'adult') {
            $question = DimensionQuestions::where('id', 11)->first();
            return view('questions/dimention_question', ['question' => $question, 'question_no' => 11]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = DimensionQuestions::where('id', 23)->first();
            return view('questions/dimention_question', ['question' => $question, 'question_no' => 11]);
        }
    }
    
    if($question == "d12") {
        
        if ($category_from_age == 'adult') {
            $question = DimensionQuestions::where('id', 12)->first();
            return view('questions/dimention_question', ['question' => $question, 'question_no' => 12]);
        }
        
        elseif ($category_from_age == 'child') {
            $question = DimensionQuestions::where('id', 24)->first();
            return view('questions/dimention_question', ['question' => $question, 'question_no' => 12]);
        }
    }
    

}

   

        
    
    
    


    // LET USER ANSWER QUESTION MULTIPLE TIME
    public function save_answers(Request $request){
        
            if(session('user_id')){
                if(session('answer_main_id')){
                    $question_no = $request->question_no;
                    
                    if(QuestionAnswers::where("answer_main_id", session('answer_main_id'))->where("question_no", $request->question_no)
                    ->where("question_id", $request->question_id)->exists()){

                        $QuestionAnswers = QuestionAnswers::where("answer_main_id", session('answer_main_id'))->where("question_no", $request->question_no)
                        ->where("question_id", $request->question_id)->first();
                        $QuestionAnswers->first_answer = $request->first_answer;
                        $QuestionAnswers->second_answer = $request->second_answer;
                        $QuestionAnswers->third_answer = $request->third_answer;
                        $QuestionAnswers->forth_answer = $request->forth_answer;
                        $QuestionAnswers->update();
                    }
                    else{
                        $QuestionAnswers = new QuestionAnswers();
                        $QuestionAnswers->answer_main_id = session('answer_main_id');
                        $QuestionAnswers->question_no = $request->question_no;
                        $QuestionAnswers->question_id = $request->question_id;
                        $QuestionAnswers->first_answer = $request->first_answer;
                        $QuestionAnswers->second_answer = $request->second_answer;
                        $QuestionAnswers->third_answer = $request->third_answer;
                        $QuestionAnswers->forth_answer = $request->forth_answer;
                        $QuestionAnswers->save();
                    }
                           

                            if($question_no == 25){
                                $QuestionAnswerMain = QuestionAnswerMain::where('id',session('answer_main_id'))->first();
                                $QuestionAnswerMain->status = "complete";
                                $QuestionAnswerMain->update();
                                
                            if(QuestionAnswerMain::where("user_id",session('user_id'))->exists() && QuestionAnswerMain::where("user_id",session('user_id'))->value('id') != session('answer_main_id')){
                                QuestionAnswerMain::where("id",session('answer_main_id'))->delete();
                                QuestionAnswers::where("answer_main_id",session('answer_main_id'))->delete();
                                $request->session()->forget(['answer_main_id']);
                            }
                            else{
                                $BrainResultsController = new BrainResultsController();
                                $BrainResultsController->add_brain_results(session('answer_main_id'));
                                $request->session()->forget(['answer_main_id']);
                            }
                                    return redirect('start-dimentaional-questions');
                            }
                                else{
                                    $next_page = $question_no +1;
                                    return redirect('questions/q'.$next_page.'');
                            }
                    

                    }
                    else{
                        if($request->question_no == 1){

                            $QuestionAnswerMain = new QuestionAnswerMain();
                            $QuestionAnswerMain->user_id = session('user_id');
                            $QuestionAnswerMain->save();

                            $QuestionAnswers = new QuestionAnswers();
                            $QuestionAnswers->answer_main_id = $QuestionAnswerMain->id;
                            $QuestionAnswers->question_no = $request->question_no;
                            $QuestionAnswers->question_id = $request->question_id;
                            $QuestionAnswers->first_answer = $request->first_answer;
                            $QuestionAnswers->second_answer = $request->second_answer;
                            $QuestionAnswers->third_answer = $request->third_answer;
                            $QuestionAnswers->forth_answer = $request->forth_answer;
                            $QuestionAnswers->save();

                            session(['answer_main_id' => $QuestionAnswerMain->id]);

                            return redirect('questions/q2');
                        }
                        else{
                            return redirect('questions/q1')->with('message', 'Please answer this question first');
                        }
                    }
            }
            else{
                if(session('answer_main_id')){
                    $question_no = $request->question_no;

                    if(QuestionAnswers::where("answer_main_id", session('answer_main_id'))->where("question_no", $request->question_no)
                    ->where("question_id", $request->question_id)->exists()){

                        $QuestionAnswers = QuestionAnswers::where("answer_main_id", session('answer_main_id'))->where("question_no", $request->question_no)
                        ->where("question_id", $request->question_id)->first();
                        $QuestionAnswers->first_answer = $request->first_answer;
                        $QuestionAnswers->second_answer = $request->second_answer;
                        $QuestionAnswers->third_answer = $request->third_answer;
                        $QuestionAnswers->forth_answer = $request->forth_answer;
                        $QuestionAnswers->update();
                    }
                    else{
                        $QuestionAnswers = new QuestionAnswers();
                        $QuestionAnswers->answer_main_id = session('answer_main_id');
                        $QuestionAnswers->question_no = $request->question_no;
                        $QuestionAnswers->question_id = $request->question_id;
                        $QuestionAnswers->first_answer = $request->first_answer;
                        $QuestionAnswers->second_answer = $request->second_answer;
                        $QuestionAnswers->third_answer = $request->third_answer;
                        $QuestionAnswers->forth_answer = $request->forth_answer;
                        $QuestionAnswers->save();
                    }

                            if($question_no == 25){
                                $QuestionAnswerMain = QuestionAnswerMain::where('id',session('answer_main_id'))->first();
                                $QuestionAnswerMain->status = "complete";
                                $QuestionAnswerMain->update();
                                return redirect('start-dimentaional-questions');
                            }
                            else{
                                $next_page = $question_no +1;
                                return redirect('questions/q'.$next_page.'');
                            }
                    

                    }
                    else{
                        if($request->question_no == 1){
                            $QuestionAnswerMain = new QuestionAnswerMain();
                            $QuestionAnswerMain->save();

                            $QuestionAnswers = new QuestionAnswers();
                            $QuestionAnswers->answer_main_id = $QuestionAnswerMain->id;
                            $QuestionAnswers->question_no = $request->question_no;
                            $QuestionAnswers->question_id = $request->question_id;
                            $QuestionAnswers->first_answer = $request->first_answer;
                            $QuestionAnswers->second_answer = $request->second_answer;
                            $QuestionAnswers->third_answer = $request->third_answer;
                            $QuestionAnswers->forth_answer = $request->forth_answer;
                            $QuestionAnswers->save();

                            session(['answer_main_id' => $QuestionAnswerMain->id]);

                            return redirect('questions/q2');
                        }
                        else{
                            return redirect('questions/q1')->with('message', 'Please answer this question first');
                        }
                    }
            }
        
    }
    
    
//     public function save_child_answers(Request $request)
// {
//     if (session('user_id')) {
//         if (session('child_answer_main_id')) {
//             $question_no = $request->question_no;

//             if (ChildQuestionAnswers::where("answer_main_id", session('child_answer_main_id'))
//                 ->where("question_no", $request->question_no)
//                 ->where("question_id", $request->question_id)
//                 ->exists()) {
                
//                 // Update existing answer
//                 $ChildQuestionAnswers = ChildQuestionAnswers::where("answer_main_id", session('child_answer_main_id'))
//                     ->where("question_no", $request->question_no)
//                     ->where("question_id", $request->question_id)
//                     ->first();
//                 $ChildQuestionAnswers->first_answer = $request->first_answer;
//                 $ChildQuestionAnswers->second_answer = $request->second_answer;
//                 $ChildQuestionAnswers->third_answer = $request->third_answer;
//                 $ChildQuestionAnswers->forth_answer = $request->forth_answer;
//                 $ChildQuestionAnswers->update();
//             } else {
//                 // Save new answer
//                 $ChildQuestionAnswers = new ChildQuestionAnswers();
//                 $ChildQuestionAnswers->answer_main_id = session('child_answer_main_id');
//                 $ChildQuestionAnswers->question_no = $request->question_no;
//                 $ChildQuestionAnswers->question_id = $request->question_id;
//                 $ChildQuestionAnswers->first_answer = $request->first_answer;
//                 $ChildQuestionAnswers->second_answer = $request->second_answer;
//                 $ChildQuestionAnswers->third_answer = $request->third_answer;
//                 $ChildQuestionAnswers->forth_answer = $request->forth_answer;
//                 $ChildQuestionAnswers->save();
//             }

//             // If last question, mark the answer main as complete
//             if ($question_no == 25) {
//                 $ChildQuestionAnswerMain = ChildQuestionAnswerMain::where('id', session('child_answer_main_id'))->first();
//                 $ChildQuestionAnswerMain->status = "complete";
//                 $ChildQuestionAnswerMain->update();

//                 // Optionally delete old answers
//                 if (ChildQuestionAnswerMain::where("user_id", session('user_id'))->exists() &&
//                     ChildQuestionAnswerMain::where("user_id", session('user_id'))->value('id') != session('child_answer_main_id')) {
//                     ChildQuestionAnswerMain::where("id", session('child_answer_main_id'))->delete();
//                     ChildQuestionAnswers::where("answer_main_id", session('child_answer_main_id'))->delete();
//                     $request->session()->forget(['child_answer_main_id']);
//                 } else {
//                     $BrainResultsController = new BrainResultsController();
//                     $BrainResultsController->add_child_brain_results(session('child_answer_main_id'));
//                     $request->session()->forget(['child_answer_main_id']);
//                 }

//                 return redirect('childquestions/d1');
//             } else {
//                 // Redirect to next question
//                 $next_page = $question_no + 1;
//                 return redirect('childquestions/q' . $next_page);
//             }
//         } else {
//             // If this is the first question
//             if ($request->question_no == 1) {
//                 $ChildQuestionAnswerMain = new ChildQuestionAnswerMain();
//                 $ChildQuestionAnswerMain->user_id = session('user_id');
//                 $ChildQuestionAnswerMain->save();

//                 $ChildQuestionAnswers = new ChildQuestionAnswers();
//                 $ChildQuestionAnswers->answer_main_id = $ChildQuestionAnswerMain->id;
//                 $ChildQuestionAnswers->question_no = $request->question_no;
//                 $ChildQuestionAnswers->question_id = $request->question_id;
//                 $ChildQuestionAnswers->first_answer = $request->first_answer;
//                 $ChildQuestionAnswers->second_answer = $request->second_answer;
//                 $ChildQuestionAnswers->third_answer = $request->third_answer;
//                 $ChildQuestionAnswers->forth_answer = $request->forth_answer;
//                 $ChildQuestionAnswers->save();

//                 session(['child_answer_main_id' => $ChildQuestionAnswerMain->id]);

//                 return redirect('childquestions/q2');
//             } else {
//                 return redirect('childquestions/q1')->with('message', 'Please answer this question first');
//             }
//         }
//     } else {
//         if (session('child_answer_main_id')) {
//             $question_no = $request->question_no;

//             if (ChildQuestionAnswers::where("answer_main_id", session('child_answer_main_id'))
//                 ->where("question_no", $request->question_no)
//                 ->where("question_id", $request->question_id)
//                 ->exists()) {

//                 $ChildQuestionAnswers = ChildQuestionAnswers::where("answer_main_id", session('child_answer_main_id'))
//                     ->where("question_no", $request->question_no)
//                     ->where("question_id", $request->question_id)
//                     ->first();
//                 $ChildQuestionAnswers->first_answer = $request->first_answer;
//                 $ChildQuestionAnswers->second_answer = $request->second_answer;
//                 $ChildQuestionAnswers->third_answer = $request->third_answer;
//                 $ChildQuestionAnswers->forth_answer = $request->forth_answer;
//                 $ChildQuestionAnswers->update();
//             } else {
//                 $ChildQuestionAnswers = new ChildQuestionAnswers();
//                 $ChildQuestionAnswers->answer_main_id = session('child_answer_main_id');
//                 $ChildQuestionAnswers->question_no = $request->question_no;
//                 $ChildQuestionAnswers->question_id = $request->question_id;
//                 $ChildQuestionAnswers->first_answer = $request->first_answer;
//                 $ChildQuestionAnswers->second_answer = $request->second_answer;
//                 $ChildQuestionAnswers->third_answer = $request->third_answer;
//                 $ChildQuestionAnswers->forth_answer = $request->forth_answer;
//                 $ChildQuestionAnswers->save();
//             }

//             if ($question_no == 25) {
//                 $ChildQuestionAnswerMain = ChildQuestionAnswerMain::where('id', session('child_answer_main_id'))->first();
//                 $ChildQuestionAnswerMain->status = "complete";
//                 $ChildQuestionAnswerMain->update();
//                 return redirect('childquestions/d1');
//             } else {
//                 $next_page = $question_no + 1;
//                 return redirect('childquestions/q' . $next_page);
//             }
//         } else {
//             if ($request->question_no == 1) {
//                 $ChildQuestionAnswerMain = new ChildQuestionAnswerMain();
//                 $ChildQuestionAnswerMain->save();

//                 $ChildQuestionAnswers = new ChildQuestionAnswers();
//                 $ChildQuestionAnswers->answer_main_id = $ChildQuestionAnswerMain->id;
//                 $ChildQuestionAnswers->question_no = $request->question_no;
//                 $ChildQuestionAnswers->question_id = $request->question_id;
//                 $ChildQuestionAnswers->first_answer = $request->first_answer;
//                 $ChildQuestionAnswers->second_answer = $request->second_answer;
//                 $ChildQuestionAnswers->third_answer = $request->third_answer;
//                 $ChildQuestionAnswers->forth_answer = $request->forth_answer;
//                 $ChildQuestionAnswers->save();

//                 session(['child_answer_main_id' => $ChildQuestionAnswerMain->id]);

//                 return redirect('childquestions/q2');
//             } else {
//                 return redirect('childquestions/q1')->with('message', 'Please answer this question first');
//             }
//         }
//     }
// }



//   public function save_dimensional_answers(Request $request) {
//     if (session('user_id')) {
//         if (session('d_answer_main_id')) {
//             $question_no = $request->question_no;

//             // Fetch the user_type and category from dimensional_question_2 table
//             $dimensional_question_2 = DB::table('dimensional_question_2')
//                 ->where('id', $request->question_id)
//                 ->first();
//             $user_type = $dimensional_question_2 ? $dimensional_question_2->user_type : null;
//             $category = $dimensional_question_2 ? $dimensional_question_2->category : null;

//             if (DimensionalQuestionAnswers::where("category", session('d_answer_main_id'))
//                 ->where("question_no", $request->question_no)
//                 ->where("question_id", $request->question_id)->exists()) {

//                 // If the answer for this question exists, update it
//                 $DimensionalQuestionAnswers = DimensionalQuestionAnswers::where("category", session('d_answer_main_id'))
//                     ->where("question_no", $request->question_no)
//                     ->where("question_id", $request->question_id)
//                     ->first();
//                 $DimensionalQuestionAnswers->answer = $request->answer;
//                 $DimensionalQuestionAnswers->user_type = $user_type;
//                 $DimensionalQuestionAnswers->category = $category;
//                 $DimensionalQuestionAnswers->update();

//             } else {
//                 // If the answer for this question doesn't exist, create a new one
//                 $DimensionalQuestionAnswers = new DimensionalQuestionAnswers();
//                 $DimensionalQuestionAnswers->category = $category;
//                 $DimensionalQuestionAnswers->question_no = $request->question_no;
//                 $DimensionalQuestionAnswers->question_id = $request->question_id;
//                 $DimensionalQuestionAnswers->answer = $request->answer;
//                 $DimensionalQuestionAnswers->user_type = $user_type;
//                 $DimensionalQuestionAnswers->save();
//             }

//             if ($question_no == 12) {
//                 $DimensionalQuestionAnswerMain = DimensionalQuestionAnswerMain::where('id', session('d_answer_main_id'))->first();
//                 $DimensionalQuestionAnswerMain->status = "complete";
//                 $DimensionalQuestionAnswerMain->update();

//                 $BrainResultsController = new BrainResultsController();
//                 $BrainResultsController->add_dimensional_brain_results(session('d_answer_main_id'));
//                 $request->session()->forget(['d_answer_main_id']);

//                 return redirect('packages');
//             } else {
//                 $next_page = $question_no + 1;
//                 return redirect('questions/d' . $next_page);
//             }
//         } else {
//             if ($request->question_no == 1) {
//                 // Create a new main answer record
//                 $DimensionalQuestionAnswerMain = new DimensionalQuestionAnswerMain();
//                 $DimensionalQuestionAnswerMain->user_id = session('user_id');
//                 $DimensionalQuestionAnswerMain->save();

//                 // Fetch user_type and category for the first question
//                 $dimensional_question_2 = DB::table('dimensional_question_2')
//                     ->where('id', $request->question_id)
//                     ->first();
//                 $user_type = $dimensional_question_2 ? $dimensional_question_2->user_type : null;
//                 $category = $dimensional_question_2 ? $dimensional_question_2->category : null;

//                 // Save the first answer
//                 $DimensionalQuestionAnswers = new DimensionalQuestionAnswers();
//                 $DimensionalQuestionAnswers->category = $category;
//                 $DimensionalQuestionAnswers->question_no = $request->question_no;
//                 $DimensionalQuestionAnswers->question_id = $request->question_id;
//                 $DimensionalQuestionAnswers->answer = $request->answer;
//                 $DimensionalQuestionAnswers->user_type = $user_type;
//                 $DimensionalQuestionAnswers->save();

//                 session(['d_answer_main_id' => $DimensionalQuestionAnswerMain->id]);

//                 return redirect('questions/d2');
//             } else {
//                 return redirect('questions/d1')->with('message', 'Please answer this question first');
//             }
//         }
//     } else {
//         if (session('d_answer_main_id')) {
//             $question_no = $request->question_no;

//             // Fetch the user_type and category from dimensional_question_2 table
//             $dimensional_question_2 = DB::table('dimensional_question_2')
//                 ->where('id', $request->question_id)
//                 ->first();
//             $user_type = $dimensional_question_2 ? $dimensional_question_2->user_type : null;
//             $category = $dimensional_question_2 ? $dimensional_question_2->category : null;

//             if (DimensionalQuestionAnswers::where("category", session('d_answer_main_id'))
//                 ->where("question_no", $request->question_no)
//                 ->where("question_id", $request->question_id)->exists()) {

//                 $DimensionalQuestionAnswers = DimensionalQuestionAnswers::where("category", session('d_answer_main_id'))
//                     ->where("question_no", $request->question_no)
//                     ->where("question_id", $request->question_id)
//                     ->first();
//                 $DimensionalQuestionAnswers->answer = $request->answer;
//                 $DimensionalQuestionAnswers->user_type = $user_type;
//                 $DimensionalQuestionAnswers->category = $category;
//                 $DimensionalQuestionAnswers->update();
//             } else {
//                 $DimensionalQuestionAnswers = new DimensionalQuestionAnswers();
//                 $DimensionalQuestionAnswers->category = $category;
//                 $DimensionalQuestionAnswers->question_no = $request->question_no;
//                 $DimensionalQuestionAnswers->question_id = $request->question_id;
//                 $DimensionalQuestionAnswers->answer = $request->answer;
//                 $DimensionalQuestionAnswers->user_type = $user_type;
//                 $DimensionalQuestionAnswers->save();
//             }

//             if ($question_no == 12) {
//                 $DimensionalQuestionAnswerMain = DimensionalQuestionAnswerMain::where('id', session('d_answer_main_id'))->first();
//                 $DimensionalQuestionAnswerMain->status = "complete";
//                 $DimensionalQuestionAnswerMain->update();

//                 return redirect('sign-in');
//             } else {
//                 $next_page = $question_no + 1;
//                 return redirect('questions/d' . $next_page);
//             }
//         } else {
//             if ($request->question_no == 1) {
//                 $DimensionalQuestionAnswerMain = new DimensionalQuestionAnswerMain();
//                 $DimensionalQuestionAnswerMain->save();

//                 // Fetch user_type and category for the first question
//                 $dimensional_question_2 = DB::table('dimensional_question_2')
//                     ->where('id', $request->question_id)
//                     ->first();
//                 $user_type = $dimensional_question_2 ? $dimensional_question_2->user_type : null;
//                 $category = $dimensional_question_2 ? $dimensional_question_2->category : null;

//                 $DimensionalQuestionAnswers = new DimensionalQuestionAnswers();
//                 $DimensionalQuestionAnswers->category = $category;
//                 $DimensionalQuestionAnswers->question_no = $request->question_no;
//                 $DimensionalQuestionAnswers->question_id = $request->question_id;
//                 $DimensionalQuestionAnswers->answer = $request->answer;
//                 $DimensionalQuestionAnswers->user_type = $user_type;
//                 $DimensionalQuestionAnswers->save();

//                 session(['d_answer_main_id' => $DimensionalQuestionAnswerMain->id]);

//                 return redirect('questions/d2');
//             } else {
//                 return redirect('questions/d1')->with('message', 'Please answer this question first');
//             }
//         }
//     }
// }

public function save_dimensional_answers(Request $request) {
    if (session('user_id')) {
        if (session('d_answer_main_id')) {
            $question_no = $request->question_no;

            // Fetch the user_type and category from dimensional_question_2 table
            $dimensional_question_2 = DB::table('dimensional_question_2')
                ->where('id', $request->question_id)
                ->first();
            $user_type = $dimensional_question_2 ? $dimensional_question_2->user_type : null;
            $category = $dimensional_question_2 ? $dimensional_question_2->category : null;

            if (DimensionalQuestionAnswers::where("category", session('d_answer_main_id'))
                ->where("question_no", $request->question_no)
                ->where("question_id", $request->question_id)->exists()) {

                // If the answer for this question exists, update it
                $DimensionalQuestionAnswers = DimensionalQuestionAnswers::where("category", session('d_answer_main_id'))
                    ->where("question_no", $request->question_no)
                    ->where("question_id", $request->question_id)
                    ->first();
                $DimensionalQuestionAnswers->answer = $request->answer;
                $DimensionalQuestionAnswers->user_type = $user_type;
                $DimensionalQuestionAnswers->category = $category;
                $DimensionalQuestionAnswers->user_id = session('user_id');  // Store user_id
                $DimensionalQuestionAnswers->update();

            } else {
                // If the answer for this question doesn't exist, create a new one
                $DimensionalQuestionAnswers = new DimensionalQuestionAnswers();
                $DimensionalQuestionAnswers->category = $category;
                $DimensionalQuestionAnswers->question_no = $request->question_no;
                $DimensionalQuestionAnswers->question_id = $request->question_id;
                $DimensionalQuestionAnswers->answer = $request->answer;
                $DimensionalQuestionAnswers->user_type = $user_type;
                $DimensionalQuestionAnswers->user_id = session('user_id');  // Store user_id
                $DimensionalQuestionAnswers->save();
            }

            if ($question_no == 12) {
                $DimensionalQuestionAnswerMain = DimensionalQuestionAnswerMain::where('id', session('d_answer_main_id'))->first();
                $DimensionalQuestionAnswerMain->status = "complete";
                $DimensionalQuestionAnswerMain->update();

                $BrainResultsController = new BrainResultsController();
                $BrainResultsController->add_dimensional_brain_results(session('d_answer_main_id'));
                $request->session()->forget(['d_answer_main_id']);

                return redirect('questions-completed');
            } else {
                $next_page = $question_no + 1;
                return redirect('questions/d' . $next_page);
            }
        } else {
            if ($request->question_no == 1) {
                // Create a new main answer record
                $DimensionalQuestionAnswerMain = new DimensionalQuestionAnswerMain();
                $DimensionalQuestionAnswerMain->user_id = session('user_id');
                $DimensionalQuestionAnswerMain->save();

                // Fetch user_type and category for the first question
                $dimensional_question_2 = DB::table('dimensional_question_2')
                    ->where('id', $request->question_id)
                    ->first();
                $user_type = $dimensional_question_2 ? $dimensional_question_2->user_type : null;
                $category = $dimensional_question_2 ? $dimensional_question_2->category : null;

                // Save the first answer
                $DimensionalQuestionAnswers = new DimensionalQuestionAnswers();
                $DimensionalQuestionAnswers->category = $category;
                $DimensionalQuestionAnswers->question_no = $request->question_no;
                $DimensionalQuestionAnswers->question_id = $request->question_id;
                $DimensionalQuestionAnswers->answer = $request->answer;
                $DimensionalQuestionAnswers->user_type = $user_type;
                $DimensionalQuestionAnswers->user_id = session('user_id');  // Store user_id
                $DimensionalQuestionAnswers->save();

                session(['d_answer_main_id' => $DimensionalQuestionAnswerMain->id]);

                return redirect('questions/d2');
            } else {
                return redirect('questions/d1')->with('message', 'Please answer this question first');
            }
        }
    } else {
        if (session('d_answer_main_id')) {
            $question_no = $request->question_no;

            // Fetch the user_type and category from dimensional_question_2 table
            $dimensional_question_2 = DB::table('dimensional_question_2')
                ->where('id', $request->question_id)
                ->first();
            $user_type = $dimensional_question_2 ? $dimensional_question_2->user_type : null;
            $category = $dimensional_question_2 ? $dimensional_question_2->category : null;

            if (DimensionalQuestionAnswers::where("category", session('d_answer_main_id'))
                ->where("question_no", $request->question_no)
                ->where("question_id", $request->question_id)->exists()) {

                $DimensionalQuestionAnswers = DimensionalQuestionAnswers::where("category", session('d_answer_main_id'))
                    ->where("question_no", $request->question_no)
                    ->where("question_id", $request->question_id)
                    ->first();
                $DimensionalQuestionAnswers->answer = $request->answer;
                $DimensionalQuestionAnswers->user_type = $user_type;
                $DimensionalQuestionAnswers->category = $category;
                $DimensionalQuestionAnswers->user_id = session('user_id');  // Store user_id
                $DimensionalQuestionAnswers->update();
            } else {
                $DimensionalQuestionAnswers = new DimensionalQuestionAnswers();
                $DimensionalQuestionAnswers->category = $category;
                $DimensionalQuestionAnswers->question_no = $request->question_no;
                $DimensionalQuestionAnswers->question_id = $request->question_id;
                $DimensionalQuestionAnswers->answer = $request->answer;
                $DimensionalQuestionAnswers->user_type = $user_type;
                $DimensionalQuestionAnswers->user_id = session('user_id');  // Store user_id
                $DimensionalQuestionAnswers->save();
            }

            if ($question_no == 12) {
                $DimensionalQuestionAnswerMain = DimensionalQuestionAnswerMain::where('id', session('d_answer_main_id'))->first();
                $DimensionalQuestionAnswerMain->status = "complete";
                $DimensionalQuestionAnswerMain->update();

                return redirect('questions-completed');
            } else {
                $next_page = $question_no + 1;
                return redirect('questions/d' . $next_page);
            }
        } else {
            if ($request->question_no == 1) {
                $DimensionalQuestionAnswerMain = new DimensionalQuestionAnswerMain();
                $DimensionalQuestionAnswerMain->save();

                // Fetch user_type and category for the first question
                $dimensional_question_2 = DB::table('dimensional_question_2')
                    ->where('id', $request->question_id)
                    ->first();
                $user_type = $dimensional_question_2 ? $dimensional_question_2->user_type : null;
                $category = $dimensional_question_2 ? $dimensional_question_2->category : null;

                $DimensionalQuestionAnswers = new DimensionalQuestionAnswers();
                $DimensionalQuestionAnswers->category = $category;
                $DimensionalQuestionAnswers->question_no = $request->question_no;
                $DimensionalQuestionAnswers->question_id = $request->question_id;
                $DimensionalQuestionAnswers->answer = $request->answer;
                $DimensionalQuestionAnswers->user_type = $user_type;
                $DimensionalQuestionAnswers->user_id = session('user_id');  // Store user_id
                $DimensionalQuestionAnswers->save();

                session(['d_answer_main_id' => $DimensionalQuestionAnswerMain->id]);

                return redirect('questions/d2');
            } else {
                return redirect('questions/d1')->with('message', 'Please answer this question first');
            }
        }
    }
    
    
}






        
        
        
        
        
    

// LET USER ANSWER QUESTION ONE TIME
    // public function save_answers(Request $request){
    //     if(Auth::check()){
    //         if(Auth::user()->user_role == 2){
    //             if(session('answer_main_id')){
    //                 $question_no = $request->question_no;

    //                 if(QuestionAnswers::where("answer_main_id", session('answer_main_id'))->where("question_no", $request->question_no)->exists()){
    //                         $QuestionAnswers = QuestionAnswers::where('answer_main_id',session('answer_main_id'))->where("question_no", $request->question_no)->first();
    //                         $QuestionAnswers->question_id = $request->question_id;
    //                         $QuestionAnswers->first_answer = $request->first_answer;
    //                         $QuestionAnswers->second_answer = $request->second_answer;
    //                         $QuestionAnswers->third_answer = $request->third_answer;
    //                         $QuestionAnswers->forth_answer = $request->forth_answer;
    //                         $QuestionAnswers->update();


    //                         if($question_no == 30){

    //                             $QuestionAnswerMain = QuestionAnswerMain::where('id',session('answer_main_id'))->first();
    //                             $QuestionAnswerMain->status = "complete";
    //                             $QuestionAnswerMain->update();

    //                             $BrainResultsController = new BrainResultsController();
    //                             $BrainResultsController->add_brain_results(session('answer_main_id'));
    //                             $request->session()->forget(['answer_main_id']);
    //                             return redirect('packages');
    //                         }
    //                         else{
    //                             $next_page = $question_no +1;
    //                             return redirect('questions/q'.$next_page.'');
    //                         }
    //                 }
    //                 else{
    //                         $QuestionAnswers = new QuestionAnswers();
    //                         $QuestionAnswers->answer_main_id = session('answer_main_id');
    //                         $QuestionAnswers->question_no = $request->question_no;
    //                         $QuestionAnswers->question_id = $request->question_id;
    //                         $QuestionAnswers->first_answer = $request->first_answer;
    //                         $QuestionAnswers->second_answer = $request->second_answer;
    //                         $QuestionAnswers->third_answer = $request->third_answer;
    //                         $QuestionAnswers->forth_answer = $request->forth_answer;
    //                         $QuestionAnswers->save();

    //                         if($question_no == 30){
    //                             $QuestionAnswerMain = QuestionAnswerMain::where('id',session('answer_main_id'))->first();
    //                             $QuestionAnswerMain->status = "complete";
    //                             $QuestionAnswerMain->update();

    //                             $BrainResultsController = new BrainResultsController();
    //                             $BrainResultsController->add_brain_results(session('answer_main_id'));
    //                             $request->session()->forget(['answer_main_id']);
    //                             return redirect('packages');
    //                         }
    //                         else{
    //                             $next_page = $question_no +1;
    //                             return redirect('questions/q'.$next_page.'');
    //                         }
    //                 }

    //                 }
    //                 else{
    //                     if($request->question_no == 1){

    //                         if(QuestionAnswerMain::where("user_id",Auth::user()->id)->exists()){
    //                             $previous_answers = QuestionAnswerMain::where("user_id",Auth::user()->id)->get();
    //                             foreach($previous_answers as $previous_answer){
    //                                 QuestionAnswers::where("answer_main_id",$previous_answer->id)->delete();
    //                                 QuestionAnswerMain::where("id",$previous_answer->id)->delete();
    //                             }
    //                         }

    //                         $QuestionAnswerMain = new QuestionAnswerMain();
    //                         $QuestionAnswerMain->user_id = Auth::user()->id;
    //                         $QuestionAnswerMain->save();

    //                         $QuestionAnswers = new QuestionAnswers();
    //                         $QuestionAnswers->answer_main_id = $QuestionAnswerMain->id;
    //                         $QuestionAnswers->question_no = $request->question_no;
    //                         $QuestionAnswers->question_id = $request->question_id;
    //                         $QuestionAnswers->first_answer = $request->first_answer;
    //                         $QuestionAnswers->second_answer = $request->second_answer;
    //                         $QuestionAnswers->third_answer = $request->third_answer;
    //                         $QuestionAnswers->forth_answer = $request->forth_answer;
    //                         $QuestionAnswers->save();

    //                         session(['answer_main_id' => $QuestionAnswerMain->id]);

    //                         return redirect('questions/q2');
    //                     }
    //                     else{
    //                         return redirect('questions/q1')->with('message', 'Please answer this question first');
    //                     }
    //                 }
    //         }
    //         else{
    //             if(session('answer_main_id')){
    //                 $question_no = $request->question_no;

    //                 if(QuestionAnswers::where("answer_main_id", session('answer_main_id'))->where("question_no", $request->question_no)->exists()){
    //                         $QuestionAnswers = QuestionAnswers::where('answer_main_id',session('answer_main_id'))->where("question_no", $request->question_no)->first();
    //                         $QuestionAnswers->question_id = $request->question_id;
    //                         $QuestionAnswers->first_answer = $request->first_answer;
    //                         $QuestionAnswers->second_answer = $request->second_answer;
    //                         $QuestionAnswers->third_answer = $request->third_answer;
    //                         $QuestionAnswers->forth_answer = $request->forth_answer;
    //                         $QuestionAnswers->update();

    //                         if($question_no == 30){
    //                             $QuestionAnswerMain = QuestionAnswerMain::where('id',session('answer_main_id'))->first();
    //                             $QuestionAnswerMain->status = "complete";
    //                             $QuestionAnswerMain->update();
    //                             return redirect('sign-in');
    //                         }
    //                         else{
    //                             $next_page = $question_no +1;
    //                             return redirect('questions/q'.$next_page.'');
    //                         }
    //                 }
    //                 else{
    //                         $QuestionAnswers = new QuestionAnswers();
    //                         $QuestionAnswers->answer_main_id = session('answer_main_id');
    //                         $QuestionAnswers->question_no = $request->question_no;
    //                         $QuestionAnswers->question_id = $request->question_id;
    //                         $QuestionAnswers->first_answer = $request->first_answer;
    //                         $QuestionAnswers->second_answer = $request->second_answer;
    //                         $QuestionAnswers->third_answer = $request->third_answer;
    //                         $QuestionAnswers->forth_answer = $request->forth_answer;
    //                         $QuestionAnswers->save();

    //                         if($question_no == 30){
    //                             $QuestionAnswerMain = QuestionAnswerMain::where('id',session('answer_main_id'))->first();
    //                             $QuestionAnswerMain->status = "complete";
    //                             $QuestionAnswerMain->update();
    //                             return redirect('sign-in');
    //                         }
    //                         else{
    //                             $next_page = $question_no +1;
    //                             return redirect('questions/q'.$next_page.'');
    //                         }
    //                 }

    //                 }
    //                 else{
    //                     if($request->question_no == 1){
    //                         $QuestionAnswerMain = new QuestionAnswerMain();
    //                         $QuestionAnswerMain->save();

    //                         $QuestionAnswers = new QuestionAnswers();
    //                         $QuestionAnswers->answer_main_id = $QuestionAnswerMain->id;
    //                         $QuestionAnswers->question_no = $request->question_no;
    //                         $QuestionAnswers->question_id = $request->question_id;
    //                         $QuestionAnswers->first_answer = $request->first_answer;
    //                         $QuestionAnswers->second_answer = $request->second_answer;
    //                         $QuestionAnswers->third_answer = $request->third_answer;
    //                         $QuestionAnswers->forth_answer = $request->forth_answer;
    //                         $QuestionAnswers->save();

    //                         session(['answer_main_id' => $QuestionAnswerMain->id]);

    //                         return redirect('questions/q2');
    //                     }
    //                     else{
    //                         return redirect('questions/q1')->with('message', 'Please answer this question first');
    //                     }
    //                 }
    //         }
    //     }
    //     else{
    //         if(session('answer_main_id')){
    //         $question_no = $request->question_no;

    //         if(QuestionAnswers::where("answer_main_id", session('answer_main_id'))->where("question_no", $request->question_no)->exists()){
    //                 $QuestionAnswers = QuestionAnswers::where('answer_main_id',session('answer_main_id'))->where("question_no", $request->question_no)->first();
    //                 $QuestionAnswers->question_id = $request->question_id;
    //                 $QuestionAnswers->first_answer = $request->first_answer;
    //                 $QuestionAnswers->second_answer = $request->second_answer;
    //                 $QuestionAnswers->third_answer = $request->third_answer;
    //                 $QuestionAnswers->forth_answer = $request->forth_answer;
    //                 $QuestionAnswers->update();

    //                if($question_no == 30){
    //                     $QuestionAnswerMain = QuestionAnswerMain::where('id',session('answer_main_id'))->first();
    //                     $QuestionAnswerMain->status = "complete";
    //                     $QuestionAnswerMain->update();
    //                     return redirect('sign-in');
    //                 }
    //                 else{
    //                     $next_page = $question_no +1;
    //                     return redirect('questions/q'.$next_page.'');
    //                 }
    //         }
    //         else{
    //                 $QuestionAnswers = new QuestionAnswers();
    //                 $QuestionAnswers->answer_main_id = session('answer_main_id');
    //                 $QuestionAnswers->question_no = $request->question_no;
    //                 $QuestionAnswers->question_id = $request->question_id;
    //                 $QuestionAnswers->first_answer = $request->first_answer;
    //                 $QuestionAnswers->second_answer = $request->second_answer;
    //                 $QuestionAnswers->third_answer = $request->third_answer;
    //                 $QuestionAnswers->forth_answer = $request->forth_answer;
    //                 $QuestionAnswers->save();

    //                 if($question_no == 30){
    //                     $QuestionAnswerMain = QuestionAnswerMain::where('id',session('answer_main_id'))->first();
    //                     $QuestionAnswerMain->status = "complete";
    //                     $QuestionAnswerMain->update();
    //                     return redirect('sign-in');
    //                 }
    //                 else{
    //                     $next_page = $question_no +1;
    //                     return redirect('questions/q'.$next_page.'');
    //                 }
    //         }

    //         }
    //         else{
    //             if($request->question_no == 1){
    //                 $QuestionAnswerMain = new QuestionAnswerMain();
    //                 $QuestionAnswerMain->save();

    //                 $QuestionAnswers = new QuestionAnswers();
    //                 $QuestionAnswers->answer_main_id = $QuestionAnswerMain->id;
    //                 $QuestionAnswers->question_no = $request->question_no;
    //                 $QuestionAnswers->question_id = $request->question_id;
    //                 $QuestionAnswers->first_answer = $request->first_answer;
    //                 $QuestionAnswers->second_answer = $request->second_answer;
    //                 $QuestionAnswers->third_answer = $request->third_answer;
    //                 $QuestionAnswers->forth_answer = $request->forth_answer;
    //                 $QuestionAnswers->save();

    //                 session(['answer_main_id' => $QuestionAnswerMain->id]);

    //                 return redirect('questions/q2');
    //             }
    //             else{
    //                 return redirect('questions/q1')->with('message', 'Please answer this question first');
    //             }
    //         }


    //     }
    // }
    
//   public function add_dimensional_brain_results($d_answer_main_id)
// {
//     // Initialize scores to 0
//     $analytical_score = 0;
//     $realistic_score = 0;
//     $creative_score = 0;
//     $strategic_score = 0;
//     $protective_score = 0;
//     $practical_score = 0;

//     // Fetch answers for the given d_answer_main_id
//     $answers = DimensionalQuestionAnswers::where('question_id', $d_answer_main_id)->get();

//     if ($answers->isEmpty()) {
//         // Handle the case when no answers are found for the given ID
//         return;
//     }

//     foreach ($answers as $answer) {
//         // Fetch the corresponding question using the question_id
//         $question = DimensionQuestions::find($answer->question_id);

//         if (!$question) {
//             // If the question is not found, continue to the next answer
//             continue;
//         }

//         // Check question 1 to 4 for analytical and realistic scores
//         if (in_array($answer->question_id, [1, 2, 3, 4])) {
//             if ($answer->answer == $question->answer_1) {
//                 $analytical_score += 25;
//             } elseif ($answer->answer == $question->answer_2) {
//                 $realistic_score += 25;
//             }
//         }

//         // Check question 5 to 8 for creative and strategic scores
//         elseif (in_array($answer->question_id, [5, 6, 7, 8])) {
//             if ($answer->answer == $question->answer_1) {
//                 $creative_score += 25;
//             } elseif ($answer->answer == $question->answer_2) {
//                 $strategic_score += 25;
//             }
//         }

//         // Check question 9 to 12 for protective and practical scores
//         elseif (in_array($answer->question_id, [9, 10, 11, 12])) {
//             if ($answer->answer == $question->answer_1) {
//                 $protective_score += 25;
//             } elseif ($answer->answer == $question->answer_2) {
//                 $practical_score += 25;
//             }
//         }
//     }

//     // Save the calculated scores in the UserDimensionalScore model
//     $d_score = UserDimensionalScore::where('user_id', session('user_id'))->first();

//     if (!$d_score) {
//         // If no record exists, create a new one
//         $d_score = new UserDimensionalScore();
//         $d_score->user_id = session('user_id');
//     }

//     // Update the scores
//     $d_score->analytical_score = $analytical_score;
//     $d_score->realistic_score = $realistic_score;
//     $d_score->creative_score = $creative_score;
//     $d_score->strategic_score = $strategic_score;
//     $d_score->protective_score = $protective_score;
//     $d_score->practical_score = $practical_score;
    
//     // Save the record to the database
//     $d_score->save();
// }


    
}
