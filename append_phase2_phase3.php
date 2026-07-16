<?php

require __DIR__ . '/laravel-app/vendor/autoload.php';

use setasign\Fpdi\Fpdi;

class PhaseAppendPdf extends Fpdi
{
    public function sectionTitle(string $title): void
    {
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(0, 8, pdfText($title), 0, 1);
    }

    public function item(string $title, string $description): void
    {
        $this->SetFont('Arial', 'B', 10);
        $this->Cell(0, 5.5, pdfText($title), 0, 1);
        $this->SetFont('Arial', '', 9);
        $this->MultiCell(0, 4.8, pdfText($description));
        $this->Ln(1.4);
    }

    public function tableRow(array $cells, array $widths, bool $header = false): void
    {
        $this->SetFont('Arial', $header ? 'B' : '', $header ? 8.8 : 8.4);
        $this->SetFillColor($header ? 238 : 255, $header ? 238 : 255, $header ? 238 : 255);

        $lineHeight = 4.2;
        $maxLines = 1;
        foreach ($cells as $index => $cell) {
            $maxLines = max($maxLines, $this->lineCount($widths[$index] - 3, pdfText($cell)));
        }

        $height = max(7, $maxLines * $lineHeight + 2.6);
        foreach ($cells as $index => $cell) {
            $x = $this->GetX();
            $y = $this->GetY();
            $this->Rect($x, $y, $widths[$index], $height);
            $this->SetXY($x + 1.5, $y + 1.3);
            $this->MultiCell($widths[$index] - 3, $lineHeight, pdfText($cell), 0, 'L');
            $this->SetXY($x + $widths[$index], $y);
        }
        $this->Ln($height);
    }

    private function lineCount(float $width, string $text): int
    {
        $words = preg_split('/\s+/', trim($text));
        $line = '';
        $count = 1;

        foreach ($words as $word) {
            $candidate = $line === '' ? $word : $line . ' ' . $word;
            if ($this->GetStringWidth($candidate) <= $width) {
                $line = $candidate;
                continue;
            }

            $count++;
            $line = $word;
        }

        return $count;
    }
}

function pdfText(string $value): string
{
    return iconv('UTF-8', 'Windows-1252//TRANSLIT', $value);
}

$input = __DIR__ . '/DecodeMyBrain-Project-Plan-2-updated.pdf';
$temp = __DIR__ . '/DecodeMyBrain-Project-Plan-2-updated.tmp.pdf';

$pdf = new PhaseAppendPdf();
$pageCount = $pdf->setSourceFile($input);

for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
    $template = $pdf->importPage($pageNo);
    $size = $pdf->getTemplateSize($template);
    $orientation = $size['width'] > $size['height'] ? 'L' : 'P';

    $pdf->AddPage($orientation, [$size['width'], $size['height']]);
    $pdf->useTemplate($template, 0, 0, $size['width'], $size['height']);
}

$pdf->AddPage('P', 'A4');
$pdf->SetMargins(16, 14, 16);
$pdf->SetAutoPageBreak(true, 14);
$pdf->SetDrawColor(70, 70, 70);
$pdf->SetLineWidth(0.18);

$pdf->SetFont('Arial', 'B', 18);
$pdf->Cell(0, 8, pdfText('DecodeMyBrain'), 0, 1);

$pdf->SetFont('Arial', 'B', 13);
$pdf->Cell(0, 7, pdfText('Phase 2 & Phase 3 Delivery Scope'), 0, 1);

$pdf->SetFont('Arial', '', 9.4);
$pdf->MultiCell(0, 5, pdfText('This appendix extends the Phase 1 Laravel MVP plan with the next delivery scope for administration controls, user visibility, landing UI improvement, and future client-requested changes.'));
$pdf->Ln(4);

$pdf->sectionTitle('4. Phase 2 - Extended Admin & Commercial Controls');

$pdf->item(
    'Voucher management control system from admin panel',
    'Build an admin-controlled voucher management system where the team can create, edit, enable, disable, and review voucher codes. The system should support discount rules, validity dates, usage limits, assigned plans or packages, and usage tracking so voucher activity can be managed without developer changes.'
);

$pdf->item(
    'User 360 view in admin panel',
    'Expand the admin user-360 screen into a complete operational view of each customer. Admin users should be able to open a user profile and quickly review commercial status, test progress, payment history, and brain assessment outputs from one place.'
);

$pdf->tableRow(['User 360 Area', 'Details to show in admin'], [48, 130], true);
$pdf->tableRow(['User plan', 'Current selected plan/package, plan start date, entitlement status, renewal or expiry information where applicable.'], [48, 130]);
$pdf->tableRow(['User transaction', 'Stripe payment records, transaction amount, payment status, payment date, invoice/reference details, and failed or pending payment visibility.'], [48, 130]);
$pdf->tableRow(['User status', 'Account status, registration state, email verification/OTP state, payment access state, and whether the user is active, blocked, pending, or completed.'], [48, 130]);
$pdf->tableRow(['User results', 'Completed test reports, generated PDF/report access, assessment completion date, and available result history for review.'], [48, 130]);
$pdf->tableRow(['Brain scores', 'Brain assessment score breakdowns, key score values, result categories, and score data needed by the admin team for support and review.'], [48, 130]);
$pdf->Ln(3);

$pdf->item(
    'Attractive landing UI',
    'Improve the public landing page into a more polished and conversion-focused UI. The page should present the DecodeMyBrain offer clearly, highlight the assessment journey, guide users toward registration and pricing, and keep the design responsive for desktop and mobile visitors.'
);

$pdf->sectionTitle('5. Phase 3 - Additional Client Requirements');

$pdf->SetFont('Arial', '', 9.4);
$pdf->MultiCell(0, 5, pdfText('In Phase 3, additional client requirements will be reviewed, prioritized, and fulfilled after Phase 2 delivery. This phase is reserved for extra enhancements, workflow changes, reporting needs, integrations, or refinements requested by the client once the core Laravel MVP and admin control systems are in place.'));

$pdf->SetY(-13);
$pdf->SetFont('Arial', '', 7.5);
$pdf->Cell(0, 4, pdfText('DecodeMyBrain - Phase 2 & Phase 3 Scope Appendix - Internal planning document.'), 0, 0, 'C');

$pdf->Output('F', $temp);

if (!rename($temp, $input)) {
    @unlink($temp);
    throw new RuntimeException('Could not replace the updated PDF.');
}

$verification = new Fpdi();
$updatedPageCount = $verification->setSourceFile($input);

echo "Updated: {$input}\n";
echo "Previous pages: {$pageCount}\n";
echo "Updated pages: {$updatedPageCount}\n";
