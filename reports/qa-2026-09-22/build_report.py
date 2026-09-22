from pathlib import Path
import xml.etree.ElementTree as ET
from collections import defaultdict
import re, html, hashlib
from reportlab.platypus import SimpleDocTemplate, Paragraph, Spacer, Table, TableStyle, PageBreak, KeepTogether
from reportlab.lib import colors
from reportlab.lib.styles import getSampleStyleSheet, ParagraphStyle
from reportlab.lib.enums import TA_LEFT
from reportlab.lib.pagesizes import A4
BASE=Path(__file__).resolve().parent
root=ET.parse(BASE/'evidence/regression-fixed.xml').getroot()
cases=list(root.iter('testcase'))
assert len(cases)==132
suites=defaultdict(list)
for t in cases: suites[t.get('class')].append(t)
navy=colors.HexColor('#142D4E'); teal=colors.HexColor('#087E86'); gray=colors.HexColor('#506176'); pale=colors.HexColor('#EEF4F8')
styles=getSampleStyleSheet()
styles.add(ParagraphStyle(name='TitleD',fontName='Helvetica-Bold',fontSize=30,leading=35,textColor=navy,spaceAfter=18))
styles.add(ParagraphStyle(name='HeadD',fontName='Helvetica-Bold',fontSize=17,leading=22,textColor=navy,spaceAfter=12))
styles.add(ParagraphStyle(name='SubD',fontName='Helvetica-Bold',fontSize=11,leading=15,textColor=teal,spaceBefore=10,spaceAfter=6))
styles.add(ParagraphStyle(name='BodyD',fontName='Helvetica',fontSize=9.4,leading=14,textColor=navy,spaceAfter=9))
styles.add(ParagraphStyle(name='CellD',fontName='Helvetica',fontSize=8,leading=11,textColor=navy))
styles.add(ParagraphStyle(name='SmallD',fontName='Helvetica',fontSize=7.7,leading=11,textColor=gray,spaceAfter=7))
story=[]; md=[]
def p(text,style='BodyD'):
 story.append(Paragraph(text,styles[style])); md.append(re.sub('<[^>]+>','',text)+'\n')
def h(text): p(text,'HeadD')
def sub(text): p(text,'SubD')
def page(): story.append(PageBreak()); md.append('\n---\n')
def table(headers,rows,widths):
 data=[[Paragraph(html.escape(str(c)),styles['CellD']) for c in row] for row in [headers]+rows]
 t=Table(data,colWidths=widths,repeatRows=1,hAlign='LEFT')
 t.setStyle(TableStyle([('BACKGROUND',(0,0),(-1,0),pale),('LINEBELOW',(0,0),(-1,0),1,teal),('VALIGN',(0,0),(-1,-1),'TOP'),('LEFTPADDING',(0,0),(-1,-1),7),('RIGHTPADDING',(0,0),(-1,-1),7),('TOPPADDING',(0,0),(-1,-1),6),('BOTTOMPADDING',(0,0),(-1,-1),6),('LINEBELOW',(0,1),(-1,-1),.3,colors.HexColor('#DCE4EC'))]))
 story.append(t); story.append(Spacer(1,10))
 md.append('| '+' | '.join(headers)+' |\n| '+' | '.join(['---']*len(headers))+' |\n'+'\n'.join('| '+' | '.join(map(str,r))+' |' for r in rows)+'\n')
def footer(c,d):
 c.setStrokeColor(teal); c.setLineWidth(1); c.line(42,805,553,805)
 c.setFont('Helvetica-Bold',9); c.setFillColor(navy); c.drawString(42,817,'DecodeMyBrain  /  QUALITY ASSURANCE')
 c.setFont('Helvetica',7); c.setFillColor(gray); c.drawString(42,27,'DMB-QA-2026-09-22  |  v1.1  |  Confidential - Client review'); c.drawRightString(553,27,str(d.page))
