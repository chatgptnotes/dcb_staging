@include('layouts.dashboard-header')

<div class="container-fluid">
    <div class="main-wrapper mb-5 mb-lg-0 mb-xl-0">
        <div>
            <h2 class="page-title">Dashboard</h2>
            <p class="page-description">Overview of all limitless activities.</p>
        </div>


        <div class="dashbaord-new-page">

            {{-- section 1 --}}
            <div class="row mb-4">
                <!-- Card 1 -->
                <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
                    <div class="card position-relative header-tab-card" style="background-color: #9AE4E3">
                        <a href="{{ url('/comparison-page') }}">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center header-tab pe-5 me-4 gap-4">
                                    <div class="header-tab-image">
                                        <img src="{{ asset('assets/images/double-head.png') }}" alt="">
                                    </div>
                                    <div class="header-tab-text">
                                        <h5 class="tab-content-title">Brain Connect</h5>
                                        <p class="tab-content-subtitle">Match your brain</p>
                                    </div>
                                </div>
                                <div class="position-absolute lock-icon">
                                    <img class="rounded-circle" src="{{ asset('assets/images/lock.png') }}" alt="">
                                </div>
                            </div>
                        </a>
                        
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
                    <div class="card position-relative header-tab-card" style="background-color: #F1935D">
                        <a href="">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center header-tab pe-5 me-4 gap-4">
                                    <div class="header-tab-image">
                                        <img src="{{ asset('assets/images/Brain- based growth-01.png') }}" alt="">
                                    </div>
                                    <div class="header-tab-text">
                                        <h5 class="tab-content-title">Learn More About You</h5>
                                        <p class="tab-content-subtitle">Match your brain</p>
                                    </div>
                                </div>
                                <div class="position-absolute lock-icon">
                                    <img class="rounded-circle" src="{{ asset('assets/images/lock.png') }}" alt="">
                                </div>
                            </div>
                        </a>
                        
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
                    <div class="card position-relative header-tab-card" style="background-color: #85D6A5">
                        <a href="{{ url('/careers-inner-page-1') }}">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center header-tab pe-5 me-4 gap-4">
                                    <div class="header-tab-image">
                                        <img src="{{ asset('assets/images/Brain- based growth-01.png') }}" alt="">
                                    </div>
                                    <div class="header-tab-text">
                                        <h5 class="tab-content-title">Find Your Career Preferences</h5>
                                        <p class="tab-content-subtitle">Match your brain</p>
                                    </div>
                                </div>
                                <div class="position-absolute lock-icon">
                                    <img class="rounded-circle" src="{{ asset('assets/images/lock.png') }}" alt="">
                                </div>
                            </div>
                        </a>
                        
                    </div>
                </div>
            </div>

            {{-- section 2 --}}
            <div class="row activities mb-4">
                <h3 class="dashbaord-section-title">Activities</h3>
                <!-- Card 1 -->


                <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
                    <div class="card position-relative header-tab-card">
                        <a href="">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="col-10 justify-content-center align-items-center">
                                        <div>
                                            <h5 class="activity-notification">Your Skill assessment Awaits!</h5>
                                            <h6 class="activity-notification-text">Start Upgrading your Skills....</h6>
                                        </div>
                                    </div>
                                    <div class="col-2 flex-column align-items-center">

                                        <img src="{{ asset('assets/images/diagonal-arrow-50.png') }}" alt="">

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>



                <!-- Card 2 -->
                <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
                    <div class="card position-relative header-tab-card">
                        <a href="">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="col-10 justify-content-center align-items-center">
                                        <div>
                                            <h5 class="activity-notification">Are you a Introvert or a extrovert?</h5>
                                            <h6 class="activity-notification-text">Find our here!</h6>
                                        </div>
                                    </div>
                                    <div class="col-2 flex-column align-items-center">

                                        <img src="{{ asset('assets/images/diagonal-arrow-50.png') }}" alt="">

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>


                {{-- card 3 --}}
                <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
                    <div class="card position-relative header-tab-card">
                        <a href="{{ url('/pricing') }}">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="col-10 justify-content-center align-items-center">
                                        <div>
                                            <h5 class="activity-notification">Upgrade your membership</h5>
                                            <h6 class="activity-notification-text">Find out here!</h6>
                                        </div>
                                    </div>
                                    <div class="col-2 flex-column align-items-center">
                                        <img src="{{ asset('assets/images/diagonal-arrow-50.png') }}" alt="">
                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            {{-- section 3 --}}
            <div class="row mb-4">

                {{-- brain img --}}
                <div class="col-12 col-md-3 text-center">
                    <img src="{{ asset('assets/images/brain-cartoon.png') }}" class="brain-img img-fluid">
                </div>

                {{-- data boxes --}}
                <div class="col-12 col-md-3 px-0">
                    <div class="row d-flex">
                        <h5 class="text-center text-lg-start text-md-start dashbaord-section-title">Basic Brain Report</h5>
                    </div>

                    <div class="row dashboard-data-box-row">
                        <div class="row data-box-row d-flex">
                            <div class="box-data px-4 m-1" style="background-color: #f6c94c; color: black;">
                                <p class="mb-0" style="color: black;">
                                    Fastidious
                                </p>
                                <h3 class="mb-0" style="color: black;">
                                    86%
                                </h3>
                            </div>

                            <div class="box-data px-4 m-1" style="background-color: #f1935d;">
                                <p class="mb-0" style="color: black;">
                                    Maverick
                                </p>
                                <h3 class="mb-0" style="color: black;">
                                    72%
                                </h3>
                            </div>
                        </div>

                        <div class="row data-box-row d-flex">
                            <div class="box-data px-4 m-1" style="background-color: #9ae4e3;">
                                <p class="mb-0" style="color: black;">
                                    Fastidious
                                </p>
                                <h3 class="mb-0" style="color: black;">
                                    75%
                                </h3>
                            </div>

                            <div class="box-data px-4 m-1" style="background-color: #84d6a5;">
                                <p class="mb-0" style="color: black;">
                                    Maverick
                                </p>
                                <h3 class="mb-0" style="color: black;">
                                    67%
                                </h3>
                            </div>
                        </div>
                        <div class="row d-flex d-md-block d-lg-block justify-content-center mt-2">
                            <button class="download-report-btn">Download Report </button>
                        </div>
                    </div>
                </div>


                {{-- descfiptjoin --}}
                <div class="col-12 col-md-5">
                    <p>
                        Your brain is highly fact-oriented, with a natural inclination to dive deep into
                        problems. You tend to be direct and analytical, always seeking certainty before taking
                        action. You thoroughly research, calculate, and evaluate every situation, weighing the
                        pros and cons carefully. Constantly questioning and probing for clarity is second nature
                        to you. This makes you excellent at problem-solving and strategizing.

                    </p>

                    <p>
                        Your strength lies in your logical, objective approach, and you often cut through
                        complexity by sticking to the facts. While others may get lost in emotions or subjective
                        views, you focus on what can be proven and understood through reason. People rely on you
                        for your candid insights, no-nonsense attitude, and the ability to deliver grounded
                        solutions.
                    </p>
                </div>


            </div>

            {{-- section 4 --}}
            <div class="row mb-4">
                <div class="col-12 col-lg-4 d-flex d-lg-block justify-content-center">
                    <img src="{{ asset('assets/images/thinking.png') }}" alt="" height="250px">
                </div>


                <div class="col-12 col-lg-8 d-flex flex-column justify-content-center">

                    <h5 class="dashbaord-section-title">Your Indices for Future Growth</h5>
                    <p>
                        Understanding and evaluating various indices such as Leadership, Creativity, GIG Potential,
                        Entrepreneurship, Team Collaboration Index, and 21st-Century Agility Index can provide valuable
                        insights into different aspects of your personal and professional development. These indices
                        measure distinct traits and capabilities that are essential for success in today’s dynamic
                        environment.
                    </p>

                </div>
            </div>


            {{-- section 5 --}}
            <div class="row mb-4">

                <div class="col-sm-6 col-md-6 col-lg-4 mb-4">
                    <div class="card future-oppotunity-card position-relative" style="background-color: #F1935D">
                        <div class="card-body">
                            <div class="row d-flex gap-3">
                                <div class="col-4 col-md-3 col-lg-3 col-xl-3 pe-0">
                                    <img src="{{ asset('assets/images/double-head.png') }}" alt="">
                                </div>

                                <div class="col-9 d-flex ps-0 align-items-center">
                                    <div class="row">
                                        <h6>Leadership</h6>
                                        <p class="m-0">short description</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="position-absolute lock-icon">
                            <img class="rounded-circle" src="{{ asset('assets/images/lock.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-sm-6 col-md-6 col-lg-4 mb-4">
                    <div class="card future-oppotunity-card position-relative" style="background-color: #F6C94D">
                        <div class="card-body">
                            <div class="row d-flex gap-3">
                                <div class="col-4 col-md-3 col-lg-3 col-xl-3 pe-0">
                                    <img src="{{ asset('assets/images/double-head.png') }}" alt="">
                                </div>

                                <div class="col-9 d-flex ps-0 align-items-center">
                                    <div class="row">
                                        <h6>Creativity</h6>
                                        <p class="m-0">short description</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="position-absolute lock-icon">
                            <img class="rounded-circle" src="{{ asset('assets/images/lock.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-sm-6 col-md-6 col-lg-4 mb-4">
                    <div class="card future-oppotunity-card position-relative" style="background-color: #9AE4E3">
                        <div class="card-body">
                            <div class="row d-flex gap-3">
                                <div class="col-4 col-md-3 col-lg-3 col-xl-3 pe-0">
                                    <img src="{{ asset('assets/images/double-head.png') }}" alt="">
                                </div>

                                <div class="col-9 d-flex ps-0 align-items-center">
                                    <div class="row">
                                        <h6>GIG Potential</h6>
                                        <p class="m-0">short description</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="position-absolute lock-icon">
                            <img class="rounded-circle" src="{{ asset('assets/images/lock.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-sm-6 col-md-6 col-lg-4 mb-4">
                    <div class="card future-oppotunity-card position-relative" style="background-color: #85D6A5">
                        <div class="card-body">
                            <div class="row d-flex gap-3">
                                <div class="col-4 col-md-3 col-lg-3 col-xl-3 pe-0">
                                    <img src="{{ asset('assets/images/double-head.png') }}" alt="">
                                </div>

                                <div class="col-9 d-flex ps-0 align-items-center">
                                    <div class="row">
                                        <h6>Entrepreneurship</h6>
                                        <p class="m-0">short description</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="position-absolute lock-icon">
                            <img class="rounded-circle" src="{{ asset('assets/images/lock.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col-sm-6 col-md-6 col-lg-4 mb-4">
                    <div class="card future-oppotunity-card position-relative" style="background-color: #F1935D">
                        <div class="card-body">
                            <div class="row d-flex gap-3">
                                <div class="col-4 col-md-3 col-lg-3 col-xl-3 pe-0">
                                    <img src="{{ asset('assets/images/double-head.png') }}" alt="">
                                </div>

                                <div class="col-9 d-flex ps-0 align-items-center">
                                    <div class="row">
                                        <h6>Team Collaboration</h6>
                                        <p class="m-0">short description</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="position-absolute lock-icon">
                            <img class="rounded-circle" src="{{ asset('assets/images/lock.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="col-sm-6 col-md-6 col-lg-4 mb-4">
                    <div class="card future-oppotunity-card position-relative" style="background-color: #F6C94D">
                        <div class="card-body">
                            <div class="row d-flex gap-3">
                                <div class="col-4 col-md-3 col-lg-3 col-xl-3 pe-0">
                                    <img src="{{ asset('assets/images/double-head.png') }}" alt="">
                                </div>

                                <div class="col-9 d-flex ps-0 align-items-center">
                                    <div class="row">
                                        <h6>21st-Century Agility </h6>
                                        <p class="m-0">short description</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="position-absolute lock-icon">
                            <img class="rounded-circle" src="{{ asset('assets/images/lock.png') }}" alt="">
                        </div>
                    </div>
                </div>


            </div>

            {{-- section 6 --}}
            <div class="row mb-4">
                <h6 class="dashbaord-section-title">Your Brain Dominance and Thinking Preferences </h6>

                <div class="col-12 col-md-4">
                    <p>Please select areas to know about more</p>
                    <canvas id="radarChart" width="210px" height="238px"></canvas>
                
                </div>               
                <div class="col-12 col-md-8 d-flex flex-column mt-4" id="contentBox">
                        <h2 id="contentTitle"></h2>
                        <p id="contentText"></p>
                        <button class="download-report-btn mt-4">Download Report </button>   
                </div>

            {{-- section 7 --}}
            <div class="mb-4">
                <h3 class="dashbaord-section-title">Personalized Brain Growth Tips</h3>
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-4 mb-4">
                        <div class="card brain-growth-tip-card-1 position-relative">

                            <div class="position-absolute info-badge d-flex card">

                                <svg xmlns="http://www.w3.org/2000/svg" height="10" width="10"
                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path fill="#ffffff"
                                        d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-224 0c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-224 0c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32l288 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-288 0c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                                </svg>


                                <p>Showing 1 of 10 videos</p>
                            </div>

                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <h5 class="brain-growth-card-bottom-text">Multitasking</h5>
                            <a href="{{ url('/multi-tasking') }}"><button class="view-all-button">View All</button></a>
                            

                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-4 mb-4">
                        <div class="card brain-growth-tip-card-2 position-relative">

                            <div class="position-absolute info-badge d-flex card">

                                <svg xmlns="http://www.w3.org/2000/svg" height="10" width="10"
                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path fill="#ffffff"
                                        d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-224 0c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-224 0c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32l288 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-288 0c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                                </svg>


                                <p>Showing 1 of 10 videos</p>
                            </div>

                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <h5 class="brain-growth-card-bottom-text">Balance Skills</h5>
                            <a href="{{ url('/multi-tasking') }}"><button class="view-all-button">View All</button></a>

                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-4 mb-4">
                        <div class="card brain-growth-tip-card-3 position-relative">

                            <div class="position-absolute info-badge d-flex card">

                                <svg xmlns="http://www.w3.org/2000/svg" height="10" width="10"
                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path fill="#ffffff"
                                        d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-224 0c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-224 0c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32l288 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-288 0c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                                </svg>


                                <p>Showing 1 of 10 videos</p>
                            </div>

                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <h5 class="brain-growth-card-bottom-text">Creative Thinking</h5>
                            <a href="{{ url('/multi-tasking') }}"><button class="view-all-button">View All</button></a>

                        </div>
                    </div>
                </div>
            </div>

            {{-- section 8--}}
            <div class="row mb-4">

                <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                    <a href="">
                        <div class="learn-more-item-box position-relative" style="background-color: #F1935D">
                            <div class=" d-flex flex-column justify-content-center">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <img class="learn-more-item-box-img"
                                        src="{{ asset('assets/images/dashboard-new/cognitive profile-main image-1.png') }}"
                                        alt="">
    
                                </div>
                                <div class="d-flex flex-column align-items-center learn-more-item-box-text">
                                    <p class="m-0">Advanced Brain Report</p>
                                    <p class="m-0">Short descriptions</p>
                                </div>
    
                            </div>
    
                            <div class="position-absolute">
                                <div class="position-absolute learn-more">
                                    <img class="rounded-circle" src="{{ asset('assets/images/lock.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    
                </div>


                <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                    <a href="">
                        <div class="learn-more-item-box position-relative" style="background-color: #85D6A5">
                            <div class=" d-flex flex-column justify-content-center">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <img class="learn-more-item-box-img"
                                        src="{{ asset('assets/images/dashboard-new/cognitive profile-main image-2.png') }}"
                                        alt="">
    
                                </div>
                                <div class="d-flex flex-column align-items-center learn-more-item-box-text">
                                    <p class="m-0">Advanced Brain Report</p>
                                    <p class="m-0">Short descriptions</p>
                                </div>
    
                            </div>
    
                            <div class="position-absolute">
                                <div class="position-absolute learn-more">
                                    <img class="rounded-circle" src="{{ asset('assets/images/lock.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    
                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                    <a href="">
                        <div class="learn-more-item-box position-relative" style="background-color: #9AE4E3">
                            <div class=" d-flex flex-column justify-content-center">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <img class="learn-more-item-box-img"
                                        src="{{ asset('assets/images/dashboard-new/cognitive profile-main image-3.png') }}"
                                        alt="">
    
                                </div>
                                <div class="d-flex flex-column align-items-center learn-more-item-box-text">
                                    <p class="m-0">Advanced Brain Report</p>
                                    <p class="m-0">Short descriptions</p>
                                </div>
    
                            </div>
    
                            <div class="position-absolute">
                                <div class="position-absolute learn-more">
                                    <img class="rounded-circle" src="{{ asset('assets/images/lock.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    
                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                    <a href="">
                        <div class="learn-more-item-box position-relative" style="background-color: #F1935D">
                            <div class=" d-flex flex-column justify-content-center">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <img class="learn-more-item-box-img"
                                        src="{{ asset('assets/images/dashboard-new/cognitive profile-main image-1.png') }}"
                                        alt="">
    
                                </div>
                                <div class="d-flex flex-column align-items-center learn-more-item-box-text">
                                    <p class="m-0">Advanced Brain Report</p>
                                    <p class="m-0">Short descriptions</p>
                                </div>
    
                            </div>
    
                            <div class="position-absolute">
                                <div class="position-absolute learn-more">
                                    <img class="rounded-circle" src="{{ asset('assets/images/lock.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    
                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                    <a href="">
                        <div class="learn-more-item-box position-relative" style="background-color: #F6C94D">
                            <div class=" d-flex flex-column justify-content-center">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <img class="learn-more-item-box-img"
                                        src="{{ asset('assets/images/dashboard-new/cognitive profile-main image-1.png') }}"
                                        alt="">
    
                                </div>
                                <div class="d-flex flex-column align-items-center learn-more-item-box-text">
                                    <p class="m-0">Advanced Brain Report</p>
                                    <p class="m-0">Short descriptions</p>
                                </div>
    
                            </div>
    
                            <div class="position-absolute">
                                <div class="position-absolute learn-more">
                                    <img class="rounded-circle" src="{{ asset('assets/images/lock.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    
                </div>


                <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                    <a href="">
                        <div class="learn-more-item-box position-relative" style="background-color: #F1935D">
                            <div class=" d-flex flex-column justify-content-center">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <img class="learn-more-item-box-img"
                                        src="{{ asset('assets/images/dashboard-new/cognitive profile-main image-5.png') }}"
                                        alt="">
    
                                </div>
                                <div class="d-flex flex-column align-items-center learn-more-item-box-text">
                                    <p class="m-0">Advanced Brain Report</p>
                                    <p class="m-0">Short descriptions</p>
                                </div>
    
                            </div>
    
                            <div class="position-absolute">
                                <div class="position-absolute learn-more">
                                    <img class="rounded-circle" src="{{ asset('assets/images/lock.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    
                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                    <a href="">
                        <div class="learn-more-item-box position-relative" style="background-color: #9AE4E3">
                            <div class=" d-flex flex-column justify-content-center">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <img class="learn-more-item-box-img"
                                        src="{{ asset('assets/images/dashboard-new/cognitive profile-main image-4.png') }}"
                                        alt="">
    
                                </div>
                                <div class="d-flex flex-column align-items-center learn-more-item-box-text">
                                    <p class="m-0">Advanced Brain Report</p>
                                    <p class="m-0">Short descriptions</p>
                                </div>
    
                            </div>
    
                            <div class="position-absolute">
                                <div class="position-absolute learn-more">
                                    <img class="rounded-circle" src="{{ asset('assets/images/lock.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    
                </div>

            </div>


            {{-- section 9 --}}
            <div class="row mb-4">
                <h3 class="dashbaord-section-title">Upcoming Webinars</h3>
                <div class="row">
                    <div class="col-12 col-lg-8 pe-3 card">
                        <div id='calendar'></div>
                    </div>
                       
                            
                </div>
            </div>

            {{-- section 10 --}}
            <div class="row mb-4">
                <div class="d-flex mb-5">
                    <div class="col-12 col-md-4 col-lg-4 col-xl-5 p-0">
                        <img src="{{ asset('assets/images/dashboard-new/consultation-booking.png') }}" alt="" class="booking-img">
                    </div>

                    <div class="col-12 col-md-8 col-lg-8 col-xl-7 d-flex align-items-center">
                        <div class="booking">
                            <h5>Consultation Booking</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo harum eaque dolore vel praesentium officiis quia dolor quibusdam, odit sapiente maiores consequatur sed, nam ab consequuntur. Voluptatum a eum consequuntur.</p>
                            <button class="yellow-send-btn">Book now</button>
                        </div>
                    </div>

                </div>


                <div class="d-flex mb-5">
                    <div class="col-12 col-md-4 col-lg-4 col-xl-5 p-0">
                        <img src="{{ asset('assets/images/dashboard-new/listen-your-brain.png') }}" alt="" class="booking-img">
                    </div>

                    <div class="col-12 col-md-8 col-lg-8 col-xl-7 d-flex align-items-center">
                        <div class="booking">
                            <h5>Listen To Your Brain</h5>
                            <p>
                                <ul>
                                    <li>- Quick & Easy EEG</li>
                                    <li>- Flexible fit for all</li>
                                    <li>- Measure and analyse in 10 mins.</li>
                                    <li>- Al-driven analysis & summaries</li>
                                    <li>- HRV measurement</li>
                                    <li>- World’s first integrated EEG-LED</li>
                                    <li><li>- Flexible fit for all</li></li>
                                </ul>
                            </p>
                            <button class="yellow-send-btn">Book now</button>
                        </div>
                    </div>

                </div>


                <div class="d-flex mb-5">
                    <div class="col-12 col-md-4 col-lg-4 col-xl-5 p-0">
                        <img src="{{ asset('assets/images/dashboard-new/parent-community.png') }}" alt="" class="booking-img">
                    </div>

                    <div class="col-12 col-md-8 col-lg-8 col-xl-7 d-flex align-items-center">
                        <div class="booking">
                            <h5>Consultation Booking</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo harum eaque dolore vel praesentium officiis quia dolor quibusdam, odit sapiente maiores consequatur sed, nam ab consequuntur. Voluptatum a eum consequuntur.</p>
                            <button class="yellow-send-btn">Book now</button>
                        </div>
                    </div>

                </div>


                <div class="d-flex mb-5">
                    <div class="col-12 col-md-4 col-lg-4 col-xl-5 p-0">
                        <img src="{{ asset('assets/images/dashboard-new/become-affiliate.png') }}" alt="" class="booking-img">
                    </div>

                    <div class="col-12 col-md-8 col-lg-8 col-xl-7 d-flex align-items-center">
                        <div class="booking">
                            <h5>Consultation Booking</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo harum eaque dolore vel praesentium officiis quia dolor quibusdam, odit sapiente maiores consequatur sed, nam ab consequuntur. Voluptatum a eum consequuntur.</p>
                            <button class="yellow-send-btn">Book now</button>
                        </div>
                    </div>

                </div>

                

                
            </div>
        </div>

    </div>

