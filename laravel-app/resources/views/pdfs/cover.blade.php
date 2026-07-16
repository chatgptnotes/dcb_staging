<?php
use App\Models\WPUsers;
use App\Models\BrainScores;
use App\Models\SkillBrainScores;
use App\Models\QuestionAnswerMain;
use App\Models\SkillTestAnswersMain;


$user = WPUsers::where('user_id',session('user_id'))->first();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Brain Report Cover</title>
    <style>
    body {
        font-family: 'Poppins', sans-serif;
        padding-left: 65px;
        padding-right: 65px;
    }
    .report-header1{
    font-size:28px;
    font-weight:600;
    }
    .report-header2{
        font-size:24px;
        font-weight:600;
         font-family: 'Poppins', sans-serif;
    }
    .report-header3{
        font-size:20px;
        font-weight:600;
         font-family: 'Poppins', sans-serif;
    }
    .text-center{
       text-align:center;
    }
     .logo {
        position: fixed;
        top: -20px; 
        left: 45px;
        right: 0;

        text-align: center;
        font-size: 14px;
        position: fixed;
        width: 225px;
        opacity: 0.5;
     }
     .site-link{
        font-size:16px;
        font-weight:600;
        font-family: 'Poppins', sans-serif;
        color:#6B6B6B;
        position: fixed;
        left:35%;
        bottom:25px;
     }
    </style>
</head>
<body style="padding-left:65px;padding-right:65px;">

     <img src="{{ public_path('assets/images/zebranewlogo.png') }}" class="logo">
    <h1 class="report-header1 text-center" style="margin-bottom:25px;margin-top:75px !important;">Your Brain Assessment Result</h1>
    <div class="text-center">
      <img src="{{ public_path('assets/images/Group 32 (1).png') }}" style="width:100%:margin-top:25px;">
    </div>
<div class="text-center" style="margin-top:50px;">
<table style="width:100%;margin:auto;">
    <tr>
        <td style="width:50%;text-align:center;border-right:2px solid #6B6B6B;">
            <img src="{{ public_path('assets/images/Group 35.png') }}" style="width:35px:color:#6B6B6B;">
            <p style="font-size:18px;">{{ $user->display_name }}</p>
        </td>
        <td style="width:50%;text-align:center;">
            <img src="{{ public_path('assets/images/Group 36.png') }}" style="width:35px:color:#6B6B6B;">
            <p style="font-size:18px;">{{ $user->email }}</p>
        </td>
    </tr>
</table>
  
 </div>
  <p class="site-link">WWW.ZEBRABRAIN.COM</p>
</body>
</html>
