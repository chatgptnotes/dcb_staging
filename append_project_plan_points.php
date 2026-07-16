<?php

require __DIR__ . '/laravel-app/vendor/autoload.php';

class ProjectPlanPdf extends FPDF
{
    private array $widths = [];
    private array $aligns = [];

    public function setWidths(array $widths): void
    {
        $this->widths = $widths;
    }

    public function setAligns(array $aligns): void
    {
        $this->aligns = $aligns;
    }

    public function row(array $data, float $lineHeight = 4.3): void
    {
        $nb = 0;
        foreach ($data as $index => $text) {
            $nb = max($nb, $this->nbLines($this->widths[$index], $text));
        }

        $height = $lineHeight * $nb + 2.6;
        $this->checkPageBreak($height);

        foreach ($data as $index => $text) {
            $width = $this->widths[$index];
            $align = $this->aligns[$index] ?? 'L';
            $x = $this->GetX();
            $y = $this->GetY();

            $this->Rect($x, $y, $width, $height);
            $this->SetXY($x + 1.2, $y + 1.3);
            $this->MultiCell($width - 2.4, $lineHeight, $text, 0, $align);
            $this->SetXY($x + $width, $y);
        }

        $this->Ln($height);
    }

    private function checkPageBreak(float $height): void
    {
        if ($this->GetY() + $height > $this->PageBreakTrigger) {
            $this->AddPage($this->CurOrientation);
        }
    }

    private function nbLines(float $width, string $text): int
    {
        $cw = $this->CurrentFont['cw'];
        if ($width == 0) {
            $width = $this->w - $this->rMargin - $this->x;
        }

        $maxWidth = ($width - 2.4) * 1000 / $this->FontSize;
        $text = str_replace("\r", '', $text);
        $nb = strlen($text);
        if ($nb > 0 && $text[$nb - 1] === "\n") {
            $nb--;
        }

        $sep = -1;
        $i = 0;
        $j = 0;
        $lineWidth = 0;
        $lineCount = 1;

        while ($i < $nb) {
            $char = $text[$i];
            if ($char === "\n") {
                $i++;
                $sep = -1;
                $j = $i;
                $lineWidth = 0;
                $lineCount++;
                continue;
            }

            if ($char === ' ') {
                $sep = $i;
            }

            $lineWidth += $cw[$char] ?? 0;
            if ($lineWidth > $maxWidth) {
                if ($sep === -1) {
                    if ($i === $j) {
                        $i++;
                    }
                } else {
                    $i = $sep + 1;
                }

                $sep = -1;
                $j = $i;
                $lineWidth = 0;
                $lineCount++;
            } else {
                $i++;
            }
        }

        return $lineCount;
    }
}

function text(string $value): string
{
    return iconv('UTF-8', 'Windows-1252//TRANSLIT', $value);
}

$output = __DIR__ . '/DecodeMyBrain-Project-Plan-2-updated.pdf';

$pdf = new ProjectPlanPdf('P', 'mm', 'A4');
$pdf->SetMargins(16, 14, 16);
$pdf->SetAutoPageBreak(true, 12);
$pdf->AddPage();
$pdf->SetDrawColor(70, 70, 70);
$pdf->SetLineWidth(0.18);

$pdf->SetFont('Arial', 'B', 18);
$pdf->Cell(0, 8, text('DecodeMyBrain'), 0, 1);

$pdf->SetFont('Arial', 'B', 13);
$pdf->Cell(0, 7, text('Phase 1 Delivery Plan - Native Laravel MVP'), 0, 1);

$pdf->Ln(1);
$pdf->SetFont('Arial', '', 9.7);
$pdf->MultiCell(0, 5.2, text('First deliverable of the decodemybrain.com Laravel rebuild: a working register -> pay -> take-test loop, with basic UI and a read-only admin view of users.'));
$pdf->Cell(0, 5.2, text('Prepared: 17 June 2026'), 0, 1);

$pdf->Ln(3);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 6, text('1. Phase 1 Goal'), 0, 1);

