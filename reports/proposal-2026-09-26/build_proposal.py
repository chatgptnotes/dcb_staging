acfrom pathlib import Path
import re, html
from reportlab.pdfgen import canvas
from reportlab.pdfbase import pdfmetrics
from reportlab.pdfbase.ttfonts import TTFont
from reportlab.lib import colors
from reportlab.lib.styles import ParagraphStyle
from reportlab.platypus import Paragraph, Spacer, Table, TableStyle, Frame, KeepTogether
from reportlab.lib.pagesizes import A4
BASE=Path(__file__).resolve().parent
NAME='Ambufast_DecodeMyBrain_Quote_AF-2026-DMB-03R2'
W,H=A4
for name,file in [('Arial','Arial.ttf'),('Arial-Bold','Arial Bold.ttf')]:
 pdfmetrics.registerFont(TTFont(name,'/System/Library/Fonts/Supplemental/'+file))
pdfmetrics.registerFontFamily('Arial',normal='Arial',bold='Arial-Bold',italic='Arial',boldItalic='Arial-Bold')
NAVY='#141E30'; INK='#1D2537'; RED='#EF3340'; BODY='#43516A'; MUTED='#8E9AAF'; BORDER='#DCE1EA'
styles={}
for name,size,leading,color,font in [('body',9.3,14.6,BODY,'Arial'),('small',8,12,BODY,'Arial'),('title',20,25,INK,'Arial-Bold'),('sub',12.2,17,INK,'Arial-Bold'),('label',8,12,RED,'Arial-Bold'),('cell',9,14,BODY,'Arial')]:
 styles[name]=ParagraphStyle(name,fontName=font,fontSize=size,leading=leading,textColor=colors.HexColor(color),spaceAfter=8)
styles['body'].spaceAfter=6
styles['sub'].spaceBefore=7
pages=[]; current=[]; md=[]
def p(t,s='body'):
 current.append(Paragraph(t,styles[s])); md.append(re.sub('<[^>]+>',' ',html.unescape(t)))
def sub(t):p(t,'sub')
def bullet(t):
 current.append(Paragraph('<font color="'+RED+'">·</font>  '+t,styles['body']));md.append('- '+re.sub('<[^>]+>','',html.unescape(t)))
def bullets(items):
 for t in items:bullet(t)
def page(label,title):
 global current
 current=[];pages.append((label,current));md.extend(['\n---\n','## '+title]);p(label,'label');p(title,'title');current.append(Spacer(1,6))
def callout(title,text):
 t=Table([[Paragraph(title,styles['label'])],[Paragraph(text,styles['body'])]],colWidths=[511])
 t.setStyle(TableStyle([('BACKGROUND',(0,0),(-1,-1),colors.HexColor('#FCF3F5')),('LINEBEFORE',(0,0),(0,-1),2,colors.HexColor(RED)),('LEFTPADDING',(0,0),(-1,-1),15),('RIGHTPADDING',(0,0),(-1,-1),15),('TOPPADDING',(0,0),(-1,0),12),('BOTTOMPADDING',(0,-1),(-1,-1),12)]))
 current.extend([Spacer(1,6),t,Spacer(1,2)]);md.extend([title,text])
def table(headers,rows,widths):
 data=[[Paragraph(html.escape(c).replace('\n','<br/>'),styles['cell']) for c in row] for row in [headers]+rows]
 t=Table(data,colWidths=widths,hAlign='LEFT')
 t.setStyle(TableStyle([('BACKGROUND',(0,0),(-1,0),colors.HexColor('#F5F6F9')),('LINEBELOW',(0,0),(-1,0),1,colors.HexColor(RED)),('LINEBELOW',(0,1),(-1,-1),.5,colors.HexColor(BORDER)),('VALIGN',(0,0),(-1,-1),'TOP'),('LEFTPADDING',(0,0),(-1,-1),12),('RIGHTPADDING',(0,0),(-1,-1),12),('TOPPADDING',(0,0),(-1,-1),9),('BOTTOMPADDING',(0,0),(-1,-1),9)]))
 current.extend([t,Spacer(1,12)]);md.append('\n'.join(' | '.join(r) for r in [headers]+rows))