p('CLIENT DELIVERY  /  22 SEPTEMBER 2026','SubD')
p('Software Test<br/>Summary Report','TitleD')
p('DecodeMyBrain application','HeadD')
p('<b>Review outcome: PASS - automated regression complete</b>')
p('All 132 automated regression tests passed after the missing invoice database update was applied locally. The previously reported payment-recording issue, DMB-QA-001, is fixed and verified in the local test environment. Account access, registration, assessment continuation, organisation access, payment recording and administrative workflows passed their implemented checks.')
table(['Executed','Passed','Errors','Skipped'],[['132','132','0','0']],[128,128,128,127])
p('100% test pass rate  |  561 assertions  |  6.88 seconds elapsed','SmallD')
sub('Decision for the client')
p('Automated regression validation is complete and DMB-QA-001 is closed for the tested local environment. The report is ready for client review. Complete the agreed deployment-environment acceptance checks before release approval; production deployment and client UAT remain outside this test result.')
sub('Document control')
table(['Field','Value'],[['Report ID / version','DMB-QA-2026-09-22 / 1.1'],['Project / audience','DecodeMyBrain / client stakeholders and delivery team'],['Report and execution date','22 September 2026'],['Build reference','6a648882adde556db28b6d0c87e90f86ebbf023b'],['Validation environment','Local application checkout; MySQL and selected in-memory SQLite fixtures'],['Approval state','Issued for review; client acceptance and release approval pending']],[135,376])
p('This document incorporates the previous QA PDF and a fresh automated test run. It reports observed software behaviour; it does not certify the scientific validity of assessment scores or claim conformance to a formal testing standard.','SmallD')
page(); h('01 / Scope and test approach')
p('Existing unit and application feature tests were executed against the current checkout. Feature tests exercise Laravel routes, controllers, sessions, validation and persistence without a browser. Selected payment, email and ownership tests use fakes or controlled responses; their passing results do not establish live provider delivery.')
table(['Business area','Evidence in this run','Coverage boundary'],[
['Registration and account access','Signup, duplicate handling, phone/date validation, OTP and legacy password compatibility.','Automated application checks; actual inbox delivery not verified.'],
['Plans and public journey','Plan eligibility, catalogue display, access choice and purchase gates.','Server-rendered output and routing; visual/device checks pending.'],
['Payments and invoices','Checkout ownership, entitlement lifecycle, duplicate recording and invoice retry logic.','MySQL recording retest passed; live Stripe payment and webhook delivery not verified.'],
['Assessments and results','Saved progress, continuation and answer ownership.','Full questionnaire, score accuracy and final assessment PDF not tested in this run.'],
['Organisation and vouchers','Seat claims, age rules, code validation, voucher usage and enquiry/agreement flows.','Selected implemented cases; exhaustive rule combinations not measured.'],
['Administration','Access restriction, customer visibility, pricing and commercial controls.','Automated selected pages; full user-360 result accuracy requires UAT.']],[104,214,193])
sub('Execution environment and controls')
p('PHP 8.3.32; Laravel 10.39.0; PHPUnit 10.5.5; configuration: laravel-app/phpunit.xml. The application uses a local MySQL database. Selected test classes build in-memory SQLite schemas. Test fixtures use transaction rollback and/or targeted cleanup as implemented by the existing suite. The existing invoice migration was applied to the local database to add invoice_data and invoice_sent_at. Application code and migration source files were unchanged.')
p('An initial sandbox-restricted attempt could not connect to MySQL. It was superseded by the completed run with local database access; those connection errors are excluded from the final totals. The first connected run found one missing-field error. After applying the pending invoice migration, both the targeted retest and full regression run passed. Final totals refer only to the post-fix full run.')
sub('Historical evidence')
p('The 3 September PDF states that targeted registration and email-verification journeys passed, but supplies no execution count. A separate HTML/Markdown report states 106 tests and 429 assertions passed on that date. These are historical claims, not current results. Current inventory is 132 cases; the difference is not a measured increase in requirements coverage.')
page(); h('02 / Automated execution results')
p('All 132 discovered cases passed: 27 unit cases and 105 feature cases. The post-fix JUnit record contains zero errors, zero assertion failures and zero skipped cases. The targeted payment retest also passed separately and is not added to the full-suite total.')
rows=[]
for cls,ts in suites.items():
 name=re.sub(r'(?<!^)(?=[A-Z])',' ',cls.split('\\')[-1].removesuffix('Test'))
 err=sum(t.find('error') is not None or t.find('failure') is not None for t in ts)
 rows.append([('Unit / ' if '\\Unit\\' in cls else 'Feature / ')+name,len(ts),len(ts)-err,err])
