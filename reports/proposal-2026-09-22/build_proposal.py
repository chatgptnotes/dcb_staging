from pathlib import Path
import re, html
from reportlab.platypus import SimpleDocTemplate, Paragraph, Spacer, Table, TableStyle, PageBreak
from reportlab.lib import colors
from reportlab.lib.styles import getSampleStyleSheet, ParagraphStyle
from reportlab.lib.pagesizes import A4
BASE=Path(__file__).resolve().parent
NAME='Ambufast_DecodeMyBrain_Quote_AF-2026-DMB-03R'
navy=colors.HexColor('#141E30'); red=colors.HexColor('#EF3340'); gray=colors.HexColor('#586579'); pale=colors.HexColor('#F1F4F8')
styles=getSampleStyleSheet()
for name,size,leading,color,font in [('TitleD',31,37,navy,'Helvetica-Bold'),('HeadD',21,27,navy,'Helvetica-Bold'),('SubD',11,16,red,'Helvetica-Bold'),('BodyD',10,15,navy,'Helvetica'),('SmallD',8,12,gray,'Helvetica'),('CellD',9,13,navy,'Helvetica')]:
 styles.add(ParagraphStyle(name=name,fontName=font,fontSize=size,leading=leading,textColor=color,spaceAfter=10))
story=[]; md=[]
def p(t,s='BodyD'):
 story.append(Paragraph(t,styles[s])); md.append(re.sub('<[^>]+>','',t)+'\n')
def h(t): p(t,'HeadD')
def sub(t): p(t,'SubD')
def page(): story.append(PageBreak()); md.append('\n---\n')
def table(headers,rows,widths):
 data=[[Paragraph(html.escape(str(c)).replace('\n','<br/>'),styles['CellD']) for c in row] for row in [headers]+rows]
 t=Table(data,colWidths=widths,repeatRows=1,hAlign='LEFT')
 t.setStyle(TableStyle([('BACKGROUND',(0,0),(-1,0),pale),('LINEBELOW',(0,0),(-1,0),1,red),('VALIGN',(0,0),(-1,-1),'TOP'),('LEFTPADDING',(0,0),(-1,-1),10),('RIGHTPADDING',(0,0),(-1,-1),10),('TOPPADDING',(0,0),(-1,-1),10),('BOTTOMPADDING',(0,0),(-1,-1),10),('LINEBELOW',(0,1),(-1,-1),.4,colors.HexColor('#DEE3EA'))]))
 story.append(t); story.append(Spacer(1,12))
 md.append('| '+' | '.join(headers)+' |\n| '+' | '.join(['---']*len(headers))+' |\n'+'\n'.join('| '+' | '.join(r)+' |' for r in rows)+'\n')
def footer(c,d):
 c.setFillColor(navy); c.setFont('Helvetica-Bold',15); c.drawString(42,806,'Ambu'); c.setFillColor(red); c.drawString(83,806,'Fast')
 c.setFont('Helvetica',8); c.setFillColor(gray); c.drawRightString(553,809,'AF-2026-DMB-03R  /  22 September 2026')
 c.setStrokeColor(red); c.setLineWidth(1.5); c.line(42,794,553,794)
 c.setStrokeColor(colors.HexColor('#DEE3EA')); c.setLineWidth(.5); c.line(42,48,553,48)
 c.setFont('Helvetica',7); c.drawString(42,34,'AMBUFAST TO BETTROI  |  CONFIDENTIAL - INTERNAL VENDOR QUOTATION'); c.drawRightString(553,34,f'{d.page} / 6')