page('01 - EXECUTIVE SUMMARY · 02 - SCOPE OF WORK','Migrate & Modernise — AmbuFast Scope')
p('DecodeMyBrain combines public discovery, registration, paid access, activation codes, multi-program assessments and reports. This revised quotation covers the new Laravel application, integration with the existing platform, and migration to client-owned Hostinger hosting. The proposed scope also includes the landing page revision, platform refinements and organisation commercial workflow.')
sub('Scope of Work')
sub('WordPress HTML Integration')
bullets(['Integrate the existing WordPress HTML available in the client-shared Drive link as provided, including all images and existing content.','Add provision for three additional sliders.'])
sub('New Laravel Application – Admin Dashboard')
p('Develop a new Laravel application with an Admin Dashboard to manage:')
bullets(['User registration and login; Contact Us submissions.','Individual and bulk registrations; plans; registration data export.'])
sub('Integration with Existing Laravel Application')
bullets(['Integrate the existing Laravel application currently hosted at <b>app.decodemybrain.com</b> with the newly developed Laravel application.','Fix the identified bugs in the existing application.','Develop the required APIs used to pass data for assessment processing and report generation.','Ensure the integrated applications function together as required.'])
sub('Hosting Migration')
bullets(['Migrate the existing application and required data/configuration from the current hosting environment to the client-owned Hostinger hosting.','Update the new logo from Drive in the application where required.'])
page('03 - DELIVERABLES / STAGING','Deliverables — Staging Environment')
p('<b>1. Staging Environment — client-owned Hostinger hosting, after internal QA by the Ambufast Team.</b><br/>The following deliverables will be provided under the proposed scope:')
sub('A. Website / Frontend')
bullets(['Existing WordPress HTML integrated into the new application as provided in the client-shared Drive.','Existing images and static content integrated without unnecessary changes.','Provision for 3 additional sliders.','Pricing section implemented as per the approved requirements.','Registration, Login, and Contact Us interfaces.'])
sub('B. Admin Dashboard')
p('Laravel-based Admin Dashboard with admin management for:')
bullets(['Individual Registration; Bulk Registration; User Login/Registration.','Contact Us enquiries; Plans/Pricing.','Registration data management; export of registration data.'])
sub('C. Existing Laravel Application Integration')
bullets(['Existing Laravel application from app.decodemybrain.com integrated with the new Laravel application.','Identified application bugs fixed.','Required APIs developed and integrated for assessment data transfer, assessment processing and report generation.','End-to-end data flow tested between the applications.'])
sub('D. Stripe Sandbox – Staging')
bullets(['Stripe sandbox registration/payment flow integrated.','Stripe Sandbox/Test Mode integration; test plans/pricing configured.','Successful and failed payment scenarios tested.','Stripe payment status reflected correctly in the application.','Registration triggered/updated based on successful payment.','Webhook integration and testing for relevant Stripe payment events.'])
sub('E. Staging Testing & Handover')
bullets(['Functional testing of registration, login, bulk registration, assessment, report generation, Contact Us and payment flows.','API integration testing and Stripe sandbox testing.','Bug fixing based on staging QA feedback.','Staging build made available for client/UAT review.'])
page('03 - DELIVERABLES / PRODUCTION','Deliverables — Production Environment')
p('<b>2. Production Environment</b><br/>The following deliverables will be provided following staging approval:')
sub('A. Production Deployment')
bullets(['Final approved application deployed to the client-owned Hostinger hosting.','Required database, environment configuration and application settings configured.','Existing application/data migrated as required.','Domain and SSL configuration completed as applicable.'])
sub('B. Production Website & Admin')
bullets(['Approved frontend and HTML implementation deployed.','Three additional sliders enabled/configured.','Production Admin Dashboard deployed.','Registration, Login, Contact Us, Individual Registration, Bulk Registration, Plans and Export functionality enabled.'])
sub('C. Production Laravel Integration')
bullets(['Existing Laravel application fully integrated with the new Laravel application.','Required APIs deployed and configured.','Assessment and report-generation flow validated in production.','Production bugs identified during deployment resolved.'])
sub('D. Stripe Live Mode – Production')
bullets(['Stripe Live Mode integration configured.','Production Stripe account/API credentials configured securely.','Live Plans/Pricing configured.','Stripe live payment flow enabled for production.','Stripe webhooks configured and validated.','Successful, failed and relevant payment-status flows verified.','Payment-to-registration workflow validated in production.'])
sub('E. Production Handover')
bullets(['Final production QA and smoke testing.','Verification of registration → payment → assessment → report-generation flow.','Admin access and required credentials/configuration handover.','Final deployment confirmation and production handover.'])
page('03 - INCLUDED PLATFORM WORK / REVISIONS','Proposed Revisions & Improvements')
sub('Landing page UI revision')
p('The public landing page will be revised with refreshed imagery and typography, updated hero slides, clearer content sections, responsive styling, and revised navigation and footer. The page will present the platform overview, benefits, program offerings, how it works and resources in a consistent design, using the client-provided HTML, images and content.')
p('Program cards will connect to the application package catalogue so the public offerings reflect the configured packages. Related science and resource pages, including case studies, sample-report, publication and framework sections, will be integrated as part of the public-site scope.')
sub('Registration and plan journey')
p('The scope will cover registration access choices, plan-selection routing, age/package eligibility checks, phone validation and OTP fallback. These changes will support continuity between public pages, account creation and assessment access.')
sub('Payments, invoices and administration')
p('The scope will include checkout/account ownership checks, payment recording and entitlement reconciliation, individual payment invoices and retry handling, and organisation invoice delivery support. Administrative payment and customer views and voucher/organisation controls will be refined.')
sub('Planned validation')
p('Ambufast will perform functional and regression checks covering registration, access, payments, organisation workflows and administration. Integration testing will cover the assessment/report journey and the staging Stripe sandbox flow.')
p('Production verification will cover the live Stripe configuration, payment-to-registration workflow, assessment and report-generation flow, and final smoke testing. Client/UAT review will follow staging QA.')
sub('Delivery approach')
p('The application will be prepared for staging on client-owned Hostinger hosting following internal QA. The team will verify the build and database configuration in the acceptance environment, address UAT feedback and proceed to production cutover after Bettroi approval.')
page('03 - INCLUDED PLATFORM WORK / ORGANISATIONS','Proposed Organisation Commercial Workflow')
p('The organisation enquiry-to-payment-and-access workflow will be developed as an integrated public enquiry and administration flow, included in the AED 2,550 / INR 63,750 project fee.')
sub('1. Organisation enquiry')
p('A public organisation enquiry form will capture requests and store them for the admin team. Admins will be able to review enquiries and update their status as new, reviewed, converted or closed.')
sub('2. Admin agreement creation')
p('From an enquiry, the admin will be able to create an organisation agreement with contact details, selected package, number of assessment seats, agreed price and payment notes. The agreement will remain linked to its source enquiry, with duplicate agreement creation prevented.')
sub('3. Payment recording')
p('The admin will be able to mark payment received when saving a new agreement or record it later against an existing agreement. This will record an offline payment received for the agreed amount; it will not process a card charge within the admin panel.')
sub('4. Access activation and invoice')
p('Recording payment will mark the agreement paid, allocate the purchased seats and generate/enable the enterprise access code. The paid invoice will be prepared and emailed to the organisation contact. Failed invoice delivery will preserve the paid status and active access, with retry support available.')
sub('5. Organisation access code')
p('Admins will be able to email or resend the active enterprise code to the enquiry contact. Participants will use the shared code to claim assessment access, subject to the configured seat limit and eligibility rules. Invitation-based seat distribution will also be supported.')
sub('6. Usage management')
p('The admin will be able to view claimed seats and users for each agreement, monitor seat usage, export enterprise-code usage, send usage updates and manage code enablement or rotation. The enquiry, agreement, payment and access records will stay connected for operational follow-up.')
p('The workflow will be verified during staging QA and client UAT, with production configuration and handover included in the proposed delivery scope.','small')
page('04 - COMMERCIALS','Commercials & Payment Schedule')
p('Fixed project fee payable by Bettroi to AmbuFast for the scope and deliverables described in this revised quotation. The amount represents the AmbuFast development share of the Bettroi engagement.')
table(['ITEM','AED','INR (×25)'],[['Development, integration and migration; staging and production deliverables; proposed UI revision and organisation workflow','2,550','63,750'],['TOTAL PROJECT AMOUNT — ONE-TIME','2,550','63,750']],[315,90,106])
p('<b>Amount in words:</b> UAE Dirhams Two Thousand Five Hundred and Fifty Only; Indian Rupees Sixty-Three Thousand Seven Hundred and Fifty Only.','small')
callout('COST SUMMARY','<b>AED 2,550 / INR 63,750 — one-time.</b> Includes the stated development scope, hosting migration, staging QA, production cutover support and 30-day defect-correction warranty. The client provides the Hostinger hosting.')
sub('Payment Structure')
table(['MILESTONE','SHARE','AED','INR'],[['Due now — development / staging milestone','50%','1,275','31,875'],['Due at production go-live','50%','1,275','31,875'],['TOTAL','100%','2,550','63,750']],[235,65,90,121])
p('Payable in AED or INR at the agreed quotation conversion of INR 25 = AED 1. Invoices are payable within 7 business days. The existing two-stage payment structure is retained.')
sub('Scope Changes & Ongoing Support')
p('Additional features beyond the stated scope require a written change order agreed between AmbuFast and Bettroi. Any ongoing maintenance retainer after go-live will be agreed separately; no maintenance retainer forms part of this project total.')
callout('DELIVERY SEQUENCE','Internal Ambufast QA → staging on client-owned Hostinger → Bettroi/client UAT and sign-off → approved production cutover → final payment and handover → 30-day defect-correction period.')
page('05 - TERMS & ACCEPTANCE','Engagement Terms')
terms=[('Scope & Pricing','AmbuFast delivers the agreed scope and deliverables to Bettroi for AED 2,550 / INR 63,750. Hosting migration is included. Client-owned Hostinger hosting will be used.'),('Delivery','The application will be delivered to staging after internal QA. Acceptance-environment verification and Bettroi UAT will be carried out before production deployment. Production cutover, including DNS, SSL and live Stripe configuration, is included and proceeds on Bettroi approval and provision of required access.'),('Fixed Scope','The landing page UI revision is included in the proposed scope. Additional features or further revisions beyond the stated scope require a written change order agreed by both parties.'),('Payment & Acceptance','AED 1,275 / INR 31,875 is due now and AED 1,275 / INR 31,875 at production go-live. Invoices are payable within 7 business days. Production go-live constitutes acceptance by Bettroi and triggers the final instalment.'),('Intellectual Property','All custom code, models and documentation vest in Bettroi on receipt of final payment. Bettroi passes IP to the end client under its client agreement. AmbuFast retains rights to generic frameworks and methodology.'),('Data & Migration Handover','Content, media, user migration, legacy URL redirects and the read-only historical order archive remain within the migration handover scope. Their completeness is to be confirmed at acceptance. Bettroi is responsible for accurate client content and consents.'),('Warranty','A 30-day defect-correction period runs from production handover to Bettroi for bugs in delivered code. Third-party platform and API changes are excluded.'),('Confidentiality & Relationship','This internal vendor quotation, source code and artefacts are confidential to AmbuFast and Bettroi and are not for distribution to the end client. Bettroi remains the contracting party with INFINITY BRAIN DWC-LLC / Dr. Sweta Adatia. AmbuFast has no direct contractual relationship with the end client.'),('Validity','Valid for 60 days from 26 September 2026. This revision, AF-2026-DMB-03R2, supersedes AF-2026-DMB-03 and AF-2026-DMB-03R.')]
for title,body in terms:p('<b>'+title+'.</b> '+body)
current.append(Spacer(1,12))
table(['FOR AMBUFAST','FOR BETTROI FZE'],[['Dr. B. K. Murali\nDirector\nAmbufast Emergency Services Pvt. Ltd.\nCIN: U86909MH2024PTC436731','Biji Thomas\nCEO & Principal Consultant\nBettroi FZE · DTEC-51432\nDubai Silicon Oasis, UAE'],['Signature & date: __________________','Signature & date: __________________']],[255.5,255.5])

