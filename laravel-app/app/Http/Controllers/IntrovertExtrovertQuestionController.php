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
use App\Models\IntrovertExtrovertQuestions;
use App\Models\IntrovertExtrovertAnswerMain;
use App\Models\IntrovertExtrovertQuestionAnswers;
use App\Models\WPUsers;
use App\Http\Controllers\BrainResultsController;

class IntrovertExtrovertQuestionController extends Controller
{
 

    
    public function introvert_extrovert_question($question) {
        if (WPUsers::where('user_id', session('user_id'))->value('introverted_extroverted') == null || WPUsers::where('user_id', session('user_id'))->value('introverted_extroverted') == '') {
            if($question == "q1") {
                $question = IntrovertExtrovertQuestions::where('id', 1)->first();
                return view('introvert-extrovert-question/question', ['question' => $question, 'question_no' => 1]);
            }
            
            if($question == "q2") {
                $question = IntrovertExtrovertQuestions::where('id', 2)->first();
                return view('introvert-extrovert-question/question', ['question' => $question, 'question_no' => 2]);
            }
            if($question == "q3") {
                $question = IntrovertExtrovertQuestions::where('id', 3)->first();
                return view('introvert-extrovert-question/question', ['question' => $question, 'question_no' => 3]);
            }
            if($question == "q4") {
                $question = IntrovertExtrovertQuestions::where('id', 4)->first();
                return view('introvert-extrovert-question/question', ['question' => $question, 'question_no' => 4]);
            }
            if($question == "q5") {
                $question = IntrovertExtrovertQuestions::where('id', 5)->first();
                return view('introvert-extrovert-question/question', ['question' => $question, 'question_no' => 5]);
            }
            if($question == "q6") {
                $question = IntrovertExtrovertQuestions::where('id', 6)->first();
                return view('introvert-extrovert-question/question', ['question' => $question, 'question_no' => 6]);
            }
            if($question == "q7") {
                $question = IntrovertExtrovertQuestions::where('id', 7)->first();
                return view('introvert-extrovert-question/question', ['question' => $question, 'question_no' => 7]);
            }
            if($question == "q8") {
                $question = IntrovertExtrovertQuestions::where('id', 8)->first();
                return view('introvert-extrovert-question/question', ['question' => $question, 'question_no' => 8]);
            }
            if($question == "q9") {
                $question = IntrovertExtrovertQuestions::where('id', 9)->first();
                return view('introvert-extrovert-question/question', ['question' => $question, 'question_no' => 9]);
            }
            if($question == "q10") {
                $question = IntrovertExtrovertQuestions::where('id', 10)->first();
                return view('introvert-extrovert-question/question', ['question' => $question, 'question_no' => 10]);
            }
           
        } else {
            return redirect('dashboard')->with('fail', 'Can not take this test agin');
        }
    
}

public function save_introvert_extrovert_answers(Request $request) {
    if (session('user_id')) {
        if (session('ie_answer_main_id')) {
            $question_no = $request->question_no;

            if(IntrovertExtrovertQuestionAnswers::where("ie_answer_main_id", session('ie_answer_main_id'))->where("question_no", $request->question_no)
            ->where("question_id", $request->question_id)->exists()){

                $QuestionAnswers = IntrovertExtrovertQuestionAnswers::where("ie_answer_main_id", session('ie_answer_main_id'))->where("question_no", $request->question_no)
                ->where("question_id", $request->question_id)->first();
                $QuestionAnswers->answer = $request->answer;
                $QuestionAnswers->update();
            }
            else{
                $IntrovertExtrovertQuestionAnswers = new IntrovertExtrovertQuestionAnswers();
                $IntrovertExtrovertQuestionAnswers->ie_answer_main_id = session('ie_answer_main_id');
                $IntrovertExtrovertQuestionAnswers->question_no = $request->question_no;
                $IntrovertExtrovertQuestionAnswers->question_id = $request->question_id;
                $IntrovertExtrovertQuestionAnswers->answer = $request->answer;
                $IntrovertExtrovertQuestionAnswers->save();
            }

            if ($question_no == 10) {
                $DimensionalQuestionAnswerMain = IntrovertExtrovertAnswerMain::where('id', session('ie_answer_main_id'))->first();
                $DimensionalQuestionAnswerMain->status = "complete";
                $DimensionalQuestionAnswerMain->update();

                $BrainResultsController = new BrainResultsController();
                $BrainResultsController->add_introvert_extrovert_results(session('ie_answer_main_id'));
                $request->session()->forget(['ie_answer_main_id']);

                return redirect('introvert-or-extrovert');

            } else {
                $next_page = $question_no + 1;
                return redirect('introvert-extrovert-question/q' . $next_page);
            }
        } else {
            if ($request->question_no == 1) {
                $IntrovertExtrovertAnswerMain = new IntrovertExtrovertAnswerMain();
                $IntrovertExtrovertAnswerMain->user_id = session('user_id');
                $IntrovertExtrovertAnswerMain->save();

                $IntrovertExtrovertQuestionAnswers = new IntrovertExtrovertQuestionAnswers();
                $IntrovertExtrovertQuestionAnswers->ie_answer_main_id = $IntrovertExtrovertAnswerMain->id;
                $IntrovertExtrovertQuestionAnswers->question_no = $request->question_no;
                $IntrovertExtrovertQuestionAnswers->question_id = $request->question_id;
                $IntrovertExtrovertQuestionAnswers->answer = $request->answer;
                $IntrovertExtrovertQuestionAnswers->save();

                session(['ie_answer_main_id' => $IntrovertExtrovertAnswerMain->id]);

                return redirect('introvert-extrovert-question/q2');
            } else {
                return redirect('introvert-extrovert-question/q1')->with('message', 'Please answer this question first');
            }
        }
    } else {
        if (session('ie_answer_main_id')) {
            $question_no = $request->question_no;

            if(IntrovertExtrovertQuestionAnswers::where("ie_answer_main_id", session('ie_answer_main_id'))->where("question_no", $request->question_no)
            ->where("question_id", $request->question_id)->exists()){

                $QuestionAnswers = IntrovertExtrovertQuestionAnswers::where("ie_answer_main_id", session('ie_answer_main_id'))->where("question_no", $request->question_no)
                ->where("question_id", $request->question_id)->first();
                $QuestionAnswers->answer = $request->answer;
                $QuestionAnswers->update();
            }
            else{
                $IntrovertExtrovertQuestionAnswers = new IntrovertExtrovertQuestionAnswers();
                $IntrovertExtrovertQuestionAnswers->ie_answer_main_id = session('ie_answer_main_id');
                $IntrovertExtrovertQuestionAnswers->question_no = $request->question_no;
                $IntrovertExtrovertQuestionAnswers->question_id = $request->question_id;
                $IntrovertExtrovertQuestionAnswers->answer = $request->answer;
                $IntrovertExtrovertQuestionAnswers->save();
            }

            if ($question_no == 10) {
                $DimensionalQuestionAnswerMain = IntrovertExtrovertAnswerMain::where('id', session('ie_answer_main_id'))->first();
                $DimensionalQuestionAnswerMain->status = "complete";
                $DimensionalQuestionAnswerMain->update();

                return redirect('sign-in');
            } else {
                $next_page = $question_no + 1;
                return redirect('introvert-extrovert-question/q' . $next_page);
            }
        } else {
            if ($request->question_no == 1) {
                $IntrovertExtrovertAnswerMain = new IntrovertExtrovertAnswerMain();
                $IntrovertExtrovertAnswerMain->save();

                $IntrovertExtrovertQuestionAnswers = new IntrovertExtrovertQuestionAnswers();
                $IntrovertExtrovertQuestionAnswers->ie_answer_main_id = $IntrovertExtrovertAnswerMain->id;
                $IntrovertExtrovertQuestionAnswers->question_no = $request->question_no;
                $IntrovertExtrovertQuestionAnswers->question_id = $request->question_id;
                $IntrovertExtrovertQuestionAnswers->answer = $request->answer;
                $IntrovertExtrovertQuestionAnswers->save();

                session(['ie_answer_main_id' => $IntrovertExtrovertAnswerMain->id]);

                return redirect('introvert-extrovert-question/q2');
            } else {
                return redirect('introvert-extrovert-question/q1')->with('message', 'Please answer this question first');
            }
        }
    }
    
    
}

    
}
