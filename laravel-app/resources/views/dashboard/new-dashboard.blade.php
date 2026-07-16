@include('layouts.dashboard-header')
<?php
use App\Models\Ads;
use App\Models\UserDimensionalScore;
$ads = Ads::get();
$d_score = UserDimensionalScore::where('user_id',session('user_id'))->first();
?>
<style>
  #radarChart {
        width: 500px;
        height: 500px;
    }
</style>
<div class="dashboard-page-content">
    <div class="p-3 w-100">

        <h3 class="section-title-big  hideOnMobile">Hi ! Good Evening</h3>
        <h3 class="section-title text-purple mt-3 hideOnMobile">Let's check your future opportunities</h3>
        <!--<?php echo session('user_dob') ?? 'no dob'; ?>-->

        <div class="d-flex displayOnMobile">
            <div class="d-flex  flex-row w-100">
                <div class="col-6 d-flex align-items-center">
                    <h2 class="mobileMainTitle mb-0">Hi Good Evening!</h2>
                </div>
                <div class="col-6 d-flex flex-row d-flex align-items-center">
                    <div
                        class="col-7 mobileProfileDetails d-flex flex-column justify-content-center align-items-end text-end">
                        <h4>Name</h4>
                        <p>Career name</p>
                    </div>
                    <div class="col-5 d-flex justify-content-end align-items-center">
                        <img src="{{ asset('assets/images/zebra2.PNG') }}" class="img-fluid border"
                            style="width: 60px; height: 60px; border-radius: 100%">
                    </div>
                </div>
            </div>
            <div class="input-group search mt-5 mobileSearch">
                <input type="text" class="form-control " placeholder="Type what you need to know"
                    style="background: transparent;">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
            <h3 class="section-title text-purple mt-5 text-center">Let's check your future opportunities</h3>
        </div>
        <!-- <h3 class="section-title text-purple">Your Flow & Frow Tips</h3> -->
        <!-- <p class="section-description mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fringilla molestie arcu eu finibus.</p> -->



        {{-- section 1 --}}
        <div class="row mt-2 mt-lg-5 mb-5 gx-3 gy-3">
            <div class="col-md-4 p-2">
                <div class="row p-2 m-1 card-small rounded-3 progress-container align-items-center position-relative">
                    <div class="col-4">
                        <img src="{{ asset('assets/images/zebra2.PNG') }}">
                    </div>
                    <div class="col-8">
                        <h3 class="card-title-style1-purple">2030 jobs</h3>
                        <p class="card-title-style2-purple">Short Description</p>
                    </div>
                    <div class="card-icon-wrap">
                        <i class="bi bi-lock-fill"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-2">
                <div class="row p-2 m-1 card-small rounded-3 progress-container align-items-center position-relative">
                    <div class="col-4">
                        <img src="{{ asset('assets/images/zebra2.PNG') }}">
                    </div>
                    <div class="col-8">
                        <h3 class="card-title-style1-purple">Leadership Programs</h3>
                        <p class="card-title-style2-purple">Short Description</p>
                    </div>
                    <div class="card-icon-wrap">
                        <i class="bi bi-lock-fill"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-2">
                <div class="row p-2 m-1 card-small rounded-3 progress-container align-items-center position-relative">
                    <div class="col-4">
                        <img src="{{ asset('assets/images/zebra2.PNG') }}">
                    </div>
                    <div class="col-8">
                        <h3 class="card-title-style1-purple">2030 jobs</h3>
                        <p class="card-title-style2-purple">Short Description</p>
                    </div>
                    <div class="card-icon-wrap">
                        <i class="bi bi-lock-fill"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-2">
                <div class="row p-2 m-1 card-small rounded-3 progress-container align-items-center position-relative">
                    <div class="col-4">
                        <img src="{{ asset('assets/images/zebra2.PNG') }}">
                    </div>
                    <div class="col-8">
                        <h3 class="card-title-style1-purple">2030 jobs</h3>
                        <p class="card-title-style2-purple">Short Description</p>
                    </div>
                    <div class="card-icon-wrap">
                        <i class="bi bi-lock-fill"></i>
                    </div>
                </div>
            </div>

        </div>
        
        <?php if($d_score){ ?> 
        <div class="row mt-2 mt-lg-5 mb-5 gx-3 gy-3" style="justify-content: center;">
        <div class="col-md-4 p-2">
        <canvas id="radarChart"> </canvas>
        </div>
        </div>
<!--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>-->

<!--        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.1.2/chart.umd.js"></script>-->
<!--        <script>-->
        
<!--    let ctx = document.getElementById('radarChart').getContext('2d');-->
    
<!--    let myRadarChart = new Chart(ctx, {-->
<!--        type: 'radar',-->
<!--        data: {-->
<!--            labels: ['Analyst', 'Stalwart', 'Strategist', 'Socializer', 'Realist', 'Organizer', 'Imagineer', 'Empathizer'],-->
<!--            datasets: [{-->
<!--                label: 'Dimensional Results',-->
<!--                data: [-->
<!--                    {{$d_score->analyst_score}}, -->
<!--                    {{$d_score->stalwart_score}}, -->
<!--                    {{$d_score->strategist_score}}, -->
<!--                    {{$d_score->socializer_score}},-->
<!--                    {{$d_score->realist_score}}, -->
<!--                    {{$d_score->organizer_score}}, -->
<!--                    {{$d_score->imagineer_score}}, -->
<!--                    {{$d_score->empathizer_score}}-->
<!--                ],-->
<!--                backgroundColor: 'rgba(255, 222, 28, 0.5)',-->
<!--                borderColor: 'rgb(90, 85, 157)',-->
<!--                borderWidth: 2,-->
<!--            }]-->
<!--        },-->
<!--       options: {-->
<!--        plugins: {-->
<!--            legend: {-->
<!--                labels: {-->
                    
<!--                    font: {-->
<!--                        size: 24-->
<!--                    }-->
<!--                },-->
               
<!--            }-->
<!--        }-->
<!--    }-->
<!--    });-->
<!--</script>-->
                
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.1.2/chart.umd.js"></script>
                <script>
                let ctx = document.getElementById('radarChart').getContext('2d');
                
                let myRadarChart = new Chart(ctx, {
                    type: 'radar',
                    data: {
                        labels: ['Analytical', 'Creative', 'Protective', 'Realistic', 'Strategic', 'Practical'],
                        datasets: [{
                            label: 'Dimensional Results',
                            data: [
                                {{$d_score->analytical_score}}, 
                                {{$d_score->creative_score}}, 
                                {{$d_score->protective_score}}, 
                                {{$d_score->realistic_score}}, 
                                {{$d_score->strategic_score}}, 
                                {{$d_score->practical_score}}
                            ],
                            backgroundColor: 'rgba(255, 222, 28, 0.5)',
                            borderColor: 'rgb(90, 85, 157)',
                            borderWidth: 2,
                        }]
                    },
                    options: {
                        plugins: {
                            legend: {
                                labels: {
                                    font: {
                                        size: 24
                                    }
                                }
                            }
                        }
                    }
                });
                </script>

        <?php } ?>
       
        <div class="row mt-5 mb-5 gx-3 gy-3">
            <h3 class="section-title text-purple mt-5 text-center text-lg-start">Ads
            </h3>
            <?php foreach($ads as $ad){ ?> 
            <div class="col-md-3">
                    <div class="eventcard p-3">
                        <div class="eventImgWrapper">
                            <a href="{{$ad->link}}" target="_blank"><img src="http://127.0.0.1:8000/assets/images/zebra1.PNG" class="w-100 eventImage" style="border-radius: 10px"></a>
                        </div>
                    </div>
            </div>
            <?php } ?>
        </div>

        {{-- section 2 --}}
        <div class="row mt-5 mb-5 gx-3 gy-3">
            <h3 class="section-title text-purple mt-5 text-center text-lg-start">Up & coming events
            </h3>
            <p class="section-description mt-2 mt-lg-4">Let's check your event calendar</p>
            <!--<div class="col-12 col-lg-8 pe-3">-->
            <!--    {{-- <div id="calendarDiv"></div> --}}-->
            <!--    <style>-->
            <!--        table {-->
            <!--            width: 100%;-->
            <!--            border-collapse: collapse;-->
            <!--        }-->

            <!--        th,-->
            <!--        td {-->
            <!--            border: 1px solid #dddddd;-->
            <!--            text-align: left;-->
            <!--            padding: 3px;-->
            <!--        }-->

            <!--        th {-->
            <!--            background-color: transparent;-->
            <!--            text-align: center-->
            <!--        }-->

            <!--        .task-cell {-->
            <!--            text-align: center;-->
            <!--            background-color: #5a559d;-->
            <!--            border: none;-->
            <!--            color: #fff-->
            <!--        }-->

            <!--        .today {-->
            <!--            background-color: #5a559d;-->
            <!--            color: #fff-->
            <!--        }-->
            <!--        th{-->
            <!--            color: #5a559d;-->
            <!--            font-size: 14px;-->
            <!--            border: none;-->
            <!--        }-->
            <!--        th span{-->
            <!--            color: #3b3b3b;-->
            <!--            font-size: 14px;-->
            <!--        }-->
            <!--        .selectedTimeOfDay{-->
            <!--            background-color: #5a559d;-->
            <!--            color: #fff;-->
            <!--            border-radius: 100%;-->
            <!--            padding: 5px;-->
            <!--        }-->
            <!--        td{-->
            <!--            color: #3b3b3b;-->
            <!--            font-size: 12px;-->
            <!--        }-->
            <!--    </style>-->
            <!--    <table id="timetable">-->
            <!--        <tr>-->
            <!--            <th></th>-->
            <!--            <th>Mon-->
            <!--                <br>-->
            <!--                <span class="selectedTimeOfDay">20</span>-->
            <!--            </th>-->
            <!--            <th>Tue-->
            <!--                <br>-->
            <!--                <span>21</span>-->
            <!--            </th>-->
            <!--            <th>Wed-->
            <!--                <br>-->
            <!--                <span>22</span>-->
            <!--            </th>-->
            <!--            <th>Thu-->
            <!--                <br>-->
            <!--                <span>23</span>-->
            <!--            </th>-->
            <!--            <th>Fri-->
            <!--                <br>-->
            <!--                <span>24</span>-->
            <!--            </th>-->
            <!--        </tr>-->
            <!--        <tr>-->
            <!--            <td>5:00 - 6:00</td>-->
            <!--            <td id="monday_5"></td>-->
            <!--            <td id="tuesday_5"></td>-->
            <!--            <td id="wednesday_5"></td>-->
            <!--            <td id="thursday_5"></td>-->
            <!--            <td id="friday_5"></td>-->
            <!--        </tr>-->
            <!--        <tr>-->
            <!--            <td>6:00 - 7:00</td>-->
            <!--            <td id="monday_6" class="task-cell"></td>-->
            <!--            <td id="tuesday_6" ></td>-->
            <!--            <td id="wednesday_6"></td>-->
            <!--            <td id="thursday_6"></td>-->
            <!--            <td id="friday_6"></td>-->
            <!--        </tr>-->
            <!--        <tr>-->
            <!--            <td>7:00 - 8:00</td>-->
            <!--            <td id="monday_7" class="task-cell">Sample Text</td>-->
            <!--            <td id="tuesday_7"></td>-->
            <!--            <td id="wednesday_7 class="></td>-->
            <!--            <td id="thursday_7"></td>-->
            <!--            <td id="friday_7"></td>-->
            <!--        </tr>-->
            <!--        <tr>-->
            <!--            <td>8:00 - 9:00</td>-->
            <!--            <td id="monday_8" class="task-cell"></td>-->
            <!--            <td id="tuesday_8"></td>-->
            <!--            <td id="wednesday_8"></td>-->
            <!--            <td id="thursday_8"></td>-->
            <!--            <td id="friday_8"></td>-->
            <!--        </tr>-->
            <!--        <tr>-->
            <!--            <td>9:00 - 10:00</td>-->
            <!--            <td id="monday_9"></td>-->
            <!--            <td id="tuesday_9"></td>-->
            <!--            <td id="wednesday_9"class="task-cell">Sample Text</td>-->
            <!--            <td id="thursday_9"></td>-->
            <!--            <td id="friday_9"></td>-->
            <!--        </tr>-->
            <!--        <tr>-->
            <!--            <td>10:00 - 11:00</td>-->
            <!--            <td id="monday_10"></td>-->
            <!--            <td id="tuesday_10"></td>-->
            <!--            <td id="wednesday_10"></td>-->
            <!--            <td id="thursday_10"></td>-->
            <!--            <td id="friday_10"></td>-->
            <!--        </tr>-->
            <!--        <tr>-->
            <!--            <td>11:00 - 12:00</td>-->
            <!--            <td id="monday_11"></td>-->
            <!--            <td id="tuesday_11"></td>-->
            <!--            <td id="wednesday_11"></td>-->
            <!--            <td id="thursday_11"></td>-->
            <!--            <td id="friday_11"></td>-->
            <!--        </tr>-->
            <!--        <tr>-->
            <!--            <td>12:00 - 1:00</td>-->
            <!--            <td id="monday_12"></td>-->
            <!--            <td id="tuesday_12"></td>-->
            <!--            <td id="wednesday_12"></td>-->
            <!--            <td id="thursday_12"class="task-cell">Sample Text</td>-->
            <!--            <td id="friday_12"></td>-->
            <!--        </tr>-->
            <!--        <tr>-->
            <!--            <td>1:00 - 2:00</td>-->
            <!--            <td id="monday_1"></td>-->
            <!--            <td id="tuesday_1"></td>-->
            <!--            <td id="wednesday_1"></td>-->
            <!--            <td id="thursday_1"class="task-cell"></td>-->
            <!--            <td id="friday_1"></td>-->
            <!--        </tr>-->
                    <!-- Add more rows as needed -->
            <!--    </table>-->
            <!--</div>-->
            <!--<div class="col-12 col-lg-4 hideOnMobile d-flex flex-column justify-content-center align-items-center">-->
            <!--    <div class="d-flex flex-row w-100 mb-3">-->
            <!--        <div class="col-6">-->
            <!--            <div id="month-year" class="monthYearTxt"></div>-->
            <!--        </div>-->
            <!--        <div class="col-6 d-flex flex--row justify-content-end">-->
            <!--            <button onclick="previousMonth()" class="prevBtnCalander"><i class="bi bi-arrow-left"></i></button>-->
            <!--            <button onclick="nextMonth()" class="nextBtnCalander"><i class="bi bi-arrow-right"></i></button>-->
            <!--        </div>-->
            <!--    </div>-->

            <!--    <table id="calendar">-->
            <!--        <thead>-->
            <!--            <tr>-->
            <!--                <th>S</th>-->
            <!--                <th>M</th>-->
            <!--                <th>T</th>-->
            <!--                <th>W</th>-->
            <!--                <th>T</th>-->
            <!--                <th>F</th>-->
            <!--                <th>S</th>-->
            <!--            </tr>-->
            <!--        </thead>-->
            <!--        <tbody id="calendar-body">-->
                        <!-- Calendar days will be dynamically generated here -->
            <!--        </tbody>-->
            <!--    </table>-->
            <!--</div>-->
        </div>
        <div class="row mt-5 gx-3 gy-3">
        <div id='events-calendar'></div>
        </div>
        {{-- section 3 --}}
        <div class="row mt-1 gx-3 gy-3">
            <div class="col-12 col-lg-9 d-flex flex-column flex-lg-row justify-content-between">
                <div class="col-12 col-lg-9 p-2 d-flex align-items-center">
                    <h3 class="section-title text-purple text-center text-lg-start mt-5">
                        Let's check your brain stripes & your test result
                    </h3>
                </div>
                <div class="col-12 col-lg-3 p-2 d-flex align-items-center justify-content-center justify-content-end">
                    <button class="yellow-button">Download Report</button>
                </div>
            </div>
            <div class="col-12 col-lg-3 p-2 d-flex align-items-center hideOnMobile">
                <h3 class="section-title3 text-purple mt-1">ZebraZen: 86% </h3>
            </div>
        </div>
        <div class="row mb-5 gx-3 gy-3">
            <div class="col-12 col-lg-9 d-flex flex-column flex-lg-row">
                <div class="col-12 col-lg-6 p-2">
                    <img src="{{ asset('assets/images/brain.png') }}">
                </div>
                <div class="col-12 col-lg-6 p-2">
                    <div class="row row-cols-2">
                        <div class="col-6 p-1">
                            <div class="box-data p-5" style="background-color: #f6c94c; color: black;">
                                <p class="mb-0" style="color: black;">
                                    ZebraZen
                                </p>
                                <h3 class="mb-0" style="color: black;">
                                    86%
                                </h3>
                            </div>
                        </div>
                        <div class="col-6 p-1">
                            <div class="box-data p-5" style="background-color: #f1935d;">
                                <p class="mb-0" style="color: black;">
                                    ZebraZeal
                                </p>
                                <h3 class="mb-0" style="color: black;">
                                    72%
                                </h3>
                            </div>
                        </div>
                        <div class="col-6 p-1">
                            <div class="box-data p-5" style="background-color: #9ae4e3;">
                                <p class="mb-0" style="color: black;">
                                    ZebraZing
                                </p>
                                <h3 class="mb-0" style="color: black;">
                                    75%
                                </h3>
                            </div>
                        </div>
                        <div class="col-6 p-1">
                            <div class="box-data p-5" style="background-color: #84d6a5;">
                                <p class="mb-0" style="color: black;">
                                    ZebraZest
                                </p>
                                <h3 class="mb-0" style="color: black;">
                                    67%
                                </h3>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <h3 class="section-title3 text-purple mt-2">ZebraZen: 86%</h3>

                <p class="paragraph-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quisquam culpa ab praesentium, minus
                    sint
                    eaque amet dolor, labore fuga dolorem itaque consequatur natus voluptates rerum at laudantium
                    perspiciatis nesciunt!
                </p>
                <p class="paragraph-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quisquam culpa ab praesentium, minus
                    sint
                    eaque amet dolor, labore fuga dolorem itaque consequatur natus voluptates rerum at laudantium
                    perspiciatis nesciunt!
                </p>
            </div>
        </div>
        <div class="row mt-5 mb-5 gx-3 gy-3">
            <div class="col-md-4 p-2">
                <div class="row p-2 m-1 card-small rounded-3 progress-container align-items-center position-relative">
                    <div class="col-4">
                        <img src="{{ asset('assets/images/zebra2.PNG') }}">
                    </div>
                    <div class="col-8">
                        <h3 class="card-title-style1-purple">Relationship Style</h3>
                        <p class="card-title-style2-purple">Short Description</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-2">
                <div class="row p-2 m-1 card-small rounded-3 progress-container align-items-center position-relative">
                    <div class="col-4">
                        <img src="{{ asset('assets/images/zebra2.PNG') }}">
                    </div>
                    <div class="col-8">
                        <h3 class="card-title-style1-purple">Leadership style
                        </h3>
                        <p class="card-title-style2-purple">Short Description</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-2">
                <div class="row p-2 m-1 card-small rounded-3 progress-container align-items-center position-relative">
                    <div class="col-4">
                        <img src="{{ asset('assets/images/zebra2.PNG') }}">
                    </div>
                    <div class="col-8">
                        <h3 class="card-title-style1-purple">Relationship Style
                        </h3>
                        <p class="card-title-style2-purple">Short Description</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-2">
                <div class="row p-2 m-1 card-small rounded-3 progress-container align-items-center position-relative">
                    <div class="col-4">
                        <img src="{{ asset('assets/images/zebra2.PNG') }}">
                    </div>
                    <div class="col-8">
                        <h3 class="card-title-style1-purple">Studying Style
                        </h3>
                        <p class="card-title-style2-purple">Short Description</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-2">
                <div class="row p-2 m-1 card-small rounded-3 progress-container align-items-center position-relative">
                    <div class="col-4">
                        <img src="{{ asset('assets/images/zebra2.PNG') }}">
                    </div>
                    <div class="col-8">
                        <h3 class="card-title-style1-purple">Relationship Style
                        </h3>
                        <p class="card-title-style2-purple">Short Description</p>
                    </div>
                </div>
            </div>

        </div>




        {{-- section 4 --}}
        <div class="row mt-5 mb-5 gx-3 gy-3">
            <h3 class="section-title2 text-purple mt-5" style="font-size:32px;">Your Flow & Grow Tips
            </h3>
            <p class="section-description mt-4">Here are your brain strengths and have to improve brain strengths using
                ZEBRA BRAIN tips.</p>
            <div class="col-md-6 col-lg-4">
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
            <div class="col-md-6 col-lg-4">
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
            <div class="col-md-6 col-lg-4">
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
            <div class="col-md-6 col-lg-4">
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


        {{-- new sec --}}
        <div class="d-flex displayOnMobile pt-5 flex-column">
            <h3 class="section-title text-purple">Your brain advance strips & result</h3>
            <div class="d-flex justify-content-center align-items-center mb-3">
                <button class="yellow-btn-small" style="align-self: center;">Download report</button>
            </div>
            <p class="section-description">
                Please select areas to know about more
            </p>
            <h3 class="section-title text-purple">Realist</h3>
            <p class="section-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem repellat minima cum sapiente ipsa?
                Autem, provident eveniet ut mollitia sint cumque ducimus, hic qui enim beatae vitae. Provident doloribus
                laborum assumenda asperiores at excepturi fugit eos mollitia itaque quisquam incidunt, similique debitis
                quo quod? Explicabo, cum animi! Nulla, odio pariatur!
            </p>
        </div>



        {{-- section 4 --}}
        <div class="row mt-5 mb-5 gx-3 gy-3">
            <h3 class="section-title2 text-purple mt-5" style="font-size:32px;">
                Let's watch tips to improve brain strengths
            </h3>
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




        {{-- section 5 --}}
        <div class="row mt-5 mb-5  gx-4 gy-3">
            <h3 class="section-title text-purple">
                Consultation Booking
            </h3>
            <p class="section-description mt-2">
                Select your career category
            </p>
            <div class="col-md-3">
                <div class="video-card">
                    <img src="{{ asset('assets/images/brain-suitecase.PNG') }}" class="w-100">
                    <h3 class="text-center view-all mt-2 text-purple">
                        Business Consultant
                    </h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="video-card">
                    <img src="{{ asset('assets/images/brain-suitecase.PNG') }}" class="w-100">
                    <h3 class="text-center view-all mt-2 text-purple">
                        Name Consultant
                    </h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="video-card">
                    <img src="{{ asset('assets/images/brain-suitecase.PNG') }}" class="w-100">
                    <h3 class="text-center view-all mt-2 text-purple">
                        Construction Consultant
                    </h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="video-card">
                    <img src="{{ asset('assets/images/brain-suitecase.PNG') }}" class="w-100">
                    <h3 class="text-center view-all mt-2 text-purple">Medical Consultant</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="video-card">
                    <img src="{{ asset('assets/images/brain-suitecase.PNG') }}" class="w-100">
                    <h3 class="text-center view-all mt-2 text-purple">Lawyer Consultant
                    </h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="video-card">
                    <img src="{{ asset('assets/images/brain-suitecase.PNG') }}" class="w-100">
                    <h3 class="text-center view-all mt-2 text-purple">Developer Consultant</h3>
                </div>
            </div>

        </div>



        {{-- section 6 --}}
        <div class="row mt-5 mb-5">
            <h3 class="section-title text-purple text-center text-lg-start">Parent Community</h3>
            <div class="d-flex flex-row">
                <div class="col-4 col-lg-6 p-2 p-lg-5">
                    <img src="{{ asset('assets/images/parent.PNG') }}" class="w-100">
                </div>
                <div class="col-8 col-lg-6 p-2 p-lg-5">
                    <p class="section-description mt-2 mt-lg-2 hideOnMobile">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta hic asperiores neque quibusdam
                        reiciendis vero dolorum possimus, voluptatem dolore cupiditate cum illum tenetur odit blanditiis
                        consectetur, porro aut. Nobis, minus natus modi totam in praesentium hic earum magni mollitia ad
                        corrupti architecto eum omnis ipsam deleniti ut debitis. Aperiam, soluta!
                    </p>
                    <p class="section-description mt-2 mt-lg-2 displayOnMobile">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta hic asperiores neque quibusdam
                        reiciendis vero dolorum possimus, voluptatem dolore.
                    </p>
                    <button class="yellow-btn mt-4 px-3 px-lg-5">Join now</button>
                </div>
            </div>

        </div>


        {{-- section 6 --}}
        <div class="row mt-5 mb-5">
            <h3 class="section-title text-purple text-center text-lg-start">Enroll for super future club!</h3>
            <div class="col-4 col-lg-6 p-2 p-lg-5">
                <img src="{{ asset('assets/images/parent.PNG') }}" class="w-100">
            </div>
            <div class="col-8 col-lg-6 p-2 p-lg-5">
                <p class="section-description mt-2 mt-lg-2 hideOnMobile">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta hic asperiores neque quibusdam
                    reiciendis vero dolorum possimus, voluptatem dolore cupiditate cum illum tenetur odit blanditiis
                    consectetur, porro aut. Nobis, minus natus modi totam in praesentium hic earum magni mollitia ad
                    corrupti architecto eum omnis ipsam deleniti ut debitis. Aperiam, soluta!
                </p>
                <p class="section-description mt-2 mt-lg-2 displayOnMobile">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta hic asperiores neque quibusdam
                    reiciendis vero dolorum possimus, voluptatem dolore.
                </p>
                <button class="yellow-btn mt-4 px-3 px-lg-5">Join now</button>
            </div>

        </div>


        <div class="row mt-5 mb-5 displayOnMobile">
            <div class="col-12 p-5 text-center d-flex flex-column justify-content-center align-items-center">
                <h3 class="section-title text-purple">Enroll for <br>
                    Super Futures Club</h3>
                <button class="yellow-btn mt-4 px-3 px-lg-5">Enroll now</button>
            </div>
        </div>


    </div>