table(['Test group','Run','Pass','Error'],rows,[355,52,52,52])
p('Pass rate = 132 / 132. Counts include one unit scaffold assertion and one application-response smoke test; these are not separate business requirements. No code-coverage percentage was collected. The appendix lists each executed case.','SmallD')
page(); h('03 / Resolved issue and verification')
table(['Field','Finding'],[
['Issue ID / status','DMB-QA-001 / Fixed and verified locally; closed on 22 September 2026'],['Title','Payment-recording test errors on missing invoice database field'],['Priority / severity','Original priority: High / provisional Major. Local payment-recording error resolved. Deployed-environment status remains unverified.'],['Affected test','StripeWebhookEntitlementTest::test_paid_checkout_is_recorded_once_with_customer_and_package'],['Expected result','A confirmed payment is recorded once with the correct registered customer and package; replay does not create a duplicate.'],['Original result',"MySQL rejects the payment-record insert: Unknown column 'invoice_data' in 'field list' (SQLSTATE 42S22)."],['Retest result','Targeted payment check: 1 passed, 2 assertions. Full regression: 132 passed, 561 assertions, zero errors.'],['Confirmed cause','Migration status showed the invoice update as Pending. Applying it successfully added the required invoice fields and resolved the test error.'],['Fix applied','Existing migration 2026_09_19_000001_add_invoice_delivery_to_payment_records applied to the local database.']],[119,392])
sub('Resolution and verification')
p('1. Confirmed the invoice migration was pending in the local database.<br/>2. Applied the existing migration successfully; execution log retained.<br/>3. Reran the affected payment test: PASS (1 test, 2 assertions).<br/>4. Reran the full regression suite: PASS (132 tests, 561 assertions).<br/>5. Updated this report and closed DMB-QA-001 for the verified local environment.')
p('Relevant migration: 2026_09_19_000001_add_invoice_delivery_to_payment_records.php. Schema correction applied and verified on 22 September 2026.','SmallD')
sub('Interpretation')
p('The three isolated invoice tests and the previously failing MySQL payment-recording test now pass. The fixed test confirms payment recording with the registered customer and package without duplication. This closure covers the local test environment; live payment, inbox delivery and deployment checks remain in the client acceptance checklist.')
p('No errors were reported by the post-fix execution. A repository-wide defect inventory, security audit and external issue tracker review were not performed.')
page(); h('04 / Client acceptance and release gates')
p('The following checks remain <b>Not executed</b> in this report. They form a proposed client UAT checklist; retain results and evidence against each ID before approval.')
table(['ID / area','Acceptance criterion','Proposed owner'],[
['UAT-01 / Purchase','Register an eligible user; pay in Stripe test mode; verify the correct account, plan, transaction and assessment access.','QA + client'],
['UAT-02 / Messaging','Receive registration OTP, recovery email and payment invoice in the intended inbox; confirm links and attachment open.','QA'],
['UAT-03 / Assessment','Complete a representative assessment; compare scoring against an approved reference; open and download the final report.','Client + QA'],
['UAT-04 / Organisation','Process an enquiry and agreement, activate a code, claim a seat and verify limits and admin visibility.','Client + QA'],
['UAT-05 / Administration','Reconcile a user’s plan, payment, status, results and scores across the admin screens.','Client'],
['UAT-06 / Browser and mobile','Complete primary flows on agreed desktop/mobile browsers; check layout, keyboard use, error states and navigation.','QA + client'],
['UAT-07 / Recovery','Verify declined/cancelled payment, interrupted assessment, repeated callbacks and invoice retry without duplicate access or charges.','QA'],
['UAT-08 / Deployment','Confirm migrations and configuration; validate signed webhooks, access controls and operational monitoring in the acceptance environment.','Delivery owner']],[106,306,99])
sub('Exit criteria')
p('DMB-QA-001 is closed locally and the clean regression criterion is met with zero skips. Complete the agreed UAT cases with retained evidence. Triage any newly found issues and record accepted residual risks. Obtain named client and delivery-owner approval for the exact deployed build.')
sub('Additional assurance outside this run')
p('Load/performance, penetration testing, comprehensive accessibility compliance, backup/restore and broad cross-device testing were not executed. Agree their required depth before release; no assurance for these areas is implied by the automated pass rate.')
sub('Approval record')
table(['Role','Name / decision / date'],[['QA reviewer','Pending'],['Delivery owner','Pending'],['Client authorised approver','Pending']],[155,356])
page(); h('05 / Evidence and traceability')
table(['Reference','Use in this report'],[
['E01 - Previous QA PDF','DecodeMyBrain-Targeted-QA-Validation-2026-09-03.pdf; historical targeted validation only.'],
['E02 - Previous regression summary','QA_Test_Completion_Report_2026-08-17.html and .md; internal validation date is 3 September 2026 despite filename. Historical 106-test claim.'],
['E03 - Delivery scope','DecodeMyBrain-Project-Plan-2-updated.pdf and DecodeMyBrain-Deliverables-v2.8.pdf; context for register/pay/assess/report and administration scope. Planning statements are not test evidence.'],
['E04 - Current execution','evidence/regression-fixed.xml; authoritative per-case results, assertion counts and errors.'],
['E05 - Runner transcript','evidence/regression-fixed.log; CLI summary: 132 passed, zero errors, 561 assertions, 6.88 seconds.'],
['E06 - Test implementation','laravel-app/tests/Unit and tests/Feature at build 6a648882adde556db28b6d0c87e90f86ebbf023b.'],
['E07 - Schema evidence','evidence/invoice-migration.log confirms successful application. evidence/payment-retest.xml and .log record the targeted pass.']],[170,341])
sub('Reproduction')
p('From laravel-app, run:<br/><font face="Courier" size="8">php artisan test --log-junit=../reports/qa-2026-09-22/evidence/regression-fixed.xml</font>')
p('The results reflect the local database state at execution. A repeat run can differ if application data, configuration or schema changes. Feature cases use synthetic fixture identities and controlled provider responses where implemented.')
sub('Evidence integrity')
for f in ['regression-fixed.xml','regression-fixed.log']:
 digest=hashlib.sha256((BASE/'evidence'/f).read_bytes()).hexdigest()
 p(f+'<br/>SHA-256: '+digest,'SmallD')
