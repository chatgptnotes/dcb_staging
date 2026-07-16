@include('layouts.dashboard-header')
<style>
.report-heading{
    font-size: 22px;
    color: #000000;
    font-family: "Maven Pro", Sans-serif;
    font-weight: 700;
    padding: 0;
    margin: 0;
}  
.report-normal-text{
    padding: 0;
    margin-bottom: 0;
    color: #000000;
    font-family: "Maven Pro", Sans-serif;
    font-size: 16px;
    font-weight: 400;
}
.report-opertunities-card{
    padding:15px 35px 15px 15px;
    border-radius:15px;
    border:2px solid #000;
    margin-bottom:15px;
    position: relative;
    margin-right:15px;
}

.report-opertunities-card .title{
    font-size: 22px;
    color: #000000;
    font-family: "Maven Pro", Sans-serif;
    font-weight: 400;
    padding: 0;
    margin: 0;
}
.report-opertunities-card .short-description{
    font-size: 16px;
    color: #000000;
    font-family: "Maven Pro", Sans-serif;
    font-weight: 400;
    padding: 0;
    margin: 0;
}
.bg-orange{
    background:#f1935d;
}
.bg-yellow{
    background:#f6c94c;
}
.bg-blue{
    background:#9ae4e3;
}
.bg-green{
    background:#84d6a5;
}
.lock-icon{
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
    color:#000;
}
.report-progress-bar .progress-bar{
    color:#000;
}
.report_modal .modal-header{
    border:none;
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
.report_modal .box-data{
    background-color: #fff;
    border: 1px solid #000;
    text-align: center;
}
.report_modal .box-data p{
    color:#000;
}
.report_modal .box-data h3{
    color:#000;
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
.square-progress .step.filled{
    background:#f6c94c;

}
</style>
<div class="dashboard-page-content pb-5">
    <div class="p-3 w-100">
        <h2 class="report-heading">Basic Brain Report</h2>
        <div class="row align-items-center">
            <div class="col-6">
                <p class="report-normal-text mt-4">
                Your brain is highly fact-oriented, with a natural inclination to dive deep into problems. You tend to be direct and analytical, always seeking certainty before taking action. 
                </p>
            </div>
             <div class="col-6">
                 <img src="{{ asset('assets/images/reportimg1.png') }}" class="w-100">
            </div>
        </div>
        <p class="report-normal-text ">
              You thoroughly research, calculate, and evaluate every situation, weighing the pros and cons carefully. Constantly questioning and probing for clarity is second nature to you. This makes you excellent at problem-solving and strategizing.
              Your strength lies in your logical, objective approach, and you often cut through complexity by sticking to the facts. While others may get lost in emotions or subjective views, you focus on what can be proven and understood through reason. People rely on you for your candid insights, no-nonsense attitude, and the ability to deliver grounded solutions.
        </p>
        <div class="text-center mt-5">
         <img src="{{ asset('assets/images/reportimg1.png') }}" class="w-50 ">
        </div>
        
        <h2 class="report-heading mt-5">Your Indices for Future Growth:</h2>
         <p class="report-normal-text mt-4">
              Understanding and evaluating various indices such as <strong>Leadership, Creativity, GIG Potential, Entrepreneurship, Team Collaboration Index,</strong> and <strong>21st-Century Agility Index</strong> can provide valuable insights into different aspects of your personal and professional development. These indices measure distinct traits and capabilities that are essential for success in today’s dynamic environment.
        </p>
        
        <h2 class="report-heading mt-5">Let's Check Your Future Oprtunities</h2>
        
        <div class="row align-items-center mt-4">
            <div class="col-md-3">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalOne">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/reportimg1.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Leadership</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-3">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalTwo">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/reportimg1.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Creativity</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-3">
                <div class="report-opertunities-card bg-blue" data-bs-toggle="modal" data-bs-target="#ModalThree">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/reportimg1.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">GIG Potential</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-3">
                <div class="report-opertunities-card bg-green" data-bs-toggle="modal" data-bs-target="#ModalFour">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/reportimg1.png') }}" class="w-100" >
                        </div>
                        <div class="col-8">
                            <h2 class="title">Entrepreneurship</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-3">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalFive">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/reportimg1.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Team Collaboration Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-3">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalSix">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/reportimg1.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">21st-Century Agility Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
        </div>
        
        <!--<p class="report-normal-text mt-4">-->
        <!--   <strong>Your Brain Dominance and Thinking Preferences</strong>-->
        <!--</p>-->
        
        <!--<div class="row align-items-center mt-2">-->
        <!--    <div class="col-3">-->
        <!--         <img src="{{ asset('assets/images/reportimg1.png') }}" class="w-100">-->
        <!--    </div>-->
        <!--    <div class="col-9">-->
        <!--         <p class="report-normal-text"><strong>Multi Tasking</strong> </p>-->
        <!--        <div class="progress report-progress-bar mt-2">-->
        <!--          <div class="progress-bar bg-yellow" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
    

</div>


<div class="modal fade report_modal" id="ModalOne" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Leadership</h5>
        <div class="text-center pt-4 pb-4">
          <img src="{{ asset('assets/images/brain.png') }}" class="w-50">
        </div>
        <div class="row">
          <div class="col-6">
            <div class="box-data p-4">
              <p class="mb-0">Studying Style 1</p>
              <h3 class="mb-0">86%</h3>
            </div>
          </div>
          <div class="col-6">
            <div class="box-data p-4">
              <p class="mb-0">Studying Style 2</p>
              <h3 class="mb-0">72%</h3>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-6">
            <div class="box-data p-4">
              <p class="mb-0">Studying Style 3</p>
              <h3 class="mb-0">75%</h3>
            </div>
          </div>
          <div class="col-6">
            <div class="box-data p-4">
              <p class="mb-0">Studying Style 4</p>
              <h3 class="mb-0">67%</h3>
            </div>
          </div>
        </div>
        
        <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Leadership</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                  <div class="step filled">
                      
                  </div>
                  <div class="step">
                      
                  </div>
                  <div class="step">
                      
                  </div>
                  <div class="step">
                      
                  </div>
                  <div class="step">
                      <p class="report-normal-text text-white text-center mb-0">20%</p>
                  </div>
                </div>
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            Your natural analytical focus may cause you to prefer working independently, and you might not always feel comfortable stepping into leadership roles. Developing your ability to inspire and guide others can elevate your impact, especially in team environments.
        </p>
      </div>
    </div>
  </div>
</div>


<div class="modal fade report_modal" id="ModalTwo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Creativity</h5>
        <div class="text-center pt-4 pb-4">
          <img src="{{ asset('assets/images/brain.png') }}" class="w-50">
        </div>
        <div class="row">
          <div class="col-6">
            <div class="box-data p-4">
              <p class="mb-0">Studying Style 1</p>
              <h3 class="mb-0">86%</h3>
            </div>
          </div>
          <div class="col-6">
            <div class="box-data p-4">
              <p class="mb-0">Studying Style 2</p>
              <h3 class="mb-0">72%</h3>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-6">
            <div class="box-data p-4">
              <p class="mb-0">Studying Style 3</p>
              <h3 class="mb-0">75%</h3>
            </div>
          </div>
          <div class="col-6">
            <div class="box-data p-4">
              <p class="mb-0">Studying Style 4</p>
              <h3 class="mb-0">67%</h3>
            </div>
          </div>
        </div>
        
        <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Creativity</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                  <div class="step filled">
                      
                  </div>
                  <div class="step">
                      
                  </div>
                  <div class="step">
                      
                  </div>
                  <div class="step">
                      
                  </div>
                  <div class="step">
                      <p class="report-normal-text text-white text-center mb-0">20%</p>
                  </div>
                </div>
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
           While you excel at logical thinking, you might struggle to think outside the box or come up with unconventional solutions. Cultivating creativity could expand your problem-solving toolkit and open new pathways to innovation.
        </p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade report_modal" id="ModalThree" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">GIG Potential</h5>
        <div class="text-center pt-4 pb-4">
          <img src="{{ asset('assets/images/brain.png') }}" class="w-50">
        </div>
        <div class="row">
          <div class="col-6">
            <div class="box-data p-4">
              <p class="mb-0">Studying Style 1</p>
              <h3 class="mb-0">86%</h3>
            </div>
          </div>
          <div class="col-6">
            <div class="box-data p-4">
              <p class="mb-0">Studying Style 2</p>
              <h3 class="mb-0">72%</h3>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-6">
            <div class="box-data p-4">
              <p class="mb-0">Studying Style 3</p>
              <h3 class="mb-0">75%</h3>
            </div>
          </div>
          <div class="col-6">
            <div class="box-data p-4">
              <p class="mb-0">Studying Style 4</p>
              <h3 class="mb-0">67%</h3>
            </div>
          </div>
        </div>
        
        <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">GIG Potential</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                  <div class="step filled">
                      
                  </div>
                  <div class="step">
                      
                  </div>
                  <div class="step">
                      
                  </div>
                  <div class="step">
                      
                  </div>
                  <div class="step">
                      <p class="report-normal-text text-white text-center mb-0">20%</p>
                  </div>
                </div>
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
           Adapting to highly dynamic, growth-oriented environments may feel challenging, as you prefer structure and clarity. Building your tolerance for uncertainty and innovation will help you thrive in today’s fast-paced world.
        </p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade report_modal" id="ModalFour" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Entrepreneurship</h5>
        <div class="text-center pt-4 pb-4">
          <img src="{{ asset('assets/images/brain.png') }}" class="w-50">
        </div>
        <div class="row">
          <div class="col-6">
            <div class="box-data p-4">
              <p class="mb-0">Studying Style 1</p>
              <h3 class="mb-0">86%</h3>
            </div>
          </div>
          <div class="col-6">
            <div class="box-data p-4">
              <p class="mb-0">Studying Style 2</p>
              <h3 class="mb-0">72%</h3>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-6">
            <div class="box-data p-4">
              <p class="mb-0">Studying Style 3</p>
              <h3 class="mb-0">75%</h3>
            </div>
          </div>
          <div class="col-6">
            <div class="box-data p-4">
              <p class="mb-0">Studying Style 4</p>
              <h3 class="mb-0">67%</h3>
            </div>
          </div>
        </div>
        
        <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Entrepreneurship</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                  <div class="step filled">
                      
                  </div>
                  <div class="step">
                      
                  </div>
                  <div class="step">
                      
                  </div>
                  <div class="step">
                      
                  </div>
                  <div class="step">
                      <p class="report-normal-text text-white text-center mb-0">20%</p>
                  </div>
                </div>
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
           You may prefer stability over risk-taking, which can limit entrepreneurial ventures. Strengthening your ability to identify opportunities and take calculated risks can unlock new avenues for growth.
        </p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade report_modal" id="ModalFive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Team Collaboration Index</h5>
        <div class="text-center pt-4 pb-4">
          <img src="{{ asset('assets/images/brain.png') }}" class="w-50">
        </div>
        <div class="row">
          <div class="col-6">
            <div class="box-data p-4">
              <p class="mb-0">Studying Style 1</p>
              <h3 class="mb-0">86%</h3>
            </div>
          </div>
          <div class="col-6">
            <div class="box-data p-4">
              <p class="mb-0">Studying Style 2</p>
              <h3 class="mb-0">72%</h3>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-6">
            <div class="box-data p-4">
              <p class="mb-0">Studying Style 3</p>
              <h3 class="mb-0">75%</h3>
            </div>
          </div>
          <div class="col-6">
            <div class="box-data p-4">
              <p class="mb-0">Studying Style 4</p>
              <h3 class="mb-0">67%</h3>
            </div>
          </div>
        </div>
        
        <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Team Collaboration Index</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                  <div class="step filled">
                      
                  </div>
                  <div class="step">
                      
                  </div>
                  <div class="step">
                      
                  </div>
                  <div class="step">
                      
                  </div>
                  <div class="step">
                      <p class="report-normal-text text-white text-center mb-0">20%</p>
                  </div>
                </div>
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
           While you are excellent at individual problem-solving, working with others may present challenges. Improving communication and collaboration skills will enable you to work more effectively within teams.
        </p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade report_modal" id="ModalSix" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">21st-Century Agility Index</h5>
        <div class="text-center pt-4 pb-4">
          <img src="{{ asset('assets/images/brain.png') }}" class="w-50">
        </div>
        <div class="row">
          <div class="col-6">
            <div class="box-data p-4">
              <p class="mb-0">Studying Style 1</p>
              <h3 class="mb-0">86%</h3>
            </div>
          </div>
          <div class="col-6">
            <div class="box-data p-4">
              <p class="mb-0">Studying Style 2</p>
              <h3 class="mb-0">72%</h3>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-6">
            <div class="box-data p-4">
              <p class="mb-0">Studying Style 3</p>
              <h3 class="mb-0">75%</h3>
            </div>
          </div>
          <div class="col-6">
            <div class="box-data p-4">
              <p class="mb-0">Studying Style 4</p>
              <h3 class="mb-0">67%</h3>
            </div>
          </div>
        </div>
        
        <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">21st-Century Agility Index</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                  <div class="step filled">
                      
                  </div>
                  <div class="step">
                      
                  </div>
                  <div class="step">
                      
                  </div>
                  <div class="step">
                      
                  </div>
                  <div class="step">
                      <p class="report-normal-text text-white text-center mb-0">20%</p>
                  </div>
                </div>
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
           Flexibility and adaptability to change can be areas for growth. Learning to embrace new technologies and remain open to continuous learning in a rapidly evolving environment will enhance your professional agility
        </p>
      </div>
    </div>
  </div>
</div>

@include('layouts.dashboard-footer')