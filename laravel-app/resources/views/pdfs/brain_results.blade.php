<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
    .page-break {
        page-break-after: always;
    }
    @page { margin: 50px; }
</style>
</head>
<?php 
use App\Models\BrainScores;
use App\Models\BrainCodeResults;
use App\Models\WPUsers;
$brain_code_result = BrainCodeResults::where('brain_profile_id', WPUsers::where("user_id", session('user_id'))->value('brain_profile_id'))->first();
?>
<body>
<h3 style="color: #5a559d;font-weight: 700;font-size: 32px;margin-bottom:25px;text-align:center;">Brain Test Results </h3>
<table style="width:100%;">
<tr>
    <td style="width:25%;text-align:center;">
        {{session('user_details')['display_name'] ?? ''}}
    </td>
    <td style="width:25%;text-align:center;">
        {{session('user_details')['email']}}
    </td>

    <td style="width:25%;text-align:center;">
        {{$brain_score->created_at}}
    </td>
</tr>
</table>

<table style="width:100%;margin-top:10px;">
<tr>
    <td style="width:25%;text-align:center;">
    L1 = {{$brain_score->l1_score}}%
    </td>
    <td style="width:25%;text-align:center;">
    L2 = {{$brain_score->l2_score}}%
    </td>
    <td style="width:25%;text-align:center;">
    R1 = {{$brain_score->r1_score}}%
    </td>
    <td style="width:25%;text-align:center;">
    R2 = {{$brain_score->r2_score}}%
    </td>
</tr>
</table>

<h3 style="color: #000;font-weight: 400;font-size: 16px;margin-top:25px;text-align:left;"><?php echo $brain_code_result->description ?></h3>

<h3 style="color: #000;font-weight: 800;font-size: 16px;margin-top:25px;text-align:left;">Brain Type - {{$brain_score->brain_type}}</h3>

<h3 style="color: #000;font-weight: 400;font-size: 16px;margin-top:25px;text-align:left;">{{$brain_score->brain_type_description}}</h3>
</body>

