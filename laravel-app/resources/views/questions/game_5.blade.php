@include('layouts.header')
<section class="section-margin-bottom section-margin-top">
    <div class="container questions-container">
        <h3 class="section-title text-purple">Brain Test</h3>


        <div class="row mt-5">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <h1 class="question text-center">
                    Game 5 page
                </h1>


                <div class="answers-container">

                    <div class="row mt-5">


                        <div class="col-12 ">
                            <form id="myForm" action="" method="post">
                            @csrf

                            <button class="question-nav text-purple" type="submit"  >Next<i class="fa-solid fa-chevron-right px-1"> </i></i></button>

                        </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3">

            </div>
        </div>


    </div>
    </section>
@include('layouts.footer')
