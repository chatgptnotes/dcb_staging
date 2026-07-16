<?php
use App\Models\AdminDetails;
?>
@include('admin::layouts.header')
 <!-- Content wrapper -->
 <div class="content-wrapper">

    <!-- Content -->

      <div class="container-xxl flex-grow-1 container-p-y">


<h4 class="py-3 mb-4">
<span class="text-muted fw-light">Dashboard /</span> Edit Normal Question
</h4>

<!-- Card Border Shadow -->
<div class="row">
        <div class="card mb-4">
          <h5 class="card-header">Edit Normal Question</h5>
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
                <label for="defaultFormControlInput" class="form-label">L1 Answer</label>
                <input class="form-control" type="text"   id="html5-date-input" name="l1_answer" value="{{$question_details->answer_1}}">
                @if($errors->has("l1_answer")) <div class="alert alert-danger mt-2">{{ $errors->first('l1_answer') }}</li></div>@endif
            </div>
            <div class="col-md-12 mb-3">
                <label for="defaultFormControlInput" class="form-label">L2 Answer</label>
                <input class="form-control" type="text"   id="html5-date-input" name="l2_answer" value="{{$question_details->answer_2}}">
                @if($errors->has("l2_answer")) <div class="alert alert-danger mt-2">{{ $errors->first('l2_answer') }}</li></div>@endif
            </div>
            <div class="col-md-12 mb-3">
                <label for="defaultFormControlInput" class="form-label">R1 Answer</label>
                <input class="form-control" type="text"   id="html5-date-input" name="r1_answer" value="{{$question_details->answer_3}}">
                @if($errors->has("r1_answer")) <div class="alert alert-danger mt-2">{{ $errors->first('r1_answer') }}</li></div>@endif
            </div>
            <div class="col-md-12 mb-3">
                <label for="defaultFormControlInput" class="form-label">R2 Answer</label>
                <input class="form-control" type="text"   id="html5-date-input" name="r2_answer" value="{{$question_details->answer_4}}">
                @if($errors->has("r2_answer")) <div class="alert alert-danger mt-2">{{ $errors->first('r2_answer') }}</li></div>@endif
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

