@include('layouts.dashboard-header')
<div class="dashboard-page-content">
    <div class="p-3 w-100">
        {{-- section 1 --}}
        <div class="row mb-5 gx-3 gy-3">
            <h3 class="section-title2 text-purple mt-5">Your Flow & Grow Tips
            </h3>
            <p class="section-description mt-4">Here are your brain strengths and have to improve brain strengths using
                ZEBRA BRAIN tips.</p>
            <div class="col-md-4">
                <div class="row progress-container align-items-center">
                    <div class="col-2">
                        <img src="{{ asset('assets/images/zebra2.PNG') }}">
                    </div>
                    <div class="col-8">
                        <h3 class=" ">Multi Tasking</h3>
                        <div class="progress" style="height: 15px;">
                            <div class="progress-bar purple-progress" role="progressbar" style="width: 70%;"
                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-2">
                        <h3 class=" ">&nbsp; </h3>
                        <h3 class=" text-purple">70%</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row progress-container align-items-center">
                    <div class="col-2">
                        <img src="{{ asset('assets/images/zebra2.PNG') }}">
                    </div>
                    <div class="col-8">
                        <h3 class=" ">Balance Skills Tasking</h3>
                        <div class="progress" style="height: 15px;">
                            <div class="progress-bar purple-progress" role="progressbar" style="width: 60%;"
                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-2">
                        <h3 class=" ">&nbsp; </h3>
                        <h3 class=" text-purple">60%</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row progress-container align-items-center">
                    <div class="col-2">
                        <img src="{{ asset('assets/images/zebra2.PNG') }}">
                    </div>
                    <div class="col-8">
                        <h3 class=" ">Creative Thinking</h3>
                        <div class="progress" style="height: 15px;">
                            <div class="progress-bar yellow-progress" role="progressbar" style="width: 40%;"
                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-2">
                        <h3 class=" ">&nbsp; </h3>
                        <h3 class=" text-purple">40%</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row progress-container align-items-center">
                    <div class="col-2">
                        <img src="{{ asset('assets/images/zebra2.PNG') }}">
                    </div>
                    <div class="col-8">
                        <h3 class=" ">Self Learning</h3>
                        <div class="progress" style="height: 15px;">
                            <div class="progress-bar yellow-progress" role="progressbar" style="width: 50%;"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-2">
                        <h3 class=" ">&nbsp; </h3>
                        <h3 class=" text-purple">50%</h3>
                    </div>
                </div>
            </div>

        </div>





        {{-- section 2 --}}
        <div class="row mt-5 gx-3 gy-3">
            <h3 class="section-title2 text-purple mt-5">
                Let's watch tips to improve brain strengths
            </h3>
            <div class="col-md-4">
                <div class="row progress-container align-items-center">
                    <div class="col-2">
                        <img src="{{ asset('assets/images/zebra2.PNG') }}">
                    </div>
                    <div class="col-8">
                        <h3 class=" ">Tips completion</h3>
                        <div class="progress" style="height: 15px;">
                            <div class="progress-bar yellow-progress" role="progressbar" style="width: 40%;"
                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-2">
                        <h3 class=" ">&nbsp; </h3>
                        <h3 class=" text-purple">40%</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5 gx-3 gy-3 mt-4 mt-lg-0">

            <?php if(!$management_tips->isEmpty()){ ?>
            <div class="col-md-4">
                <div class="video-card">
                    <h3 class="section-title3 text-purple">Management Skills</h3>
                    <a href="{{url('view-tip/'.$management_tips[0]->id)}}"><img src="{{ asset('db_files/tips/featured/'.$management_tips[0]->featured_image.'') }}" class="w-100"></a>
                    <div class="row">
                         <div class="col-6">
                            <h3 class="text-start count mt-2">Showing 1 of {{count($management_tips)}}</h3>
                        </div>
                        <div class="col-6">
                            <a href="{{url('view-tip/'.$management_tips[0]->id)}}"><h3 class="text-end view-all mt-2 text-purple">View All</h3></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php if(!$sport_tips->isEmpty()){ ?>
            <div class="col-md-4">
                <div class="video-card">
                    <h3 class="section-title3 text-purple">Sport Skills</h3>
                    <a href="{{url('view-tip/'.$sport_tips[0]->id)}}"><img src="{{ asset('db_files/tips/featured/'.$sport_tips[0]->featured_image.'') }}" class="w-100"></a>
                    <div class="row">
                        <div class="col-6">
                            <h3 class="text-start count mt-2">Showing 1 of {{count($sport_tips)}}</h3>
                        </div>
                        <div class="col-6">
                             <a href="{{url('view-tip/'.$sport_tips[0]->id)}}"><h3 class="text-end view-all mt-2 text-purple">View All</h3></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php if(!$creative_tips->isEmpty()){ ?>
            <div class="col-md-4">
                <div class="video-card">
                    <h3 class="section-title3 text-purple">Creative Thinking</h3>
                    <a href="{{url('view-tip/'.$creative_tips[0]->id)}}"><img src="{{ asset('db_files/tips/featured/'.$creative_tips[0]->featured_image.'') }}" class="w-100"></a>
                    <div class="row">
                        <div class="col-6">
                            <h3 class="text-start count mt-2">Showing 1 of {{count($creative_tips)}}</h3>
                        </div>
                        <div class="col-6">
                            <a href="{{url('view-tip/'.$creative_tips[0]->id)}}"><h3 class="text-end view-all mt-2 text-purple">View All</h3></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php if(!$self_tips->isEmpty()){ ?>
            <div class="col-md-4">
                <div class="video-card">
                    <h3 class="section-title3 text-purple">Self Learning</h3>
                    <a href="{{url('view-tip/'.$self_tips[0]->id)}}"><img src="{{ asset('db_files/tips/featured/'.$self_tips[0]->featured_image.'') }}" class="w-100"></a>
                    <div class="row">
                        <div class="col-6">
                            <h3 class="text-start count mt-2">Showing 1 of {{count($self_tips)}}</h3>
                        </div>
                        <div class="col-6">
                            <a href="{{url('view-tip/'.$self_tips[0]->id)}}"><h3 class="text-end view-all mt-2 text-purple">View All</h3></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>



        {{-- section 6 --}}
        <div class="row mt-5 mb-5">
            <h3 class="section-title text-purple displayOnMobile">Parent community</h3>
            <div class="d-flex flex-row-reverse flex-lg-row">
                <div class="col-8 col-lg-6 p-2 p-lg-5 text-center d-flex flex-column justify-content-center align-items-center">
                    <h3 class="section-title text-purple hideOnMobile">Parent community</h3>
                    <p class="section-description mt-2 mt-lg-2 displayOnMobile">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta hic asperiores neque quibusdam
                        reiciendis vero.
                    </p>
                    <button class="yellow-btn mt-2 mt-lg-4 px-4 px-lg-5">Book now</button>
                </div>
                <div class="col-4 col-lg-6 p-2 p-lg-5">
                    <img src="{{ asset('assets/images/brain-suitecase.PNG') }}" class="w-100">
                </div>
            </div>
        </div>

    </div>


</div>
@include('layouts.dashboard-footer')