@include('admin::layouts.header')
<div class="content-wrapper"><div class="container-xxl flex-grow-1 container-p-y">
  <div class="mb-3"><h4 class="mb-1">Organisation Enquiries</h4><p class="text-muted mb-0">Every corporate agreement begins with the request received here.</p></div>
  @if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif
  @if(session('fail'))<div class="alert alert-danger">{{ session('fail') }}</div>@endif
  <div class="card"><div class="table-responsive"><table class="table table-hover mb-0"><thead><tr><th>Organisation</th><th>Contact</th><th>Group size</th><th>Request</th><th>Received</th><th>Status</th><th>Deal</th></tr></thead><tbody>@forelse($enquiries as $enquiry)<tr>
    <td><strong>{{ $enquiry->organization_name }}</strong></td>
    <td>{{ $enquiry->contact_name }}<br><small>{{ $enquiry->contact_email }} @if($enquiry->contact_phone) &middot; {{ $enquiry->contact_phone }} @endif</small></td>
    <td>{{ $enquiry->group_size }}</td>
    <td style="min-width:230px">{{ $enquiry->message ?: '—' }}</td>
    <td>{{ $enquiry->created_at->format('d M Y') }}</td>
    <td><form class="d-flex gap-1" method="post" action="{{ url('admin/organization-enquiries/'.$enquiry->id) }}">@csrf<select class="form-select form-select-sm" name="status">@foreach(['new','reviewed','converted','closed'] as $status)<option value="{{ $status }}" @selected($enquiry->status===$status)>{{ ucfirst($status) }}</option>@endforeach</select><button class="btn btn-sm btn-outline-primary">Save</button></form></td>
    <td>@if($enquiry->quote)<a class="btn btn-sm btn-outline-primary" href="{{ url('admin/organization-quotes/'.$enquiry->quote->id) }}">Open agreement</a>@else<a class="btn btn-sm btn-primary" href="{{ url('admin/organization-enquiries/'.$enquiry->id.'/create-deal') }}">Create deal</a>@endif</td>
  </tr>@empty<tr><td colspan="7" class="text-center text-muted py-4">No organisation enquiries yet.</td></tr>@endforelse</tbody></table></div><div class="card-body">{{ $enquiries->links() }}</div></div>
</div></div>
@include('admin::layouts.footer')
