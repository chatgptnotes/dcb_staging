@extends('layouts.dashboard-layout')

@section('title', 'Careers')

@section('content')
<div>
<style>
tr{
  border: solid 1px #f0f0f0;    
}
td, th{
  border-bottom: none;
  border-left: solid 1px #f0f0f0;
}
.scrollable-column{
  height: 100% !important;
}
.comparison-request-table .title-row th{
  font-weight: 500 !important;
}
.comparison-sub-title {
    color: #000;
}
.comparison-description {
    color: #000;

}
</style>
<div class="dashboard-page-content pt-0 p-0">
    
    <div class="d-flex flex-row p-0 w-100">
        <div class="col-9 scrollable-column">
            <h3 class="section-title text-purple mt-0">
               Brain Connect
                    <!--{{var_dump(session('user_details'))}}-->
            </h3>
            <p class="comparison-sub-title">
             Discover how your <strong>brain code syncs and connects </strong>with others — revealing the chemistry of collaboration, communication, and understanding.
            </p>
            @if(Session::has('fail')) <p style="color:red;font-size:14px;"><?php echo Session::get('fail') ?></p>@endif
        @if(Session::has('success')) <p style="color:green;font-size:14px;"><?php echo Session::get('success') ?></p>@endif

        <div class="w-100 profileContent">

         
            {{-- <div class="row px-4"> --}}
               
               <div class="card comparison-request-card">
                
                <div class="card-body px-4">
                  <div>
                    <p class="comparison-description">
                      Send someone you love or your child or parent, a <strong>Brain Connect Request</strong> to discover how your thinking styles, emotions, and decision patterns complement each other.