p('REVISED DEVELOPMENT QUOTATION','SubD')
story.append(Spacer(1,16))
p('Decode My Brain<br/>Migrate &amp; Modernise','TitleD')
p('Laravel migration, platform improvements<br/>and completed landing page UI revision.','HeadD')
p('DecodeMyBrain combines public discovery, registration, paid access, activation codes, assessments and reports in one Laravel application. This revised proposal records the development scope and recent refinements delivered for the Bettroi engagement.')
story.append(Spacer(1,18))
table(['TOTAL PROJECT FEE','PAYMENT SCHEDULE'],[['INR 63,750 — one-time','50% now: INR 31,875\n50% at production go-live: INR 31,875']],[255,256])
p('The total includes the completed landing page UI revision, the newly built organisation enquiry and admin payment workflow, and the development improvements described in this proposal.','BodyD')
sub('Document reference')
p('<b>AF-2026-DMB-03R</b> · Issued 22 September 2026<br/>Valid for 60 days from issue · Currency: INR')
table(['PREPARED BY','PREPARED FOR'],[['Dr. B. K. Murali\nDirector\nAmbufast Emergency Services Pvt. Ltd.\ncmd@hopehospital.com','Biji Thomas\nCEO & Principal Consultant\nBettroi FZE · DTEC-51432\nbk@bettroi.com · bettroi.com']],[255,256])
p('Delivery basis: migrated application delivered on staging under the prior proposal; latest revisions implemented in the project. Bettroi UAT and production cutover remain pending.','SmallD')
page(); h('01 / Engagement & delivery scope')
p('The engagement consolidates the public website and commerce workflows into the existing Laravel application, replacing the WordPress/WooCommerce stack. Existing assessment, scoring and report functionality is retained and integrated with the revised public and commercial journeys.')
sub('Public website and administration')
p('Laravel Blade public pages, reusable navigation and footer, program discovery, pricing, science and resource pages, contact/enquiry routes, and a custom Laravel administration module for content and operational management.')
sub('Registration and access')
p('Registration, login, email verification/OTP, password recovery, date-of-birth eligibility, package selection and paid-access checks. Registration improvements cover phone validation, OTP fallback and the choice between purchasing access and using an organisation code.')
sub('Payments and individual purchase flow')
p('Laravel Cashier and Stripe checkout, customer/package payment records, payment-to-assessment entitlement handling, duplicate-payment recording protection, and payment invoice generation, email delivery logic and retry handling.')
sub('New organisation enquiry and admin payment workflow')
p('Newly developed for this engagement: public organisation enquiries, admin review and agreement creation, offline payment recording from the admin panel, seat activation, enterprise access codes, invoices and usage tracking. This end-to-end commercial workflow was added to the platform; see Section 03.')
sub('Existing member platform')
p('Quest, Evolve and Summit assessment journeys, saved progress, completion tracking, personalised results and PDF reports continue within the Laravel member platform. The engagement integrates access to these existing capabilities; it does not represent a new assessment or scoring-engine build.')
sub('Stabilisation and handover')
p('Codebase stabilisation, targeted bug fixes, registration and payment ownership controls, regression checks, migration handover and production cutover support. DNS cutover, SSL configuration and live Stripe configuration remain included, subject to Bettroi approval and provision of the required access.')
page(); h('02 / Completed revisions & improvements')
sub('Landing page UI revision — completed')
p('The public landing page has been revised with a new visual layout, refreshed imagery and typography, updated hero slides, clearer content sections, responsive styling, and revised navigation and footer. The page now presents the platform overview, benefits, program offerings, how it works and resources in a consistent design.')
p('Program cards are connected to the application package catalogue so the public offerings reflect the configured packages. Related science and resource pages, including case studies, sample-report, publication and framework sections, were updated as part of the public-site refresh.')
sub('Registration and plan journey')
p('Updated registration access choices, plan-selection routing, age/package eligibility checks, phone validation and OTP fallback. These changes improve continuity between the public pages, account creation and assessment access.')
sub('Payments, invoices and administration')
p('Improved checkout/account ownership checks, payment recording and entitlement reconciliation. Added individual payment invoices and retry handling; the current project also includes organisation invoice delivery support. Administrative payment and customer views and voucher/organisation controls have been refined.')
sub('Validation recorded on 22 September 2026')
p('The existing local QA report records <b>132 automated tests passed, 561 assertions and zero errors</b> after the pending payment-invoice database migration was applied. The report covers selected registration, access, payment, organisation and administration workflows.')
p('These are local automated regression results. They do not confirm deployment of every latest revision, live Stripe transactions, inbox delivery, full assessment/report accuracy or browser/device acceptance. Those checks remain part of deployment verification and client UAT.','SmallD')
sub('Delivery position')
p('The prior proposal records staging delivery of the migration. The landing page revision and recent refinements are implemented in the project. Confirm the latest build and database updates in the acceptance environment, complete Bettroi UAT and then proceed to the approved production cutover.')
page(); h('03 / New organisation commercial workflow')
p('<b>New functionality developed for this engagement.</b> The organisation enquiry-to-payment-and-access workflow did not exist in the earlier platform. It has been built as an integrated public enquiry and administration flow and is included in the INR 63,750 project fee.')
sub('1. Organisation submits an enquiry')
p('A public organisation enquiry form captures the request and stores it for the admin team. Admins can review enquiries and update their status as new, reviewed, converted or closed.')
sub('2. Admin creates the agreement')
p('From the received enquiry, the admin creates an organisation agreement with contact details, the selected package, number of assessment seats, agreed price and payment notes. The agreement remains linked to its source enquiry, with duplicate agreement creation prevented.')
sub('3. Admin records payment received')
p('The admin can mark payment received when saving a new agreement or record it later from the existing agreement. This records an offline payment received for the agreed amount; it does not process a card charge within the admin panel.')
sub('4. Payment activates access and prepares the invoice')
p('Recording payment marks the agreement paid, allocates the purchased seats and generates/enables the enterprise access code. The paid invoice is prepared and emailed to the organisation contact. Failed invoice delivery preserves the paid status and active access, with retry support available.')
sub('5. Organisation receives and uses its access code')
p('Admins can email or resend the active enterprise code to the enquiry contact. Participants use the shared code to claim assessment access, subject to the configured seat limit and eligibility rules. Invitation-based seat distribution is also supported.')
sub('6. Admin monitors and manages usage')
p('The admin can view claimed seats and users for each agreement, monitor seat usage, export enterprise-code usage, send usage updates and manage code enablement or rotation. The enquiry, agreement, payment and access records stay connected for operational follow-up.')
p('Implementation reviewed in the public enquiry controller, admin agreement/payment controller, organisation code and seat workflow, invoice support and associated feature-test cases. Live delivery and acceptance-environment verification remain subject to UAT.','SmallD')
page(); h('04 / Commercials & payment schedule')
p('Fixed project fee payable by Bettroi to AmbuFast for the development scope described in this revised proposal.')
table(['ITEM','AMOUNT (INR)'],[['Development and migration, completed landing page UI revision, new organisation enquiry and admin payment workflow, platform refinements and production cutover support','63,750'],['TOTAL PROJECT AMOUNT — ONE-TIME','63,750']],[370,141])
p('<b>Amount in words:</b> Indian Rupees Sixty-Three Thousand Seven Hundred and Fifty Only.')
sub('Payment structure')
table(['MILESTONE','SHARE','AMOUNT (INR)'],[['Due now — development / staging milestone','50%','31,875'],['Due at production go-live','50%','31,875'],['TOTAL','100%','63,750']],[300,70,141])
p('Payable in INR. Invoices are payable within 7 business days. The existing two-stage payment structure is retained with the revised project amount.')
sub('Included in the fixed fee')
p('The scope in Sections 01 to 03, including the completed landing page UI revision and newly built organisation enquiry and admin payment workflow, is included in INR 63,750. Production cutover support and the 30-day defect-correction warranty are included.')
sub('Scope changes and ongoing support')
p('Additional features beyond the stated scope require a written change order agreed between AmbuFast and Bettroi. Any ongoing maintenance retainer after go-live will be agreed separately; no maintenance retainer forms part of this project total.')
sub('Release sequence')
p('Latest-build deployment and configuration verification → Bettroi UAT and sign-off → approved production cutover → final payment and handover → 30-day defect-correction period.')
page(); h('05 / Terms & acceptance')
for title,body in [
('Scope & pricing','This engagement follows the scope and payment schedule in this proposal. AmbuFast delivers the agreed build to Bettroi for a total project fee of INR 63,750.'),
('Delivery','The migration was delivered on staging under the prior proposal. Latest revisions require acceptance-environment verification and Bettroi UAT. Production cutover, including DNS, SSL and live Stripe configuration, is included and proceeds on Bettroi approval.'),
('Fixed scope','The included landing page UI revision is complete. Additional features or further revisions beyond the stated scope require a written change order agreed by both parties.'),
('Payment & acceptance','INR 31,875 is due now and INR 31,875 at production go-live. Invoices are payable within 7 business days. Production go-live constitutes acceptance by Bettroi and triggers the final instalment.'),
('Intellectual property','All custom code, models and documentation vest in Bettroi on receipt of final payment. Bettroi passes IP to the end client under its client agreement. AmbuFast retains rights to generic frameworks and methodology.'),
('Data & migration handover','Content, media, user migration, legacy URL redirects and the read-only historical order archive remain within the migration handover scope. Their completeness is to be confirmed at acceptance. Bettroi is responsible for accurate client content and consents.'),
('Warranty','A 30-day defect-correction period runs from production handover to Bettroi for bugs in delivered code. Third-party platform and API changes are excluded.'),
('Confidentiality & relationship','This internal vendor quotation, source code and artefacts are confidential to AmbuFast and Bettroi. Bettroi remains the contracting party with INFINITY BRAIN DWC-LLC / Dr. Sweta Adatia. AmbuFast has no direct contractual relationship with the end client.'),
('Validity','Valid for 60 days from 22 September 2026.')]:
 p(f'<b>{title}.</b> {body}','SmallD')
table(['FOR AMBUFAST','FOR BETTROI FZE'],[['Dr. B. K. Murali\nDirector\nAmbufast Emergency Services Pvt. Ltd.\nCIN: U86909MH2024PTC436731','Biji Thomas\nCEO & Principal Consultant\nBettroi FZE · Trade License DTEC-51432\nA5, Techno-Hub, DTEC, Dubai Silicon Oasis, UAE'],['','Signature & date: __________________']],[255,256])
p('Ambufast Emergency Services Private Limited · 2, Teka Naka, Kamptee Road, Nagpur, MH 440012<br/>+91 93731 11709 · ambufast.in · cmd@hopehospital.com','SmallD')
SimpleDocTemplate(str(BASE/(NAME+'.pdf')),pagesize=A4,rightMargin=42,leftMargin=42,topMargin=65,bottomMargin=62,title='Decode My Brain - Revised Development Proposal',author='Ambufast Emergency Services Pvt. Ltd.').build(story,onFirstPage=footer,onLaterPages=footer)
(BASE/(NAME+'.md')).write_text('\n'.join(md))
print(BASE/(NAME+'.pdf'))
