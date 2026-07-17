@extends('admin::layouts.insights')
@section('title','Inquiries')
@section('eyebrow','Corporate')
@section('active','inquiries')
@section('actions')<span class="badge badge-new">{{ $enquiries->where('status','new')->count() }} new</span>@endsection
@section('content')
  @if(session('success'))<div class="alert success">{{ session('success') }}</div>@endif
  @if(session('fail'))<div class="alert fail">{{ session('fail') }}</div>@endif
  <section class="panel table-panel"><table class="data-table"><thead><tr><th>ORGANIZATION</th><th>CONTACT</th><th>GROUP SIZE</th><th>RECEIVED</th><th>STATUS</th><th></th></tr></thead><tbody>@forelse($enquiries as $enquiry)<tr>
    <td><strong>{{ $enquiry->organization_name }}</strong>@if($enquiry->message)<div class="secondary">“{{ strlen($enquiry->message) > 70 ? substr($enquiry->message, 0, 67).'...' : $enquiry->message }}”</div>@endif</td>
    <td>{{ $enquiry->contact_name }}<div class="secondary">{{ $enquiry->contact_email }}</div></td>
    <td>{{ number_format($enquiry->group_size) }}</td>
    <td title="{{ $enquiry->created_at->timezone(config('app.timezone'))->format('d F Y, g:i A') }}">{{ $enquiry->created_at->timezone(config('app.timezone'))->diffForHumans() }}</td>
    <td><form method="post" action="{{ url('admin/organization-enquiries/'.$enquiry->id) }}" class="table-actions">@csrf<select name="status" style="border:0;background:transparent;font:inherit;max-width:105px">@foreach(['new'=>'New','reviewed'=>'In talks','converted'=>'Deal live','closed'=>'Closed'] as $value=>$label)<option value="{{ $value }}" @selected($enquiry->status===$value)>{{ $label }}</option>@endforeach</select><button class="action-link">Save</button></form></td>
    <td>@if($enquiry->quote)<a class="action-link" href="{{ url('admin/organization-quotes/'.$enquiry->quote->id) }}">Open deal</a>@else<a class="action-link" href="{{ url('admin/organization-enquiries/'.$enquiry->id.'/create-deal') }}">Create deal</a>@endif</td>
  </tr>@empty<tr><td colspan="6" class="empty">No corporate inquiries yet.</td></tr>@endforelse</tbody></table></section>
  <div style="margin-top:18px">{{ $enquiries->links() }}</div>
@endsection
