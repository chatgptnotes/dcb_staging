<?php
use App\Models\AdminDetails;
?>
@include('admin::layouts.header')
 <!-- Content wrapper -->
 <div class="content-wrapper">

    <!-- Content -->

      <div class="container-xxl flex-grow-1 container-p-y">


<h4 class="py-3 mb-4">
<span class="text-muted fw-light">Dashboard /</span> Edit Dimension Question
</h4>

<!-- Card Border Shadow -->
<div class="row">
        <div class="card mb-4">
          <h5 class="card-header">Edit Dimension Question</h5>
          @if(Session::has('success')) <div class="alert alert-success mt-2 mb-2">{{ Session::get('success') }}</li></div>@endif
          @if(Session::has('fail')) <div class="alert alert-danger mt-2 mb-2">{{ Session::get('fail') }}</li></div>@endif
          <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-md-12 mb-3">
              <label for="defaultFormControlInput" class="form-label">Question</label>
              <input type="text" class="form-control" id="defaultFormControlInput" name="question" value="{{$question_details->question}}"/>
              @if($errors->has("title")) <div class="alert alert-danger mt-2">{{ $errors->first('title') }}</li></div>@endif
            </div>
            <div class="col-md-12 mb-3">
                <label for="defaultFormControlInput" class="form-label">L1 Analyst Answer</label>
                <input class="form-control" type="text"   id="html5-date-input" name="l1_analyst_answer" value="{{$question_details->l1_analyst_answer}}">
                @if($errors->has("l1_analyst_answer")) <div class="alert alert-danger mt-2">{{ $errors->first('l1_analyst_answer') }}</li></div>@endif
            </div>
            <div class="col-md-12 mb-3">
                <label for="defaultFormControlInput" class="form-label">L1 Realist Answer</label>
                <input class="form-control" type="text"   id="html5-date-input" name="l1_realist_answer" value="{{$question_details->l1_realist_answer}}">
                @if($errors->has("l1_realist_answer")) <div class="alert alert-danger mt-2">{{ $errors->first('l1_realist_answer') }}</li></div>@endif
            </div>
            <div class="col-md-12 mb-3">
                <label for="defaultFormControlInput" class="form-label">L2 Stalwart Answer</label>
                <input class="form-control" type="text"   id="html5-date-input" name="l2_stalwart_answer" value="{{$question_details->l2_stalwart_answer}}">
                @if($errors->has("l2_stalwart_answer")) <div class="alert alert-danger mt-2">{{ $errors->first('l2_stalwart_answer') }}</li></div>@endif
            </div>
            <div class="col-md-12 mb-3">
                <label for="defaultFormControlInput" class="form-label">L2 Organizer Answer</label>
                <input class="form-control" type="text"   id="html5-date-input" name="l2_organizer_answer" value="{{$question_details->l2_organizer_answer}}">
                @if($errors->has("l2_organizer_answer")) <div class="alert alert-danger mt-2">{{ $errors->first('l2_organizer_answer') }}</li></div>@endif
            </div>
             <div class="col-md-12 mb-3">
                <label for="defaultFormControlInput" class="form-label">R1 Strategist Answer</label>
                <input class="form-control" type="text"   id="html5-date-input" name="r1_strategist_answer" value="{{$question_details->r1_strategist_answer}}">
                @if($errors->has("r1_strategist_answer")) <div class="alert alert-danger mt-2">{{ $errors->first('r1_strategist_answer') }}</li></div>@endif
            </div>
            <div class="col-md-12 mb-3">
                <label for="defaultFormControlInput" class="form-label">R1 Imagineer Answer</label>
                <input class="form-control" type="text"   id="html5-date-input" name="r1_imagineer_answer" value="{{$question_details->r1_imagineer_answer}}">
                @if($errors->has("r1_imagineer_answer")) <div class="alert alert-danger mt-2">{{ $errors->first('r1_imagineer_answer') }}</li></div>@endif
            </div>
            <div class="col-md-12 mb-3">
                <label for="defaultFormControlInput" class="form-label">R2 Socializer Answer</label>
                <input class="form-control" type="text"   id="html5-date-input" name="r2_empathizer_answer" value="{{$question_details->r2_empathizer_answer}}">
                @if($errors->has("r2_empathizer_answer")) <div class="alert alert-danger mt-2">{{ $errors->first('r2_empathizer_answer') }}</li></div>@endif
            </div>
            <div class="col-md-12 mb-3">
                <label for="defaultFormControlInput" class="form-label">R2 Empathizer Answer</label>
                <input class="form-control" type="text"   id="html5-date-input" name="r2_empathizer_answer" value="{{$question_details->r2_empathizer_answer}}">
                @if($errors->has("r2_empathizer_answer")) <div class="alert alert-danger mt-2">{{ $errors->first('r2_empathizer_answer') }}</li></div>@endif
            </div>
            <div class="col-md-12">
            <button type="submit" class="btn btn-primary mb-4 mt-4" style="width:250px; ">
                <span class="bx bxs-save me-1"></span>Save
            </button>
            </div>
            </div>
            </form>
          </div>
        </div>
</div>
<!--/ Card Border Shadow -->



      </div>
      <!-- / Content -->

@include('admin::layouts.footer')

