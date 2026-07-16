@extends('layouts.dashboard-layout')

@section('title', 'Careers')

@section('content')
<style>
    .page-link {
    color: #000;
    border: 1px solid #F6C94D;
    }
    .page-item.active .page-link {
    color: #000;
    background-color: #F6C94D;
    border-color: #F6C94D;
}

#heading {
    text-transform: uppercase;
    color: #673AB7;
    font-weight: normal
}

#msform {
    text-align: center;
    position: relative;
    margin-top: 20px
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
}

.form-card {
    text-align: left
}

#msform fieldset:not(:first-of-type) {
    display: none
}

#msform input,
#msform textarea {
    padding: 8px 15px 8px 15px;
    border: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    background-color: #ECEFF1;
    font-size: 16px;
    letter-spacing: 1px
}

#msform input:focus,
#msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #9AE4E3;
    outline-width: 0
}

#msform .action-button {
    width: 100px;
    background: #85D6A5;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 0px 10px 5px;
    float: right
}

#msform .action-button:hover,
#msform .action-button:focus {
    background-color: #000
}

#msform .action-button-previous {
    width: 100px;
    background: #F1935D;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px 10px 0px;
    float: right
}

#msform .action-button-previous:hover,
#msform .action-button-previous:focus {
    background-color: #000000
}

.card {
    z-index: 0;
    border: none;
    position: relative
    background-color
}

.fs-title {
    font-size: 25px;
    color: #673AB7;
    margin-bottom: 15px;
    font-weight: normal;
    text-align: left
}

.purple-text {
    color: #673AB7;
    font-weight: normal
}

.steps {
    font-size: 25px;
    color: #000;
    margin-bottom: 10px;
    font-weight: normal;
    text-align: right
}

.fieldlabels {
    color: #000;
    text-align: left;
     font-weight: bold;
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey
}

#progressbar .active {
    color: #673AB7
}

#progressbar li {
    list-style-type: none;
    font-size: 15px;
    width: 25%;
    float: left;
    position: relative;
    font-weight: 400
}

#progressbar #account:before {
    font-family: FontAwesome;
    content: "\f13e"
}

#progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f007"
}

#progressbar #payment:before {
    font-family: FontAwesome;
    content: "\f030"
}

#progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c"
}

#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: #673AB7
}

.progress {
    height: 20px
}

.progress-bar {
    background-color: #673AB7
}

