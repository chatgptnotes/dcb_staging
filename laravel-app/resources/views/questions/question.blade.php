@include('layouts.header')
<style>
.number {
    font-size: 16px;
    color: #FFCC66;
    font-weight: 600;
    background-color: #9CD2A5;
    margin-bottom: 0px;
    border-radius: 50%;
    height: 30px;
    width: 30px;
    text-align: center;
    padding-top: 0px;
    margin-right: 10px;
}

.step-txt {
    color: #F6C94D;
    background-color:#fffaed; /* Light yellow */
    padding: 8px 16px;
    font-size: 16px;
    font-weight: 600;
    border-radius: 30px;
    display: inline-block; /* Makes it look like a button */
}

.question-count {
    color: #85d6a5;
    /*background-color: #f2faf5;*/
    background-color: #85D6A51A;
    padding: 8px 16px;
    font-size: 16px;
    font-weight: 600;
    border-radius: 30px;
    display: inline-block; /* Makes it look like a button */
}

.tab3 {
    border: 1px solid #F0F0F0; /* Blue border, change color as needed */
    border-radius: 30px; /* Rounded corners */
    padding: 20px;
    margin-left: 100px;
    margin-right: 100px; /* Optional: Adds some spacing inside the border */
}

.question-nav-back {
    border: 2px solid #89d6a7;
    color: #89d6a7;
    background-color: white;
    border-radius: 30px;
    padding: 8px 16px;
    font-size: 18px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
    min-width: 100px !important;
}

.question-nav-back:hover {
    background-color: green;
    color: white;
}

.question-nav-next {
    border: 2px solid #f5c84c;
    color: white;
    background-color: #f5c84c;
    border-radius: 30px;
    padding: 8px 16px;
    font-size: 18px;
    font-weight: 400;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
    min-width: 100px !important;
}

.question-nav-next:hover {
    background-color: darkgoldenrod;
    border-color: darkgoldenrod;
}

.number {
    font-size: 16px;
    color: #000814;
    font-weight: 600;
    background-color: #9ae3e2;
    margin-bottom: 0px;
    border-radius: 50%;
    height: 30px;
    width: 30px;
    text-align: center;
    padding-top: 0px;
    margin-right: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-shrink: 0;
}

.section-title {
    color: #F1935D;
    font-size: 24px;
    font-weight: 600;
}

p {
    font-size: 16px;
    color: #000;
    font-weight: 400;
}

.questions-container .question-answer {
    font-size: 16px;
    color: #000814;
    font-weight: 400;
    padding: 9px 15px;
    background-color: #ffffff;
    border: 2px solid #000814;
    margin-bottom: 10px;
    border-radius: 10px;
    cursor: pointer;
}

.section-margin-bottom {
    margin-bottom: 100px;
}
.section-margin-top {
    margin-top: 30px;
}

.questions-container .clicked {
    background-color: #000000 !important;
    color: #FFFFFF !important;
}


@media only screen and (max-width: 820px) {


    .tab3 {
    border: 2px solid #F0F0F0;
    border-radius: 30px;
    padding: 20px;
    margin-left: 10px;
    margin-right: 10px;
}
}
@media only screen and (max-width: 992px) {


    .number {
    font-size: 14px;
    height: 26px !important;
    width: 26px !important;
    text-align: center;
    padding-top: 0px;
    margin-right: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-shrink: 0;
}

}
<?php 
    $dob = session('user_dob'); 
    $age = \Carbon\Carbon::parse($dob)->age; 
