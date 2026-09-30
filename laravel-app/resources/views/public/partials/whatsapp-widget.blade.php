<style>
.dmb-whatsapp{position:fixed;right:20px;bottom:84px;bottom:calc(84px + env(safe-area-inset-bottom, 0px));z-index:9;display:inline-flex;align-items:center;gap:9px;min-height:48px;padding:12px 18px;border-radius:999px;background:#147d40;color:#fff!important;font:600 15px/1.3 sans-serif;text-decoration:none!important;box-shadow:0 4px 18px #0002}
.dmb-whatsapp:hover{background:#106533}.dmb-whatsapp:focus-visible{outline:3px solid #171513;outline-offset:4px}.dmb-whatsapp svg{width:22px;height:22px;flex-shrink:0}
@media(max-width:600px){.dmb-whatsapp{right:16px;padding:12px 14px}}
</style>
<a class="dmb-whatsapp" href="{{ config('contact.whatsapp_url') }}" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp (opens in a new tab)">
  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 11.5a9 9 0 0 1-13.3 7.9L3 21l1.6-4.7A9 9 0 1 1 21 11.5Z"/><path d="M8 7.5c0 4.5 4 8.5 8.5 8.5l1-2.5-3-1-1 1a9 9 0 0 1-3-3l1-1-1-3Z"/></svg>
  <span>WhatsApp</span>
</a>
