@include('layouts.dashboard-header')
<?php 
use App\Models\BrainScores;
use App\Models\BrainCodeResults;
use App\Models\WPUsers;
use App\Models\ProfileTypes;
use App\Models\QuestionAnswerMain;
?>
<div class="dashboard-page-content">
    <div class="p-3 w-100">
        <div class="d-flex flex-row">
            <div class="col-12 col-lg-12">
                <h3 class="section-title text-purple mt-3">
                    My brain test attempts
                </h3>
                <!--<p class="section-description-intentship mt-1 pe-5">-->
                <!--    You can see latest 10 attempts only. Other older attempts will be deleted automatically.-->
                <!--</p>-->
                <div class="d-flex flex-row justify-content-between w-100 ">
                    <div class="divtable">
                       
                    <?php 
                    $c = 1;
                    foreach($attempts as $attempt){ 
                    $brain_profile_id = WPUsers::where("user_id", session('user_id'))->value('brain_profile_id');
                    $brain_score = BrainScores::where("answer_main_id", $attempt->id)->first();
                    $brain_code_result = BrainCodeResults::where('brain_profile_id', $brain_profile_id)->first();
                    $brain_profile=ProfileTypes::whereJsonContains('code', $brain_score->result_code)->first()->name;

                    ?>
                        <div class="d-flex flex-column row1 mb-2">
                            <div class="d-flex flex-row justify-content-between">
                                <p class="title-16-purple" style="font-weight: 700">
                                    Attempt {{$c}}
                                </p>
                                
                                <p class="title-16-purple" style="font-weight: 500">
                                {{$brain_score->created_at}}
                                </p>
                            </div>
                             <p class="title-16-purple" style="font-weight: 700">
                                    Brain Code : {{$brain_score->result_code}}
                                </p>
                                 <p class="title-16-purple" style="font-weight: 700">
                                    Brain Profile : {{$brain_profile}}
                                </p>
                            <div class="d-flex flex-row">
                                <div class="col-3">
                                    <p class="section-description-intentship">
                                    L1 = {{$brain_score->l1_score}}%
                                    </p>
                                </div>
                                <div class="col-9">
                                    <p class="section-description-intentship">
                                    L2 = {{$brain_score->l2_score}}%
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <div class="col-3">
                                    <p class="section-description-intentship">
                                    R1 = {{$brain_score->r1_score}}%
                                    </p>
                                </div>
                                <div class="col-9">
                                    <p class="section-description-intentship">
                                    R2 = {{$brain_score->r2_score}}%
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <div class="col-12">
                                    <p class="section-description-intentship">
                                    <?php echo $brain_code_result->description ?>
                                    </p>
                                    <p class="section-description-intentship"><b> Brain Type - {{$brain_score->brain_type}} </b></p>
                                    <p class="section-description-intentship"> <?php echo $brain_score->brain_type_description ?></p>
                                </div>
                                
                            </div>
                        </div>
                        <?php $c = $c + 1; } ?>

                    </div>
                </div>
                <div class="d-flex justify-content-center justify-content-lg-end my-5 my-lg-0">
                <a href="{{url('download-brain-results')}}"  class="check-package-link"><button class="yellow-btn mt-4 px-5 mx-2">Download</button></a>
                <!--<a href="{{url('questions/d1')}}"><button class="yellow-btn mt-4 px-5">Try again</button></a>-->
                </div>
            </div>
            <div class="col-12 col-lg-12 d-flex justify-content-center align-items-center hideOnMobile">
                <img src="{{ asset('assets/images/brain.PNG') }}" class="img-fluid">
            </div>
        </div>
    </div>
</div>
@include('layouts.dashboard-footer')