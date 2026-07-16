@include('layouts.dashboard-header')

<div class="container-fluid">
    <div class="main-wrapper mb-5 mb-lg-0 mb-xl-0">
        <div>
            <h2 class="page-title">Contact form</h2>
            <p class="page-description">Send Details</p>
        </div>

       <div class="card contact-form-card">
        <div class="card-body">
            <form action="">
                <div class="d-lg-flex d-md-flex d-block gap-5 ">
                    <div class="mb-3 col-12 col-lg-4 col-md-4 col-xl-4">
                        <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="nameFormControlInput1" placeholder="name@example.com">
                    </div>
    
                    <div class="mb-3 col-12 col-lg-5 col-md-5 col-xl-5">
                        <label for="emailFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="emailFormControlInput1" placeholder="Enter email address">
                    </div>
                </div>
                
                <div class="mb-3 col-12 col-lg-11 col-md-11 ">
                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="How can we help you"></textarea>
                </div>

                <div class="my-5 col-11 text-center text-lg-end text-md-end">
                    <button class="yellow-send-message-btn" style="font-size: 18px; width:fit-content">Send  Message</button>
                </div>
            </form>
        </div>
        
       </div>
    </div>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

@include('layouts.dashboard-footer')