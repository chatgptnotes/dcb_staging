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
     .box-data {
        border-radius: 15px;
        text-align: center;
        margin:5px;
    }
    .p-4 {
        padding: 1.5rem !important;
    }
    .bg-green {
        background: #84d6a5;
    }
    .bg-yellow {
        background: #f6c94c;
    }
    .bg-orange {
        background: #f1935d;
    }
    .bg-blue {
        background: #9ae4e3;
    }
    .box-data p {
        font-size: 16px !important;
        font-weight: 800!important;
        margin-bottom: 5px !important;
    }
    .box-data h3 {
        font-size: 48px!important;
        font-weight: 1500!important;
        margin-top: 15px !important;
        margin-bottom: 5px !important;
    }
    .mb-0 {
        margin-bottom: 0 !important;
    }
    </style>
</head>
<body style="padding-left:65px;padding-right:65px;">

     <img src="{{ public_path('assets/images/zebranewlogo.png') }}" class="logo">
    <h1 class="report-header1 text-center" style="margin-bottom:25px;margin-top:75px !important;">Basic Brain Overview</h1>
    <div class="text-center">
      <img src="{{ public_path('assets/images/Group 32 (1).png') }}" style="width:100%:margin-top:25px;">
    </div>
<div class="text-center" style="margin-top:20px;">
<table style="width:75%;margin:auto;">
    <tr>
        <td style="width:50%;text-align:center;margin:5px;">
           <div class="box-data p-4 bg-yellow" style="border:1px solid black;">
              <p class="mb-0" style="color:#000000 !important;"> Candid</p>
              <h3 class="mb-0" style="color:#000000 !important;">{{$user_brain_score->l1_score}}%</h3>
            </div>
        </td>
        <td style="width:50%;text-align:center;margin:5px;">
            <div class="box-data p-4 bg-orange" style="border:1px solid black;">
              <p class="mb-0" style="color:#000000 !important;">Fastidious</p>
              <h3 class="mb-0" style="color:#000000 !important;">{{$user_brain_score->l2_score}}%</h3>
            </div>
        </td>
    </tr>
     <tr>
        <td style="width:50%;text-align:center;margin:5px;">
            <div class="box-data p-4 bg-blue" style="border:1px solid black;">
              <p class="mb-0" style="color:#000000 !important;">Maverick</p>
              <h3 class="mb-0" style="color:#000000 !important;">{{$user_brain_score->r1_score}}%</h3>
            </div>
        </td>
        <td style="width:50%;text-align:center;margin:5px;">
            <div class="box-data p-4 bg-green" style="border:1px solid black;">
              <p class="mb-0" style="color:#000000 !important;">Affable</p>
              <h3 class="mb-0" style="color:#000000 !important;">{{$user_brain_score->r2_score}}%</h3>
            </div>
        </td>
    </tr>
</table>
  
 </div>

</body>
</html>
