
<?php
use App\Models\WPUsers;
use App\Models\BrainScores;
use App\Models\SkillBrainScores;
use App\Models\QuestionAnswerMain;
use App\Models\SkillTestAnswersMain;

$attempt = QuestionAnswerMain::where("user_id", session('user_id'))->where('status', 'complete')->first();
$introvert_extrovert = WPUsers::where('user_id',session('user_id'))->value('introverted_extroverted');
$brain_score = BrainScores::where("answer_main_id", $attempt->id)->first(); 

$brain_profile_id = WPUsers::where("user_id", session('user_id'))->value('brain_profile_id');
$dob = session('user_dob'); 
$age = \Carbon\Carbon::parse($dob)->age; 


$skill_brain_profile_id = WPUsers::where("user_id", session('user_id'))->value('skill_brain_profile_id');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style type="text/css">
    @page {
            margin: 60px 25px; 
        }
    p, h1, h2, h3, h4, h5, h6 {
        margin: 0;
        padding: 0;
    }

    table {
        border-collapse: collapse;
    }

    p {
        line-height: 1.5; 
    }

    td, th {
        padding: 5px; 
    }
    .report-header1{
        font-size:28px;
        font-weight:600;
    }
    .report-header2{
        font-size:24px;
        font-weight:600;
    }
    .report-header3{
        font-size:20px;
        font-weight:600;
    }
    .text-center{
       text-align:center;
    }
    .logo {
        position: fixed;
        top: -45px; 
        left: 0;
        right: 0;
        height: 25px;
        text-align: center;
        font-size: 14px;
        position: fixed;
        width: 150px;
    }
    .mb-0{
        margin-bottom:0px !important; 
    }
    .box-data {
    border: 2px solid #6c6859;
    border-radius: 15%;
    padding: 20px;
    
    }
    .box-title{
    font-size: 16px;
    font-weight: 800;
    margin-bottom:0px !important; 
    }
    .box-number{
    font-size: 36px;
    font-weight: 800;
    margin-bottom:0px !important; 
    }
    .body-text{
    font-size: 16px;
    font-weight: 400;  
     color:#000000b8;  
    }
   
</style>
</head>
<body>
    <img src="{{ public_path('assets/images/zebranewlogo.png') }}" class="logo">
    <div style="padding-bottom:25px;padding-left:25px;padding-right:25px;">
        <h1 class="report-header1 text-center" style="margin-bottom:25px;">Your brain Assessment result </h1>
        <table style="width:100%;border: none;">
            <tr style="vertical-align:middle;">
                <td style="width:50%;border: none;text-align:left;">
                   <img src="{{ public_path('assets/images/brain-cartoon.png') }}" style="width:100%">
                </td>
                <td style="width:50%;border: none;text-align:left;">
                   <h1 class="report-header2" style="margin-bottom:15px;">Basic Brain Report</h1>
                    <table style="width:100%;border: none;">
                        <tr style="vertical-align:middle;">
                            <td style="width:50%;border: none;text-align:left;">
                                <div class="box-data" style="background-color: #f6c94c; color: black;">
                                    <p class="mb-0 text-center box-title" style="color: black;">
                                        Candid
                                    </p>
                                    <h3 class="mb-0 text-center box-number" style="color: black;">
                                        {{$brain_score->l1_score}}%
                                    </h3>
                                </div>
                            </td>
                            <td style="width:50%;border: none;text-align:left;">
                                <div class="box-data" style="background-color: #f1935d; color: black;">
                                    <p class="mb-0 text-center box-title" style="color: black;">
                                        Fastidious
                                    </p>
                                    <h3 class="mb-0 text-center box-number" style="color: black;">
                                        {{$brain_score->l2_score}}%
                                    </h3>
                                </div>
                            </td>
                        </tr>
                        <tr style="vertical-align:middle;">
                            <td style="width:50%;border: none;text-align:left;">
                                <div class="box-data" style="background-color: #9ae4e3; color: black;">
                                    <p class="mb-0 text-center box-title" style="color: black;">
                                        Maverick
                                    </p>
                                    <h3 class="mb-0 text-center box-number" style="color: black;">
                                        {{$brain_score->r1_score}}%
                                    </h3>
                                </div>
                            </td>
                            <td style="width:50%;border: none;text-align:left;">
                                 <div class="box-data" style="background-color: #84d6a5; color: black;">
                                    <p class="mb-0 text-center box-title" style="color: black;">
                                        Affable
                                    </p>
                                    <h3 class="mb-0 text-center box-number" style="color: black;">
                                        {{$brain_score->r2_score}}%
                                    </h3>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        
