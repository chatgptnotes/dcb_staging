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
use App\Models\QuestionAnswerMain;
use App\Models\QuestionAnswers;
use App\Models\CustomerDetails;
use App\Models\BrainScores;
use App\Models\BrainCodeResults;
use App\Models\ProfileTypes;
use App\Models\WPUsers;
use App\Models\DimensionalQuestionAnswerMain;
use App\Models\DimensionalQuestionAnswers;
use App\Models\DimensionQuestions;
use App\Models\IntrovertExtrovertQuestionAnswers;
use App\Models\UserDimensionalScore;
use App\Models\IntrovertExtrovertQuestions;
use App\Models\SkillTestQuestionAnswers;
use App\Models\SkillTestQuestions;
use App\Models\SkillBrainScores;


class BrainResultsController extends Controller
{
    // public function add_brain_results($answer_main_id)
    // {
    //         //$answer_main_id = QuestionAnswerMain::where("user_id",Auth::user()->id)->value('id');
    //         $answers = QuestionAnswers::where("answer_main_id",$answer_main_id)->get();
    //         $l1_score = 0;
    //         $l2_score = 0;
    //         $r1_score = 0;
    //         $r2_score = 0;

    //         foreach($answers as $answer){

    //             //score 4
    //             if(Questions::where("id", $answer->question_id)->where("answer_1", $answer->first_answer)->exists()){
    //                 $l1_score = $l1_score+5;
    //             }
    //             elseif(Questions::where("id", $answer->question_id)->where("answer_2", $answer->first_answer)->exists()){
    //                 $l2_score = $l2_score+5;
    //             }
    //             elseif(Questions::where("id", $answer->question_id)->where("answer_3", $answer->first_answer)->exists()){
    //                 $r1_score = $r1_score+5;
    //             }
    //             elseif(Questions::where("id", $answer->question_id)->where("answer_4", $answer->first_answer)->exists()){
    //                 $r2_score = $r2_score+5;
    //             }
           

    //             //score 3
    //             if(Questions::where("id", $answer->question_id)->where("answer_1", $answer->second_answer)->exists()){
    //                 $l1_score = $l1_score+4;
    //             }
    //             elseif(Questions::where("id", $answer->question_id)->where("answer_2", $answer->second_answer)->exists()){
    //                 $l2_score = $l2_score+4;
    //             }
    //             elseif(Questions::where("id", $answer->question_id)->where("answer_3", $answer->second_answer)->exists()){
    //                 $r1_score = $r1_score+4;
    //             }
    //             elseif(Questions::where("id", $answer->question_id)->where("answer_4", $answer->second_answer)->exists()){
    //                 $r2_score = $r2_score+4;
    //             }
          

    //             //score 2
    //             if(Questions::where("id", $answer->question_id)->where("answer_1", $answer->third_answer)->exists()){
    //                 $l1_score = $l1_score+2;
    //             }
    //             elseif(Questions::where("id", $answer->question_id)->where("answer_2", $answer->third_answer)->exists()){
    //                 $l2_score = $l2_score+2;
    //             }
    //             elseif(Questions::where("id", $answer->question_id)->where("answer_3", $answer->third_answer)->exists()){
    //                 $r1_score = $r1_score+2;
    //             }
    //             elseif(Questions::where("id", $answer->question_id)->where("answer_4", $answer->third_answer)->exists()){
    //                 $r2_score = $r2_score+2;
    //             }


    //             //score 1
    //             if(Questions::where("id", $answer->question_id)->where("answer_1", $answer->forth_answer)->exists()){
    //                 $l1_score = $l1_score+1;
    //             }
    //             elseif(Questions::where("id", $answer->question_id)->where("answer_2", $answer->forth_answer)->exists()){
    //                 $l2_score = $l2_score+1;
    //             }
    //             elseif(Questions::where("id", $answer->question_id)->where("answer_3", $answer->forth_answer)->exists()){
    //                 $r1_score = $r1_score+1;
    //             }
    //             elseif(Questions::where("id", $answer->question_id)->where("answer_4", $answer->forth_answer)->exists()){
    //                 $r2_score = $r2_score+1;
    //             }
      


    //         }
    //         $l1_code = 0;
    //         $l2_code = 0;
    //         $r1_code = 0;
    //         $r2_code = 0;

    //         if($l1_score >= 75){
    //             $l1_code = 1;
    //         }
    //         elseif($l1_score > 65){
    //             $l1_code = 2;
    //         }
    //         else{
    //             $l1_code = 3;
    //         }


    //         if($l2_score >= 75){
    //             $l2_code = 1;
    //         }
    //         elseif($l2_score > 65){
    //             $l2_code = 2;
    //         }
    //         else{
    //             $l2_code = 3;
    //         }

    //         if($r1_score >= 75){
    //             $r1_code = 1;
    //         }
    //         elseif($r1_score > 65){
    //             $r1_code = 2;
    //         }
    //         else{
    //             $r1_code = 3;
    //         }

    //         if($r2_score >= 75){
    //             $r2_code = 1;
    //         }
    //         elseif($r2_score > 65){
    //             $r2_code = 2;
    //         }
    //         else{
    //             $r2_code = 3;
    //         }

    //     if(BrainScores::where("answer_main_id", $answer_main_id)->exists()){

    //         $brain_score = BrainScores::where("answer_main_id", $answer_main_id)->first();
    //         $brain_score->l1_score = $l1_score;
    //         $brain_score->l2_score = $l2_score;
    //         $brain_score->r1_score = $r1_score;
    //         $brain_score->r2_score = $r2_score;
    //         $brain_score->cerebral_score  =  $l1_score + $r1_score;
    //         $brain_score->limbic_score = $l2_score + $r2_score;
    //         $brain_score->result_code = $l1_code."-".$l2_code."-".$r2_code."-".$r1_code;
    //         $brain_score->update();

