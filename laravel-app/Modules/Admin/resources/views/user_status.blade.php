@include('admin::layouts.header')
<div class="content-wrapper"><div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="py-3 mb-4"><span class="text-muted fw-light">Dashboard / User Management /</span> User Status</h4>
  <div class="card"><h5 class="card-header">Account and onboarding status</h5><div class="card-datatable table-responsive"><table class="table border-top" style="width:100%"><thead><tr><th>User</th><th>Email</th><th>Account status</th><th>Registered</th><th>Onboarding</th><th>Access activated</th></tr></thead><tbody>
  @forelse($rows as $r)
    <tr><td>{{ $r->display_name ?: '-' }}</td><td>{{ $r->email ?: '-' }}</td><td>@if($r->status === 'active')<span class="badge bg-label-success">Active</span>@elseif($r->status === 'inactive')<span class="badge bg-label-secondary">Inactive</span>@else<span class="badge bg-label-warning">No local account</span>@endif</td><td>{{ $r->registered_at ? \Carbon\Carbon::parse($r->registered_at)->format('M d, Y') : '-' }}</td><td>@if($r->brain_profile_id)<span class="badge bg-label-success">Complete</span>@else<span class="badge bg-label-warning">Incomplete</span>@endif</td><td>{{ $r->activated_date ? \Carbon\Carbon::parse($r->activated_date)->format('M d, Y') : '-' }}</td></tr>
  @empty
    <tr><td colspan="6" class="text-center text-muted py-4">No registered customers found.</td></tr>
  @endforelse
  </tbody></table></div></div>
</div></div>
@include('admin::layouts.footer')
