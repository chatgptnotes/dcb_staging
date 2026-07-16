<?php
use App\Models\AdminDetails;
?>
@include('admin::layouts.header')
 <!-- Content wrapper -->
 <div class="content-wrapper">

    <!-- Content -->

      <div class="container-xxl flex-grow-1 container-p-y">


<h4 class="py-3 mb-4">
<span class="text-muted fw-light">Dashboard /</span> Events
</h4>

<!-- Card Border Shadow -->
<div class="row">
    <div class="card">
        <h5 class="card-header">Events</h5>
        <a href="{{url('admin/add-event')}}" ><button type="button" class="btn btn-primary mb-4" style="width:250px; ">
            <span class="fa-solid fa-calendar-plus me-1"></span>Add new event
        </button></a>
        @if(Session::has('success')) <div class="alert alert-success mt-2 mb-2">{{ Session::get('success') }}</li></div>@endif
        @if(Session::has('fail')) <div class="alert alert-danger mt-2 mb-2">{{ Session::get('fail') }}</li></div>@endif
        <div class="card-datatable table-responsive">
          <table class="dt-row-grouping table border-top data-table" style="width:100%">
            <thead>
              <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Event Type</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach($events as $event) {
                ?>

            <tr>
            <td>{{$event->name}}</td>
            <td>{{$event->date}}</td>
            <td>{{$event->start_time}}</td>
            <td>{{$event->end_time}}</td>
            <td>{{$event->event_type}}</td>
            <td>
            <div class="userDatatable-content d-inline-block">
                <?php if($event->status == "active") { ?>
                    <span class="badge bg-label-success me-1">{{$event->status}}</span>
                    <?php } else { ?>
                        <span class="badge bg-label-danger me-1">{{$event->status}}</span>
                    <?php } ?>
            </div>
            </td>
            <td>
                <div class="demo-inline-spacing" >
                    <a href="{{ url('admin/edit-event/'.$event->id.'') }}" ><button type="button" class="btn btn-primary btn-xs">Edit</button></a>
                    <a href="{{ url('admin/activate-event/'.$event->id.'') }}"><button type="button" class="btn btn-success btn-xs">Activate</button></a>
                    <a href="{{ url('admin/deactivate-event/'.$event->id.'') }}"><button type="button" class="btn btn-danger btn-xs">Deactivate</button></a>
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
