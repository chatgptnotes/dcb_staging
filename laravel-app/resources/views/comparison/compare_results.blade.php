@extends('layouts.dashboard-layout')

@section('title', 'Careers')

@section('content')
<?php
$my_brain_score = $user_brain_score;
$my_brain_profile_id = $user_brain_profile_id;
$my_age = $user_age;
$my_details = $user_dtails;


$compare_brain_score = $other_brain_score;
$compare_brain_profile_id = $other_brain_profile_id;
$compare_age = $other_age;
$compare_details = $other_dtails;
?>
<style>

@media (min-width: 992px) {
  .content-main{
    max-width: calc(100vw - 258px) !important;
}
}
.content-main{
    max-width: 100vw;
}
</style>
<style>

ul {
        list-style-type: none !important; 
        
}

ul li {
    margin-bottom: 5px !important;
}
.col-12, .accordion{
    padding-left: 0px !important;
    padding-right: 0px !important;
}
.comparing-div-2{
    border-left: 1px solid #f0f0f0;
}

@media (max-width: 992px) {
  .p-3{
    padding-left: 0px !important;
    padding-right: 0px !important;
}
.collapsible-div .collapsible{
    height: max-content !important;
        padding: 5px !important;
        font-size: 14px !important;
}
}
.comparison-description {
    font-family: "Aptos", sans-serif !important;
    font-size: 12px;
    font-weight: 400;
    color: #000;
    text-align: justify;
    padding: 10px 0 0 0;
}
.comparison-sub-title{
    color: #000;
}
.explaining {
    font-family: "Aptos", sans-serif !important;
    font-size: 12px;
    font-weight: 400;
    color: #000;
    text-align: justify;
}
.list-description, .list-title {
    font-family: "Aptos", sans-serif !important;
    font-size: 12px;
    color: #000;
    line-height: 15px;
    text-align: justify;
}
</style>
<div class="">

    <div class="d-flex flex-row p-0 w-100">
        <div class="col-lg-12 col-xl-12 col-md-12 col-12 scrollable-column">
            <h3 class="section-title text-purple mt-0" style="font-weight: 600 !important">
                Let's Compare
                <!--{{var_dump(session('user_details'))}}-->
            </h3>
            <p class="comparison-sub-title"  style="font-weight: 400 !important">
                View and analyze the details side by side for better decisions.
            </p>
            @if(Session::has('fail')) <p style="color:red;font-size:14px;">
                <?php echo Session::get('fail') ?>
            </p>@endif
            @if(Session::has('success')) <p style="color:green;font-size:14px;">
                <?php echo Session::get('success') ?>
            </p>@endif

            <div class="w-100 profileContent mt-4">
                <div class="tab-container card nav-card p-0">
                    <ul class="nav nav-pills mb-3 scrollable-tabs" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active first-link" id="basic-brain-report-tab" data-bs-toggle="pill"
                                data-bs-target="#basic-brain-report" type="button" role="tab"
                                aria-controls="basic-brain-report" aria-selected="true">Basic Brain Report</button>
                        </li>
                        <!-- <li class="nav-item" role="presentation">
                            <button class="nav-link" id="thinking-style-tab" data-bs-toggle="pill"
                                data-bs-target="#thinking-style" type="button" role="tab" aria-controls="thinking-style"
                                aria-selected="false">Thinking Style</button>
                        </li> -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="advance-brain-report-tab" data-bs-toggle="pill"
                                data-bs-target="#advance-brain-report" type="button" role="tab"
                                aria-controls="advance-brain-report" aria-selected="false">Advance Brain Report</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="prefered-learning-tab" data-bs-toggle="pill"
                                data-bs-target="#prefered-learning" type="button" role="tab"
                                aria-controls="prefered-learning" aria-selected="false">Preferred Learning
                                Styles</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="extra-activities-tab" data-bs-toggle="pill"
                                data-bs-target="#extra-activities" type="button" role="tab"
                                aria-controls="extra-activities" aria-selected="false">Extracurricular
                                Activities</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="communication-tab" data-bs-toggle="pill"
                                data-bs-target="#communication" type="button" role="tab" aria-controls="communication"
                                aria-selected="false">Communication</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="inclination-tab" data-bs-toggle="pill"
                                data-bs-target="#inclination" type="button" role="tab" aria-controls="inclination"
                                aria-selected="false">Inclination for Subjects</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="diet-tab" data-bs-toggle="pill" data-bs-target="#diet"
                                type="button" role="tab" aria-controls="diet" aria-selected="false">Diet and
                                Nutrition</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="career-options-tab" data-bs-toggle="pill"
                                data-bs-target="#career-options" type="button" role="tab" aria-controls="career-options"
                                aria-selected="false">Matching Career Options</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link last-link" id="relationship-tab" data-bs-toggle="pill"
                                data-bs-target="#relationship" type="button" role="tab" aria-controls="relationship"
                                aria-selected="false">Relationship Styles</button>
                        </li>
                        <li class="nav-item" role="presentation">

                            <button class="nav-link last-link" id="flow-and-grow-basics-tab" data-bs-toggle="pill"
                                data-bs-target="#flowandgrow" type="button" role="tab"
                                aria-controls="flow-and-grow-basics" aria-selected="false">Flow and Grow Basics</button>
                        </li>

                        <li class="nav-item" role="presentation">

                            <button class="nav-link last-link" id="career-suitable-tab" data-bs-toggle="pill"
                                data-bs-target="#careersuitable" type="button" role="tab"
                                aria-controls="career-suitable" aria-selected="false">Career Suitable</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link last-link" id="job-work-tab" data-bs-toggle="pill"
                                data-bs-target="#jobandwork" type="button" role="tab" aria-controls="job-work"
                                aria-selected="false">Job and work</button>
                        </li>

                    </ul>

                    <div class="tab-content" id="pills-tabContent">

                        {{-- basic brain report --}}
                        <div class="tab-pane fade show active" id="basic-brain-report" role="tabpanel"
                            aria-labelledby="basic-brain-report-tab" tabindex="0">



                            <div class="row d-flex ">
                                {{-- compare one --}}
                                <div class="col-6 comparing-div comparing-div-1" id="comparing-div-1">
                                    @include('comparison.basic-report-left', ['my_brain_profile_id' => $my_brain_profile_id,'my_brain_score' => $my_brain_score,'my_details' => $my_details])
                                </div>


                                {{-- compare 2 --}}

                                <div class="col-6 comparing-div comparing-div-2" id="comparing-div-2">
                                    @include('comparison.basic-report-right', ['compare_brain_profile_id' => $compare_brain_profile_id,'compare_brain_score' => $compare_brain_score,'compare_details' => $compare_details])
                                    
                                </div>
                            </div>


                        </div>

                        {{-- thinking-style tab --}}
                        <div class="tab-pane fade" id="thinking-style" role="tabpanel"
                            aria-labelledby="thinking-style-tab" tabindex="-1">

                            {{-- compare 1 --}}
                            <div class="row d-flex">
                                <div class="col-6 comparing-div comparing-div-1" id="comparing-div-3">
                                    @include('comparison.thinking-style-left', ['my_brain_profile_id' => $my_brain_profile_id,'my_details' => $my_details])
                                    

                                </div>


                                <div class="col-6 comparing-div comparing-div-2" id="comparing-div-4">
                                    @include('comparison.thinking-style-right', ['compare_brain_profile_id' => $compare_brain_profile_id,'compare_details' => $compare_details])
                                    

                                </div>
                            </div>

                        </div>
                        {{-- advance brain report --}}
                        <div class="tab-pane fade" id="advance-brain-report" role="tabpanel"
                            aria-labelledby="advance-brain-report-tab" tabindex="-1">
                            <div class="row d-flex ">
                                {{-- compare one --}}
                                <div class="col-6 comparing-div comparing-div-1" id="comparing-div-5">
                                    @include('comparison.advanced-report-left', ['my_brain_profile_id' => $my_brain_profile_id,'my_details' => $my_details])
                                    
                                </div>


                                {{-- compare 2 --}}

                                <div class="col-6 comparing-div comparing-div-2" id="comparing-div-6">
                                    @include('comparison.advanced-report-right', ['compare_brain_profile_id' => $compare_brain_profile_id,'compare_details' => $compare_details])
                                    
                                </div>
                            </div>
                        </div>

                        {{-- prefered learning --}}
                        <div class="tab-pane fade" id="prefered-learning" role="tabpanel"
                            aria-labelledby="prefered-learning-tab" tabindex="-1">
                            <div class="row d-flex ">
                                {{-- compare one --}}
                                <div class="col-6 comparing-div comparing-div-1" id="comparing-div-5">
                                    @include('comparison.prefered-learning-left', ['my_brain_profile_id' => $my_brain_profile_id,'my_details' => $my_details])
                                    
                                </div>


                                {{-- compare 2 --}}

                                <div class="col-6 comparing-div comparing-div-2" id="comparing-div-6">
                                    @include('comparison.prefered-learning-right', ['compare_brain_profile_id' => $compare_brain_profile_id,'compare_details' => $compare_details])
                                    
                                </div>
                            </div>
                        </div>

                        {{-- extra currucular activities --}}
                        <div class="tab-pane fade" id="extra-activities" role="tabpanel"
                            aria-labelledby="extra-activities-tab" tabindex="-1">
                            <div class="row d-flex ">
                                {{-- compare one --}}
                                <div class="col-6 comparing-div comparing-div-1" id="comparing-div-5">
                                    @include('comparison.extra-activities-left', ['my_brain_profile_id' => $my_brain_profile_id, 'my_age' => $my_age,'my_details' => $my_details])
                                    
                                </div>


                                {{-- compare 2 --}}

                                <div class="col-6 comparing-div comparing-div-2" id="comparing-div-6">
                                    @include('comparison.extra-activities-right', ['compare_brain_profile_id' => $compare_brain_profile_id, 'compare_age' => $compare_age,'compare_details' => $compare_details])
                                
                            </div>
                        </div>

                        {{-- communication --}}
                        <div class="tab-pane fade" id="communication" role="tabpanel"
                            aria-labelledby="communication-tab" tabindex="-1">
                            <div class="row d-flex ">
                                {{-- compare one --}}
                                <div class="col-6 comparing-div comparing-div-1" id="comparing-div-5">
                                    @include('comparison.communication-left', ['my_brain_profile_id' => $my_brain_profile_id, 'my_age' => $my_age,'my_details' => $my_details])
                                    
                                </div>


                                {{-- compare 2 --}}

                                <div class="col-6 comparing-div comparing-div-2" id="comparing-div-6">
                                    @include('comparison.communication-right', ['compare_brain_profile_id' => $compare_brain_profile_id, 'compare_age' => $compare_age,'compare_details' => $compare_details])
                                    
                                </div>
                            </div>
                        </div>

                        {{-- inclination --}}
                        <div class="tab-pane fade" id="inclination" role="tabpanel" aria-labelledby="inclination-tab"
                            tabindex="-1">
                            <div class="row d-flex ">
                                {{-- compare one --}}
                                <div class="col-6 comparing-div comparing-div-1" id="comparing-div-5">
                                    @include('comparison.inclination-left', ['my_brain_profile_id' => $my_brain_profile_id, 'my_age' => $my_age,'my_details' => $my_details])
                                    
                                </div>


                                {{-- compare 2 --}}

                                <div class="col-6 comparing-div comparing-div-2" id="comparing-div-6">
                                    @include('comparison.inclination-right', ['compare_brain_profile_id' => $compare_brain_profile_id, 'compare_age' => $compare_age,'compare_details' => $compare_details])
                                
                            </div>
                        </div>

                        {{-- diet --}}
                        <div class="tab-pane fade" id="diet" role="tabpanel" aria-labelledby="diet-tab" tabindex="-1">
                            <div class="row d-flex ">
                                {{-- compare one --}}
                                <div class="col-6 comparing-div comparing-div-1" id="comparing-div-5">
                                    @include('comparison.diet-left', ['my_brain_profile_id' => $my_brain_profile_id, 'my_age' => $my_age,'my_details' => $my_details])
                                    
                                </div>


                                {{-- compare 2 --}}

                                <div class="col-6 comparing-div comparing-div-2" id="comparing-div-6">
                                    @include('comparison.diet-right', ['compare_brain_profile_id' => $compare_brain_profile_id, 'compare_age' => $compare_age,'compare_details' => $compare_details])
                                    
                                </div>
                            </div>
                        </div>

                        {{-- career-oprions --}}
                        <div class="tab-pane fade" id="career-options" role="tabpanel"
                            aria-labelledby="career-options-tab" tabindex="-1">
                            <div class="row d-flex ">
                                {{-- compare one --}}
                                <div class="col-6 comparing-div comparing-div-1" id="comparing-div-5">
                                    @include('comparison.career-options-left', ['my_brain_profile_id' => $my_brain_profile_id, 'my_age' => $my_age,'my_details' => $my_details])
                                    
                                </div>


                                {{-- compare 2 --}}

                                <div class="col-6 comparing-div comparing-div-2" id="comparing-div-6">
                                    @include('comparison.career-options-right', ['compare_brain_profile_id' => $compare_brain_profile_id, 'compare_age' => $compare_age,'compare_details' => $compare_details])
                                
                            </div>
                        </div>

                        {{-- relationship --}}
                        <div class="tab-pane fade" id="relationship" role="tabpanel" aria-labelledby="relationship-tab"
                            tabindex="-1">
                            <div class="row d-flex ">
                                {{-- compare one --}}
                                <div class="col-6 comparing-div comparing-div-1" id="comparing-div-5">
                                @include('comparison.relationship-left', ['my_brain_profile_id' => $my_brain_profile_id, 'my_age' => $my_age,'my_details' => $my_details])
                                    
                                </div>


                                {{-- compare 2 --}}

                                <div class="col-6 comparing-div comparing-div-2" id="comparing-div-6">
                                    @include('comparison.relationship-right', ['compare_brain_profile_id' => $compare_brain_profile_id, 'compare_age' => $compare_age,'compare_details' => $compare_details])
                                    
                                </div>
                            </div>
                        </div>

                        {{-- flow and grow --}}
                        <div class="tab-pane fade" id="flowandgrow" role="tabpanel"
                            aria-labelledby="flow-and-grow-basics-tab" tabindex="-1">
                            <div class="row d-flex ">
                                {{-- compare one --}}
                                <div class="col-6 comparing-div comparing-div-1" id="comparing-div-5">
                                    @include('comparison.flowandgrow-left', ['my_brain_profile_id' => $my_brain_profile_id, 'my_age' => $my_age,'my_details' => $my_details])
                                    
                                </div>


                                {{-- compare 2 --}}

                                <div class="col-6 comparing-div comparing-div-2" id="comparing-div-6">
                                    @include('comparison.flowandgrow-right', ['compare_brain_profile_id' => $compare_brain_profile_id, 'compare_age' => $compare_age,'compare_details' => $compare_details])
                                    
                                </div>
                            </div>
                        </div>

                        {{-- career suitable --}}
                        <div class="tab-pane fade" id="careersuitable" role="tabpanel"
                            aria-labelledby="career-suitable-tab" tabindex="-1">
                            <div class="row d-flex ">
                                {{-- compare one --}}
                                <div class="col-6 comparing-div comparing-div-1" id="comparing-div-5">
                                    @include('comparison.careersuitable-left', ['my_brain_profile_id' => $my_brain_profile_id, 'my_age' => $my_age,'my_details' => $my_details])
                                    
                                </div>


                                {{-- compare 2 --}}

                                <div class="col-6 comparing-div comparing-div-2" id="comparing-div-6">
                                     @include('comparison.careersuitable-right', ['compare_brain_profile_id' => $compare_brain_profile_id, 'compare_age' => $compare_age,'compare_details' => $compare_details])
                                
                            </div>
                        </div>

                        {{-- job and work --}}
                        <div class="tab-pane fade" id="jobandwork" role="tabpanel" aria-labelledby="job-work-tab"
                            tabindex="-1">
                            <div class="row d-flex ">
                                {{-- compare one --}}
                                <div class="col-6 comparing-div comparing-div-1" id="comparing-div-5">
                                    @include('comparison.jobandwork-left', ['my_brain_profile_id' => $my_brain_profile_id, 'my_age' => $my_age,'my_details' => $my_details])
                                    
                                </div>


                                {{-- compare 2 --}}

                                <div class="col-6 comparing-div comparing-div-2" id="comparing-div-6">
                                    @include('comparison.jobandwork-right', ['compare_brain_profile_id' => $compare_brain_profile_id, 'compare_age' => $compare_age,'compare_details' => $compare_details])
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- <script>
            document.addEventListener('DOMContentLoaded', function() {

                const accordionButtons = document.querySelectorAll('.accordion-button');




                accordionButtons.forEach(accordionButton => {

                    const collapseId = accordionButton.getAttribute('data-bs-target');
                    const collapseElement = document.querySelector(collapseId);

                    if (collapseElement) {
                        collapseElement.addEventListener('show.bs.collapse', function() {
                            accordionButton.style.border =
                                '2px solid #f1935d'; // Orange when expanded
                            console.log('Color changed to orange');
                        });

                        collapseElement.addEventListener('hide.bs.collapse', function() {
                            accordionButton.style.border =
                                '2px solid #F6C94D'; // Yellow when collapsed

                            console.log('Color changed to yellow');
                        });
                    }
                });




                const scrollContainer1 = document.querySelector('#comparing-div-1 .scrollable-campare');
                const scrollContainer2 = document.querySelector('#comparing-div-2 .scrollable-campare');

                const scrollContainer3 = document.querySelector('#comparing-div-3 .scrollable-campare');
                const scrollContainer4 = document.querySelector('#comparing-div-4 .scrollable-campare');

                const scrollContainer5 = document.querySelector('#comparing-div-5 .scrollable-campare');
                const scrollContainer6 = document.querySelector('#comparing-div-6 .scrollable-campare');

                let isSyncing = false;

                function syncScroll(scrollSource, scrollTarget) {
                    if (!isSyncing) {
                        isSyncing = true;
                        const scrollPercentage = scrollSource.scrollTop / (scrollSource.scrollHeight -
                            scrollSource
                            .clientHeight);
                        const targetPosition = scrollPercentage * (scrollTarget.scrollHeight -
                            scrollTarget
                            .clientHeight);
                        scrollTarget.scrollTop = targetPosition;
                        isSyncing = false;
                    }
                }

                scrollContainer1.addEventListener('scroll', () => syncScroll(scrollContainer1,
                    scrollContainer2));
                scrollContainer2.addEventListener('scroll', () => syncScroll(scrollContainer2,
                    scrollContainer1));

                scrollContainer3.addEventListener('scroll', () => syncScroll(scrollContainer3,
                    scrollContainer4));
                scrollContainer4.addEventListener('scroll', () => syncScroll(scrollContainer4,
                    scrollContainer3));

                scrollContainer5.addEventListener('scroll', () => syncScroll(scrollContainer5,
                    scrollContainer6));
                scrollContainer6.addEventListener('scroll', () => syncScroll(scrollContainer6,
                    scrollContainer5));

            });
            </script> --}}


@endsection