?>
</style>
<section class="section-margin-bottom section-margin-top">
    <div class="container questions-container">
        <?php
        if ($age >= 15){
        ?> 
        <h5 class="step-txt">Step 01/02</h5>
        <?php } else{ ?> 
        <h5 class="step-txt">Step 01</h5>
        <?php } ?>
        <h3 class="section-title text-purple">My Brain Design Assessment</h3>
        <p style="font-weight: 300 !important;">Choose the option that feels most like you.</p>
        <p style="font-weight: 300 !important;">For each question:</p>    
        <ol>
            <li>Choose the <strong>option that feels most like you</strong> — your <strong>top preference.</strong></li>
            <li>Then pick your <strong>second choice</strong>, what also fits you well.</li>
            <li>Next, select your <strong>third choice</strong>, the one that’s somewhat true for you.</li>
            <li>Finally, choose your <strong>least like you</strong> option — the one that describes you the least.</li>
        </ol>
         <p style="font-weight: 300 !important;">Your answers will unlock your unique Brain Preference Pattern, showing how your mind learns, thinks, and solves problems best!</p>    
        <div class="tab3 d-flex flex-column-reverse flex-lg-row mt-5 " style="border: 1px solid #F0F0F0;">
           
            <div class="col-lg-8 ps-md-0">
                <p style="font-weight: 300 !important;">Choose the most appropriate answer that feels right to you.</p>
                @if (session('message'))
                <p style="color:red;font-size:14px;text-align:center;">{{ session('message') }}</p>
                @endif
                <h1 class="question-title text-left mt-4" style="font-weight: 600 !important;">
                {{$question_no}}. {{$question->question}}
                </h1>
                <br>
                <div class="answers-container">
                   <div>
                        <div class="d-flex flex-row align-items-center mb-2">
                            <span class="number" id="number_1"></span>
                            <h1 class="question-answer mb-0" id="answer_1" onclick="pickAnswer(this, `{{html_entity_decode($question->answer_1)}}`, 'number_1')">
                                {{$question->answer_1}}
                            </h1>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-2">
                            <span class="number" id="number_2"></span>
                            <h1 class="question-answer mb-0" id="answer_2" onclick="pickAnswer(this, `{{html_entity_decode($question->answer_2)}}`, 'number_2')">
                                {{$question->answer_2}}
                            </h1>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-2">
                            <span class="number" id="number_3"></span>
                            <h1 class="question-answer mb-0" id="answer_3" onclick="pickAnswer(this, `{{html_entity_decode($question->answer_3)}}`, 'number_3')">
                                {{$question->answer_3}}
                            </h1>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-2">
                            <span class="number" id="number_4"></span>
                            <h1 class="question-answer mb-0" id="answer_4" onclick="pickAnswer(this, `{{html_entity_decode($question->answer_4)}}`, 'number_4')">
                                {{$question->answer_4}}
                            </h1>
                        </div>
                   </div>
                    <h1 class="small-link text-start text-purple mt-4 d-flex align-items-center" style="cursor:pointer;" onclick="resetAnswer()" >
                        <!--<i class="fas fa-undo"></i> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                          <g id="vuesax_linear_rotate-left" data-name="vuesax/linear/rotate-left" transform="translate(-236 -316)">
                            <g id="rotate-left" transform="translate(236 316)">
                              <path id="Vector" d="M4.817.358A8.349,8.349,0,0,1,7.225,0,7.219,7.219,0,1,1,1.217,3.208" transform="translate(2.775 3.875)" fill="none" stroke="#000814" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                              <path id="Vector-2" data-name="Vector" d="M0,2.767,2.408,0" transform="translate(6.558 1.667)" fill="none" stroke="#000814" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                              <path id="Vector-3" data-name="Vector" d="M0,0,2.808,2.05" transform="translate(6.558 4.433)" fill="none" stroke="#000814" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                              <path id="Vector-4" data-name="Vector" d="M0,0H20V20H0Z" transform="translate(20 20) rotate(180)" fill="none" opacity="0"/>
                            </g>
                          </g>
                        </svg>

                        <span class="ms-2" style="font-weight: 600 !important">Reset answers</span>
                    </h1>
                    <div id="answer_error" class="mt-2" style="color:red;font-weight:bold;text-align:left;"></div>
                    <div class="row mt-5">
                       

                        <div class="col-6 text-end">
                            <form id="myForm" action="{{url('save-answers')}}" method="post">
                                @csrf

                                <input type="hidden" name="question_id" value="{{$question->id}}">
                                <input type="hidden" name="first_answer" id="first_answer" value="">
                                <input type="hidden" name="second_answer" id="second_answer" value="">
                                <input type="hidden" name="third_answer" id="third_answer" value="">
                                <input type="hidden" name="forth_answer" id="forth_answer" value="">
                                <input type="hidden" name="question_no" value="{{$question_no}}">
                                    
                               
                                </form>
                                
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pe-md-0 d-flex justify-content-center align-items-center">
    <img src="{{ asset('assets/images/img333.png') }}" alt="Question Image" class="img-fluid">
</div>

        </div>
    </div>
</section>
<section class="footer-nav  bg-light" style="border-bottom: none !important">