</div>


</div>
</div>


@include('layouts.dashboard-footer')


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    const ctx = document.getElementById('radarChart').getContext('2d');
    const labels = ['R', 'S', 'I', 'E', 'O', 'A'];
    const labelTitles = {
        'R': 'Realist',
        'S': 'Social',
        'I': 'Investigative',
        'E': 'Enterprising',
        'O': 'Octapus',
        'A': 'Artistic'
    };


    
    const contentData = {
        'R': 'Content for Realist Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum praesentium reiciendis enim doloribus voluptates iste at minima, aliquam architecto molestias ipsam facere, aut, suscipit accusantium est optio obcaecati dolorum! Accusantium Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum praesentium reiciendis enim doloribus voluptates iste at minima, aliquam architecto molestias ipsam facere, aut, suscipit accusantium est optio obcaecati dolorum! Accusantium Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum praesentium reiciendis enim doloribus voluptates iste at minima, aliquam architecto molestias ipsam facere, aut, suscipit accusantium est optio obcaecati dolorum! Accusantium',
        'S': 'Content for Social Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum praesentium reiciendis enim doloribus voluptates iste at minima, aliquam architecto molestias ipsam facere, aut, suscipit accusantium est optio obcaecati dolorum! Accusantium',
        'I': 'Content for Investigative Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum praesentium reiciendis enim doloribus voluptates iste at minima, aliquam architecto molestias ipsam facere, aut, suscipit accusantium est optio obcaecati dolorum! Accusantium',
        'E': 'Content for Enterprising Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum praesentium reiciendis enim doloribus voluptates iste at minima, aliquam architecto molestias ipsam facere, aut, suscipit accusantium est optio obcaecati dolorum! Accusantium',
        'O': 'Content for Octapus Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum praesentium reiciendis enim doloribus voluptates iste at minima, aliquam architecto molestias ipsam facere, aut, suscipit accusantium est optio obcaecati dolorum! Accusantium',
        'A': 'Content for Artistic Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum praesentium reiciendis enim doloribus voluptates iste at minima, aliquam architecto molestias ipsam facere, aut, suscipit accusantium est optio obcaecati dolorum! Accusantium'
    };

    const vertexColors = ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40'];

    const data = {
        labels: labels,
        datasets: [{
            label: 'My First Dataset',
            data: [100, 100, 100, 100, 100, 100],
            fill: true,
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'black',
            borderWidth: 2,
            pointRadius: 8,
            pointBackgroundColor: vertexColors,
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: 'black',
            pointHoverRadius: 10
        }, {
            label: 'My Second Dataset',
            data: [40, 39.9, 40, 40, 40, 40],
            fill: true,
            backgroundColor: 'rgba(255, 255, 0, 0.5)',
            borderColor: 'yellow',
            borderWidth: 1,
            pointRadius: 0,
            pointBackgroundColor: 'transparent',
            pointBorderColor: 'transparent',
            pointHoverBackgroundColor: 'transparent',
            pointHoverBorderColor: 'transparent'
        }]
    };

    const config = {
        type: 'radar',
        data: data,
        options: {
            responsive: true,
            plugins: {
                legend: { display: false },
                tooltip: { enabled: false }
            },
            scales: {
                r: {
                    min: 0,
                    max: 100,
                    beginAtZero: true
                }
            },
            onClick: function (event, elements) {
                if (elements.length > 0) {
                    const datasetIndex = elements[0].datasetIndex;
                    const index = elements[0].index;

                    if (datasetIndex === 0) {
                        const clickedLabel = labels[index];
                        const clickedTitle = labelTitles[clickedLabel];

                        document.getElementById('contentBox').style.display = "block";
                        document.getElementById('contentTitle').innerText = clickedTitle;
                        document.getElementById('contentText').innerText = contentData[clickedLabel];
                    }
                }
            }
        }
    };

    const myChart = new Chart(ctx, config);

    
    setTimeout(() => {
        const rIndex = labels.indexOf('R'); 
        if (rIndex !== -1) {
            const rElement = {
                datasetIndex: 0, 
                index: rIndex
            };
            config.options.onClick(null, [rElement]); // Trigger the onClick event
        }
    }, 100); 
});
</script>