</div>

<!-- JS for jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- JS for full calender -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
<script>
    $(document).ready(function() {
    $('#calendarDiv').fullCalendar({
    defaultView: 'month',
    events: [
      {
        title: 'sample text',
        start: '2024-02-01'

      },
      {
        title: 'sample text',
        start: '2024-02-25'
      },
      {
        title: 'sample text',
        start: '2024-02-28'
      }
      ]
    });
});


// Get current date
const currentDate = new Date();
let currentMonth = currentDate.getMonth();
let currentYear = currentDate.getFullYear();
let today = currentDate.getDate();

// Function to display the current month
function displayCurrentMonth() {
const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
document.getElementById('month-year').textContent = months[currentMonth] + ' ' + currentYear;

const firstDayOfMonth = new Date(currentYear, currentMonth, 1);
const lastDayOfMonth = new Date(currentYear, currentMonth + 1, 0);
const daysInMonth = lastDayOfMonth.getDate();

const calendarBody = document.getElementById('calendar-body');
calendarBody.innerHTML = '';

let date = 1;
for (let i = 0; i < 6; i++) {
    const row = document.createElement('tr');
    for (let j = 0; j < 7; j++) {
        const cell = document.createElement('td');
        if (i === 0 && j < firstDayOfMonth.getDay()) {
            row.appendChild(cell);
        } else if (date > daysInMonth) {
            break;
        } else {
            cell.textContent = date;
            row.appendChild(cell);
            if (date === today) {
                cell.classList.add('today'); // Add class for today's date
            }
            date++;
        }
    }
    calendarBody.appendChild(row);
}
}

// Function to navigate to the previous month
function previousMonth() {
currentMonth--;
if (currentMonth < 0) {
    currentMonth = 11;
    currentYear--;
}
displayCurrentMonth();
}

// Function to navigate to the next month
function nextMonth() {
currentMonth++;
if (currentMonth > 11) {
    currentMonth = 0;
    currentYear++;
}
displayCurrentMonth();
}

// Display current month when the page loads
displayCurrentMonth();
</script>
@include('layouts.dashboard-footer')



<script>
    console.log(@json($events));
    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('events-calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'timeGridWeek',
            events: @json($events),
        });
        calendar.render();
    });
</script>
