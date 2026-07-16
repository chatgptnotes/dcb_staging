@include('admin::layouts.header')
<div class="content-wrapper"><div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="py-3 mb-4"><span class="text-muted fw-light">Dashboard</span></h4>
  <div class="row g-4 mb-4">
    <div class="col-sm-6 col-xl"><div class="card"><div class="card-body"><span class="text-muted">Registered users</span><h3 class="mb-0 mt-2">{{ $stats['registered'] }}</h3></div></div></div>
    <div class="col-sm-6 col-xl"><div class="card"><div class="card-body"><span class="text-muted">Registered today</span><h3 class="mb-0 mt-2">{{ $stats['today'] }}</h3></div></div></div>
    <div class="col-sm-6 col-xl"><div class="card"><div class="card-body"><span class="text-muted">Active paid access</span><h3 class="mb-0 mt-2">{{ $stats['paid'] }}</h3></div></div></div>
    <div class="col-sm-6 col-xl"><div class="card"><div class="card-body"><span class="text-muted">Voucher users</span><h3 class="mb-0 mt-2">{{ $stats['voucher'] }}</h3></div></div></div>
    <div class="col-sm-6 col-xl"><div class="card"><div class="card-body"><span class="text-muted">Organisation users</span><h3 class="mb-0 mt-2">{{ $stats['organization'] }}</h3></div></div></div>
  </div>
  <div class="card"><div class="d-flex justify-content-between align-items-center card-header"><h5 class="mb-0">Recent registrations</h5><a class="btn btn-sm btn-outline-primary" href="{{ url('admin/user-plan') }}">Open user management</a></div><div class="table-responsive"><table class="table table-hover mb-0"><thead><tr><th>User</th><th>Email</th><th>Package</th><th>Access source</th><th>Registered</th></tr></thead><tbody>@forelse($recentUsers as $user)<tr><td>{{ $user->display_name ?: '-' }}</td><td>{{ $user->email ?: '-' }}</td><td>{{ $user->package ?: 'free' }}</td><td><span class="badge bg-label-info">{{ $user->access_source }}</span></td><td>{{ $user->registered_at ? \Carbon\Carbon::parse($user->registered_at)->format('M d, Y H:i') : '-' }}</td></tr>@empty<tr><td colspan="5" class="text-center text-muted py-4">No customer registrations yet.</td></tr>@endforelse</tbody></table></div></div>
</div></div>
@include('admin::layouts.footer')
