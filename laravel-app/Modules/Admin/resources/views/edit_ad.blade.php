<?php
use App\Models\AdminDetails;
?>
@include('admin::layouts.header')
 <!-- Content wrapper -->
 <div class="content-wrapper">

    <!-- Content -->

      <div class="container-xxl flex-grow-1 container-p-y">


<h4 class="py-3 mb-4">
<span class="text-muted fw-light">Dashboard /</span> Edit Ad
</h4>

<!-- Card Border Shadow -->
<div class="row">
        <div class="card mb-4">
          <h5 class="card-header">Edit Ad</h5>
          @if(Session::has('success')) <div class="alert alert-success mt-2 mb-2">{{ Session::get('success') }}</li></div>@endif
          @if(Session::has('fail')) <div class="alert alert-danger mt-2 mb-2">{{ Session::get('fail') }}</li></div>@endif
          <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-md-4 mb-3">
              <label for="defaultFormControlInput" class="form-label">Title</label>
              <input type="text" class="form-control" id="defaultFormControlInput" name="title" value="{{$ad_details->title}}"/>
              @if($errors->has("title")) <div class="alert alert-danger mt-2">{{ $errors->first('title') }}</li></div>@endif
            </div>
            <div class="col-md-4 mb-3">
                <label for="defaultFormControlInput" class="form-label">Link</label>
                <input class="form-control" type="text"   id="html5-date-input" name="link" value="{{$ad_details->link}}">
                @if($errors->has("link")) <div class="alert alert-danger mt-2">{{ $errors->first('link') }}</li></div>@endif
            </div>
           
            <div class="col-md-4 mb-3">
                <label for="defaultFormControlInput" class="form-label">Featured Image</label>
                <input class="form-control" type="file" id="formFile" name="featured_image">
                @if($errors->has("featured_image")) <div class="alert alert-danger mt-2">{{ $errors->first('featured_image') }}</li></div>@endif
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

