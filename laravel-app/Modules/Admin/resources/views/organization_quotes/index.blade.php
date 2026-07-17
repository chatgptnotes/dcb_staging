@extends('admin::layouts.insights')
@section('title','Agreements')
@section('eyebrow','Corporate')
@section('active','agreements')
@section('content')
<section class="panel table-panel"><table class="data-table"><thead><tr><th>AGREEMENT</th><th>ENTITY</th><th>CONTACT</th><th>Seats used</th><th>PAYMENT</th><th>ACCESS</th><th></th></tr></thead><tbody>@forelse($quotes as $quote)<tr><td><strong>{{ $quote->quote_number }}</strong><div class="secondary">{{ $quote->package_slug }}</div></td><td>{{ $quote->organization->name }}</td><td>{{ $quote->enquiry?->contact_name ?? $quote->organization->contact_name }}</td><td>{{ $quote->used_seats_count }} / {{ $quote->seat_count }}</td><td><span class="badge {{ $quote->status==='paid' ? 'badge-paid':'badge-not-started' }}">{{ ucfirst($quote->status) }}</span></td><td>{{ $quote->shared_code_enabled ? 'Active' : 'Not active' }}</td><td><a class="action-link" href="{{ url('admin/organization-quotes/'.$quote->id) }}">Open deal</a></td></tr>@empty<tr><td colspan="7" class="empty">No agreements yet.</td></tr>@endforelse</tbody></table></section><div style="margin-top:18px">{{ $quotes->links() }}</div>
@endsection