It takes just a few minutes — and reveals the <strong>science behind your connection!</strong>

                    </p>
                  </div>
                  
                 
                    <form action="" method="post" enctype="multipart/form-data" class="w-100 justify-content-center">
                      @csrf
                          
                      <div class=" col-md-5 mb-3 recipient-email-input">
                          <label for="exampleFormControlInput1" class="form-label ">Recipient's Email Address</label>
                          <input type="email" class="form-control" id="exampleFormControlInput1" name="email" value="" placeholder="Enter Email Address">
                          @if($errors->has("email")) <p style="color:red;font-size:14px;">{{ $errors->first('email') }}
                          </p>
                          @endif
                      </div>
                      <div class="d-flex justify-content-end">
                        <button type="submit" name="submit_type" value="basic_details" class="yellow-send-btn mt-2 mt-lg-4 mb-5" style="width: max-content !important; font-weight: 400 !important;background:#000;">Send Request</button>
                      </div>
                      
                        </form>
                  
                    
                </div>
               </div>
                    
                  

               
            {{-- </div> --}}

            <div class="card comparison-request-card mt-5">
               
               
              <div class="col-md-12 card-body">
                 
                <div class="table-responsive">
                <h5 class=" text-purple mt-4 mb-3">Received requests</h5>
                  <table class="table comparison-request-table">
                    <thead>
                      <tr class="title-row">
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Requested Date</th>
                        <th scope="col" style="text-align: center;">Actions</th>
                      </tr>
                    </thead>
                    <tbody style="border-top: 1px solid #f0f0f0 !important;">
                      <?php foreach($recieved_requests as $recieved_request){ ?> 
                        <tr class="data-row" data-id="{{$recieved_request->id}}">
                          <th scope="row">{{$recieved_request->name}}</th>
                          <td>{{$recieved_request->email}}</td>
                          <td>{{$recieved_request->requested_date}}</td>
                          <td>
                                <button type="button" class="btn btn-action btn-accept open-accept-modal" data-bs-toggle="modal" data-bs-target="#acceptModal" data-id="{{ $recieved_request->id }}">Accept</button>
                                <button type="button" class="btn btn-action btn-reject open-reject-modal" data-bs-toggle="modal" data-bs-target="#rejectModal" data-id="{{ $recieved_request->id }}">Reject</button>
                            </td>
                        </tr>
                       <?php } ?>
                       <?php foreach($accepted_requests as $accepted_request){ ?> 
                        <tr class="data-row">
                          <th scope="row">{{$accepted_request->name}}</th>
                          <td>{{$accepted_request->email}}</td>
                          <td>{{$accepted_request->requested_date}}</td>
                          <td>
                              <a href="{{url('compare-results/received/'.$accepted_request->id.'')}}">
                                    <button type="button" value="basic_details" class="btn btn-action btn-accept">Compare</button>
                                  </a>
                            </td>
                        </tr>
                       <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            

         
      </div>
            
             {{-- <div class="card comparison-request-card mt-5">
               
               
                    <div class="col-md-12 card-body">
                       
                         <table class="table comparison-request-table">
                          <thead>
                            <tr class="title-row">
                              <th scope="col">Name</th>
                              <th scope="col">Email</th>
                              <th scope="col">Requested Date</th>
                              <th scope="col">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                             
                            <tr>
                              <th scope="row">{{$recieved_request->name}}</th>
                              <td>{{$recieved_request->email}}</td>
                              <td>{{$recieved_request->requested_date}}</td>
                              <td><a href="{{url('accept-comparison-request/'.$recieved_request->id.'')}}"><button type="button" value="basic_details" class="btn btn-action btn-accept">Accept</button></a>
                              <a href="{{url('reject-comparison-request/'.$recieved_request->id.'')}}"><button type="button"  value="basic_details" class="btn btn-action btn-reject">Reject</button></a></td>
                            </tr>
                           
                           
                          </tbody>
                        </table>
                    </div>
                  

               
            </div> --}}
            
             <div class="card comparison-request-card mt-5">
               
               
                     <div class="col-md-12 card-body">
                        <h5 class=" text-purple mt-4 mb-3">Sent Requests</h5>
                         <table class="table comparison-request-table">
                          <thead>
                            <tr class="title-row">
                              <th scope="col">Email</th>
                              <th scope="col">Requested Date</th>
                              <th scope="col">Status</th>
                              <th scope="col" style="text-align: center;">Actions</th>
                            </tr>
                          </thead>
                          <tbody style="border-top: 1px solid #f0f0f0 !important;">
                             <?php foreach($sent_requests as $sent_request){ ?> 
                            <tr class="data-row">
                              <td>{{$sent_request->to_email}}</td>
                              <td>{{$sent_request->requested_date}}</td>
                              <td>{{$sent_request->status}}</td>
                              <td style="  display: flex; justify-content: center;">
                                  <?php if($sent_request->status == 'accepted'){ ?> 
 
                                  <a href="{{url('compare-results/sent/'.$sent_request->id.'')}}">
                                    <button type="button" value="basic_details" class="btn btn-action btn-accept">Compare</button>
                                  </a>
                                  <?php } ?>
                                  
                              </td>
                            </tr>
                           <?php } ?>
                           
                          </tbody>
                        </table>
                    </div>
                  

               
            </div>

        </div>
            
        </div>

    </div>


</div>
</div>

<div class="modal fade report_modal" id="rejectModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
      
      <div class="modal-body ">
        <h2 class="report-heading w-100 text-start mt-4 mt-lg-0" style="font-size: 20px; font-weight: 600">Confirm Action</h2>
        <p class="mb-4" style="color: #3B3B3B; font-size: 16px">Are you sure want to reject?</p>
        
         <div class="d-flex flex-row justify-content-center align-items-center">
              <button type="button" class="btn btn-action btn-cancel" data-bs-dismiss="modal">Cancel</button>
         <a href="#" id="confirmRejectBtn"><button type="button"  class="btn btn-action btn-reject" style="background-color: #F6664D;color:#fff;border-color: #F6664D;">Reject</button></a>
         </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade report_modal" id="acceptModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
      
      <div class="modal-body ">
        <h2 class="report-heading w-100 text-start mt-4 mt-lg-0" style="font-size: 20px; font-weight: 600">Confirm Action</h2>
        <p class="mb-4" style="color: #3B3B3B; font-size: 16px">Are you sure want to accept?</p>
        <div class="d-flex flex-row justify-content-center align-items-center">
          <button type="button" class="btn btn-action btn-cancel" data-bs-dismiss="modal">Cancel</button>
         <a href="#" id="confirmAcceptBtn"><button type="button"  class="btn btn-action btn-accept">Accept</button></a>
         </div>
      </div>
    </div>
  </div>
</div>
@endsection

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const acceptModalEl = document.getElementById('acceptModal');
    const rejectModalEl = document.getElementById('rejectModal');

    document.querySelectorAll('.open-accept-modal').forEach(button => {
      button.addEventListener('click', function () {
        const id = this.getAttribute('data-id');
        document.getElementById('confirmAcceptBtn').setAttribute('data-id', id);
        document.getElementById('confirmAcceptBtn').setAttribute('data-url', `{{url('accept-comparison-request')}}/${id}`);
      });
    });

    document.querySelectorAll('.open-reject-modal').forEach(button => {
      button.addEventListener('click', function () {
        const id = this.getAttribute('data-id');
        document.getElementById('confirmRejectBtn').setAttribute('data-id', id);
        document.getElementById('confirmRejectBtn').setAttribute('data-url', `{{url('reject-comparison-request')}}/${id}`);
      });
    });

    document.getElementById('confirmAcceptBtn').addEventListener('click', function (e) {
      e.preventDefault();
      const id = this.getAttribute('data-id');
      const url = this.getAttribute('data-url');
      const modal = bootstrap.Modal.getInstance(acceptModalEl);
      modal.hide();

      // Hide buttons and show Compare
      const row = document.querySelector(`.data-row[data-id='${id}']`);
      if (row) {
        const td = row.querySelector('td:last-child');
        td.innerHTML = `
          <a href="{{url('compare-results/received')}}/${id}">
            <button type="button" value="basic_details" class="btn btn-action btn-accept">Compare</button>
          </a>
        `;
      }

      setTimeout(() => {
        removeBackdrop();
        window.location.href = url;
      }, 300);
    });

    document.getElementById('confirmRejectBtn').addEventListener('click', function (e) {
      e.preventDefault();
      const url = this.getAttribute('data-url');
      const modal = bootstrap.Modal.getInstance(rejectModalEl);
      modal.hide();

      setTimeout(() => {
        removeBackdrop();
        window.location.href = url;
      }, 300);
    });

    function removeBackdrop() {
      const backdrop = document.querySelector('.modal-backdrop');
      if (backdrop) backdrop.remove();
      document.body.classList.remove('modal-open');
      document.body.style.paddingRight = '';
    }
  });
</script>
