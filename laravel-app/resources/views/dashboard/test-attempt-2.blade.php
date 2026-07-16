@include('layouts.dashboard-header')

<?php 
use App\Models\BrainScores;
use App\Models\BrainCodeResults;
use App\Models\WPUsers;
use App\Models\ProfileTypes;
use App\Models\QuestionAnswerMain;
?>

<div class="dashboard-page-content">
    <!-- Splide Carousel -->
    <div id="button-carousel" class="splide" aria-label="Carousel">
        <!-- Carousel Wrapper -->
        <div class="splide__track">
            <ul class="splide__list">
                <!-- buttons -->
                <li class="splide__slide">
                    <button class="carousel-button" data-index="1">Basic Brain Report</button>
                </li>
                <li class="splide__slide">
                    <button class="carousel-button" data-index="2">Advanced Brain Report</button>
                </li>
                <li class="splide__slide">
                    <button class="carousel-button" data-index="3">Preferred studying and learning styles</button>
                </li>
                <li class="splide__slide">
                    <button class="carousel-button" data-index="4">Sports & other extracurricular activities naturally preferred</button>
                </li>
                <li class="splide__slide">
                    <button class="carousel-button" data-index="5">Communication and behaviour</button>
                </li>
                <li class="splide__slide">
                    <button class="carousel-button" data-index="6">Diet & Nutrition</button>
                </li>
                <li class="splide__slide">
                    <button class="carousel-button" data-index="7">Subjects preferred for matching career options</button>
                </li>
                <li class="splide__slide">
                    <button class="carousel-button" data-index="8">Button Eight</button>
                </li>
                <li class="splide__slide">
                    <button class="carousel-button" data-index="9">Button Nine</button>
                </li>
                <li class="splide__slide">
                    <button class="carousel-button" data-index="10">Button Ten</button>
                </li>
                <li class="splide__slide">
                    <button class="carousel-button" data-index="11">Button Eleven</button>
                </li>
                <li class="splide__slide">
                    <button class="carousel-button" data-index="12">Button Twelve</button>
                </li>
            </ul>
        </div>

        <!-- Splide Arrow Controls Outside Carousel -->
        <div class="splide__arrows splide__arrows--outside">
            <button class="splide__arrow splide__arrow--prev">
                <i class="fas fa-arrow-right"></i>
            </button>
            <button class="splide__arrow splide__arrow--next">
                <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    
    <?php 
        $c = 1;
        foreach($attempts as $attempt){ 
            $brain_profile_id = WPUsers::where("user_id", session('user_id'))->value('brain_profile_id');
            $brain_score = BrainScores::where("answer_main_id", $attempt->id)->first();
            $brain_code_result = BrainCodeResults::where('brain_profile_id', $brain_profile_id)->first();
            $brain_profile=ProfileTypes::whereJsonContains('code', $brain_score->result_code)->first()->name;
        }
    ?>

    <!-- Sections for each button -->
    <div id="button1" class="section-content p-3 w-100 mb-5 mb-lg-2">
        <div class="d-flex flex-column-reverse flex-lg-row">
            <div class="col-12 col-lg-8">
                <h3 class="section-title text-purple mt-3 d-flex align-items-center">
                    <img src="{{ asset('assets/images/icon111.png') }}" alt="Icon" class="me-2" style="width: 24px; height: 24px;">
                    Basic Brain Report 
                </h3>
                
                <p class="section-description-intentship mt-1 pe-lg-5">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit voluptatibus qui possimus
                    doloremque et nesciunt beatae minus delectus similique nobis maxime adipisci non eligendi saepe
                    accusamus unde, dignissimos, odit necessitatibus totam illum eius animi consequuntur repellat.
                </p>
            </div>
            <div class="col-12 col-lg-4">
                <img src="{{ asset('assets/images/reportimg1.png') }}" class="w-70" style="border-radius: 8px">
            </div>
        </div>
        
        <h1 id="one" style="display:none;">oneeee</h1>
        <h1 id="two" style="display:none;">twoo</h1>
    </div>
    
    <div id="button2" class="section-content p-3 w-100 mb-5 mb-lg-2" style="display: none;">
        <h3 class="section-title text-purple mt-3">Content for Button Two</h3>
        <p class="section-description-intentship mt-1 pe-lg-5">This is the content for Button Two.</p>
    </div>
    
    <div id="button3" class="section-content p-3 w-100 mb-5 mb-lg-2" style="display: none;">
        <h3 class="section-title text-purple mt-3">Content for 333333</h3>
        <p class="section-description-intentship mt-1 pe-lg-5">This is the content for Button Two.</p>
    </div>
</div>

<!-- Add Splide JS -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">

<script>
   
    document.addEventListener('DOMContentLoaded', function () {
        new Splide('#button-carousel', {
            type: 'slide',
            perPage: 7,
            gap: '10px',
            pagination: false,
            arrows: true,
            classes: {
                arrows: 'splide__arrows--outside',
            }
        }).mount();

       
        showSection(1);
        
        const defaultButton = document.querySelector('.carousel-button[data-index="1"]');
        defaultButton.style.backgroundColor = '#5a559e';  
        defaultButton.style.color = 'yellow';               

        document.querySelectorAll('.carousel-button').forEach(button => {
            button.addEventListener('click', function () {
                const index = this.getAttribute('data-index');
                showSection(index);

                document.querySelectorAll('.carousel-button').forEach(btn => {
                    btn.style.backgroundColor = '#f0f0f0';
                    btn.style.color = 'blue';
                });

                this.style.backgroundColor = '#5a559e';
                this.style.color = 'yellow';
            });
        });

        function showSection(index) {
            document.querySelectorAll('.section-content').forEach(section => {
                section.style.display = 'none';
            });
            const selectedSection = document.getElementById(`button${index}`);
            if (selectedSection) {
                selectedSection.style.display = 'block';
            }
        }

        
        const brainScoreCode = `{{$brain_score->result_code}}`;
        if (brainScoreCode === '1-1-3-3' || brainScoreCode === '1-2-2-1' || brainScoreCode === '1-2-3-3' ) {
            document.getElementById('one').style.display = 'block';
        } else if (brainScoreCode === '1-1-4-3' || brainScoreCode === '1-2-3-1'|| brainScoreCode === '1-1-1-1') {
            document.getElementById('two').style.display = 'block';
        }
    });
</script>

<style>
    .carousel-button {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        background-color: #f0f0f0;
        color: blue;
        border: none;
        cursor: pointer;
    }
    .splide__arrows--outside .splide__arrow {
        top: 50%;
        transform: translateY(-50%);
    }
</style>

@include('layouts.dashboard-footer')
