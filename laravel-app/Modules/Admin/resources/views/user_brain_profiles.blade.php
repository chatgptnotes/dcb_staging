@include('admin::layouts.header')
<!-- Content wrapper -->
<div class="content-wrapper">

  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">

    <h4 class="py-3 mb-4">
      <span class="text-muted fw-light">Dashboard / User Management /</span> User Brain Profiles
    </h4>

    <!-- Card Border Shadow -->
    <div class="row">
      <div class="card">
        <h5 class="card-header">User Brain Profiles</h5>
        <div class="card-datatable table-responsive">
          <table class="table border-top" style="width:100%">
            <thead>
              <tr>
                <th>User</th>
                <th>Email</th>
                <th>Brain Profile</th>
                <th>Code</th>
                <th>Completed On</th>
              </tr>
            </thead>
            <tbody>
              @forelse($rows as $r)
              <tr>
                <td>{{ $r->display_name ?: '—' }}</td>
                <td>{{ $r->email ?: '—' }}</td>
                <td>{{ $r->name ?: '—' }}</td>
                <td>{{ $r->code ?: '—' }}</td>
                <td>{{ $r->completed_on ? \Carbon\Carbon::parse($r->completed_on)->format('M d, Y') : '—' }}</td>
              </tr>
              @empty
              <tr>
                <td colspan="5" class="text-center text-muted py-4">No records found</td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!--/ Card Border Shadow -->

  </div>
  <!-- / Content -->

@include('admin::layouts.footer')
