<?php
use App\Models\ProfileTypes;
?>
@include('admin::layouts.header')
 <!-- Content wrapper -->
 <div class="content-wrapper">

    <!-- Content -->

      <div class="container-xxl flex-grow-1 container-p-y">


<h4 class="py-3 mb-4">
<span class="text-muted fw-light">Dashboard /</span> Brain Code Results
</h4>

<!-- Card Border Shadow -->
<div class="row">
    <div class="card">
        <h5 class="card-header">Brain Code Results</h5>

        @if(Session::has('success')) <div class="alert alert-success mt-2 mb-2">{{ Session::get('success') }}</li></div>@endif
        @if(Session::has('fail')) <div class="alert alert-danger mt-2 mb-2">{{ Session::get('fail') }}</li></div>@endif
        <div class="card-datatable table-responsive">
          <table class="dt-row-grouping table border-top data-table" style="width:100%">
            <thead>
              <tr>
                <th>Profile</th>
                <th>Description</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach($results as $result) {
                    $profile_type = ProfileTypes::where('id', $result->brain_profile_id)->value('name');
                ?>

            <tr>
            <td>{{$profile_type}}</td>
            <td>{{$result->description}}</td>
           
            <td>
                <div class="demo-inline-spacing" >
                    <a href="{{ url('admin/edit-brain-code-results/'.$result->id.'') }}" ><button type="button" class="btn btn-primary btn-xs">Edit</button></a>
                   
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
