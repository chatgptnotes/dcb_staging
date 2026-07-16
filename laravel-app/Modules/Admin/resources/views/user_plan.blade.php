@include('admin::layouts.header')
<div class="content-wrapper"><div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="py-3 mb-4"><span class="text-muted fw-light">Dashboard / User Management /</span> User Plan</h4>
  <div class="card"><h5 class="card-header">User registrations and access</h5><div class="card-datatable table-responsive"><table class="table border-top" style="width:100%"><thead><tr><th>User</th><th>Email</th><th>Plan / Package</th><th>Access source</th><th>Status</th><th>Registered</th><th>Start date</th><th>Ends at</th></tr></thead><tbody>
  @forelse($rows as $r)
    @php($slug = $r->package)
    @php($isPaid = $slug && $slug !== 'free')
    @php($label = $isPaid ? ($plans[$slug]['name'] ?? $slug) : 'Free')
    <tr><td>{{ $r->display_name ?: '-' }}</td><td>{{ $r->email ?: '-' }}</td><td>{{ $label }}</td><td><span class="badge bg-label-info">{{ $r->access_source }}</span></td><td><span class="badge bg-label-{{ $isPaid ? 'success' : 'secondary' }}">{{ $isPaid ? 'Active' : 'Free' }}</span></td><td>{{ $r->registered_at ? \Carbon\Carbon::parse($r->registered_at)->format('M d, Y') : '-' }}</td><td>{{ $r->activated_date ? \Carbon\Carbon::parse($r->activated_date)->format('M d, Y') : '-' }}</td><td>{{ $r->ends_at ? \Carbon\Carbon::parse($r->ends_at)->format('M d, Y') : '-' }}</td></tr>
  @empty
    <tr><td colspan="8" class="text-center text-muted py-4">No registered customers found.</td></tr>
  @endforelse
  </tbody></table></div></div>
</div></div>
@include('admin::layouts.footer')