    //         $brain_score_updated = BrainScores::where("answer_main_id", $answer_main_id)->first();

    //         $BrainResultsController = new BrainResultsController();
    //         $BrainResultsController->update_brain_result($brain_score_updated,$answer_main_id);
    //     }
    //     else{

    //         $brain_score = new BrainScores();
    //         $brain_score->answer_main_id = $answer_main_id;
    //         $brain_score->l1_score = $l1_score;
    //         $brain_score->l2_score = $l2_score;
    //         $brain_score->r1_score = $r1_score;
    //         $brain_score->r2_score = $r2_score;
    //         $brain_score->cerebral_score  =  $l1_score + $r1_score;
    //         $brain_score->limbic_score = $l2_score + $r2_score;
    //         $brain_score->result_code = $l1_code."-".$l2_code."-".$r2_code."-".$r1_code;
    //         $brain_score->save();

    //         $brain_score_updated = BrainScores::where("answer_main_id", $answer_main_id)->first();

    //         $BrainResultsController = new BrainResultsController();
    //         $BrainResultsController->update_brain_result($brain_score_updated,$answer_main_id);
    //     }


    // }
    public function add_brain_results($answer_main_id)
    {
        $answers = QuestionAnswers::where("answer_main_id", $answer_main_id)->get();
        
        $l1_score = $l2_score = $r1_score = $r2_score = 0;
    
        foreach ($answers as $answer) {
            $question = Questions::where("id", $answer->question_id)->first();
    
            if ($question) {
                $scores = [
                    $answer->first_answer => 5,
                    $answer->second_answer => 4,
                    $answer->third_answer => 2,
                    $answer->forth_answer => 1
                ];
    
                foreach ($scores as $user_answer => $score) {
                    if ($user_answer === $question->answer_1) {
                        $l1_score += $score;
                    } elseif ($user_answer === $question->answer_2) {
                        $l2_score += $score;
                    } elseif ($user_answer === $question->answer_3) {
                        $r1_score += $score;
                    } elseif ($user_answer === $question->answer_4) {
                        $r2_score += $score;
                    }
                }
            }
        }
    
      
        $l1_percentage = round(($l1_score / 300) * 100);
        $l2_percentage = round(($l2_score / 300) * 100);
        $r1_percentage = round(($r1_score / 300) * 100);
        $r2_percentage = round(($r2_score / 300) * 100);

        
        $l1_code = $this->getResultCode($l1_score);
        $l2_code = $this->getResultCode($l2_score);
        $r1_code = $this->getResultCode($r1_score);
        $r2_code = $this->getResultCode($r2_score);

        
        $brain_score = BrainScores::updateOrCreate(
            ['answer_main_id' => $answer_main_id],
            [
                'l1_score' => $l1_percentage,
                'l2_score' => $l2_percentage,
                'r1_score' => $r1_percentage,
                'r2_score' => $r2_percentage,
                'cerebral_score' => $l1_score + $r1_score,
                'limbic_score' => $l2_score + $r2_score,
                'result_code' => "{$l1_code}-{$l2_code}-{$r1_code}-{$r2_code}"
            ]
        );
    

        
        (new BrainResultsController())->update_brain_result($brain_score, $answer_main_id);
    }

public function update_brain_result($brain_score, $answer_main_id)
{
    if ($brain_score->cerebral_score >= $brain_score->limbic_score + 10) {
        $brain_type = "Cerebral";
        $brain_type_description = "You prefer to use the cerebral brain over the limbic brain. You are likely to be rational in your decisions. 
        You are likely to be solution-focused. You value accurate information and appropriate strategy for any situation. 
        You may prefer to lead than follow. You are likely to have a lot of expectations from yourself. You enjoy reading or inventing. 
        You will favour any career involving data research, administration, arts, innovation, discovery, and technical analysis.";
    } else {
        $brain_type = "Limbic";
        $brain_type_description = "You prefer to use the limbic brain over the cerebral brain. You are likely to be often emotional in your decisions. 
        You are likely to be problem-focused. You are likely to seek help and handle the situations and problems in a systematic and step-wise approach. 
        You are likely to have a lot of expectations from others. You enjoy following the guidelines and process. You are likely to enjoy careers 
        involving administration, support, hospitality, engagement with people, support to people, military or police, teaching, and training. 
        This list is not all-inclusive but an indicator for the common careers suitable to your brain design.";
    }

    $update_brain_score = BrainScores::where("answer_main_id", $answer_main_id)->first();
    $update_brain_score->brain_type = $brain_type;
    $update_brain_score->brain_type_description = $brain_type_description;
    $update_brain_score->update();

    $user = WPUsers::where('user_id', session('user_id'))->first();

    // Check if a matching profile type is found before trying to access the ID
    $profile_type = ProfileTypes::whereJsonContains('code', $brain_score->result_code)->first();

    if ($profile_type) {
        $user->brain_profile_id = $profile_type->id;
    } else {
        // Handle the case where no matching profile type is found
        // You can set a default value or handle it in another way if needed
        $user->brain_profile_id = null; // or any default value
    }

    $user->update();
}

    
    
    // public function add_dimensional_brain_results($d_answer_main_id)
    // {
    //     $analyst_score = 0;
    //     $realist_score = 0;
    //     $stalwart_score = 0;
    //     $organizer_score = 0;
    //     $strategist_score = 0;
    //     $imagineer_score = 0;
    //     $socializer_score = 0;
    //     $empathizer_score = 0;
        
