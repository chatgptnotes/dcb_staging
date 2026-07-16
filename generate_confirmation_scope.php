<?php

require __DIR__ . '/laravel-app/vendor/autoload.php';

class ConfirmationScopePdf extends FPDF
{
    public function section(string $title): void
    {
        $this->Ln(2);
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 7, pdfText($title), 0, 1);
    }

    public function paragraph(string $text): void
    {
        $this->SetFont('Arial', '', 10);
        $this->MultiCell(0, 5.5, pdfText($text));
        $this->Ln(1);
    }

    public function bullet(string $text): void
    {
        $this->SetFont('Arial', '', 10);
        $this->Cell(5, 5.5, '-', 0, 0);
        $this->MultiCell(0, 5.5, pdfText($text));
    }
}

function pdfText(string $value): string
{
    return iconv('UTF-8', 'Windows-1252//TRANSLIT', $value);
}

$output = __DIR__ . '/confirmationofscopeDCMB.pdf';

$pdf = new ConfirmationScopePdf('P', 'mm', 'A4');
$pdf->SetMargins(18, 16, 18);
$pdf->SetAutoPageBreak(true, 16);
$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 9, pdfText('Confirmation of Scope - DCMB'), 0, 1);
$pdf->Ln(2);

$pdf->section('Proposed User Journey');
$pdf->bullet('User Registration');
$pdf->bullet('Plan Selection');
$pdf->bullet('Payment through Stripe');
$pdf->bullet('Payment Success Confirmation');
$pdf->bullet('User Login');
$pdf->bullet('Access to the existing DecodeMyBrain application');
$pdf->bullet('Completion of the existing assessment workflow');

$pdf->section('Login & User Access');
$pdf->paragraph('Users will authenticate through a new login interface.');
$pdf->paragraph('Authentication will be integrated with the existing Laravel application.');
$pdf->paragraph('Upon successful login, users will be redirected to the current user dashboard and continue using the existing assessment features.');
$pdf->paragraph('A "Contact Us" link will be included in the footer of the login page, directing users to the relevant support/contact information.');

$pdf->section('Administration Portal');
$pdf->paragraph('The admin dashboard will provide the ability to:');
$pdf->bullet('View registered users');
$pdf->bullet('Monitor user status');
$pdf->bullet('View payment history and transaction status');
$pdf->bullet('Track assessment completion and status');
$pdf->bullet('Add, edit, enable, and disable plans');

$pdf->section('Assumptions');
$pdf->bullet('The existing Laravel application and user dashboard will remain unchanged.');
$pdf->bullet('The existing assessment workflow and features will remain unchanged.');
$pdf->bullet('Stripe will be used as the payment gateway.');
$pdf->bullet('The current WordPress layer will be completely removed, and the new functionality will be implemented directly within the Laravel platform.');

$pdf->Ln(4);
$pdf->paragraph('Could you please review the above and confirm whether this accurately reflects your expectations? Once confirmed, we will proceed with the detailed effort, timeline, and cost estimation.');
$pdf->paragraph('Thank you, and I look forward to your feedback.');

$pdf->Output('F', $output);

echo "Created: {$output}\n";
echo "Pages: {$pdf->PageNo()}\n";