$pdf->SetFont('Arial', '', 9.4);
$pdf->MultiCell(0, 5.1, text('Deliver a focused, working MVP of DecodeMyBrain on native Laravel: a member can register, pay for a plan, and take the brain assessment and get a basic report - wrapped in a basic UI with a public home page - and the team gets a basic admin dashboard to see every user and all their data.'));

$pdf->Ln(2);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 6, text('2. Phase 1 Scope & Work'), 0, 1);

$pdf->Ln(1);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 6, text('3. Pages & Routes in Phase 1'), 0, 1);
$pdf->Ln(1);

$headers = ['#', 'Item', 'What we do'];
$rows = [
    ['1', 'User registration', 'WIRE Confirm & polish signup + login + email OTP + password reset on the native flow.'],
    ['2', 'Payment portal', 'WIRE Stripe Cashier checkout + pricing page wired to the correct one-time prices + webhook. Sells normal plans only - no credit model in Phase 1.'],
    ['3', 'Test assessment', 'CONFIRM Questionnaire flow + scoring + basic PDF report working end-to-end for a paid user.'],
    ['4', 'WordPress logic migration', 'BUILD Migrate the remaining WordPress business logic into native Laravel services, controllers, models, routes, and middleware while preserving the existing behavior.'],
    ['5', 'Landing page (UI)', 'BUILD Polish the landing page UI and connect the public home page to the sign-up, pricing, and checkout entry points.'],
    ['6', 'Stripe payment', 'WIRE Complete Stripe payment logic with Cashier checkout, payment confirmation, webhook handling, and entitlement sync for successful purchases.'],
    ['7', 'Pricing modification / management', 'BUILD Add pricing modification and management so package names, values, and payment-facing pricing can be maintained from the application/admin workflow.'],
    ['8', 'New pricing system', 'BUILD Introduce the new pricing system for the revised package structure and keep it aligned with checkout and Stripe price configuration.'],
    ['9', 'Registration popup before payment', 'BUILD Show the registration popup before payment starts so a user account is captured before checkout and payment entitlement can be tied back to that user.'],
    ['10', 'Basic UI', 'BUILD Shared layout + the flow screens (auth, pricing/checkout, member dashboard shell) plus a public home/landing page at / (hero + product intro + sign-up / pricing CTAs).'],
    ['11', 'Admin dashboard (basic)', 'BUILD Read-only user-360: a list of every user and a detail page showing each user\'s plan, transactions, test reports, and brain scores. Built on the existing admin module.'],
];

$pdf->setWidths([10, 46, 122]);
$pdf->setAligns(['C', 'L', 'L']);

$pdf->SetFont('Arial', 'B', 8.6);
$pdf->SetFillColor(238, 238, 238);
foreach ($headers as $index => $header) {
    $pdf->Cell([10, 46, 122][$index], 6.4, text($header), 1, 0, 'L', true);
}
$pdf->Ln();

$pdf->SetFont('Arial', '', 7.8);
foreach ($rows as $row) {
    $pdf->row(array_map('text', $row), 3.75);
}

$pdf->Ln(3);
$pdf->SetFont('Arial', 'B', 10.5);
$pdf->Cell(0, 5.5, text('Roles'), 0, 1);

$pdf->SetFont('Arial', '', 8.7);
$pdf->MultiCell(0, 4.7, text('Exactly two roles, no others: Admin (full dashboard access - in Phase 1 this is the read-only user-360 view) and User (frontend member: registers, pays, takes the test, views their report - no dashboard access). Builds on the existing AdminAuthenticated middleware.'));

$pdf->Ln(2);
$pdf->setWidths([28, 150]);
$pdf->setAligns(['L', 'L']);
$pdf->SetFont('Arial', '', 8);
$pdf->row([text('Admin'), text('/admin login, /admin/users (list every user), /admin/users/{id} (user-360 detail: plan, transactions, reports, scores).')], 3.9);
$pdf->row([text('Webhook'), text('/stripe/webhook (keeps entitlement in sync with payments).')], 3.9);

$pdf->Output('F', $output);

echo "Created: {$output}\n";
echo "Pages: {$pdf->PageNo()}\n";
