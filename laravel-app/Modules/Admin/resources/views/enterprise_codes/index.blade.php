@extends('admin::layouts.insights')
@section('title','Enterprise codes')
@section('eyebrow','Corporate')
@section('active','enterprise-codes')
@section('actions')<a class="export" href="{{ url('admin/enterprise-codes/export') }}">Export usage</a>@endsection
@section('content')
  <section class="panel table-panel"><div class="panel-head"><div><h2 class="panel-title">All codes</h2><p class="panel-sub">Codes stay masked until an administrator explicitly reveals one.</p></div></div><table class="data-table"><thead><tr><th>ENTITY</th><th>CODE</th><th>REGISTERED</th><th>COMPLETED</th><th>REMAINING</th><th>STATE</th><th></th></tr></thead><tbody>@forelse($quotes as $quote)<tr>
    <td><strong>{{ $quote->organization->name }}</strong><div class="secondary">{{ $quote->seat_count }} issued · {{ ($quote->paid_at ?? $quote->created_at)->timezone(config('app.timezone'))->format('d M Y') }}</div></td>
    <td>{{ $quote->shared_code_hint ?: 'Not generated' }}</td><td>{{ $quote->registered_count }}</td><td>{{ $quote->completed_count }}</td><td>{{ $quote->remaining_count }}</td><td><span class="badge {{ $quote->shared_code_enabled ? 'badge-paid':'badge-not-started' }}">{{ $quote->shared_code_enabled ? 'Enabled' : 'Disabled' }}</span></td>
    <td><div class="table-actions"><a class="action-link" href="{{ url('admin/organization-quotes/'.$quote->id) }}">Open</a>@if($quote->status === 'paid' && !$quote->shared_code_enabled)<form method="post" action="{{ url('admin/organization-quotes/'.$quote->id.'/shared-code') }}">@csrf<button class="action-link" onclick="return confirm('Reissue a fresh code?')">Reissue</button></form>@endif</div></td>
  </tr>@empty<tr><td colspan="7" class="empty">No enterprise codes have been issued.</td></tr>@endforelse</tbody></table></section><div style="margin-top:18px">{{ $quotes->links() }}</div>
@endsection
