# DecodeMyBrain — Full Native Laravel Rebuild
**Project Plan v1.0 — Synthesized: 21 June 2026**
*Sources: PDF plan (16 Jun 2026) + Client review call (53 min)*

---

## 1. Mission

Rebuild all of **decodemybrain.com** as a single fully native Laravel 10 app — own MySQL DB, no WordPress, no Elementor, no WooCommerce. The logged-in member platform (auth, assessments, PDF reports, admin) is already mature and stays as-is. The work is: public frontend pages + simplified purchase flow + super-admin capabilities.

---

## 2. What Is Already Built (Do Not Touch)

| Module | Status |
|---|---|
| Auth — signup, login, email OTP / 2FA, password reset | Done |
| Brain assessments — full questionnaire, gated access, answer storage, progress | Done |
| Scoring + PDF report generation | Done |
| Buddy comparison ("Brain Connect" matching) | Done |
| Member content — careers, tips, events, jobs, internships, scholarships (AJAX) | Done |
| Stripe Cashier checkout — webhook, success/cancel, entitlements | Done |
| EntitlementService + ValidatePackage middleware | Done |
| Admin panel — CRUD over events, careers, content | Done |
| WordPress user bridge (wp_users ↔ users) | Done — **to be retired in final phase** |

---

## 3. Programs & Age Routing

Three programs map to three age brackets. Age (DOB) collected at registration determines which assessment is served automatically.

| Program | Age Range | Tagline | Assessment Served |
|---|---|---|---|
| **Quest** | 12–14 | Building Strong Foundations for Future Success | Quest brain assessment |
| **Evolve** | 15–18 | Guiding Teens Towards a Successful Career | Evolve brain assessment |
| **Summit** | 18–50 | Unlocking Lifelong Growth and Fulfillment | Summit / adult brain assessment |

Additional programs on the platform:
- **Limitless Brain Academy** — extended brain training curriculum
- **Brain Connect** — buddy matching / cognitive alignment for families (paid feature)
- **Brain Performance Blueprint** — personalized growth roadmap

Additional programs on the platform:
- Limitless Brain Academy
- Brain Connect (buddy matching — paid feature)
- Brain Performance Blueprint

---

## 4. Final User Flow (Agreed in Client Call)

```
Landing page
  → User sees program cards (Quest / Evolve / Summit)
  → Clicks "Read More" → program detail page
  → Clicks "Buy Now" / "Unlock My Brain"
  → Registration form (name, email, date of birth — DOB auto-determines program)
  → Payment page (Stripe) — ONE price per program, no free tier
  → Payment success
  → Email sent: "Payment confirmed. Username: X | Password: Y | Go to app.decodemybrain.com"
  → User logs in to app → assessment pre-selected by age
  → Completes assessment
  → PDF report generated
  → Option to book a coaching session
```

**Key decisions locked in the client call:**
- No free plan — remove entirely
- No multiple packages within a program — one clear price per program
- Registration happens as part of the checkout step (not before, not after)
- Credentials are emailed after payment — user does not set their own password at purchase time
- Email sender: `info@limitlessbrain.com` (not noreply — confirmed in call)

---

## 5. Super Admin Dashboard (New Requirements from Call)

The existing admin panel is extended with these views:

| Feature | Description |
|---|---|
| **User 360 View** | Search any user (name/email) → see their plan, payment history, assessment status, brain scores, PDF report |
| **Transactions** | All payments with plan, date, amount, Stripe reference |
| **Test Reports** | View any user's generated PDF report from the admin side |
| **Brain Scores** | Aggregate or per-user scores |
| **Bulk Corporate Code Generator** | Enter company name + count → generate a shared access code usable by N people → email the code + login instructions to the corporate contact |

### Corporate / Bulk Flow (Offline Payment)

```
Super Admin receives offline payment from corporate client (e.g. "Sahil — 50 people")
  → Admin logs into super admin panel
  → Creates a corporate batch: company name, contact email, number of seats (50)
  → System generates a unique batch code + sets max-use limit = 50
  → Email auto-sent to corporate contact: "Your code is XXXX. Share with your team. They go to app.decodemybrain.com, enter this code to access their assessment."
  → Each employee enters code → account is created → assessment unlocks
  → Super Admin dashboard shows which employees used the code, their reports, etc.
```

No Stripe for corporate — offline payment only; admin manually triggers the code generation.

---

## 6. What to Build — Phased Plan

### Phase 1 — Pricing + Purchase Flow (0.5–1 day)
- Remove free plan from pricing page
- Simplify to one price per program (remove BEGINNING/GOLD/PLATINUM tiers or collapse to single price)
- Rebuild `pricing.blade.php`: Nunito font, coral/gold/green, one card per program
- Wire Stripe one-time payment per program (Deep Dive → $499, Guided F&F → $999 — or confirm final prices)
- Post-payment: generate credentials + send email with username/password + app link
- Update `config/packages.php` + `.env` Stripe price IDs

**Success criterion:** User pays → gets email with credentials → logs in → sees correct age-matched assessment.

---

### Phase Foundation — Shared Layout + Component Library (1–2 days)
- Public layout: `layouts/public.blade.php` — header, footer, nav
- Component library: hero, program card, CTA button, section divider, form inputs
- Design tokens: Nunito font, coral `#E8735A`, gold `#C9A84C`, green `#4CAF50`
- No Elementor/WordPress CSS — clean from scratch
- Mobile responsive

---

### Phase 2 — Forms + Data Capture (2–3 days)
New DB tables + Blade + validation + email-to-staff for:
- Contact form (`POST /contact`) → saves to `contact_submissions` + emails staff
- Corporate enquiry form (`POST /enquire-corporate`) → saves to `corporate_enquiries`
- Booking request form (`POST /booking/request`) → saves to `booking_requests`
- Newsletter subscribe (`POST /newsletter/subscribe`) → saves to `newsletter_subscribers`