def para(c,t,x,y,w,size,leading,color,font='Arial'):
 s=ParagraphStyle('cover',fontName=font,fontSize=size,leading=leading,textColor=colors.HexColor(color))
 q=Paragraph(t,s);_,height=q.wrap(w,1000);q.drawOn(c,x,y-height);return height

def tracked(c,t,x,y,color=RED,size=7):
 c.saveState();c.setFillColor(colors.HexColor(color));o=c.beginText(x,y);o.setFont('Arial-Bold',size);o.setCharSpace(1.65);o.textOut(t);c.drawText(o);c.restoreState()

c=canvas.Canvas(str(BASE/(NAME+'.pdf')),pagesize=A4)
c.setTitle('AmbuFast - Decode My Brain - Revised Proposal - AF-2026-DMB-03R2');c.setAuthor('Ambufast Emergency Services Pvt. Ltd.')
c.setFillColor(colors.HexColor(NAVY));c.rect(0,0,W,H,fill=1,stroke=0)
# Subtle red glow, as in the reference cover.
for radius in range(210,0,-3):
 c.saveState();c.setFillColor(colors.HexColor(RED));c.setFillAlpha(.0018);c.circle(565,615,radius,fill=1,stroke=0);c.restoreState()
para(c,'Ambu<font color="'+RED+'">Fast</font>',45,790,300,28,34,'#FFFFFF','Arial-Bold')
c.setFillColor(colors.HexColor(RED));c.rect(45,744,49,3,fill=1,stroke=0)
tracked(c,'DEVELOPMENT QUOTATION - DECODEMYBRAIN.COM',45,706,MUTED,6.6)
tracked(c,'AMBUFAST TO BETTROI · INTERNAL VENDOR QUOTE',45,690,MUTED,6.6)
para(c,'Decode My Brain -<br/>Migrate &amp;<br/>Modernise',45,663,405,33,38,'#FFFFFF','Arial-Bold')
para(c,'DecodeMyBrain is a neuroscience-assessment ecosystem spanning registration, paid access, activation codes, multi-program assessments, reports and corporate/bulk workflows. This revised quotation covers WordPress HTML integration, a new Laravel Admin Dashboard, integration with the existing Laravel application, and staging and production delivery on client-owned Hostinger hosting.',45,532,300,9,16,'#9EA8B9')
for x,y,w,t in [(45,365,149,'MIGRATE & MODERNISE'),(203,365,100,'AED 2,550'),(312,365,120,'INR 63,750')]:
 c.setStrokeColor(colors.HexColor('#374256'));c.roundRect(x,y,w,25,3,stroke=1,fill=0);tracked(c,t,x+11,y+10,'#DCE1EA',6.5)
