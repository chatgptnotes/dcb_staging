<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\OrganizationEnquiry;
use App\Models\Organization;
use App\Models\OrganizationQuote;
use App\Mail\OrganizationAccessCodeMail;
use App\Mail\OrganizationCodeUsageMail;
use App\Models\OrganizationSeat;
use App\Models\PricingPackage;
use App\Models\User;
use App\Models\WPUsers;
use App\Services\Billing\OrganizationCodeService;
use App\Services\Billing\OrganizationSeatService;
use App\Services\Billing\StripePriceGateway;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use RuntimeException;
use Tests\TestCase;

class AdminCommercialWorkflowTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->cleanupArtifacts();
        DB::beginTransaction();
    }

    protected function tearDown(): void
    {
        DB::rollBack();
        $this->cleanupArtifacts();
        parent::tearDown();
    }

    public function test_admin_can_change_the_public_price_before_stripe_is_configured(): void
    {
        Config::set('cashier.secret', '');
        $admin = $this->admin('pricing-admin@example.local');
        $package = PricingPackage::create([
            'slug' => 'admin-price-test',
            'title' => 'Before',
            'amount' => 20,
            'currency' => 'usd',
            'price_label' => '$20',
            'type' => 'one_time',
            'is_visible' => true,
            'sort_order' => 0,
        ]);

        $this->actingAs($admin)
            ->post('/admin/edit-pricing-package/'.$package->id, [
                'title' => 'Updated package',
                'amount' => '37.50',
            'currency' => 'usd',
            'button_text' => 'Choose now',
            'minimum_age' => 13,
            'maximum_age' => 15,
            'type' => 'one_time',
                'sort_order' => 0,
                'is_visible' => '1',
            ])
            ->assertRedirect('/admin/pricing-packages')
            ->assertSessionHas('success', fn (string $message): bool => str_contains($message, 'updated locally'));

        $this->assertDatabaseHas('pricing_packages', [
            'id' => $package->id,
            'title' => 'Updated package',
            'amount' => '37.50',
            'price_label' => '$37.50',
            'minimum_age' => 13,
            'maximum_age' => 15,
        ]);

        $this->actingAs($admin)
            ->get('/admin/pricing-packages')
            ->assertOk()
            ->assertSee('Updated package')
            ->assertSee('Ages 13–15');

        $this->get('/plans')->assertOk()->assertSee('Updated package')->assertSee('$37.50')->assertSee('Ages 13–15');
    }

    public function test_public_purchase_cta_uses_the_current_admin_plan_title(): void
    {
        $package = PricingPackage::create([
            'slug' => 'admin-cta-title-test',
            'title' => 'Young',
            'amount' => 20,
            'currency' => 'usd',
            'price_label' => '$20',
            'button_text' => 'Choose Core',
            'cta_mode' => 'purchase',
            'type' => 'one_time',
            'is_visible' => true,
            'sort_order' => 0,
        ]);

        $this->get('/plans')
            ->assertOk()
            ->assertSee('Choose Young')
            ->assertDontSee('Choose Core');
    }

    public function test_admin_price_change_reaches_customers_when_stripe_is_temporarily_unavailable(): void
    {
        Config::set('cashier.secret', 'sk_test_unavailable');
        app()->bind(StripePriceGateway::class, fn () => new class implements StripePriceGateway {
            public function retrievePrice(string $priceId): object { throw new RuntimeException('Network unavailable'); }
            public function retrieveProduct(string $productId): object { throw new RuntimeException('Network unavailable'); }
            public function createProduct(array $params): object { throw new RuntimeException('Network unavailable'); }
            public function updateProduct(string $productId, array $params): object { throw new RuntimeException('Network unavailable'); }
            public function createPrice(array $params): object { throw new RuntimeException('Network unavailable'); }
        });

        $admin = $this->admin('pricing-admin@example.local');
        $package = PricingPackage::create([
            'slug' => 'admin-price-test',
            'title' => 'Before',
            'amount' => 20,
            'currency' => 'usd',
            'price_label' => '$20',
            'type' => 'one_time',
            'is_visible' => true,
            'sort_order' => 0,
        ]);

        $this->actingAs($admin)
            ->post('/admin/edit-pricing-package/'.$package->id, [
                'title' => 'Network-safe package',
                'amount' => '41.00',
                'currency' => 'usd',
                'button_text' => 'Choose now',
                'type' => 'one_time',
                'sort_order' => 0,
                'is_visible' => '1',
            ])
            ->assertRedirect('/admin/pricing-packages')
            ->assertSessionHas('success', fn (string $message): bool => str_contains($message, 'live on customer pages'));

        $this->assertDatabaseHas('pricing_packages', [
            'id' => $package->id,
            'amount' => '41.00',
            'price_label' => '$41',
            'stripe_price_id' => null,
        ]);
        $this->get('/plans')->assertOk()->assertSee('Network-safe package')->assertSee('$41');
    }

    public function test_admin_can_save_an_enquiry_only_plan_while_stripe_is_configured(): void
    {
        Config::set('cashier.secret', 'sk_test_configured');
        $admin = $this->admin('pricing-admin@example.local');
        $package = PricingPackage::create([
            'slug' => 'admin-price-test',
            'title' => 'Before',
            'amount' => 20,
            'currency' => 'usd',
            'price_label' => '$20',
            'type' => 'one_time',
            'stripe_price_id' => 'price_old',
            'is_visible' => true,
            'sort_order' => 0,
        ]);

        $this->actingAs($admin)
            ->post('/admin/edit-pricing-package/'.$package->id, [
                'title' => 'Organisation assessment',
                'amount' => '0',
                'currency' => 'usd',
                'button_text' => 'Request a quote',
                'cta_mode' => 'enquiry',
                'type' => 'one_time',
                'sort_order' => 0,
                'is_visible' => '1',
            ])
            ->assertRedirect('/admin/pricing-packages')
            ->assertSessionHas('success', 'Pricing package updated.');

        $this->assertDatabaseHas('pricing_packages', [
            'id' => $package->id,
            'title' => 'Organisation assessment',
            'cta_mode' => 'enquiry',
            'stripe_price_id' => null,
        ]);
    }

    public function test_public_organisation_enquiry_is_stored_and_visible_to_admin(): void
    {
        $email = 'enquiry-workflow@example.local';

        $this->post('/organizations/enquiry', [
            'organization_name' => 'Northstar School',
            'group_size' => 84,
            'contact_name' => 'Riya Shah',
            'contact_phone' => '+91 90000 00000',
            'contact_email' => $email,
            'message' => 'Please send a group assessment proposal.',
        ])->assertRedirect(route('organization.enquiry.create'));

        $this->assertDatabaseHas('organization_enquiries', [
            'organization_name' => 'Northstar School',
            'contact_email' => $email,
            'status' => 'new',
        ]);

        $this->actingAs($this->admin('enquiry-admin@example.local'))
            ->get('/admin/organization-enquiries')
            ->assertOk()
            ->assertSee('Northstar School')
            ->assertSee('Riya Shah')
            ->assertSee($email);
    }

    public function test_admin_starts_a_business_agreement_from_the_received_enquiry_only_once(): void
    {
        $enquiry = OrganizationEnquiry::create([
            'organization_name' => 'Enquiry First School',
            'group_size' => 51,
            'contact_name' => 'Agreement Contact',
            'contact_email' => 'enquiry-deal@example.local',
            'status' => 'new',
        ]);
        $admin = $this->admin('enquiry-deal-admin@example.local');

        $this->actingAs($admin)
            ->get('/admin/organization-enquiries/'.$enquiry->id.'/create-deal')
            ->assertOk()
            ->assertSee('New business agreement')
            ->assertSee('Payment received')
            ->assertSee('Enquiry First School')
            ->assertSee('value="51"', false);

        $this->actingAs($admin)
            ->get('/admin/organization-quotes/create')
            ->assertRedirect('/admin/organization-enquiries');
    }

    public function test_admin_can_email_and_resend_an_active_organisation_code_to_the_enquiry_contact(): void
    {
        Mail::fake();
        $enquiry = OrganizationEnquiry::create([
            'organization_name' => 'Email Code School',
            'group_size' => 8,
            'contact_name' => 'Email Contact',
            'contact_email' => 'organisation-code@example.local',
            'status' => 'converted',
        ]);
        $organization = Organization::create([
            'name' => 'Email Code School',
            'contact_name' => 'Email Contact',
            'contact_email' => $enquiry->contact_email,
        ]);
        $code = 'ORG-EMAIL-2026';
        $quote = OrganizationQuote::create([
            'organization_id' => $organization->id,
            'organization_enquiry_id' => $enquiry->id,
            'quote_number' => 'TEST-EMAIL-CODE',
            'package_slug' => 'core',
            'seat_count' => 8,
            'unit_amount_minor' => 1000,
            'total_amount_minor' => 8000,
            'status' => 'paid',
            'shared_code_hash' => hash('sha256', $code),
            'shared_code_encrypted' => Crypt::encryptString($code),
            'shared_code_hint' => 'ORG-EM…2026',
            'shared_code_enabled' => true,
        ]);
        $admin = $this->admin('organization-email-admin@example.local');
        app(OrganizationSeatService::class)->allocatePaidSeats($quote);
        OrganizationSeat::where('organization_quote_id', $quote->id)
            ->orderBy('id')
            ->limit(3)
            ->update(['status' => 'claimed', 'claimed_at' => now()]);

        $this->actingAs($admin)
            ->post('/admin/organization-quotes/'.$quote->id.'/shared-code/send-email')
            ->assertRedirect()
            ->assertSessionHas('success');

        Mail::assertSent(OrganizationAccessCodeMail::class, function (OrganizationAccessCodeMail $mail) use ($code, $enquiry): bool {
            return $mail->hasTo($enquiry->contact_email) && $mail->code === $code;
        });

        $this->actingAs($admin)
            ->post('/admin/organization-quotes/'.$quote->id.'/shared-code/send-email')
            ->assertRedirect()
            ->assertSessionHas('success');

        Mail::assertSent(OrganizationAccessCodeMail::class, 2);

        $this->actingAs($admin)
            ->post('/admin/organization-quotes/'.$quote->id.'/shared-code/send-usage-update')
            ->assertRedirect()
            ->assertSessionHas('success');

        Mail::assertSent(OrganizationCodeUsageMail::class, function (OrganizationCodeUsageMail $mail) use ($code, $enquiry): bool {
            return $mail->hasTo($enquiry->contact_email)
                && $mail->issuedSeats === 8
                && $mail->claimedSeats === 3
                && str_contains($mail->render(), '3 of 8')
                && ! str_contains($mail->render(), $code);
        });
    }

    public function test_agreement_shows_only_its_claimed_enterprise_code_users(): void
    {
        $admin = $this->admin('agreement-claims-admin@example.local');
        $wpUserId = max(9_700_000, (int) User::max('wp_user_id') + 101);
        $claimant = new User();
        $claimant->wp_user_id = $wpUserId;
        $claimant->username = 'agreement_claimant_'.$wpUserId;
        $claimant->display_name = 'Claimed Member';
        $claimant->email = 'agreement-claimant@example.local';
        $claimant->password = bcrypt('safe-test-password');
        $claimant->user_role = '2';
        $claimant->status = 'active';
        $claimant->save();
        $wpUser = new WPUsers();
        $wpUser->user_id = $wpUserId;
        $wpUser->display_name = $claimant->display_name;
        $wpUser->email = $claimant->email;
        $wpUser->package = 'free';
        $wpUser->save();

        $organization = Organization::create([
            'name' => 'Claims School',
            'contact_name' => 'Claims Contact',
            'contact_email' => 'agreement-claims@example.local',
        ]);
        $quote = OrganizationQuote::create([
            'organization_id' => $organization->id,
            'quote_number' => 'TEST-AGREEMENT-CLAIMS',
            'package_slug' => 'decodemybrain-deep-dive',
            'seat_count' => 2,
            'unit_amount_minor' => 1000,
            'total_amount_minor' => 2000,
            'status' => 'paid',
        ]);
        OrganizationSeat::create([
            'organization_quote_id' => $quote->id,
            'package_slug' => $quote->package_slug,
            'access_term' => 'permanent',
            'status' => 'claimed',
            'claimed_by_wp_user_id' => $wpUserId,
            'claimed_at' => now()->subHour(),
        ]);
        OrganizationSeat::create([
            'organization_quote_id' => $quote->id,
            'package_slug' => $quote->package_slug,
            'access_term' => 'permanent',
            'status' => 'available',
        ]);

        $this->actingAs($admin)
            ->get('/admin/organization-quotes/'.$quote->id)
            ->assertOk()
            ->assertSee('Claimed assessments')
            ->assertSee('1 of 2 assessments claimed')
            ->assertSee('Claimed Member')
            ->assertSee('agreement-claimant@example.local')
            ->assertSee('Not started');
    }

    public function test_payment_toggle_on_a_new_deal_activates_seats_and_the_enterprise_code_after_save(): void
    {
        $enquiry = OrganizationEnquiry::create([
            'organization_name' => 'Toggle School',
            'group_size' => 3,
            'contact_name' => 'Toggle Contact',
            'contact_email' => 'toggle-school@example.local',
            'status' => 'new',
        ]);
        $admin = $this->admin('toggle-payment-admin@example.local');

        $this->actingAs($admin)->post('/admin/organization-quotes', [
            'organization_enquiry_id' => $enquiry->id,
            'organization_name' => $enquiry->organization_name,
            'contact_name' => $enquiry->contact_name,
            'contact_email' => $enquiry->contact_email,
            'package_slug' => 'decodemybrain-deep-dive',
            'seat_count' => 3,
            'agreed_amount' => '29.00',
            'internal_notes' => 'Payment confirmed by finance.',
            'payment_received' => '1',
        ])->assertRedirect('/admin/enterprise-codes')->assertSessionHas('organization_code');

        $quote = OrganizationQuote::where('organization_enquiry_id', $enquiry->id)->firstOrFail();
        $this->assertSame('paid', $quote->status);
        $this->assertSame(2900, $quote->total_amount_minor);
        $this->assertSame(0, $quote->discount_amount_minor);
        $this->assertSame('one_time', $quote->billing_type);
        $this->assertSame('permanent', $quote->access_term);
        $this->assertNull($quote->access_ends_at);
        $this->assertNull($quote->expires_at);
        $this->assertTrue($quote->shared_code_enabled);
        $this->assertSame(3, $quote->seats()->count());

        $this->actingAs($admin)->get('/admin/enterprise-codes')
            ->assertOk()->assertSee('Toggle School')->assertSee('Export usage');

        $this->actingAs($admin)
            ->post('/admin/organization-quotes/'.$quote->id.'/shared-code/reveal')
            ->assertRedirect()
            ->assertSessionHas('organization_code')
            ->assertSessionHas('organization_name', 'Toggle School');
    }

    public function test_admin_can_rotate_an_enterprise_code_without_changing_seat_usage(): void
    {
        $organization = Organization::create([
            'name' => 'Rotation School',
            'contact_name' => 'Rotation Contact',
            'contact_email' => 'rotation-school@example.local',
        ]);
        $quote = OrganizationQuote::create([
            'organization_id' => $organization->id,
            'quote_number' => 'TEST-CODE-ROTATION',
            'package_slug' => 'decodemybrain-deep-dive',
            'seat_count' => 2,
            'unit_amount_minor' => 2900,
            'total_amount_minor' => 5800,
            'status' => 'paid',
            'paid_at' => now(),
        ]);
        $quote->seats()->createMany([
            ['package_slug' => $quote->package_slug, 'access_term' => 'permanent', 'status' => 'claimed'],
            ['package_slug' => $quote->package_slug, 'access_term' => 'permanent', 'status' => 'available'],
        ]);

        $codes = app(OrganizationCodeService::class);
        $oldCode = $codes->createOrReplace($quote);
        $oldHash = $quote->fresh()->shared_code_hash;

        $this->actingAs($this->admin('code-rotation-admin@example.local'))
            ->post('/admin/organization-quotes/'.$quote->id.'/shared-code/rotate')
            ->assertRedirect()
            ->assertSessionHas('success', fn (string $message): bool => str_contains($message, 'previous code is no longer valid'))
            ->assertSessionHas('organization_code', fn (string $code): bool => $code !== $oldCode);

        $quote->refresh();
        $newCode = Crypt::decryptString($quote->shared_code_encrypted);
        $this->assertNotSame($oldHash, $quote->shared_code_hash);
        $this->assertNotSame($oldCode, $newCode);
        $this->assertSame(1, $quote->seats()->where('status', 'claimed')->count());
        $this->assertSame(1, $quote->seats()->where('status', 'available')->count());

        try {
            $codes->validateAvailability($oldCode);
            $this->fail('The old enterprise code should be invalid after rotation.');
        } catch (RuntimeException) {
            // Expected: the code hash was replaced.
        }

        $this->assertSame($quote->id, $codes->validateAvailability($newCode)->id);
    }

    public function test_agreements_list_shows_claimed_seat_usage_and_the_requested_sidebar_order(): void
    {
        $organization = Organization::create([
            'name' => 'Seat Usage School',
            'contact_name' => 'Seat Contact',
            'contact_email' => 'seat-usage@example.local',
        ]);
        $quote = OrganizationQuote::create([
            'organization_id' => $organization->id,
            'quote_number' => 'TEST-SEAT-USAGE',
            'package_slug' => 'core',
            'seat_count' => 5,
            'unit_amount_minor' => 1000,
            'total_amount_minor' => 5000,
            'status' => 'paid',
        ]);
        $quote->seats()->createMany([
            ['package_slug' => 'core', 'access_term' => 'permanent', 'status' => 'claimed'],
            ['package_slug' => 'core', 'access_term' => 'permanent', 'status' => 'claimed'],
            ['package_slug' => 'core', 'access_term' => 'permanent', 'status' => 'available'],
            ['package_slug' => 'core', 'access_term' => 'permanent', 'status' => 'invited'],
            ['package_slug' => 'core', 'access_term' => 'permanent', 'status' => 'revoked'],
        ]);

        $response = $this->actingAs($this->admin('seat-usage-admin@example.local'))
            ->get('/admin/organization-quotes')
            ->assertOk()
            ->assertSee('Seats used')
            ->assertSee('2 / 5')
            ->assertDontSee('>Access Codes<', false);

        $content = $response->getContent();
        $this->assertTrue(strpos($content, '>Inquiries<') < strpos($content, '>Agreements<'));
        $this->assertTrue(strpos($content, '>Agreements<') < strpos($content, '>Enterprise codes<'));
    }

    private function admin(string $email): User
    {
        $admin = new User();
        $admin->email = $email;
        $admin->password = bcrypt('safe-test-password');
        $admin->user_role = '1';
        $admin->status = 'active';
        $admin->save();

        return $admin;
    }

    private function cleanupArtifacts(): void
    {
        OrganizationEnquiry::where('contact_email', 'enquiry-workflow@example.local')->delete();
        OrganizationEnquiry::where('contact_email', 'enquiry-deal@example.local')->delete();
        PricingPackage::where('slug', 'admin-price-test')->delete();
        User::whereIn('email', [
            'pricing-admin@example.local',
            'enquiry-admin@example.local',
            'enquiry-deal-admin@example.local',
            'seat-usage-admin@example.local',
            'organization-email-admin@example.local',
            'toggle-payment-admin@example.local',
            'code-rotation-admin@example.local',
            'agreement-claims-admin@example.local',
            'agreement-claimant@example.local',
        ])->delete();
    }
}