.fit-image {
    width: 100%;
    object-fit: cover
}
</style>
<div>
    <div>
        <h2 class="page-title">Consultant Booking Questions</h2>
        <p class="page-description">Please answer following questions</p>
    </div>



    <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
            <div class="card px-3 pt-3 pb-3 " style="box-shadow: 0px 2px 5px #0000000D !important;">
                <?php if($category_from_age == 'child'){ ?> 
                <form id="msform" method="post" action="" enctype="multipart/form-data">>
                     @csrf
                    <!-- progressbar -->
                   
                    <fieldset>
                        <div class="form-card">
                            <!--<div class="row">-->
                            <!--    <div class="col-7">-->
                                    <!--<h2 class="fs-title">Account Information:</h2>-->
                            <!--    </div>-->
                            <!--    <div class="col-5">-->
                            <!--        <h2 class="steps">Questions 1 out of 12</h2>-->
                            <!--    </div>-->
                            <!--</div> -->
                            <label class="fieldlabels">What is your current grade level?</label> 
                            <input type="hidden" name="questions[]" value="What is your current grade level?" />
                            <select class="form-select"  name="answers[]" >
                                <option hidden disabled selected value="">Select</option>
                                <option value="5th Grade">5th Grade</option>
                                <option value="6th Grade">6th Grade</option>
                                <option value="7th Grade">7th Grade</option>
                                <option value="8th Grade">8th Grade</option>
                                <option value="9th Grade">9th Grade</option>
                                <option value="10th Grade">10th Grade</option>
                                <option value="11th Grade">11th Grade</option>
                                <option value="12th Grade">12th Grade</option>
                            </select>
                            
                            <label class="fieldlabels mt-2">How do you rate your interest in the following subjects?</label> 
                            <input type="hidden" name="questions[]" value="How do you rate your interest in the following subjects?" />
                            <select class="form-select"  name="answers[]" >
                                <option hidden disabled selected value="">Select</option>
                                <option value="Math: [Not Interested / Somewhat Interested / Interested / Very Interested]">Math: [Not Interested / Somewhat Interested / Interested / Very Interested]</option>
                                <option value="Science: [Not Interested / Somewhat Interested / Interested / Very Interested]">Science: [Not Interested / Somewhat Interested / Interested / Very Interested]</option>
                                <option value="English/Language Arts: [Not Interested / Somewhat Interested / Interested / Very Interested]">English/Language Arts: [Not Interested / Somewhat Interested / Interested / Very Interested]</option>
                                <option value="Social Studies/History: [Not Interested / Somewhat Interested / Interested / Very Interested]">Social Studies/History: [Not Interested / Somewhat Interested / Interested / Very Interested]</option>
                                <option value="Arts/Music: [Not Interested / Somewhat Interested / Interested / Very Interested]">Arts/Music: [Not Interested / Somewhat Interested / Interested / Very Interested]</option>
                                <option value="Physical Education: [Not Interested / Somewhat Interested / Interested / Very Interested]">Physical Education: [Not Interested / Somewhat Interested / Interested / Very Interested]</option>
                            </select>
                            
                            <label class="fieldlabels mt-2">How do you usually prefer to learn?</label> 
                            <input type="hidden" name="questions[]" value="How do you usually prefer to learn?" />
                            <select class="form-select"  name="answers[]" >
                                <option hidden disabled selected value="">Select</option>
                                <option value="Visual (e.g., charts, videos)">Visual (e.g., charts, videos)</option>
                                <option value="Auditory (e.g., lectures, discussions)">Auditory (e.g., lectures, discussions)</option>
                                <option value="Kinesthetic (e.g., hands-on activities)">Kinesthetic (e.g., hands-on activities)</option>
                                <option value="Reading/Writing (e.g., textbooks, notes)">Reading/Writing (e.g., textbooks, notes)</option>
                            </select>
                            
                            <label class="fieldlabels mt-2">What type of assignments do you enjoy the most?</label> 
                            <input type="hidden" name="questions[]" value="What type of assignments do you enjoy the most?" />
                            <select class="form-select"  name="answers[]" >
                                <option hidden disabled selected value="">Select</option>
                                <option value="Research Projects">Research Projects</option>
                                <option value="Group Work">Group Work</option>
                                <option value="Written Essays">Written Essays</option>
                                <option value="Presentations">Presentations</option>
                                <option value="Creative Projects">Creative Projects</option>
                            </select>
                            
                            <label class="fieldlabels mt-2">How often do you use additional resources outside of school for studying?</label> 
                            <input type="hidden" name="questions[]" value="How often do you use additional resources outside of school for studying?" />
                            <select class="form-select"  name="answers[]" >
                                <option hidden disabled selected value="">Select</option>
                                <option value="Never">Never</option>
                                <option value="Occasionally">Occasionally</option>
                                <option value="Sometimes">Sometimes</option>
                                <option value="Often">Often</option>
                                <option value="Always">Always</option>
                            </select>
                            
                             <label class="fieldlabels mt-2">Which of the following best describes your study habits?</label> 
                            <input type="hidden" name="questions[]" value="Which of the following best describes your study habits?" />
                            <select class="form-select"  name="answers[]" >
                                <option hidden disabled selected value="">Select</option>
                                <option value="I study in short, frequent sessions.">I study in short, frequent sessions.</option>
                                <option value="I prefer long, uninterrupted study periods.">I prefer long, uninterrupted study periods.</option>
                                <option value="I study with a group of friends.">I study with a group of friends.</option>
                                <option value="I study alone and prefer quiet environments.">I study alone and prefer quiet environments.</option>
                            </select>
                            
                             <label class="fieldlabels mt-2">How do you manage your time between schoolwork and other activities?</label> 
                            <input type="hidden" name="questions[]" value="How do you manage your time between schoolwork and other activities?" />
                            <select class="form-select"  name="answers[]" >
                                <option hidden disabled selected value="">Select</option>
                                <option value="I use a planner or calendar.">I use a planner or calendar.</option>
                                <option value="I prioritize tasks as they come up.">I prioritize tasks as they come up.</option>
                                <option value="I rely on reminders from family or friends.">I rely on reminders from family or friends.</option>
                                <option value="I don’t have a specific strategy.">I don’t have a specific strategy.</option>
                            </select>
                            
                        </div> <input type="submit"  class=" action-button" value="Submit" />
                    </fieldset>
                   
                   
                </form>
                <?php } ?>
                <?php if($category_from_age == 'teenager'){ ?> 
                <form id="msform" method="post" action="">
                     @csrf
                    <!-- progressbar -->
                   
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <!--<h2 class="fs-title">Account Information:</h2>-->
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 1 out of 2</h2>
                                </div>
                            </div> 
                            <label class="fieldlabels">What is your current grade level?</label> 
                            <input type="hidden" name="questions[]" value="What is your current grade level?" />
                            <select class="form-select"  name="answers[]" >
                                <option hidden disabled selected value="">Select</option>
                                <option value="5th Grade">5th Grade</option>
                                <option value="6th Grade">6th Grade</option>
                                <option value="7th Grade">7th Grade</option>
                                <option value="8th Grade">8th Grade</option>
                                <option value="9th Grade">9th Grade</option>
                                <option value="10th Grade">10th Grade</option>
                                <option value="11th Grade">11th Grade</option>
                                <option value="12th Grade">12th Grade</option>
                            </select>
                            
                            <label class="fieldlabels mt-2">How do you rate your interest in the following subjects?</label> 
                            <input type="hidden" name="questions[]" value="How do you rate your interest in the following subjects?" />
                            <select class="form-select"  name="answers[]" >
                                <option hidden disabled selected value="">Select</option>
                                <option value="Math: [Not Interested / Somewhat Interested / Interested / Very Interested]">Math: [Not Interested / Somewhat Interested / Interested / Very Interested]</option>
                                <option value="Science: [Not Interested / Somewhat Interested / Interested / Very Interested]">Science: [Not Interested / Somewhat Interested / Interested / Very Interested]</option>
                                <option value="English/Language Arts: [Not Interested / Somewhat Interested / Interested / Very Interested]">English/Language Arts: [Not Interested / Somewhat Interested / Interested / Very Interested]</option>
                                <option value="Social Studies/History: [Not Interested / Somewhat Interested / Interested / Very Interested]">Social Studies/History: [Not Interested / Somewhat Interested / Interested / Very Interested]</option>
                                <option value="Arts/Music: [Not Interested / Somewhat Interested / Interested / Very Interested]">Arts/Music: [Not Interested / Somewhat Interested / Interested / Very Interested]</option>
                                <option value="Physical Education: [Not Interested / Somewhat Interested / Interested / Very Interested]">Physical Education: [Not Interested / Somewhat Interested / Interested / Very Interested]</option>
                            </select>
                            
                            <label class="fieldlabels mt-2">How do you usually prefer to learn?</label> 
                            <input type="hidden" name="questions[]" value="How do you usually prefer to learn?" />
                            <select class="form-select"  name="answers[]" >
                                <option hidden disabled selected value="">Select</option>
                                <option value="Visual (e.g., charts, videos)">Visual (e.g., charts, videos)</option>
                                <option value="Auditory (e.g., lectures, discussions)">Auditory (e.g., lectures, discussions)</option>
                                <option value="Kinesthetic (e.g., hands-on activities)">Kinesthetic (e.g., hands-on activities)</option>
                                <option value="Reading/Writing (e.g., textbooks, notes)">Reading/Writing (e.g., textbooks, notes)</option>
                            </select>
                            
                            <label class="fieldlabels mt-2">What type of assignments do you enjoy the most?</label> 
                            <input type="hidden" name="questions[]" value="What type of assignments do you enjoy the most?" />
                            <select class="form-select"  name="answers[]" >
                                <option hidden disabled selected value="">Select</option>
                                <option value="Research Projects">Research Projects</option>
                                <option value="Group Work">Group Work</option>
                                <option value="Written Essays">Written Essays</option>
                                <option value="Presentations">Presentations</option>
                                <option value="Creative Projects">Creative Projects</option>
                            </select>
                            
                            <label class="fieldlabels mt-2">How often do you use additional resources outside of school for studying?</label> 
                            <input type="hidden" name="questions[]" value="How often do you use additional resources outside of school for studying?" />
                            <select class="form-select"  name="answers[]" >
                                <option hidden disabled selected value="">Select</option>
                                <option value="Never">Never</option>
                                <option value="Occasionally">Occasionally</option>
                                <option value="Sometimes">Sometimes</option>
                                <option value="Often">Often</option>
                                <option value="Always">Always</option>
                            </select>
                            
                             <label class="fieldlabels mt-2">Which of the following best describes your study habits?</label> 
                            <input type="hidden" name="questions[]" value="Which of the following best describes your study habits?" />
                            <select class="form-select"  name="answers[]" >
                                <option hidden disabled selected value="">Select</option>
                                <option value="I study in short, frequent sessions.">I study in short, frequent sessions.</option>
                                <option value="I prefer long, uninterrupted study periods.">I prefer long, uninterrupted study periods.</option>
                                <option value="I study with a group of friends.">I study with a group of friends.</option>
                                <option value="I study alone and prefer quiet environments.">I study alone and prefer quiet environments.</option>
                            </select>
                            
                             <label class="fieldlabels mt-2">How do you manage your time between schoolwork and other activities?</label> 
                            <input type="hidden" name="questions[]" value="How do you manage your time between schoolwork and other activities?" />
                            <select class="form-select"  name="answers[]" >
                                <option hidden disabled selected value="">Select</option>
                                <option value="I use a planner or calendar.">I use a planner or calendar.</option>
                                <option value="I prioritize tasks as they come up.">I prioritize tasks as they come up.</option>
                                <option value="I rely on reminders from family or friends.">I rely on reminders from family or friends.</option>
                                <option value="I don’t have a specific strategy.">I don’t have a specific strategy.</option>
                            </select>
                            
                        </div> <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <!--<h2 class="fs-title">Image Upload:</h2>-->
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 2 out of 2</h2>
                                </div>
                            </div> 
                            
                            <label class="fieldlabels mt-2">Questions About Career and Future Plans?</label> 
                            <input type="hidden" name="questions[]" value="Questions About Career and Future Plans?" />
                            <input type="text" name="answers[]" class="form-control"/>
                            
                            <label class="fieldlabels mt-2">What subjects or activities do you enjoy the most at school?</label> 
                            <input type="hidden" name="questions[]" value="What subjects or activities do you enjoy the most at school?" />
                            <input type="text" name="answers[]" class="form-control"/>
                            
                            <label class="fieldlabels mt-2">Do you have a dream job or a specific career you're interested in? If so, what is it?</label> 
                            <input type="hidden" name="questions[]" value="Do you have a dream job or a specific career you're interested in? If so, what is it?" />
                            <input type="text" name="answers[]" class="form-control"/>
                            
                            <label class="fieldlabels mt-2">What do you think are your strongest skills or talents? How do you use them in your schoolwork or hobbies?</label> 
                            <input type="hidden" name="questions[]" value="What do you think are your strongest skills or talents? How do you use them in your schoolwork or hobbies?" />
                            <input type="text" name="answers[]" class="form-control"/>
                            
                            <label class="fieldlabels mt-2">How do you see yourself in 5 or 10 years? What kind of job or role would you like to have?</label> 
                            <input type="hidden" name="questions[]" value="How do you see yourself in 5 or 10 years? What kind of job or role would you like to have?" />
                            <input type="text" name="answers[]" class="form-control"/>
                            
                            <label class="fieldlabels mt-2">Are there any careers or industries that you find exciting or that you want to learn more about?</label> 
                            <input type="hidden" name="questions[]" value="Are there any careers or industries that you find exciting or that you want to learn more about?" />
                            <input type="text" name="answers[]" class="form-control"/>
                            
                            <label class="fieldlabels mt-2">What are your academic goals for the next year, and how do you plan to achieve them?</label> 
                            <input type="hidden" name="questions[]" value="What are your academic goals for the next year, and how do you plan to achieve them?" />
                            <input type="text" name="answers[]" class="form-control"/>
                            
                            <label class="fieldlabels mt-2">How do you usually prepare for your future career interests? Do you participate in any related extracurricular activities or programs?</label> 
                            <input type="hidden" name="questions[]" value="How do you usually prepare for your future career interests? Do you participate in any related extracurricular activities or programs?" />
                            <input type="text" name="answers[]" class="form-control"/>
                            
                            <label class="fieldlabels mt-2">What type of work environment do you think you would enjoy the most? For example, do you prefer working in a team, independently, in an office, or outdoors?</label> 
                            <input type="hidden" name="questions[]" value="What type of work environment do you think you would enjoy the most? For example, do you prefer working in a team, independently, in an office, or outdoors?" />
                            <input type="text" name="answers[]" class="form-control"/>
                            
                            <label class="fieldlabels mt-2">Have you considered any specific colleges or training programs that align with your career goals?</label> 
                            <input type="hidden" name="questions[]" value="Have you considered any specific colleges or training programs that align with your career goals?" />
                            <input type="text" name="answers[]" class="form-control"/>
                          
                            
                        </div> <input type="submit" class=" action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                   
                </form>
                <?php } ?>
                <?php if($category_from_age == 'adult'){ ?> 
                <form id="msform"  method="post" action="">
                     @csrf
                    <!-- progressbar -->
                   
                    <fieldset>
                        <div class="form-card">
    
                            <label class="fieldlabels mt-2">Name</label> 
                            <input type="hidden" name="questions[]" value="Name" />
                            <input type="text" name="answers[]" class="form-control"/>
                            
                            <label class="fieldlabels mt-2">Email</label> 
                            <input type="hidden" name="questions[]" value="Email" />
                            <input type="text" name="answers[]" class="form-control"/>
                            
                            <label class="fieldlabels mt-2">Contact No</label> 
                            <input type="hidden" name="questions[]" value="Contact No" />
                            <input type="text" name="answers[]" class="form-control"/>
                            
                        </div> <input type="submit"  class=" action-button" value="Submit" />
                    </fieldset>
                   
                   
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

</div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
}



});
</script>