# Four-column cover metadata band.
c.setStrokeColor(colors.HexColor('#303A4D'));c.line(0,157,W,157)
cols=[('PREPARED BY','Dr. B. K. Murali','Director<br/>Ambufast Emergency Services<br/>Pvt. Ltd.<br/>cmd@hopehospital.com'),('PREPARED FOR','Biji Thomas','CEO &amp; Principal Consultant<br/>Bettroi FZE, Dubai<br/>bk@bettroi.com'),('REFERENCE','AF-2026-DMB-03R2','26 September 2026<br/>Valid: 60 Days<br/>Currency: AED / INR<br/>Replaces: AF-2026-DMB-03R'),('INVESTMENT','AED 2,550','INR 63,750 · One-time<br/>AED 1,275 / INR 31,875<br/>due now')]
for i,(label,title,body) in enumerate(cols):
 x=i*W/4+18
 if i:c.line(i*W/4,0,i*W/4,157)
 tracked(c,label,x,128,MUTED,6)
 para(c,title,x,114,123,18 if i==3 else 9.3,22 if i==3 else 13,RED if i==3 else '#FFFFFF','Arial-Bold')
 para(c,body,x,82 if i==3 else 93,124,7,12,'#9EA8B9')
c.showPage()
for i,(label,flow) in enumerate(pages,2):
 tracked(c,'AF-2026-DMB-03R2 - Decode My Brain',40,819,BODY,6)
 c.setFillColor(colors.HexColor(MUTED));c.setFont('Arial-Bold',6.2);c.drawRightString(W-40,819,label)
 c.setStrokeColor(colors.HexColor(BORDER));c.line(0,797,W,797)
 fr=Frame(40,77,515,698,leftPadding=0,rightPadding=0,topPadding=0,bottomPadding=0)
 remaining=list(flow);fr.addFromList(remaining,c)
 if remaining:raise RuntimeError(f'Page {i} overflow: {len(remaining)} elements, first {str(remaining[0])[:120]}')
 c.setStrokeColor(colors.HexColor(BORDER));c.line(40,65,W-40,65)
 para(c,'Ambu<font color="'+RED+'">Fast</font>',40,56,110,10,12,INK,'Arial-Bold')
 para(c,'Emergency Services Private Limited',40,39,180,6,9,BODY)
 para(c,'2, Teka Naka, Kamptee Road<br/>Nagpur, MH 440012 · +91 93731 11709',230,56,210,7,11,BODY)
 para(c,'ambufast.in<br/>cmd@hopehospital.com',455,56,100,7,11,BODY)
 c.setFont('Arial',6);c.drawString(40,16,'AMBUFAST TO BETTROI · CONFIDENTIAL - INTERNAL VENDOR QUOTATION');c.drawRightString(W-40,16,f'{i} / {len(pages)+1}')
 c.showPage()
c.save()
(BASE/(NAME+'.md')).write_text('# Decode My Brain — Migrate & Modernise\n\nAF-2026-DMB-03R2 · 26 September 2026\n\nAED 2,550 / INR 63,750.\n\n'+'\n\n'.join(md))
print(BASE/(NAME+'.pdf'))
