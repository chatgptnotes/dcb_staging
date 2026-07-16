@include('new_layouts.header')
<?php
use App\Models\WPUsers;
use App\Models\BrainScores;
use App\Models\SkillBrainScores;
use App\Models\QuestionAnswerMain;
use App\Models\SkillTestAnswersMain;

$attempt = QuestionAnswerMain::where("user_id", session('user_id'))->where('status', 'complete')->first();
$brain_score = SkillBrainScores::where("skill_test_answer_main_id", $attempt->id)->first(); 
// $brain_profile_id = WPUsers::where("user_id", session('user_id'))->value('brain_profile_id');
$dob = session('user_dob'); 
$age = \Carbon\Carbon::parse($dob)->age;  

$brain_profile_id = WPUsers::where("user_id", session('user_id'))->value('brain_profile_id');

?>

<section class="py-5">
    <div class="container text-center pt-5 pb-1">
        <h3 class="heading1 text-purple">Take the first step toward understanding your brain better with us!</h3>
        <p class="p1 ">Self Discovery to  Holistic Growth & Development harnesses the principles of Neuro development and Neuroplasticity.</p>
    </div>
</section>



<section class="py-5">
    <div class="container text-center pt-5 pb-1">
        <h3 class="heading1 text-purple">Take the first step toward understanding your brain better with us!</h3>
        <p class="p1 ">Self Discovery to  Holistic Growth & Development harnesses the principles of Neuro development and Neuroplasticity.</p>
    </div>
</section>

<?php if ($report_type == 'Inclination-for-subjects-naturally'): ?>
    <?php if ($brain_profile_id == 1): ?>
       
    <?php elseif ($brain_profile_id == 2): ?>
        
    <?php elseif ($brain_profile_id == 3): ?>
       
    <?php elseif ($brain_profile_id == 4): ?>
       
    <?php elseif ($brain_profile_id == 5): ?>
       
    <?php elseif ($brain_profile_id == 6): ?>
        
    <?php elseif ($brain_profile_id == 7): ?>
        
    <?php elseif ($brain_profile_id == 8): ?>
        
    <?php elseif ($brain_profile_id == 9): ?>
        
    <?php elseif ($brain_profile_id == 10): ?>
        
    <?php elseif ($brain_profile_id == 11): ?>
        
    <?php elseif ($brain_profile_id == 12): ?>
        
    <?php elseif ($brain_profile_id == 13): ?>
        
    <?php elseif ($brain_profile_id == 14): ?>
       
    <?php elseif ($brain_profile_id == 15): ?>
    <?php else : ?>
    <?php endif; ?>


<?php endif; ?>
