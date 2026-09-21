<?php

namespace Tests\Feature;

use App\Mail\PaymentInvoiceMail;
use App\Models\PaymentRecord;
use App\Services\Billing\CheckoutPaymentRecorder;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class PaymentInvoiceTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        config(['database.default' => 'invoice_test', 'database.connections.invoice_test' => [
            'driver' => 'sqlite', 'database' => ':memory:', 'prefix' => '',
        ]]);
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('wp_user_id');
            $table->string('email');
            $table->string('display_name');
        });
        (require database_path('migrations/2026_07_17_000004_create_payment_records_table.php'))->up();
        (require database_path('migrations/2026_09_19_000001_add_invoice_delivery_to_payment_records.php'))->up();
        DB::table('users')->insert(['wp_user_id' => 42, 'email' => 'registered@example.com', 'display_name' => 'Test Member']);
        config(['packages.plans' => ['deep-dive' => ['name' => 'Deep Dive']]]);
        Mail::fake();
    }

    protected function tearDown(): void
    {
        DB::purge('invoice_test');
        parent::tearDown();
    }

    private function checkoutSession(string $status = 'paid'): array
    {
        return [
            'id' => 'cs_invoice_test', 'payment_status' => $status,
            'metadata' => ['wp_user_id' => 42, 'package' => 'deep-dive'],
            'customer_details' => ['email' => 'billing@example.com'],
            'payment_intent' => 'pi_invoice_test', 'currency' => 'usd',
            'amount_subtotal' => 10000, 'amount_total' => 9500,
            'total_details' => ['amount_discount' => 1000, 'amount_tax' => 500],
        ];
    }

    public function test_confirmed_payment_sends_one_invoice_to_registered_email(): void
    {
        $recorder = app(CheckoutPaymentRecorder::class);
        $recorder->recordSuccessfulCheckout($this->checkoutSession());
        $recorder->recordSuccessfulCheckout($this->checkoutSession());
        $this->artisan('billing:send-pending-invoices')->assertSuccessful();

        Mail::assertSent(PaymentInvoiceMail::class, 1);
        Mail::assertSent(PaymentInvoiceMail::class, fn ($mail) => $mail->hasTo('registered@example.com'));
        $payment = PaymentRecord::firstOrFail();
        $this->assertNotNull($payment->invoice_sent_at);
        $mail = new PaymentInvoiceMail($payment);
        $html = $mail->render();
        $this->assertStringContainsString('Deep Dive', $html);
        $this->assertStringContainsString('$95.00', $html);
        $this->assertStringContainsString('pi_invoice_test', $html);
        $this->assertStringContainsString('DMB-00000001', $html);
        $this->assertStringStartsWith('%PDF', $mail->rawAttachments[0]['data']);
    }

    public function test_unpaid_session_waits_for_settlement(): void
    {
        app(CheckoutPaymentRecorder::class)->recordSuccessfulCheckout($this->checkoutSession('unpaid'));
        Mail::assertNothingSent();
        $this->assertNull(PaymentRecord::firstOrFail()->invoice_data);
        app(CheckoutPaymentRecorder::class)->recordSuccessfulCheckout($this->checkoutSession());
        Mail::assertSent(PaymentInvoiceMail::class, 1);
    }

    public function test_delivery_failure_preserves_payment_for_retry(): void
    {
        $mailFake = Mail::getFacadeRoot();
        Mail::shouldReceive('to')->once()->andThrow(new \RuntimeException('Mail unavailable'));
        app(CheckoutPaymentRecorder::class)->recordSuccessfulCheckout($this->checkoutSession());
        $this->assertSame('paid', PaymentRecord::firstOrFail()->status);
        $this->assertNull(PaymentRecord::firstOrFail()->invoice_sent_at);
        Mail::swap($mailFake);
        $this->artisan('billing:send-pending-invoices')->assertSuccessful();
        Mail::assertSent(PaymentInvoiceMail::class, 1);
        $this->assertNotNull(PaymentRecord::firstOrFail()->invoice_sent_at);
    }
}
