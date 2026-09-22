<?php

namespace Tests\Feature;

use App\Services\Billing\VoucherService;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class RegistrationAccessFlowTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        config(['database.default' => 'access_test', 'database.connections.access_test' => [
            'driver' => 'sqlite', 'database' => ':memory:', 'prefix' => '',
        ], 'app.auth_driver' => 'native', 'app.otp_enabled' => true]);
        Mail::fake();
        foreach ([
            'organization_quotes' => ['shared_code_hash', 'status', 'shared_code_enabled', 'minimum_age', 'maximum_age'],
            'organization_seats' => ['organization_quote_id', 'status'],
            'vouchers' => ['code_hash', 'status', 'package_slug'],
            'pricing_packages' => ['slug', 'minimum_age', 'maximum_age'],
            'users' => ['username', 'email'],
            'wp_users' => ['email'],
            'email_otps' => ['email', 'purpose', 'code_hash', 'attempts', 'expires_at'],
        ] as $name => $columns) {
            Schema::create($name, function ($t) use ($columns) {
                $t->id();
                foreach ($columns as $column) {
                    if (in_array($column, ['minimum_age', 'maximum_age', 'organization_quote_id', 'attempts', 'shared_code_enabled'], true)) {
                        $t->integer($column)->nullable();
                    } else {
                        $t->string($column)->nullable();
                    }
                }
                $t->timestamps();
            });
        }
        DB::table('organization_quotes')->insert([
            'id' => 1, 'shared_code_hash' => hash_hmac('sha256', 'TEENCODE', config('app.key')),
            'status' => 'paid', 'shared_code_enabled' => 1, 'minimum_age' => 16, 'maximum_age' => 17,
        ]);
        DB::table('organization_seats')->insert(['organization_quote_id' => 1, 'status' => 'available']);
        DB::table('pricing_packages')->insert(['slug' => 'adult', 'minimum_age' => 18]);
    }

    protected function tearDown(): void
    {
        DB::purge('access_test');
        parent::tearDown();
    }

    private function payload(int $age): array
    {
        return [
            'first_name' => 'Test', 'last_name' => 'Teen', 'user_name' => 'teen',
            'email' => 'teen@example.test', 'dob' => now()->subYears($age)->subDay()->format('d/m/Y'),
            'country' => 'AE', 'phone' => '512345678',
            'password' => 'Secret#2026', 'password_confirmation' => 'Secret#2026',
            'intended_package' => 'adult', 'purchase_flow' => '1',
        ];
    }

    public function test_organisation_code_replaces_old_purchase_and_voucher_context(): void
    {
        $this->withSession(['intended_package' => 'adult', 'new_purchase_flow' => true,
            'pending_voucher_id' => 4, 'pending_checkout_voucher_id' => 4])
            ->post(route('access.code.begin'), ['code' => 'TEEN-CODE'])
            ->assertRedirect('/sign-up')->assertSessionHas('pending_organization_code')
            ->assertSessionMissing('intended_package')->assertSessionMissing('new_purchase_flow')
            ->assertSessionMissing('pending_voucher_id')->assertSessionMissing('pending_checkout_voucher_id');
        $this->post('/sign-up', $this->payload(16))->assertRedirect('/verify-email-otp')
            ->assertSessionHas('pending_signup')->assertSessionMissing('intended_package')
            ->assertSessionMissing('new_purchase_flow');
    }

    public function test_existing_mixed_session_ignores_old_form_fields(): void
    {
        $this->withSession(['pending_organization_code' => Crypt::encryptString('TEENCODE'),
            'intended_package' => 'adult', 'new_purchase_flow' => true])
            ->post('/sign-up', $this->payload(16))->assertRedirect('/verify-email-otp')
            ->assertSessionMissing('intended_package')->assertSessionMissing('new_purchase_flow');
    }

    public function test_organisation_still_rejects_adults(): void
    {
        $this->withSession(['pending_organization_code' => Crypt::encryptString('TEENCODE')])
            ->post('/sign-up', $this->payload(22))->assertSessionHasErrors([
                'dob' => 'This organisation code is available only to ages 16–17.',
            ])->assertSessionMissing('pending_signup');
    }

    public function test_pay_myself_restores_plan_age_validation(): void
    {
        $this->withSession(['pending_organization_code' => Crypt::encryptString('TEENCODE'),
            'pending_voucher_id' => 4, 'pending_checkout_voucher_id' => 4])
            ->post(route('access.pay'))->assertRedirect(route('public.plans'))
            ->assertSessionMissing('pending_organization_code')->assertSessionMissing('pending_voucher_id')
            ->assertSessionMissing('pending_checkout_voucher_id');
        $this->withSession(['intended_package' => 'adult'])
            ->post('/sign-up', $this->payload(16))->assertSessionHasErrors([
                'dob' => 'This assessment is available only to ages 18+.',
            ]);
    }

    public function test_invalid_code_preserves_existing_flow(): void
    {
        $this->withSession(['intended_package' => 'adult', 'new_purchase_flow' => true])
            ->post(route('access.code.begin'), ['code' => 'invalid'])
            ->assertSessionHas('fail')->assertSessionHas('intended_package', 'adult')
            ->assertSessionHas('new_purchase_flow', true);
    }

    public function test_voucher_replaces_organisation_context(): void
    {
        DB::table('vouchers')->insert(['id' => 1,
            'code_hash' => app(VoucherService::class)->hashCode('VOUCHER'),
            'status' => 'active', 'package_slug' => 'adult']);
        $this->withSession(['pending_organization_code' => Crypt::encryptString('TEENCODE'),
            'pending_checkout_voucher_id' => 8, 'new_purchase_flow' => true])
            ->post(route('access.code.begin'), ['code' => 'VOUCHER'])
            ->assertRedirect('/sign-up')->assertSessionMissing('pending_organization_code')
            ->assertSessionMissing('pending_checkout_voucher_id')->assertSessionMissing('new_purchase_flow')
            ->assertSessionHas('pending_voucher_id', 1)->assertSessionHas('intended_package', 'adult');
    }

    public function test_register_cta_uses_access_choice(): void
    {
        $html = view('public.partials.site-nav')->render();
        $this->assertStringContainsString('href="'.route('access.choice').'">REGISTER</a>', $html);
    }
}