p('Raw technical evidence is retained with the project. The client PDF omits machine-specific paths, credentials and raw database payloads. Appendix test IDs below are report-local references mapped to source class and method names.')
sub('Revision history')
table(['Version / date','Change'],[['1.0 / 22 September 2026','Initial report: 131 passed and one local schema error; original evidence retained.'],['1.1 / 22 September 2026','Applied pending invoice migration; targeted and full retests passed. DMB-QA-001 closed locally; 132 passed, 561 assertions.']],[140,371])
# Paginated register of all executed cases.
flat=[]
for i,t in enumerate(cases,1):
 cls=t.get('class').split('\\')[-1]; method=t.get('name'); status='ERROR' if t.find('error') is not None or t.find('failure') is not None else 'PASS'
 flat.append((f'TC-{i:03}',cls,method,status))
for start in range(0,len(flat),20):
 page(); h('Appendix / Executed case register')
 p(f'Cases {start+1}-{min(start+20,len(flat))} of 132. Source identifiers map directly to E04 and E06.','SmallD')
 rows=[]
 for ident,cls,method,status in flat[start:start+20]:
  # Allow long identifiers to wrap at underscore boundaries.
  label=cls+' / '+method
  rows.append([ident,label,status])
 table(['Case ID','Source class / test method (including dataset)','Result'],rows,[51,415,45])
filename=BASE/'DecodeMyBrain-Client-Test-Report-2026-09-22.pdf'
SimpleDocTemplate(str(filename),pagesize=A4,rightMargin=42,leftMargin=42,topMargin=51,bottomMargin=46,title='DecodeMyBrain - Software Test Summary Report',author='DecodeMyBrain Project QA',subject='Client review - automated regression and acceptance readiness').build(story,onFirstPage=footer,onLaterPages=footer)
(BASE/'DecodeMyBrain-Client-Test-Report-2026-09-22.md').write_text('\n'.join(md).replace('\u200b',''))
print(filename)