    //      $answers = DimensionalQuestionAnswers::where("question_id",$d_answer_main_id)->get();
    //      foreach($answers as $answers){
    //         if(DimensionQuestions::where("id", $answers->question_id)->where("l1_analyst_answer", $answers->l1_answer)->exists()){
    //                 $analyst_score = $analyst_score+1;
    //         }
    //         else{
    //                 $realist_score = $realist_score+1;
    //         }
            
    //         if(DimensionQuestions::where("id", $answers->question_id)->where("l2_stalwart_answer", $answers->l2_answer)->exists()){
    //                 $stalwart_score = $stalwart_score+1;
    //         }
    //         else{
    //                 $organizer_score = $organizer_score+1;
    //         }
            
    //         if(DimensionQuestions::where("id", $answers->question_id)->where("r1_strategist_answer", $answers->r1_answer)->exists()){
    //                 $strategist_score = $strategist_score+1;
    //         }
    //         else{
    //                 $imagineer_score = $imagineer_score+1;
    //         }
            
    //         if(DimensionQuestions::where("id", $answers->question_id)->where("r2_socializer_answer", $answers->r2_answer)->exists()){
    //                 $socializer_score = $socializer_score+1;
    //         }
    //         else{
    //                 $empathizer_score = $empathizer_score+1;
    //         }
    //      }
         
    //     $d_score = new UserDimensionalScore();
    //     $d_score->user_id = session('user_id');
    //     $d_score->analyst_score = ($analyst_score/12)*100;
    //     $d_score->realist_score = ($realist_score/12)*100;
    //     $d_score->stalwart_score = ($stalwart_score/12)*100;
    //     $d_score->organizer_score = ($organizer_score/12)*100;
    //     $d_score->strategist_score  =  ($strategist_score/12)*100;
    //     $d_score->imagineer_score = ($imagineer_score/12)*100;
    //     $d_score->socializer_score = ($socializer_score/12)*100;
    //     $d_score->empathizer_score = ($empathizer_score/12)*100;
    //     $d_score->save();
        
