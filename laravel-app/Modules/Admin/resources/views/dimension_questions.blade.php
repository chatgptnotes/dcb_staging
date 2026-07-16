<?php
use App\Models\AdminDetails;
?>
@include('admin::layouts.header')
 <!-- Content wrapper -->
 <div class="content-wrapper">

    <!-- Content -->

      <div class="container-xxl flex-grow-1 container-p-y">


<h4 class="py-3 mb-4">
<span class="text-muted fw-light">Dashboard /</span> Dimention Questions
</h4>

<!-- Card Border Shadow -->
<div class="row">
    <div class="card">
        <h5 class="card-header">Dimention Questions</h5>

        @if(Session::has('success')) <div class="alert alert-success mt-2 mb-2">{{ Session::get('success') }}</li></div>@endif
        @if(Session::has('fail')) <div class="alert alert-danger mt-2 mb-2">{{ Session::get('fail') }}</li></div>@endif
        <div class="card-datatable table-responsive">
          <table class="dt-row-grouping table border-top data-table" style="width:100%">
            <thead>
              <tr>
                <th>Question</th>
                <th>L1 Analyst Answer</th>
                <th>L1 Realist Answer</th>
                <th>L2 Stalwart Answer</th>
                <th>L2 Organizer Answer</th>
                <th>R1 Strategist Answer</th>
                <th>R1 Imagineer Answer</th>
                <th>R2 Socializer Answer</th>
                <th>R2 Empathizer Answer</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach($questions as $question) {
                ?>

            <tr>
            <td>{{$question->question}}</td>
            <td>{{$question->l1_analyst_answer}}</td>
            <td>{{$question->l1_realist_answer}}</td>
            <td>{{$question->l2_stalwart_answer}}</td>
            <td>{{$question->l2_organizer_answer}}</td>
            <td>{{$question->r1_strategist_answer}}</td>
            <td>{{$question->r1_imagineer_answer}}</td>
            <td>{{$question->r2_empathizer_answer}}</td>
            <td>{{$question->r2_empathizer_answer}}</td>
            <td>
                <div class="demo-inline-spacing" >
                    <a href="{{ url('admin/edit-dimension-question/'.$question->id.'') }}" ><button type="button" class="btn btn-primary btn-xs">Edit</button></a>
                   
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
