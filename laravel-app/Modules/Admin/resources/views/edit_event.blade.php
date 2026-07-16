<?php
use App\Models\AdminDetails;
?>
@include('admin::layouts.header')
 <!-- Content wrapper -->
 <div class="content-wrapper">

    <!-- Content -->

      <div class="container-xxl flex-grow-1 container-p-y">


<h4 class="py-3 mb-4">
<span class="text-muted fw-light">Dashboard /</span> Edit Event
</h4>

<!-- Card Border Shadow -->
<div class="row">
        <div class="card mb-4">
          <h5 class="card-header">Edit Event</h5>
          @if(Session::has('success')) <div class="alert alert-success mt-2 mb-2">{{ Session::get('success') }}</li></div>@endif
          @if(Session::has('fail')) <div class="alert alert-danger mt-2 mb-2">{{ Session::get('fail') }}</li></div>@endif
          <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-md-4 mb-3">
              <label for="defaultFormControlInput" class="form-label">Name</label>
              <input type="text" class="form-control" id="defaultFormControlInput" name="name" value="{{$event_details->name}}"/>
              @if($errors->has("name")) <div class="alert alert-danger mt-2">{{ $errors->first('name') }}</li></div>@endif
            </div>
            <div class="col-md-4 mb-3">
                <label for="defaultFormControlInput" class="form-label">Date</label>
                <input class="form-control" type="date"   id="html5-date-input" name="date" value="{{$event_details->date}}">
                @if($errors->has("date")) <div class="alert alert-danger mt-2">{{ $errors->first('date') }}</li></div>@endif
            </div>
            <div class="col-md-4 mb-3">
                <label for="defaultFormControlInput" class="form-label">Start Time</label>
                <input class="form-control" type="time" name="start_time" id="html5-time-input" value="{{$event_details->start_time}}">
                @if($errors->has("start_time")) <div class="alert alert-danger mt-2">{{ $errors->first('start_time') }}</li></div>@endif
            </div>
            <div class="col-md-4 mb-3">
                <label for="defaultFormControlInput" class="form-label">End Time</label>
                <input class="form-control" type="time" name="end_time" id="html5-time-input" value="{{$event_details->end_time}}">
                @if($errors->has("end_time")) <div class="alert alert-danger mt-2">{{ $errors->first('end_time') }}</li></div>@endif
            </div>
            <div class="col-md-4 mb-3">
                <label for="defaultFormControlInput" class="form-label">Event Type</label>
                <select id="defaultSelect" class="form-select" name="event_type">
                    <option selected hidden value="{{$event_details->event_type}}">{{$event_details->event_type}}</option>
                    <option value="Physical">Physical</option>
                    <option value="Digital">Digital</option>
                    <option value="Workshop">Workshop</option>
                    <option value="Webinar">Webinar</option>
                  </select>
                @if($errors->has("event_type")) <div class="alert alert-danger mt-2">{{ $errors->first('event_type') }}</li></div>@endif
            </div>
            <div class="col-md-4 mb-3">
                <label for="defaultFormControlInput" class="form-label">Featured Image</label>
                <input class="form-control" type="file" id="formFile" name="featured_image">
                @if($errors->has("featured_image")) <div class="alert alert-danger mt-2">{{ $errors->first('featured_image') }}</li></div>@endif
            </div>
            <div class="col-md-12 mb-3">
                <label for="defaultFormControlInput" class="form-label">Description</label>
                <textarea name="description" id="description" ><?php echo $event_details->description ?></textarea>
                @if($errors->has("description")) <div class="alert alert-danger mt-2">{{ $errors->first('description') }}</li></div>@endif
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
<script>
    $('#description').summernote({
      tabsize: 2,
      height: 400,
      toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'fontname', 'fontsize', 'fontsizeunit',  'forecolor', 'backcolor', 'italic', 'strikethrough', 'superscript', 'subscript', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph', 'height']],
          ['table', ['table']],
          ['insert', ['link','hr']],
        ]
    });


</script>
