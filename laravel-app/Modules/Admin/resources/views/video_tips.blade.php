<?php
use App\Models\ProfileTypes;
?>
@include('admin::layouts.header')
 <!-- Content wrapper -->
 <div class="content-wrapper">

    <!-- Content -->

      <div class="container-xxl flex-grow-1 container-p-y">


<h4 class="py-3 mb-4">
<span class="text-muted fw-light">Dashboard /</span> Video Tips
</h4>

<!-- Card Border Shadow -->
<div class="row">
    <div class="card">
        <h5 class="card-header"> Video Tips</h5>
        <a href="{{url('admin/add-video-tip')}}" ><button type="button" class="btn btn-primary mb-4" style="width:250px; ">
            <span class="fa-solid fa-calendar-plus me-1"></span>Add video tip
        </button></a>
        @if(Session::has('success')) <div class="alert alert-success mt-2 mb-2">{{ Session::get('success') }}</li></div>@endif
        @if(Session::has('fail')) <div class="alert alert-danger mt-2 mb-2">{{ Session::get('fail') }}</li></div>@endif
        <div class="card-datatable table-responsive">
          <table class="dt-row-grouping table border-top data-table" style="width:100%">
            <thead>
              <tr>
                <th>Brain Profile</th>
                <th>Category</th>
                <th>Title</th>
                <th>Video</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach($tips as $tip) {
                    $profile_type = ProfileTypes::where('id', $tip->brain_profile_id)->value('name');
                ?>

            <tr>
            <td>{{$profile_type}}</td>
            <td>{{$tip->category}}</td>
            <td>{{$tip->title}}</td>
            <td>{{$tip->video}}</td>
            <td>
                <div class="demo-inline-spacing" >
                    <a href="{{ url('admin/edit-video-tip/'.$tip->id.'') }}" ><button type="button" class="btn btn-primary btn-xs">Edit</button></a>
                   
                </div>
            </td>

            </tr>
            <?php } ?>
            </tbody>

          </table>
        </div>
      </div>
</div>
<!--/ Card Border Shadow -->



      </div>
      <!-- / Content -->

@include('admin::layouts.footer')
