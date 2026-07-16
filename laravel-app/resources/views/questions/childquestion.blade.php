@include('layouts.header')
<style>
    .number {
        font-size: 16px;
        color: #fff5ba;
        font-weight: 600;
        background-color: #5a559d;
        margin-bottom: 10px;
        border-radius: 50%;
        height: 30px;
        width: 30px;
        text-align: center;
        padding-top: 3px;
        margin-right: 10px;
    }

    
</style>

<section class="section-margin-bottom section-margin-top">
    <div class="container questions-container">
        <h3 class="section-title text-purple">Child Brain Test</h3>

        <div class="row mt-5">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1 class="question text-center">
                    Question {{$question_no}}
                </h1>
                <h1 class="question-count text-center">
                    {{$question_no}} out of 25
                </h1>
                @if (session('message'))
                <p style="color:red;font-size:14px;text-align:center;">{{ session('message') }}</p>
                @endif
                <h1 class="question-title text-center mt-4">
                    {{$question->question}}
                </h1>
                <div class="answers-container">
                    <div class="d-flex align-items-center">
                        <span class="number" id="number_1"></span>
                        <h1 class="question-answer text-center" id="answer_1" onclick="pickAnswer(this, `{{html_entity_decode($question->answer_1)}}`, 'number_1')">
                            {{$question->answer_1}}
                        </h1>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="number" id="number_2"></span>
                        <h1 class="question-answer text-center" id="answer_2" onclick="pickAnswer(this, `{{html_entity_decode($question->answer_2)}}`, 'number_2')">
                            {{$question->answer_2}}
                        </h1>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="number" id="number_3"></span>
                        <h1 class="question-answer text-center" id="answer_3" onclick="pickAnswer(this, `{{html_entity_decode($question->answer_3)}}`, 'number_3')">
                            {{$question->answer_3}}
                        </h1>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="number" id="number_4"></span>
                        <h1 class="question-answer text-center" id="answer_4" onclick="pickAnswer(this, `{{html_entity_decode($question->answer_4)}}`, 'number_4')">
                            {{$question->answer_4}}
                        </h1>
                    </div>
                    <h1 class="small-link text-start text-purple" style="cursor:pointer;" onclick="resetAnswer()">
                        <i class="fas fa-undo"></i> Reset answers
                    </h1>
                    <div id="answer_error" class="mt-2" style="color:red;font-weight:bold;text-align:left;"></div>
                    <div class="row mt-5">
                        <div class="col-6 text-start">
                            @if($question_no != 1)
                            <?php $previous_page = $question_no - 1; ?>
                            <a href="{{url('childquestions/q'.$previous_page.'')}}"><button class="question-nav text-purple"><i class="fa-solid fa-chevron-left px-1"></i> Previous</button></a>
                            @endif
                        </div>

                        <div class="col-6 text-end">
                            <form id="myForm" action="{{url('save-child-answers')}}" method="post">
                                @csrf

                                <input type="hidden" name="question_id" value="{{$question->id}}">
                                <input type="hidden" name="first_answer" id="first_answer" value="">
                                <input type="hidden" name="second_answer" id="second_answer" value="">
                                <input type="hidden" name="third_answer" id="third_answer" value="">
                                <input type="hidden" name="forth_answer" id="forth_answer" value="">
                                <input type="hidden" name="question_no" value="{{$question_no}}">

                                <button class="question-nav text-purple" type="button" onclick="validateAndSubmit()">Next<i class="fa-solid fa-chevron-right px-1"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>

@include('layouts.footer')

<script>
    let currentOrder = 1;
    let pickedAnswers = {};

    function pickAnswer(element, answer, numberId) {
        if (!pickedAnswers[numberId]) {
            pickedAnswers[numberId] = currentOrder;
            document.getElementById(numberId).textContent = currentOrder;

            if (currentOrder == 1) {
                document.getElementById("first_answer").value = answer;
            } else if (currentOrder == 2) {
                document.getElementById("second_answer").value = answer;
            } else if (currentOrder == 3) {
                document.getElementById("third_answer").value = answer;
            }

            currentOrder++;
            element.classList.add('clicked');

            if (currentOrder > 3) {
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
            { id: 'answer_1', answer: '{{e($question->answer_1)}}', numberId: 'number_1' },
            { id: 'answer_2', answer: '{{e($question->answer_2)}}', numberId: 'number_2' },
            { id: 'answer_3', answer: '{{e($question->answer_3)}}', numberId: 'number_3' },
            { id: 'answer_4', answer: '{{e($question->answer_4)}}', numberId: 'number_4' }
        ];

        for (let i = 0; i < answers.length; i++) {
            if (!pickedAnswers[answers[i].numberId]) {
                return { elementId: answers[i].id, answer: answers[i].answer, numberId: answers[i].numberId };
            }
        }
        return null;
    }

    function resetAnswer() {
        document.getElementById("first_answer").value = "";
        document.getElementById("second_answer").value = "";
        document.getElementById("third_answer").value = "";
        document.getElementById("forth_answer").value = "";

        currentOrder = 1;
        pickedAnswers = {};

        var answers = document.querySelectorAll('.question-answer');
        answers.forEach(function(answer) {
            answer.classList.remove('clicked');
        });

        var numbers = document.querySelectorAll('.number');
        numbers.forEach(function(number) {
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
