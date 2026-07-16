<?php
use App\Models\WPUsers;
use App\Models\BrainScores;
use App\Models\SkillBrainScores;
use App\Models\QuestionAnswerMain;
use App\Models\SkillTestAnswersMain;
$attempt = QuestionAnswerMain::where('user_id', session('user_id'))->where('status', 'complete')->first();
$skill_tests = SkillTestAnswersMain::where('user_id', session('user_id'))->where('status', 'complete')->get();
$introvert_extrovert = WPUsers::where('user_id', session('user_id'))->value('introverted_extroverted');
?>

<style>
    .tab-section {
        background: #fff;
        border: 1px solid #ddd;
        box-shadow: 0 0px 0px rgba(0, 0, 0, 0.1);
        border-radius: 30px;
        padding: 10px;
        text-align: left;
    }

    .tab-section img {
        border-radius: 8px;
        max-width: 100%;
        height: auto;
    }

    .tab-section .btn {
        margin-top: 15px;
        background: #5a559d;
        color: #fff;
        border-radius: 5px;
        text-decoration: none;
    }

    .heading1 {
        color: #000814;
        font-weight: 550;
        font-size: 24px;


    }

    .p1 {
        color: #9BA1A6;
        font-weight: 500;
        font-size: 16px;


    }

    .heading2 {
        color: #000814;
        font-weight: 600;
        font-size: 16px;


    }

    .p2 {
        color: #3B3B3B;
        font-weight: 400;
        font-size: 16px;


    }

    .q1 {
        color: #000814;
        font-weight: 600;
        font-size: 16px;


    }

    .qp1 {
        color: #8c8c8c;
        font-weight: 400;
        font-size: 16px;


    }

    .home-slider-btn {
        padding-top: 10px;
        padding-bottom: 10px;
        background-color: #F6C94D;
        color: #000814;
        font-weight: 500;
        font-size: 15px;

    }

    .next-step-btn {
        padding-top: 10px;
        padding-bottom: 10px;
        background-color: #F6C94D;
        color: #000814;
        font-weight: 500;
        font-size: 15px;

    }

    .clock {
        color: #C6C8CA;
        font-weight: 400;
        font-size: 14px;
    }

    .img-content-page {
        height: 100px;
        width: 100px;
    }

    .report-heading {
        font-size: 22px;
        color: #000000;
        font-family: "Maven Pro", Sans-serif;
        font-weight: 700;
        padding: 0;
        margin: 0;
    }

    .report-normal-text {
        padding: 0;
        margin-bottom: 0;
        color: #000000;
        font-family: "Maven Pro", Sans-serif;
        font-size: 16px;
        font-weight: 400;
    }

    .report-opertunities-card {
        padding: 15px 35px 15px 15px;
        border-radius: 15px;
        border: 2px solid #000;
        margin-bottom: 15px;
        position: relative;
        margin-right: 15px;
        min-height:150px;
    }

    .report-opertunities-card .title {
        font-size: 22px;
        color: #000000;
        font-family: "Maven Pro", Sans-serif;
        font-weight: 400;
        padding: 0;
        margin: 0;
    }

    .report-opertunities-card .short-description {
        font-size: 16px;
        color: #000000;
        font-family: "Maven Pro", Sans-serif;
        font-weight: 400;
        padding: 0;
        margin: 0;
    }

    .report-opertunities-card .row div img {

        width: 65% !important;
    }

    .bg-orange {
        background: #f1935d;
    }

    .bg-yellow {
        background: #f6c94c;
    }

    .bg-blue {
        background: #9ae4e3;
    }

    .bg-green {
        background: #84d6a5;
    }

    .lock-icon {
        border-radius: 50%;
        padding: 7px;
        background: #000;
        color: #fff;
        height: 12px;
        width: 12px;
        position: absolute;
        right: -15px;
        top: 35%;
    }

    .report-progress-bar .progress {
        color: #000;
    }

    .report-progress-bar .progress-bar {
        color: #000;
    }

    .report_modal .modal-header {
        border: none;
    }

    .report_modal .modal-body {
        padding: 0rem;
    }

    .report_modal .modal-content {
        border: 2px solid #000;
        border-radius: 15px;
    }

    .report_modal .modal-body {
        padding: 25px 25px 25px 25px;
    }

    .report_modal .box-data {
        background-color: #fff;
        border: 1px solid #000;
        text-align: center;
    }

    .report_modal .box-data p {
        color: #000;
    }

    .report_modal .box-data h3 {
        color: #000;
    }

    .report_modal .modal-dialog {
        margin-top: 100px;
        margin-bottom: 70px;
    }

    .square-progress .step {
        background: linear-gradient(342deg, rgba(128, 125, 125, 1) 0%, rgba(0, 0, 0, 1) 95%);
        border: 1px solid #626060;
        height: 25px;
        width: 50px;
        transform: skewX(-20deg);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .square-progress .step.filled {
        background: #f6c94c;

    }

    .brain-img-top {
        width: 100px !important;
        height: auto !important;
    }

    .custom-button {
        background-color: #e28d5c;
        color: #000;
        font-weight: bold;
        font-size: 18px;
        padding: 12px 48px;
        border: none;
        border-radius: 25px;
        cursor: pointer;
        text-align: center;
    }


    .centered-container {
        padding-top: 70px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        text-align: center;
    }

    /* Heading styling */
    .centered-container h3 {
        color: black;
        font-weight: 600;
        margin-bottom: 30px;
    }

    .centered-container img {
        margin-top: 30px;
        width: 380px;
        height: auto;
    }

    @media screen and (max-width: 1024px) {
        .side-img-desktop {
            width: 100% !important;
            height: auto !important;
        }

        .side-img-desktop2 {
            width: 50% !important;
            height: auto !important;
        }

        .centered-container {
            padding-top: 70px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 70vh;
            text-align: center;
        }
    }
    @media screen and (max-width: 1320px) {
    .report-opertunities-card {

        min-height:200px;
    }
}
    @media (min-width: 780px) and (max-width: 2800px) {

        .dashboard-page-content {
            min-height: 100vh;
            padding-top: 120px;
            padding-left: 0px;
            padding-bottom: 0px;
            margin-left: 20px;
        }

        .middle-content {
            margin-left: 20px;
        }

    }

    @media screen and (min-width: 1025px) {

        .report-opertunities-card .title {

            font-size: 22px;
            color: #000000;
            font-family: "Maven Pro", Sans-serif;
            font-weight: 400;
            padding: 0;
            margin: 0;
        }

        .side-img-desktop {
            width: 60% !important;
            height: auto !important;
        }

        .side-img-desktop2 {
            width: 30% !important;
            height: auto !important;
        }

        .desktop-img-respon {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }

    @media screen and (max-width: 400px) {
        .centered-container {
            padding-top: 70px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 90vh;
            text-align: center;
        }

    }

    @media screen and (max-width: 992px) {
        .report-opertunities-card {
            margin-right: 0px;
        }

    }

    .fa-lock {
        display: none;
    }

    .question-img {
        width: 20rem;
    }
</style>
@extends('layouts.dashboard-layout')

@section('title', 'Dashboard')

@section('content')
    <div>

        <?php if ($introvert_extrovert === 'introverted'): ?>
        <section class="py-0">

            <div class="container px-0  mx-0">
                <h3 class="heading1 text-purple px-0">You are an Introvert!</h3>
                <p class="p1  px-0">The following describes your strengths as an introvert.</p>

                <div class=" d-flex flex-column-reverse flex-lg-row align-items-center px-0 mx-0">
                    <div class="col-lg-6 ps-0">

                        <!-- <img src="{{ asset('assets/images/1-Sport and other mainimage-01.png') }}" style="width:100%; height:auto:" class="img-fluid d-block d-lg-none"> -->

                        <div class="report-opertunities-card bg-yellow">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    {{-- <img src="{{ asset('assets/images/reflective thinking.png') }}" class="w-100"> --}}
                                    <img src="{{ asset('assets/images/DecodemyBrain new logo-01.png') }}" class="w-100">
                                </div>
                                <div class="col-10">
                                    <h2 class="title">Reflective Thinking</h2>
                                    <h2 class="short-description mt-2">Introverts often prefer to think deeply before
                                        speaking or acting, allowing for more thoughtful and measured responses.</h2>
                                </div>
                            </div>
                            <i class="fa-solid fa-lock lock-icon"></i>
                        </div>
                        <div class="report-opertunities-card bg-blue">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    {{-- <img src="{{ asset('assets/images/3-Strategic team sport-01.png') }}" class="w-100"> --}}
                                    <img src="{{ asset('assets/images/DecodemyBrain new logo-01.png') }}" class="w-100">
                                </div>
                                <div class="col-10">
                                    <h2 class="title">Enjoys Solitude</h2>
                                    <h2 class="short-description mt-2">They typically recharge their energy by spending time
                                        alone, finding peace in solitary activities like reading, writing, or engaging in
                                        hobbies.</h2>
                                </div>
                            </div>
                            <i class="fa-solid fa-lock lock-icon"></i>
                        </div>
                        <div class="report-opertunities-card bg-green">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <img src="{{ asset('assets/images/DecodemyBrain new logo-01.png') }}" class="w-100">
                                    {{-- <img src="{{ asset('assets/images/listening.png') }}" class="w-100"> --}}
                                </div>
                                <div class="col-10">
                                    <h2 class="title">Strong Listening Skills</h2>
                                    <h2 class="short-description mt-2">Introverts tend to be good listeners, often paying
                                        close
                                        attention to what others say and providing thoughtful feedback.</h2>
                                </div>
                            </div>
                            <i class="fa-solid fa-lock lock-icon"></i>
                        </div>
                        <div class="report-opertunities-card bg-orange">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <img src="{{ asset('assets/images/DecodemyBrain new logo-01.png') }}" class="w-100">
                                    {{-- <img src="{{ asset('assets/images/communication.png') }}" class="w-100"> --}}
                                </div>
                                <div class="col-10">
                                    <h2 class="title">Preference for Deep Conversations</h2>
                                    <h2 class="short-description mt-2">They often favor meaningful, one-on-one
                                        conversations over small talk, valuing depth over breadth in social interactions.
                                    </h2>
                                </div>
                            </div>
                            <i class="fa-solid fa-lock lock-icon"></i>
                        </div>
                        <div class="report-opertunities-card bg-yellow">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <img src="{{ asset('assets/images/DecodemyBrain new logo-01.png') }}" class="w-100">
                                    {{-- <img src="{{ asset('assets/images/inclinations.png') }}" class="w-100"> --}}
                                </div>
                                <div class="col-10">
                                    <h2 class="title">Creative Problem Solving</h2>
                                    <h2 class="short-description mt-2">Introverts can excel in creative and analytical
                                        tasks,
                                        often bringing unique perspectives and innovative solutions.</h2>
                                </div>
                            </div>
                            <i class="fa-solid fa-lock lock-icon"></i>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <div class="report-opertunities-card bg-blue">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <img src="{{ asset('assets/images/DecodemyBrain new logo-01.png') }}" class="w-100">
                                    {{-- <img src="{{ asset('assets/images/Boost Academics-01.png') }}" class="w-100"> --}}
                                </div>
                                <div class="col-10">
                                    <h2 class="title">High Levels of Concentration</h2>
                                    <h2 class="short-description mt-2">They can focus intensely on tasks without being
                                        easily distracted, making them effective in independent work settings.</h2>
                                </div>
                            </div>
                            <i class="fa-solid fa-lock lock-icon"></i>
                        </div>
                        <div class="report-opertunities-card bg-green">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <img src="{{ asset('assets/images/DecodemyBrain new logo-01.png') }}" class="w-100">
                                    {{-- <img src="{{ asset('assets/images/reserved-nature.png') }}" class="w-100"> --}}
                                </div>
                                <div class="col-10">
                                    <h2 class="title">Reserved Nature</h2>
                                    <h2 class="short-description mt-2">Introverts may come across as quiet or reserved,
                                        which can create
                                        an air of mystery and thoughtfulness.</h2>
                                </div>
                            </div>
                            <i class="fa-solid fa-lock lock-icon"></i>
                        </div>
                        <div class="report-opertunities-card bg-orange">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <img src="{{ asset('assets/images/DecodemyBrain new logo-01.png') }}" class="w-100">
                                    {{-- <img src="{{ asset('assets/images/5-STEM related-01.png') }}" class="w-100"> --}}
                                </div>
                                <div class="col-10">
                                    <h2 class="title">Strong Sense of Independence</h2>
                                    <h2 class="short-description mt-2">They often prefer to work alone or take initiative
                                        on projects, valuing their autonomy.</h2>
                                </div>
                            </div>
                            <i class="fa-solid fa-lock lock-icon"></i>
                        </div>
                        <div class="report-opertunities-card bg-yellow">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <img src="{{ asset('assets/images/DecodemyBrain new logo-01.png') }}" class="w-100">
                                    {{-- <img src="{{ asset('assets/images/2-Individual sport-01.png') }}" class="w-100"> --}}
                                </div>
                                <div class="col-10">
                                    <h2 class="title">Observant and Detail-Oriented</h2>
                                    <h2 class="short-description mt-2">Introverts are often keen observers, picking up on
                                        nuances and details that others might miss.</h2>
                                </div>
                            </div>
                            <i class="fa-solid fa-lock lock-icon"></i>
                        </div>
                        <div class="report-opertunities-card bg-blue">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <img src="{{ asset('assets/images/DecodemyBrain new logo-01.png') }}" class="w-100">
                                    {{-- <img src="{{ asset('assets/images/3-Strategic team sport-01.png') }}" class="w-100"> --}}
                                </div>
                                <div class="col-10">
                                    <h2 class="title">Lower Need for Social Stimulation</h2>
                                    <h2 class="short-description mt-2">They generally thrive in less stimulating
                                        environments, finding large social gatherings exhausting rather than invigorating.
                                    </h2>
                                </div>
                            </div>
                            <i class="fa-solid fa-lock lock-icon"></i>
                        </div>
                        <!-- <img src="{{ asset('assets/images/1-Sport and other mainimage-01.png') }}" style="width:100%; height:auto:" class="img-fluid d-none d-lg-block"> -->
                    </div>
                </div>

            </div>
        </section>
        <?php elseif ($introvert_extrovert === 'extroverted'): ?>

        <section class="py-0">

            <div class="container px-0 mx-0">
                <h3 class="heading1 text-purple px-0">You are an Extrovert!</h3>
                <p class="p1  px-0">The following describes your strengths as an extrovert.</p>

                <div class=" d-flex flex-column-reverse flex-lg-row align-items-center px-0 mx-0">
                    <div class="col-lg-6 ps-0">

                        <!-- <img src="{{ asset('assets/images/1-Sport and other mainimage-01.png') }}" style="width:100%; height:auto:" class="img-fluid d-block d-lg-none"> -->

                        <div class="report-opertunities-card bg-yellow">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <img src="{{ asset('assets/images/DecodemyBrain new logo-01.png') }}" class="w-100">
                                    {{-- <img src="{{ asset('assets/images/2-Individual sport-01.png') }}" class="w-100"> --}}
                                </div>
                                <div class="col-10">
                                    <h2 class="title">Energized by Social Interaction</h2>
                                    <h2 class="short-description mt-2">Extroverts gain energy from being around others and
                                        often seek out social situations to recharge.</h2>
                                </div>
                            </div>
                            <i class="fa-solid fa-lock lock-icon"></i>
                        </div>
                        <div class="report-opertunities-card bg-blue">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <img src="{{ asset('assets/images/DecodemyBrain new logo-01.png') }}" class="w-100">
                                    {{-- <img src="{{ asset('assets/images/3-Strategic team sport-01.png') }}" class="w-100"> --}}
                                </div>
                                <div class="col-10">
                                    <h2 class="title">Outgoing and Friendly</h2>
                                    <h2 class="short-description mt-2">They tend to be approachable and friendly, easily
                                        making
                                        connections with new people.</h2>
                                </div>
                            </div>
                            <i class="fa-solid fa-lock lock-icon"></i>
                        </div>
                        <div class="report-opertunities-card bg-green">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <img src="{{ asset('assets/images/DecodemyBrain new logo-01.png') }}" class="w-100">
                                    {{-- <img src="{{ asset('assets/images/4-mind sport-01.png') }}" class="w-100"> --}}
                                </div>
                                <div class="col-10">
                                    <h2 class="title">Skilled Communicators</h2>
                                    <h2 class="short-description mt-2"> Extroverts often express their thoughts and ideas
                                        openly,
                                        making them effective communicators in various settings</h2>
                                </div>
                            </div>
                            <i class="fa-solid fa-lock lock-icon"></i>
                        </div>
                        <div class="report-opertunities-card bg-orange">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <img src="{{ asset('assets/images/DecodemyBrain new logo-01.png') }}" class="w-100">
                                    {{-- <img src="{{ asset('assets/images/5-STEM related-01.png') }}" class="w-100"> --}}
                                </div>
                                <div class="col-10">
                                    <h2 class="title">Preference for Group Activities</h2>
                                    <h2 class="short-description mt-2">They enjoy teamwork and group settings, often
                                        thriving in collaborative environments.</h2>
                                </div>
                            </div>
                            <i class="fa-solid fa-lock lock-icon"></i>
                        </div>
                        <div class="report-opertunities-card bg-yellow">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <img src="{{ asset('assets/images/DecodemyBrain new logo-01.png') }}" class="w-100">
                                    {{-- <img src="{{ asset('assets/images/2-Individual sport-01.png') }}" class="w-100"> --}}
                                </div>
                                <div class="col-10">
                                    <h2 class="title">Quick Decision-Making</h2>
                                    <h2 class="short-description mt-2">Extroverts may be more inclined to make decisions on
                                        the
                                        spot, relying on their instincts and social interactions.</h2>
                                </div>
                            </div>
                            <i class="fa-solid fa-lock lock-icon"></i>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <!-- <img src="{{ asset('assets/images/1-Sport and other mainimage-01.png') }}" style="width:100%; height:auto:" class="img-fluid d-none d-lg-block"> -->
                        <div class="report-opertunities-card bg-blue">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <img src="{{ asset('assets/images/DecodemyBrain new logo-01.png') }}" class="w-100">
                                    {{-- <img src="{{ asset('assets/images/3-Strategic team sport-01.png') }}" class="w-100"> --}}
                                </div>
                                <div class="col-10">
                                    <h2 class="title">Adventurous Spirit</h2>
                                    <h2 class="short-description mt-2">They are often open to new experiences and willing
                                        to try new
                                        activities, seeking excitement and novelty.</h2>
                                </div>
                            </div>
                            <i class="fa-solid fa-lock lock-icon"></i>
                        </div>
                        <div class="report-opertunities-card bg-green">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <img src="{{ asset('assets/images/DecodemyBrain new logo-01.png') }}" class="w-100">
                                    {{-- <img src="{{ asset('assets/images/4-mind sport-01.png') }}" class="w-100"> --}}
                                </div>
                                <div class="col-10">
                                    <h2 class="title">Comfortable in the Spotlight</h2>
                                    <h2 class="short-description mt-2"> Extroverts generally enjoy being the center of
                                        attention
                                        and may excel in performance-based situations.</h2>
                                </div>
                            </div>
                            <i class="fa-solid fa-lock lock-icon"></i>
                        </div>
                        <div class="report-opertunities-card bg-orange">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <img src="{{ asset('assets/images/DecodemyBrain new logo-01.png') }}" class="w-100">
                                    {{-- <img src="{{ asset('assets/images/5-STEM related-01.png') }}" class="w-100"> --}}
                                </div>
                                <div class="col-10">
                                    <h2 class="title">Strong Networkers</h2>
                                    <h2 class="short-description mt-2">They tend to build extensive social networks,
                                        leveraging
                                        connections for personal and professional opportunities.</h2>
                                </div>
                            </div>
                            <i class="fa-solid fa-lock lock-icon"></i>
                        </div>
                        <div class="report-opertunities-card bg-yellow">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <img src="{{ asset('assets/images/DecodemyBrain new logo-01.png') }}" class="w-100">
                                    {{-- <img src="{{ asset('assets/images/2-Individual sport-01.png') }}" class="w-100"> --}}
                                </div>
                                <div class="col-10">
                                    <h2 class="title">Verbal Thinkers</h2>
                                    <h2 class="short-description mt-2">Extroverts often process their thoughts by talking
                                        them out loud, using
                                        conversations to clarify ideas</h2>
                                </div>
                            </div>
                            <i class="fa-solid fa-lock lock-icon"></i>
                        </div>
                        <div class="report-opertunities-card bg-blue">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <img src="{{ asset('assets/images/DecodemyBrain new logo-01.png') }}" class="w-100">
                                    {{-- <img src="{{ asset('assets/images/3-Strategic team sport-01.png') }}" class="w-100"> --}}
                                </div>
                                <div class="col-10">
                                    <h2 class="title">Optimistic Outlook</h2>
                                    <h2 class="short-description mt-2">They may have a more positive and outgoing
                                        perspective on life,
                                        often focusing on the bright side of situations.</h2>
                                </div>
                            </div>
                            <i class="fa-solid fa-lock lock-icon"></i>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <?php else: ?>
        <div class="container d-flex flex-column align-items-center justify-content-center">
            <div>
                <img src="{{ asset('assets/images/5-Reflective learning-01.png') }}" alt=""
                    class="question-img">
            </div>
            <h3 class="heading1 text-purple">Introvert or Extrovert – How Does Your Brain Refuel?</h3>

            <ol>
            <li>For each pair of options, <strong>choose the one that feels most like you.</strong></li>
            <li>There’s no right or wrong answer — just how your brain naturally recharges its energy.</li>
            <li>Introverts gain strength from <strong>quiet reflection</strong>, while extroverts thrive through connection and interaction.</li>
            <li>Trust your instinct — it reveals your <strong>social energy code!</strong></li>
            </ol>
            <button class="buttons text-purple" type="button"
                onclick="window.location.href='{{ url('introvert-extrovert-question/q1') }}'">Start now</button>
        </div>
        <?php endif; ?>



        <style>
            .buttons {
                border: 2px solid #f5c84c;
                color: white;
                background-color: #f5c84c;
                border-radius: 30px;
                padding: 8px 16px;
                font-size: 18px;
                font-weight: 600;
                cursor: pointer;
                transition: all 0.3sease-in-out;
            }
        </style>

    </div>
@endsection