    //     // $d_score = new UserDimensionalScore();
    //     // $d_score->user_id = session('user_id');
    //     // $d_score->analyst_score = $analyst_score;
    //     // $d_score->realist_score = $realist_score;
    //     // $d_score->stalwart_score = $stalwart_score;
    //     // $d_score->organizer_score = $organizer_score;
    //     // $d_score->strategist_score  =  $strategist_score;
    //     // $d_score->imagineer_score = $imagineer_score;
    //     // $d_score->socializer_score = $socializer_score;
    //     // $d_score->empathizer_score = $empathizer_score;
    //     // $d_score->save();
    // }
    
    
//   public function add_dimensional_brain_results($d_answer_main_id) {
//     // Initialize all scores
//     $analytical_score = 0;
//     $realistic_score = 0;
//     $creative_score = 0;
//     $strategic_score = 0;
//     $protective_score = 0;
//     $practical_score = 0;

//     // Get all answers from DimensionalQuestionAnswers for the given main answer ID
//     $answers = DimensionalQuestionAnswers::where('question_id', $d_answer_main_id)->get();

//     // Loop through all answers
//   foreach ($answers as $answer) {
//     // Check if the question_id matches and answer_1 matches the user's answer
//     if (DimensionQuestions::where("question_id", $answer->question_id)
//                           ->where("answer_1", $answer->answer)
//                           ->exists()) {
//         // If match is found, add 25 to analyst_score
//         $analyst_score += 25;
//     } else {
//         // If no match, add 25 to analyst_score (assuming you meant to handle a different case here)
//         $analyst_score += 25;
//     }

        
    
// }





        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
//     //     $question_id = $answer->question_id;
//     //     $user_answer = $answer->answer; // Standardizing user answer

//     //     // Fetch the corresponding question from DimensionalQuestions
//     //     $question = DimensionalQuestions::where('question_id', $question_id)->first();

//     //     if ($question) {
//     //         // Standardizing question's predefined answers
//     //         $answer_1 = $question->answer_1;
//     //         $answer_2 = $question->answer_2;

//     //         // Compare answer based on question_id range and update the scores
//     //         if (in_array($question_id, [1, 2, 3, 4])) {
//     //             // Check answer for Analytical vs Realistic scoring
//     //             if ($user_answer == $answer_1) {
//     //                 $analytical_score += 25;
//     //             } elseif ($user_answer == $answer_2) {
//     //                 $realistic_score += 25;
//     //             }
//     //         } elseif (in_array($question_id, [5, 6, 7, 8])) {
//     //             // Check answer for Creative vs Strategic scoring
//     //             if ($user_answer == $answer_1) {
//     //                 $creative_score += 25;
//     //             } elseif ($user_answer == $answer_2) {
//     //                 $strategic_score += 25;
//     //             }
//     //         } elseif (in_array($question_id, [9, 10, 11, 12])) {
//     //             // Check answer for Protective vs Practical scoring
//     //             if ($user_answer == $answer_1) {
//     //                 $protective_score += 25;
//     //             } elseif ($user_answer == $answer_2) {
//     //                 $practical_score += 25;
//     //             }
//     //         }
//     //     }
//     // }

//     // // Save the final scores to the UserDimensionalScore model
//     // $user_dimensional_score = new UserDimensionalScore();
//     // $user_dimensional_score->user_id = session('user_id'); // Assuming the user ID is stored in the session
//     // $user_dimensional_score->analytical_score = $analytical_score;
//     // $user_dimensional_score->realistic_score = $realistic_score;
//     // $user_dimensional_score->creative_score = $creative_score;
//     // $user_dimensional_score->strategic_score = $strategic_score;
//     // $user_dimensional_score->protective_score = $protective_score;
//     // $user_dimensional_score->practical_score = $practical_score;
//     // $user_dimensional_score->save();

//     // // You can add additional logic or redirection after saving the scores if needed
//     // return redirect('results'); // Example redirection to the results page
// }

// public function add_dimensional_brain_results($d_answer_main_id) {
   
//     // Initialize all scores
//     $analytical_score = 0;
//     $realistic_score = 0;
//     $creative_score = 0;
//     $strategic_score = 0;
//     $protective_score = 0;
//     $practical_score = 0;
    
    

//     // Get all answers from DimensionalQuestionAnswers for the given main answer ID
//     $answers = DimensionalQuestionAnswers::where('question_id', $d_answer_main_id)->get();
    
    

//     // Loop through all answers
//     foreach ($answers as $answer) {
//         // Check if the question_id matches and answer_1 matches the user's answer
//         if (DimensionQuestions::where("question_id", $answer->question_id)
//                               ->where("answer_1", $answer->answer)
//                               ->exists()) {
//             // If match is found, add 25 to analytical_score
//             $analytical_score += 25;
//         } else {
//             // If no match, add 25 to analytical_score (assuming it's an alternative scoring)
//             $realistic_score += 25;
//         }
        
//         if (DimensionQuestions::where("question_id", $answer->question_id)
//                               ->where("answer_1", $answer->answer)
//                               ->exists()) {
//             // If match is found, add 25 to analytical_score
//             $analytical_score += 25;
//         } else {
//             // If no match, add 25 to analytical_score (assuming it's an alternative scoring)
//             $realistic_score += 25;
//         }
        
//         if (DimensionQuestions::where("question_id", $answer->question_id)
//                               ->where("answer_1", $answer->answer)
//                               ->exists()) {
//             // If match is found, add 25 to analytical_score
//             $analytical_score += 25;
//         } else {
//             // If no match, add 25 to analytical_score (assuming it's an alternative scoring)
//             $realistic_score += 25;
//         }
        
//         if (DimensionQuestions::where("question_id", $answer->question_id)
//                               ->where("answer_1", $answer->answer)
//                               ->exists()) {
//             // If match is found, add 25 to analytical_score
//             $analytical_score += 25;
//         } else {
//             // If no match, add 25 to analytical_score (assuming it's an alternative scoring)
//             $realistic_score += 25;
//         }
        
//         if (DimensionQuestions::where("question_id", $answer->question_id)
//                               ->where("answer_1", $answer->answer)
//                               ->exists()) {
//             // If match is found, add 25 to analytical_score
//             $creative_score += 25;
//         } else {
//             // If no match, add 25 to analytical_score (assuming it's an alternative scoring)
//             $trategic_score += 25;
//         }
        
//         if (DimensionQuestions::where("question_id", $answer->question_id)
//                               ->where("answer_1", $answer->answer)
//                               ->exists()) {
//             // If match is found, add 25 to analytical_score
//             $creative_score += 25;
//         } else {
//             // If no match, add 25 to analytical_score (assuming it's an alternative scoring)
//             $trategic_score += 25;
//         }
        
//         if (DimensionQuestions::where("question_id", $answer->question_id)
//                               ->where("answer_1", $answer->answer)
//                               ->exists()) {
//             // If match is found, add 25 to analytical_score
//             $creative_score += 25;
//         } else {
//             // If no match, add 25 to analytical_score (assuming it's an alternative scoring)
//             $trategic_score += 25;
//         }
        
//         if (DimensionQuestions::where("question_id", $answer->question_id)
//                               ->where("answer_1", $answer->answer)
//                               ->exists()) {
//             // If match is found, add 25 to analytical_score
//             $creative_score += 25;
//         } else {
//             // If no match, add 25 to analytical_score (assuming it's an alternative scoring)
//             $trategic_score += 25;
//         }
        
//         if (DimensionQuestions::where("question_id", $answer->question_id)
//                               ->where("answer_1", $answer->answer)
//                               ->exists()) {
//             // If match is found, add 25 to analytical_score
//             $creative_score += 25;
//         } else {
//             // If no match, add 25 to analytical_score (assuming it's an alternative scoring)
//             $trategic_score += 25;
//         }
        
        
        
//     }

//     // Store final calculated score in UserDimensionalScore model
//     $user_dimensional_score = new UserDimensionalScore();
//     $user_dimensional_score->user_id = session('user_id');  
//     $user_dimensional_score->analytical_score = $analytical_score;  
//     $user_dimensional_score->realistic_score = $realistic_score;    
    
//     $user_dimensional_score->creative_score = $creative_score;
//     $user_dimensional_score->strategic_score = $strategic_score;
//     $user_dimensional_score->protective_score = $protective_score;
//     $user_dimensional_score->practical_score = $practical_score;

//     // Save the data to the database
//     $user_dimensional_score->save();

//     // Optionally, redirect or return as necessary
//     return redirect('results');  // Example redirection to a results page
// }


// public function add_dimensional_brain_results($d_answer_main_id) {
    
    
//     $analytical_score = 0;

//     $realistic_score = 0;

//     $creative_score = 0;
//     $strategic_score = 0;
//     $protective_score = 0;
//      $practical_score = 0;

   
//     // Fetch all answers linked to the main ID from dimensional_question_2_answer table
//     $answers = DimensionalQuestionAnswers::where("category", $d_answer_main_id)->get();
    
//     foreach ($answers as $answer) {
//         // Fetch the related question from dimensional_question_2 table based on the same category
//         $dimensional_question_2 = DB::table('dimensional_question_2')
//             ->where('category', $answer->category)
//             ->first();

//         if ($dimensional_question_2) {
//             // Check if the answer from dimensional_question_2_answer matches answer_1 or answer_2 in dimensional_question_2
//                             if ($answer->answer == $dimensional_question_2->answer_1) {
//                     $analytical_score += 25;
//                 } elseif ($answer->answer == $dimensional_question_2->answer_2) {
//                     $realistic_score += 25;
//                 }

//         }
       
//     }

//     // Save the calculated scores to the UserDimensionalScore table
//     $d_score = new UserDimensionalScore();
//     $d_score->user_id = session('user_id');
//     $d_score->analytical_score = $analytical_score;
//     $d_score->realistic_score = $realistic_score;
//     $d_score->creative_score = $creative_score;
//     $d_score->strategic_score = $strategic_score;
//     $d_score->protective_score = $protective_score;
//     $d_score->practical_score = $practical_score;
//     $d_score->save();
// }


public function add_dimensional_brain_results($d_answer_main_id) {
    // Initialize all scores to 0
    $analytical_score = 0;
    $realistic_score = 0;
    $creative_score = 0;
    $strategic_score = 0;
    $protective_score = 0;
    $practical_score = 0;
    
    $user_type = DimensionalQuestionAnswers::where('user_id', session('user_id'))
        ->pluck('user_type')
        ->first();
    
   
     if ($user_type == 'adult') {
    
    // 1st Question
    $Q11 = DimensionalQuestionAnswers::where('question_id', '1')
        ->where('user_id', session('user_id'))  
        ->pluck('answer')
        ->first();

    $Q12 = DimensionQuestions::where('id', '1')->pluck('answer_1')->first();
    
    if ($Q11 == $Q12) {
        $analytical_score += 25;
    } else {
        $realistic_score += 25;
    }

    // 2nd Question
    $Q21 = DimensionalQuestionAnswers::where('question_id', '2')
        ->where('user_id', session('user_id'))  
        ->pluck('answer')
        ->first();
    $Q22 = DimensionQuestions::where('id', '2')->pluck('answer_1')->first();

    if ($Q21 == $Q22) {
        $analytical_score += 25;
    } else {
        $realistic_score += 25;
    }

    // 3rd Question
    $Q31 = DimensionalQuestionAnswers::where('question_id', '3')
        ->where('user_id', session('user_id'))  
        ->pluck('answer')
        ->first();
    $Q32 = DimensionQuestions::where('id', '3')->pluck('answer_1')->first();

    if ($Q31 == $Q32) {
        $analytical_score += 25;
    } else {
        $realistic_score += 25;
    }

    // 4th Question
    $Q41 = DimensionalQuestionAnswers::where('question_id', '4')
        ->where('user_id', session('user_id'))  
        ->pluck('answer')
        ->first();
    $Q42 = DimensionQuestions::where('id', '4')->pluck('answer_1')->first();

    if ($Q41 == $Q42) {
        $analytical_score += 25;
    } else {
        $realistic_score += 25;
    }
    
    // 5th Question
    $Q51 = DimensionalQuestionAnswers::where('question_id', '5')
        ->where('user_id', session('user_id'))  
        ->pluck('answer')
        ->first();
    $Q52 = DimensionQuestions::where('id', '5')->pluck('answer_1')->first();

    if ($Q51 == $Q52) {
        $creative_score += 25;
    } else {
        $strategic_score += 25;
    }
    
    // 6th Question
    $Q61 = DimensionalQuestionAnswers::where('question_id', '6')
        ->where('user_id', session('user_id'))  
        ->pluck('answer')
        ->first();
    $Q62 = DimensionQuestions::where('id', '6')->pluck('answer_1')->first();

    if ($Q61 == $Q62) {
        $creative_score += 25;
    } else {
        $strategic_score += 25;
    }
    
    // 7th Question
    $Q71 = DimensionalQuestionAnswers::where('question_id', '7')
        ->where('user_id', session('user_id'))  
        ->pluck('answer')
        ->first();
    $Q72 = DimensionQuestions::where('id', '7')->pluck('answer_1')->first();

    if ($Q71 == $Q72) {
        $creative_score += 25;
    } else {
        $strategic_score += 25;
    }
    
    // 8th Question
    $Q81 = DimensionalQuestionAnswers::where('question_id', '8')
        ->where('user_id', session('user_id'))  
        ->pluck('answer')
        ->first();
    $Q82 = DimensionQuestions::where('id', '8')->pluck('answer_1')->first();

    if ($Q81 == $Q82) {
        $creative_score += 25;
    } else {
        $strategic_score += 25;
    }
    
    // 9th Question
    $Q91 = DimensionalQuestionAnswers::where('question_id', '9')
        ->where('user_id', session('user_id'))  
        ->pluck('answer')
        ->first();
    $Q92 = DimensionQuestions::where('id', '9')->pluck('answer_1')->first();

    if ($Q91 == $Q92) {
        $protective_score += 25;
    } else {
        $practical_score += 25;
    }
    
    // 10th Question
    $Q101 = DimensionalQuestionAnswers::where('question_id', '10')
        ->where('user_id', session('user_id'))  
        ->pluck('answer')
        ->first();
    $Q102 = DimensionQuestions::where('id', '10')->pluck('answer_1')->first();

    if ($Q101 == $Q102) {
        $protective_score += 25;
    } else {
        $practical_score += 25;
    }
    
    // 11th Question
    $Q111 = DimensionalQuestionAnswers::where('question_id', '11')
        ->where('user_id', session('user_id'))  
        ->pluck('answer')
        ->first();
    $Q112 = DimensionQuestions::where('id', '11')->pluck('answer_1')->first();

    if ($Q111 == $Q112) {
        $protective_score += 25;
    } else {
        $practical_score += 25;
    }
    
    // 12th Question
    $Q121 = DimensionalQuestionAnswers::where('question_id', '12')
        ->where('user_id', session('user_id'))  
        ->pluck('answer')
        ->first();
    $Q122 = DimensionQuestions::where('id', '12')->pluck('answer_1')->first();

    if ($Q121 == $Q122) {
        $protective_score += 25;
    } else {
        $practical_score += 25;
    }
    
     } else if ($user_type == 'child') {
    
    // 13th Question
    $Q131 = DimensionalQuestionAnswers::where('question_id', '13')
        ->where('user_id', session('user_id'))  
        ->pluck('answer')
        ->first();
    $Q132 = DimensionQuestions::where('id', '13')->pluck('answer_1')->first();

    if ($Q131 == $Q132) {
        $analytical_score += 25;
    } else {
        $realistic_score += 25;
    }
    
    // 14th Question
    $Q141 = DimensionalQuestionAnswers::where('question_id', '14')
        ->where('user_id', session('user_id'))  
        ->pluck('answer')
        ->first();
    $Q142 = DimensionQuestions::where('id', '14')->pluck('answer_1')->first();

    if ($Q141 == $Q142) {
        $analytical_score += 25;
    } else {
        $realistic_score += 25;
    }
    
    // 15th Question
    $Q151 = DimensionalQuestionAnswers::where('question_id', '15')
        ->where('user_id', session('user_id'))  
        ->pluck('answer')
        ->first();
    $Q152 = DimensionQuestions::where('id', '15')->pluck('answer_1')->first();

    if ($Q151 == $Q152) {
        $analytical_score += 25;
    } else {
        $realistic_score += 25;
    }
    
    // 16th Question
    $Q161 = DimensionalQuestionAnswers::where('question_id', '16')
        ->where('user_id', session('user_id'))  
        ->pluck('answer')
        ->first();
    $Q162 = DimensionQuestions::where('id', '16')->pluck('answer_1')->first();

    if ($Q161 == $Q162) {
        $analytical_score += 25;
    } else {
        $realistic_score += 25;
    }
    
    // 17th Question
    $Q171 = DimensionalQuestionAnswers::where('question_id', '17')
        ->where('user_id', session('user_id'))  
        ->pluck('answer')
        ->first();
    $Q172 = DimensionQuestions::where('id', '17')->pluck('answer_1')->first();

    if ($Q171 == $Q172) {
        $creative_score += 25;
    } else {
        $strategic_score += 25;
    }
    
    // 18th Question
    $Q181 = DimensionalQuestionAnswers::where('question_id', '18')
        ->where('user_id', session('user_id'))  
        ->pluck('answer')
        ->first();
    $Q182 = DimensionQuestions::where('id', '18')->pluck('answer_1')->first();

    if ($Q181 == $Q182) {
        $creative_score += 25;
    } else {
        $strategic_score += 25;
    }
    
    // 19th Question
    $Q191 = DimensionalQuestionAnswers::where('question_id', '19')
        ->where('user_id', session('user_id'))  
        ->pluck('answer')
        ->first();
    $Q192 = DimensionQuestions::where('id', '19')->pluck('answer_1')->first();

    if ($Q191 == $Q192) {
        $creative_score += 25;
    } else {
        $strategic_score += 25;
    }
    
    // 20th Question
    $Q201 = DimensionalQuestionAnswers::where('question_id', '20')
        ->where('user_id', session('user_id'))  
        ->pluck('answer')
        ->first();
    $Q202 = DimensionQuestions::where('id', '20')->pluck('answer_1')->first();

    if ($Q201 == $Q202) {
        $creative_score += 25;
    } else {
        $strategic_score += 25;
    }
    
    // 21th Question
    $Q211 = DimensionalQuestionAnswers::where('question_id', '21')
        ->where('user_id', session('user_id'))  
        ->pluck('answer')
        ->first();
    $Q212 = DimensionQuestions::where('id', '21')->pluck('answer_1')->first();

    if ($Q211 == $Q212) {
        $protective_score += 25;
    } else {
        $practical_score += 25;
    }
    
    // 22th Question
    $Q221 = DimensionalQuestionAnswers::where('question_id', '22')
        ->where('user_id', session('user_id'))  
        ->pluck('answer')
        ->first();
    $Q222 = DimensionQuestions::where('id', '22')->pluck('answer_1')->first();

    if ($Q221 == $Q222) {
        $protective_score += 25;
    } else {
        $practical_score += 25;
    }
    
    // 23th Question
    $Q231 = DimensionalQuestionAnswers::where('question_id', '23')
        ->where('user_id', session('user_id'))  
        ->pluck('answer')
        ->first();
    $Q232 = DimensionQuestions::where('id', '23')->pluck('answer_1')->first();

    if ($Q231 == $Q232) {
        $protective_score += 25;
    } else {
        $practical_score += 25;
    }
    
    // 24th Question
    $Q241 = DimensionalQuestionAnswers::where('question_id', '24')
        ->where('user_id', session('user_id'))  
        ->pluck('answer')
        ->first();
    $Q242 = DimensionQuestions::where('id', '24')->pluck('answer_1')->first();

    if ($Q241 == $Q242) {
        $protective_score += 25;
    } else {
        $practical_score += 25;
    }
     }

    // Save the calculated scores to the UserDimensionalScore table
    $d_score = new UserDimensionalScore();
    $d_score->user_id = session('user_id');
    $d_score->analytical_score = $analytical_score;
    $d_score->realistic_score = $realistic_score;
    $d_score->creative_score = $creative_score;
    $d_score->strategic_score = $strategic_score;
    $d_score->protective_score = $protective_score;
    $d_score->practical_score = $practical_score;
    $d_score->save();
}
public function add_introvert_extrovert_results($ie_answer_main_id)
{
    $answers = IntrovertExtrovertQuestionAnswers::where("ie_answer_main_id",$ie_answer_main_id)->get();
    $score  = 0;
    foreach($answers as $answers){
        if(IntrovertExtrovertQuestions::where("id", $answers->question_id)->where("answer_1", $answers->answer)->exists()){
            $score = $score+1;
        }
        else{
            $score = $score+2;
        }
    }

    if($score >= 10 && $score <= 15){
        $introverted_extroverted = 'introverted';
    }
    elseif($score >= 16 && $score <= 20){
        $introverted_extroverted = 'extroverted';
    }
    else{
        $introverted_extroverted = 'extroverted';
    }
    $user = WPUsers::where('user_id', session('user_id'))->first();
    $user->introverted_extroverted = $introverted_extroverted;
    $user->update();
}

public function add_skill_brain_results($skill_test_answer_main_id)
    {
            //$answer_main_id = QuestionAnswerMain::where("user_id",Auth::user()->id)->value('id');
            $answers = SkillTestQuestionAnswers::where("skill_test_answer_main_id",$skill_test_answer_main_id)->get();
        
            $l1_score = $l2_score = $r1_score = $r2_score = 0;

            foreach ($answers as $answer) {
                $question = SkillTestQuestions::where("id", $answer->question_id)->first();
        
                if ($question) {
                    $scores = [
                        $answer->first_answer =>9,
                        $answer->second_answer => 8,
                        $answer->third_answer => 5,
                        $answer->forth_answer => 3
                    ];
        
                    foreach ($scores as $user_answer => $score) {
                        if ($user_answer === $question->answer_1) {
                            $l1_score += $score;
                        } elseif ($user_answer === $question->answer_2) {
                            $l2_score += $score;
                        } elseif ($user_answer === $question->answer_3) {
                            $r1_score += $score;
                        } elseif ($user_answer === $question->answer_4) {
                            $r2_score += $score;
                        }
                    }
                }
            }
            
            $l1_percentage = round(($l1_score / 300) * 100);
            $l2_percentage = round(($l2_score / 300) * 100);
            $r1_percentage = round(($r1_score / 300) * 100);
            $r2_percentage = round(($r2_score / 300) * 100);
    
            
            $l1_code = $this->getResultCode($l1_score);
            $l2_code = $this->getResultCode($l2_score);
            $r1_code = $this->getResultCode($r1_score);
            $r2_code = $this->getResultCode($r2_score);
        
           
            
            $brain_score = new SkillBrainScores();
            $brain_score->skill_test_answer_main_id = $skill_test_answer_main_id;
            $brain_score->l1_score = $l1_percentage;
            $brain_score->l2_score = $l2_percentage;
            $brain_score->r1_score = $r1_percentage;
            $brain_score->r2_score = $r2_percentage;
            $brain_score->result_code = $l1_code."-".$l2_code."-".$r1_code."-".$r2_code;
            $brain_score->save();
           
            $user = WPUsers::where('user_id', session('user_id'))->first();
    
            $profile_type = ProfileTypes::whereJsonContains('code', $brain_score->result_code)->first();
        
            if ($profile_type) {
                $user->skill_brain_profile_id = $profile_type->id;
            } else {
                $user->skill_brain_profile_id = null; // or any default value
            }
        
            $user->update();
    }


private function getResultCode($score)
{
    
    // $maxScore = 125;
    // $percentage = ($score / $maxScore) * 100;

    // if ($percentage >= 75) {
    //     return 1;
    // } elseif ($percentage > 65) {
    //     return 2;
    // }
    // return 3;

    if ($score >= 75) {
        return 1;
    } elseif ($score >= 55) {
        return 2;
    }
    return 3;
}
// public function add_skill_brain_results($skill_test_answer_main_id)
//     {
//             //$answer_main_id = QuestionAnswerMain::where("user_id",Auth::user()->id)->value('id');
//             $answers = SkillTestQuestionAnswers::where("skill_test_answer_main_id",$skill_test_answer_main_id)->get();
//             $l1_score = 0;
//             $l2_score = 0;
//             $r1_score = 0;
//             $r2_score = 0;

//             foreach($answers as $answer){

//                 //score 9
//                 if(SkillTestQuestions::where("id", $answer->question_id)->where("answer_1", $answer->first_answer)->exists()){
//                     $l1_score = $l1_score+9;
//                 }
//                 elseif(SkillTestQuestions::where("id", $answer->question_id)->where("answer_2", $answer->first_answer)->exists()){
//                     $l2_score = $l2_score+9;
//                 }
//                 elseif(SkillTestQuestions::where("id", $answer->question_id)->where("answer_3", $answer->first_answer)->exists()){
//                     $r1_score = $r1_score+9;
//                 }
//                 elseif(SkillTestQuestions::where("id", $answer->question_id)->where("answer_4", $answer->first_answer)->exists()){
//                     $r2_score = $r2_score+9;
//                 }

//                 //score 8
//                 if(SkillTestQuestions::where("id", $answer->question_id)->where("answer_1", $answer->second_answer)->exists()){
//                     $l1_score = $l1_score+8;
//                 }
//                 elseif(SkillTestQuestions::where("id", $answer->question_id)->where("answer_2", $answer->second_answer)->exists()){
//                     $l2_score = $l2_score+8;
//                 }
//                 elseif(SkillTestQuestions::where("id", $answer->question_id)->where("answer_3", $answer->second_answer)->exists()){
//                     $r1_score = $r1_score+8;
//                 }
//                 elseif(SkillTestQuestions::where("id", $answer->question_id)->where("answer_4", $answer->second_answer)->exists()){
//                     $r2_score = $r2_score+8;
//                 }
    
//                 //score 5
//                 if(SkillTestQuestions::where("id", $answer->question_id)->where("answer_1", $answer->third_answer)->exists()){
//                     $l1_score = $l1_score+5;
//                 }
//                 elseif(SkillTestQuestions::where("id", $answer->question_id)->where("answer_2", $answer->third_answer)->exists()){
//                     $l2_score = $l2_score+5;
//                 }
//                 elseif(SkillTestQuestions::where("id", $answer->question_id)->where("answer_3", $answer->third_answer)->exists()){
//                     $r1_score = $r1_score+5;
//                 }
//                 elseif(SkillTestQuestions::where("id", $answer->question_id)->where("answer_4", $answer->third_answer)->exists()){
//                     $r2_score = $r2_score+5;
//                 }
           
//                 //score 3
//                 if(SkillTestQuestions::where("id", $answer->question_id)->where("answer_1", $answer->forth_answer)->exists()){
//                     $l1_score = $l1_score+3;
//                 }
//                 elseif(SkillTestQuestions::where("id", $answer->question_id)->where("answer_2", $answer->forth_answer)->exists()){
//                     $l2_score = $l2_score+3;
//                 }
//                 elseif(SkillTestQuestions::where("id", $answer->question_id)->where("answer_3", $answer->forth_answer)->exists()){
//                     $r1_score = $r1_score+3;
//                 }
//                 elseif(SkillTestQuestions::where("id", $answer->question_id)->where("answer_4", $answer->forth_answer)->exists()){
//                     $r2_score = $r2_score+3;
//                 }
       

//             }
//             $l1_code = 0;
//             $l2_code = 0;
//             $r1_code = 0;
//             $r2_code = 0;

//             if($l1_score >= 75){
//                 $l1_code = 1;
//             }
//             elseif($l1_score > 65){
//                 $l1_code = 2;
//             }
//             else{
//                 $l1_code = 3;
//             }


//             if($l2_score >= 75){
//                 $l2_code = 1;
//             }
//             elseif($l2_score > 65){
//                 $l2_code = 2;
//             }
//             else{
//                 $l2_code = 3;
//             }

//             if($r1_score >= 75){
//                 $r1_code = 1;
//             }
//             elseif($r1_score > 65){
//                 $r1_code = 2;
//             }
//             else{
//                 $r1_code = 3;
//             }

//             if($r2_score >= 75){
//                 $r2_code = 1;
//             }
//             elseif($r2_score > 65){
//                 $r2_code = 2;
//             }
//             else{
//                 $r2_code = 3;
//             }

//         // if(SkillBrainScores::where("skill_test_answer_main_id", $skill_test_answer_main_id)->exists()){

//         //     $brain_score = SkillBrainScores::where("skill_test_answer_main_id", $skill_test_answer_main_id)->first();
//         //     $brain_score->l1_score = $l1_score;
//         //     $brain_score->l2_score = $l2_score;
//         //     $brain_score->r1_score = $r1_score;
//         //     $brain_score->r2_score = $r2_score;
//         //     $brain_score->result_code = $l1_code."-".$l2_code."-".$r2_code."-".$r1_code;
//         //     $brain_score->update();

//         //     $brain_score_updated = SkillBrainScores::where("skill_test_answer_main_id", $skill_test_answer_main_id)->first();

//         //     // $BrainResultsController = new BrainResultsController();
//         //     // $BrainResultsController->update_skill_brain_result($brain_score_updated,$skill_test_answer_main_id);
//         // }
//         // else{

//             $brain_score = new SkillBrainScores();
//             $brain_score->skill_test_answer_main_id = $skill_test_answer_main_id;
//             $brain_score->l1_score = $l1_score;
//             $brain_score->l2_score = $l2_score;
//             $brain_score->r1_score = $r1_score;
//             $brain_score->r2_score = $r2_score;
//             $brain_score->result_code = $l1_code."-".$l2_code."-".$r2_code."-".$r1_code;
//             $brain_score->save();

//             // $brain_score_updated = SkillBrainScores::where("skill_test_answer_main_id", $skill_test_answer_main_id)->first();

//             // $BrainResultsController = new BrainResultsController();
//             // $BrainResultsController->update_skill_brain_result($brain_score_updated,$skill_test_answer_main_id);
//         // }


//     }


// public function update_skill_brain_result($brain_score, $skill_test_answer_main_id)
// {
  
//     $user = WPUsers::where('user_id', session('user_id'))->first();

//     // Check if a matching profile type is found before trying to access the ID
//     $profile_type = ProfileTypes::whereJsonContains('code', $brain_score->result_code)->first();

//     if ($profile_type) {
//         $user->brain_profile_id = $profile_type->id;
//     } else {

//         $user->brain_profile_id = null; 
//     }

//     $user->update();
// }
}