<!-- Progress Bar -->
<div class="progress " style="height: 2px; background-color: #e0e0e0; width: 100%;">
            <div class="progress-bar" role="progressbar" 
                style="width: <?php echo ($question_no / 25) * 100; ?>%; background-color:rgb(19, 19, 19);"
                aria-valuenow="<?php echo $question_no; ?>" aria-valuemin="1" aria-valuemax="25">
            </div>
        </div>
   <br>
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Side: Question Number -->
            <div class="col-6 text-start d-flex align-items-center gap-2">
            <h5 class="question-count text-center">
                   Questions {{$question_no}} out of 25
                </h5>
                <form method="post" action="{{ route('assessment.pause') }}" class="d-inline">@csrf<button class="question-nav-back text-purple" type="submit">Save &amp; go Home</button></form>
            </div>
            <!-- Right Side: Navigation Buttons -->
            <div class="col-6 text-end">
            <?php if($question_no != 1){
                            $previous_page = $question_no - 1;
                            ?>
                            <a href="{{url('questions/q'.$previous_page.'')}}"><button class="question-nav-back text-purple"> Prev</button></a>
                            <?php } ?>


                            

                            <button class="question-nav-next text-purple" type="button" onclick="validateAndSubmit()">Next</button>
                
                
            </div>
                            
        </div>
    </div>
</section>

<script>
let currentOrder = 1;
let pickedAnswers = {};

function pickAnswer(element, answer, numberId) {
    if (!pickedAnswers[numberId] && currentOrder <= 4) {  
        pickedAnswers[numberId] = currentOrder;
        document.getElementById(numberId).textContent = currentOrder;

        if (currentOrder == 1) {
            document.getElementById("first_answer").value = answer;
        } else if (currentOrder == 2) {
            document.getElementById("second_answer").value = answer;
        } else if (currentOrder == 3) {
            document.getElementById("third_answer").value = answer;
        } else if (currentOrder == 4) {
            document.getElementById("forth_answer").value = answer;
        }

        currentOrder++;

        element.classList.add('clicked');

        // Auto-select 4th answer when the first 3 are selected
        if (currentOrder > 3 && currentOrder <= 4) {
            let remainingAnswer = getRemainingAnswer();
            if (remainingAnswer) {
                let remainingAnswerElement = document.getElementById(remainingAnswer.elementId);
                document.getElementById(remainingAnswer.numberId).textContent = currentOrder;
                document.getElementById("forth_answer").value = remainingAnswer.answer;
                remainingAnswerElement.classList.add('clicked');
                currentOrder++;
            }
        }
    }
}


function getRemainingAnswer() {
    const answers = [
        { id: 'answer_1', answer: `{{ html_entity_decode($question->answer_1) }}`, numberId: 'number_1' },
        { id: 'answer_2', answer: `{{ html_entity_decode($question->answer_2) }}`, numberId: 'number_2' },
        { id: 'answer_3', answer: `{{ html_entity_decode($question->answer_3) }}`, numberId: 'number_3' },
        { id: 'answer_4', answer: `{{ html_entity_decode($question->answer_4) }}`, numberId: 'number_4' }
    ];

    for (let i = 0; i < answers.length; i++) {
        if (!pickedAnswers[answers[i].numberId]) {
            return { elementId: answers[i].id, answer: decodeHTMLEntities(answers[i].answer), numberId: answers[i].numberId };
        }
    }
    return null;
}


function decodeHTMLEntities(text) {
    let textarea = document.createElement("textarea");
    textarea.innerHTML = text;
    return textarea.value;
}

function resetAnswer() {
    document.getElementById("first_answer").value = "";
    document.getElementById("second_answer").value = "";
    document.getElementById("third_answer").value = "";
    document.getElementById("forth_answer").value = "";

    currentOrder = 1;
    pickedAnswers = {};

    var answers = document.querySelectorAll('.question-answer');
    answers.forEach(function (answer) {
        answer.classList.remove('clicked');
    });

    var numbers = document.querySelectorAll('.number');
    numbers.forEach(function (number) {
        number.textContent = '';
    });
}

function validateAndSubmit() {
    var firstAnswer = $('#first_answer').val();
    var secondAnswer = $('#second_answer').val();
    var thirdAnswer = $('#third_answer').val();
    var fourthAnswer = $('#forth_answer').val();

    if (firstAnswer !== '' && secondAnswer !== '' && thirdAnswer !== '' && fourthAnswer !== '') {
        $('#myForm').submit();
    } else {
        document.getElementById('answer_error').textContent = 'Please select all answers';
    }
}

</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
