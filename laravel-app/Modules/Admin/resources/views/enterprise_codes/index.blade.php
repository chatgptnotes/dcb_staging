@extends('admin::layouts.insights')
@section('title','Enterprise codes')
@section('eyebrow','Corporate')
@section('active','enterprise-codes')
@section('actions')<a class="export" href="{{ url('admin/enterprise-codes/export') }}">Export usage</a>@endsection
@section('content')
  @if(session('success'))
    <div class="alert success">{{ session('success') }}</div>
  @endif
  @if(session('fail'))
    <div class="alert fail">{{ session('fail') }}</div>
  @endif
  @if(session('organization_code'))
    <div class="alert success">
      <strong>Enterprise code:</strong> <code id="organization-code">{{ session('organization_code') }}</code>
      <button class="action-link" type="button" id="copy-organization-code">Copy code</button>
      <div class="secondary">Copy this one-time reveal securely; the table shows a masked reference only.</div>
    </div>
  @endif

  <section class="panel table-panel">
    <div class="panel-head">
      <div>
        <h2 class="panel-title">Enterprise codes</h2>
        <p class="panel-sub">Codes stay masked until an administrator explicitly reveals one. Pending agreements are shown until payment is recorded.</p>
      </div>
    </div>
    <table class="data-table">
      <thead>
        <tr><th>ENTITY</th><th>CODE</th><th>REGISTERED</th><th>COMPLETED</th><th>REMAINING</th><th>STATE</th><th></th></tr>
      </thead>
      <tbody>
        @forelse($quotes as $quote)
          @php($hasEnterpriseCode = filled($quote->shared_code_hash) && filled($quote->shared_code_encrypted))
          <tr>
            <td>
              <strong>{{ $quote->organization->name }}</strong>
              <div class="secondary">{{ $quote->seat_count }} issued · {{ ($quote->paid_at ?? $quote->created_at)->timezone(config('app.timezone'))->format('d M Y') }}</div>
            </td>
            <td>{{ $quote->shared_code_hint ?: 'Not generated' }}</td>
            <td>{{ $quote->registered_count }}</td>
            <td>{{ $quote->completed_count }}</td>
            <td>{{ $quote->remaining_count }}</td>
            <td>
              @if($quote->status === 'paid' && $hasEnterpriseCode)
                <form method="post" action="{{ url('admin/organization-quotes/'.$quote->id.'/shared-code/status') }}">
                  @csrf
                  <input type="hidden" name="enabled" value="0">
                  <label class="toggle-row enterprise-toggle">
                    <input class="toggle" type="checkbox" name="enabled" value="1" {{ $quote->shared_code_enabled ? 'checked' : '' }} aria-label="{{ $quote->shared_code_enabled ? 'Disable' : 'Enable' }} enterprise code for {{ $quote->organization->name }}" onchange="if (!this.checked && !confirm('Disable this enterprise code? Users will not be able to use it until you enable it again.')) { this.checked = true; return; } this.form.submit()">
                    <span>{{ $quote->shared_code_enabled ? 'Enabled' : 'Disabled' }}</span>
                  </label>
                </form>
              @elseif($quote->status === 'paid')
                <span class="badge badge-not-started">Generate code first</span>
              @else
                <span class="badge badge-not-started">Waiting for payment</span>
              @endif
            </td>
            <td>
              <div class="enterprise-actions">
                <a class="enterprise-action" href="{{ url('admin/organization-quotes/'.$quote->id) }}">Open deal</a>
                @if($quote->shared_code_enabled && $hasEnterpriseCode)
                  <form method="post" action="{{ url('admin/organization-quotes/'.$quote->id.'/shared-code/reveal') }}">
                    @csrf
                    <button class="enterprise-action" type="submit">Reveal only</button>
                  </form>
                  @if($quote->enquiry?->contact_email)
                    <form method="post" action="{{ url('admin/organization-quotes/'.$quote->id.'/shared-code/send-email') }}">
                      @csrf
                      <button class="enterprise-action" type="submit">Send email</button>
                    </form>
                  @endif
                @elseif($quote->status === 'paid' && ! $hasEnterpriseCode)
                  <form method="post" action="{{ url('admin/organization-quotes/'.$quote->id.'/shared-code') }}">
                    @csrf
                    <button class="enterprise-action" type="submit">Generate code</button>
                  </form>
                @endif
              </div>
            </td>
          </tr>
        @empty
          <tr><td colspan="7" class="empty">No agreements have been saved yet.</td></tr>
        @endforelse
      </tbody>
    </table>
  </section>
  <div style="margin-top:18px">{{ $quotes->links() }}</div>
@endsection

@push('scripts')
  <style>
    .enterprise-toggle { margin-top: 0; }
    .enterprise-actions { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 8px; min-width: 250px; }
    .enterprise-actions form { margin: 0; }
    .enterprise-action { display: flex; align-items: center; justify-content: center; width: 100%; min-height: 42px; padding: 9px 12px; border: 1px solid var(--line); border-radius: 10px; background: #fff; color: var(--orange); cursor: pointer; font: 600 14px 'DM Sans'; text-align: center; text-decoration: none; }
    .enterprise-action:hover { background: #fff7e8; }
    @media (max-width: 700px) { .enterprise-actions { min-width: 210px; } }
  </style>
  @if(session('organization_code'))
    <script>
      (function () {
        var button = document.getElementById('copy-organization-code');
        var code = document.getElementById('organization-code');
        if (!button || !code) return;

        function fallbackCopy(text) {
          var input = document.createElement('textarea');
          input.value = text;
          input.setAttribute('readonly', '');
          input.style.position = 'fixed';
          input.style.opacity = '0';
          document.body.appendChild(input);
          input.select();
          var copied = document.execCommand('copy');
          document.body.removeChild(input);
          return copied;
        }

        button.addEventListener('click', function () {
          var text = code.textContent.trim();
          var copied = function () {
            button.textContent = 'Copied';
            setTimeout(function () { button.textContent = 'Copy code'; }, 2000);
          };
          var failed = function () {
            button.textContent = 'Select code manually';
          };

          if (navigator.clipboard && window.isSecureContext) {
            navigator.clipboard.writeText(text).then(copied).catch(function () {
              fallbackCopy(text) ? copied() : failed();
            });
          } else if (fallbackCopy(text)) {
            copied();
          } else {
            failed();
          }
        });
      })();
    </script>
  @endif
@endpush