---

### Phase Marketing — Public Pages (5–8 days)
Build ~14 pages as faithful Blade rebuilds of the live WordPress design:

| Route | Page |
|---|---|
| `/` | Home |
| `/quest` | Quest program page |
| `/evolve` | Evolve program page |
| `/summit` | Summit program page |
| `/limitless-brain-academy` | LBA program page |
| `/brain-connect` | Brain Connect page |
| `/brain-performance-blueprint` | BPB page |
| `/about` | About Us |
| `/science` | The Science |
| `/our-method` | Our Method |
| `/neurodivergence` | Neurodivergence |
| `/contact` | Contact (with working form) |
| `/enquire-about-corporate` | Corporate enquiry |
| `/booking` | Booking request |
| `/privacy-policy` | Privacy Policy |
| `/pricing` (rebuilt) | Pricing / shop |

**Capture workflow per page:** Full-page screenshot of live WP page → build in Blade → screenshot-diff before sign-off.

**Excluded (out of scope):** testimonials, team, blog, resources, pricing download cards.

---

### Phase Commerce — Shop (2–3 days)
- Shop grid page + product detail pages
- Deferred to after marketing pages are done

---

### Phase Decoupling — Remove WordPress (2–3 days)
- Remove `routes/api.php` bridge endpoints: `update-package-status`, `get-userdetails`, `register`, `get-profile-qa`, Sanctum `/user`
- Remove WordPress SSO/login bridge routes + `wp` payment driver
- Remove `wp_users` mirror + `wp_user_id` column (after all existing users migrated)
- Make `users.package` the authoritative entitlement source
- Split `web.php` into `public.php` / `member.php` / `commerce.php`

---

## 7. Routes Summary

### Add — public web
```
GET  /
GET  /quest, /evolve, /summit
GET  /limitless-brain-academy
GET  /brain-connect
GET  /brain-performance-blueprint
GET  /about, /science, /our-method, /neurodivergence
GET  /contact, /enquire-about-corporate, /booking
GET  /privacy-policy
GET  /pricing  (rebuilt)
```

### Add — form POST handlers
```
POST /contact
POST /enquire-corporate
POST /booking/request
POST /newsletter/subscribe
```

### Add — super admin
```
GET  /admin/users/{id}/360
GET  /admin/transactions
GET  /admin/reports
GET  /admin/corporate
POST /admin/corporate/generate-code
```

### Keep unchanged
Auth + OTP, dashboard, assessments, careers/tips/events, `checkout.start/success/cancel`, `/stripe/webhook`, existing admin CRUD.

---

## 8. What to Remove

| Item | Reason |
|---|---|
| `routes/api.php` WordPress-sync endpoints | Dead once native |
| WordPress SSO/login bridge + `wp` payment driver | Replaced by native auth + Stripe Cashier |
| `wp_users` mirror + `wp_user_id` (final phase) | Native DB is source of truth |
| Free plan / free tier UI | Client decision — no free plan |
| BEGINNING / GOLD / PLATINUM sub-packages | Simplified to one price per program |
| Testimonials, team, blog, resources pages | Out of scope |
| Pricing download cards | Out of scope |
| License Keys + cart | Deferred |
| My Account / billing dashboard | Deferred |

---

## 9. Email Configuration

| Type | Sender | Trigger |
|---|---|---|
| Payment confirmation + credentials | `info@limitlessbrain.com` | Post-Stripe payment success |
| Staff notification (contact/corporate/booking) | `info@limitlessbrain.com` | Form submission |
| Corporate batch code | `info@limitlessbrain.com` | Admin generates bulk code |

Stripe account: sandbox used so far — live credentials to be provided by client.

---

## 10. Time Estimate

| Phase | Scope | Estimate |
|---|---|---|
| 1 | Pricing rebuild + purchase flow + post-payment email | 0.5–1 day |
| Foundation | Shared layout + component library | 1–2 days |
| 2 | Forms + data capture (4 forms, tables, emails) | 2–3 days |
| Marketing | Home + ~14 program/info pages | 5–8 days |
| Commerce | Shop grid + product pages | 2–3 days |
| Super Admin | User 360, transactions, reports, bulk codes | 2–3 days |
| Decoupling | Retire WP bridge, native DB cutover + testing | 2–3 days |
| **TOTAL** | | **~15–23 working days (3–5 weeks)** |

Biggest variable: marketing pages (design fidelity + client-supplied illustration folder completeness).

---

## 11. Open Questions for Client

1. **Prices per program** — confirm final one-time prices for Quest / Evolve / Summit (current config has Deep Dive $499, Guided F&F $999 — do these map to specific programs?)
2. **Stripe live credentials** — client to share live Stripe account login
3. **Corporate code format** — alphanumeric? how many characters? expiry date on codes?
4. **Assessment age cutoffs** — confirm exact boundaries: is it 12–14, 14–17, 18+? What about users under 12?
5. **Program pricing for corporate** — is the per-seat price the same as individual, or negotiated offline?
6. **Reference illustration folder** — client to provide per-page design assets for Blade rebuild

---

## 12. Tech Stack

| Layer | Choice |
|---|---|
| Framework | Laravel 10 |
| Frontend | Blade templates + own CSS (no Elementor/WP) |
| Font | Nunito |
| Colors | Coral `#E8735A`, Gold `#C9A84C`, Green `#4CAF50` |
| Payments | Stripe Cashier (one-time payments) |
| Database | MySQL (native — no wp_* tables in final state) |
| Email | `info@limitlessbrain.com` via configured mail driver |
| Hosting | app.decodemybrain.com (existing Laravel server) |