<?php
if ($brain_profile_id == 1): 
if ($age >= 12 && $age <= 14){
  //Age 12-14 content here  
}
if ($age >= 15 && $age <= 18){
  //Age 15-18 content here    
}
if ($age > 18){
  //Adult content here    
} ?>

<p class="body-text" >
Your brain is highly fact-oriented, with a natural inclination to dive deep into problems. You
tend to be direct and analytical, always seeking certainty before taking action. You thoroughly
research, calculate, and evaluate every situation, weighing the pros and cons carefully.
Constantly questioning and probing for clarity is second nature to you. This makes you
excellent at problem-solving and strategizing.<br><br>
Your strength lies in your logical, objective approach, and you often cut through complexity by
sticking to the facts. While others may get lost in emotions or subjective views, you focus on
what can be proven and understood through reason. People rely on you for your candid
insights, no-nonsense attitude, and the ability to deliver grounded solutions.
</p>
<table style="width:100%;border: none;">
            <tr style="vertical-align:middle;">
                <td style="width:50%;border: none;text-align:left;">
                   <img src="{{ public_path('assets/images/growth.png') }}" style="width:100%">
                </td>
                <td style="width:50%;border: none;text-align:left;">
                    <h1 class="report-header2" style="margin-bottom:15px;">Your Indices for Future Growth</h1>
                    <p class="body-text " >
Understanding and evaluating various indices such
as Leadership, Creativity, GIG Potential,
Entrepreneurship, Team Collaboration Index, and 21stCentury Agility Index can provide valuable insights
into different aspects of your personal and
professional development. These indices measure
distinct traits and capabilities that are essential for
success in today's dynamic environment.
                    </p>
                </td>
            </tr>
        </table>
        
        
<h1 class="report-header2" style="margin-bottom:25px;">Let’s check your future opportunities</h1>       
<h1 class="report-header3" style="margin-bottom:10px;">Leadership - Low</h1> 
 <p class="body-text " >
Your natural analytical focus may cause you to prefer working independently, and you might
not always feel comfortable stepping into leadership roles. Developing your ability to inspire
and guide others can elevate your impact, especially in team environments.
</p>
<h1 class="report-header3" style="margin-bottom:10px;margin-top:20px;">Creativity - Low</h1> 
 <p class="body-text " >
While you excel at logical thinking, you might struggle to think outside the box or come up with unconventional solutions. Cultivating creativity could expand your problem-solving toolkit and open new pathways to innovation.
</p>
<h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">GIG Potential - Low</h1> 
<p class="body-text " >
Adapting to highly dynamic, growth-oriented environments may feel challenging, as you prefer structure and clarity. Building your tolerance for uncertainty and innovation will help you thrive in today’s fast-paced world.
</p>
<h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">Entrepreneurship - Low</h1> 
<p class="body-text " >
You may prefer stability over risk-taking, which can limit entrepreneurial ventures. Strengthening your ability to identify opportunities and take calculated risks can unlock new avenues for growth.
</p>
<h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">Team Collaboration Index - Low</h1> 
<p class="body-text " >
While you are excellent at individual problem-solving, working with others may present challenges. Improving communication and collaboration skills will enable you to work more effectively within teams.
</p>
<h1 class="report-header3" style="margin-bottom:10px;;margin-top:20px;">21st-Century Agility Index - Low</h1> 
<p class="body-text " >
Flexibility and adaptability to change can be areas for growth. Learning to embrace new technologies and remain open to continuous learning in a rapidly evolving environment will enhance your professional agility
</p>
<h1 class="report-header2" style="margin-bottom:25px;margin-top:50px;">Your Brain Dominance and Thinking Preferences</h1>  
@include('pdfs.report-dimension-content')
<h1 class="report-header2" style="margin-bottom:25px;margin-top:50px;">Learn More About You</h1>  
<h1 class="report-header2" style="margin-bottom:25px;margin-top:25px;">Advanced Brain Report</h1>  
 
<?php
endif;
?>

</div>
   
</body>
</html>