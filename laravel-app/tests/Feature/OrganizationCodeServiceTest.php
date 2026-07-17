<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Organization;
use App\Models\OrganizationEnquiry;
use App\Models\OrganizationQuote;
use App\Models\User;
use App\Models\WPUsers;
use App\Services\Billing\OrganizationCodeService;
use App\Services\Billing\OrganizationSeatService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Tests\TestCase;

class OrganizationCodeServiceTest extends TestCase
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

    /**
     * HTTP requests can commit their nested work on this legacy MySQL test
     * connection, so remove only this class's clearly named throwaway data.
     */
    private function cleanupArtifacts(): void
    {
        Organization::where('contact_email', 'like', 'contact-%@example.local')
            ->orWhere('contact_email', 'like', 'form-contact-%@example.local')
            ->orWhere('contact_email', 'like', 'instant-%@example.local')
            ->get()
            ->each
            ->delete();

        $ids = User::where('email', 'like', 'org-code-%@example.local')
            ->orWhere('email', 'like', 'org-form-%@example.local')
            ->orWhere('email', 'like', 'org-admin-%@example.local')
            ->pluck('wp_user_id')
            ->filter()
            ->all();
        User::where('email', 'like', 'org-code-%@example.local')
            ->orWhere('email', 'like', 'org-form-%@example.local')
            ->orWhere('email', 'like', 'org-admin-%@example.local')
            ->delete();
        if ($ids !== []) {
            WPUsers::whereIn('user_id', $ids)->delete();
        }
    }

    public function test_paid_quote_shared_code_claims_exactly_one_available_seat(): void
    {
        $wpId = max(9_100_000, (int) User::max('wp_user_id') + 101);
        $user = new User();
        $user->wp_user_id = $wpId;
        $user->username = 'org_code_'.$wpId;
        $user->email = 'org-code-'.$wpId.'@example.local';
        $user->display_name = 'Organisation Code Test';
        $user->password = bcrypt('safe-test-password');
        $user->user_role = '2';
        $user->status = 'active';
        $user->save();
        $mirror = new WPUsers();
        $mirror->user_id = $wpId;
        $mirror->email = $user->email;
        $mirror->display_name = $user->display_name;
        $mirror->package = 'free';
        $mirror->save();
        $organization = Organization::create(['name' => 'Test organisation '.$wpId, 'contact_name' => 'Test contact', 'contact_email' => 'contact-'.$wpId.'@example.local', 'status' => 'active']);
        $quote = OrganizationQuote::create([
            'organization_id' => $organization->id, 'quote_number' => 'TEST-ORG-'.$wpId,
            'package_slug' => 'decodemybrain-deep-dive', 'seat_count' => 1,
            'unit_amount_minor' => 2900, 'discount_amount_minor' => 0, 'total_amount_minor' => 2900,
            'billing_type' => 'one_time', 'access_term' => 'permanent', 'status' => 'paid', 'paid_at' => now(),
        ]);
        app(OrganizationSeatService::class)->allocatePaidSeats($quote);
        $code = app(OrganizationCodeService::class)->createOrReplace($quote);

        $seat = app(OrganizationCodeService::class)->claim($code, $user);

        $this->assertSame('claimed', $seat->status);
        $this->assertSame($wpId, (int) $seat->claimed_by_wp_user_id);
        $this->expectException(\RuntimeException::class);
        app(OrganizationCodeService::class)->claim($code, $user);
    }

    public function test_member_code_is_accepted_through_the_actual_user_access_form(): void
    {
        $wpId = max(9_200_000, (int) User::max('wp_user_id') + 101);
        $user = new User();
        $user->wp_user_id = $wpId;
        $user->username = 'org_form_'.$wpId;
        $user->email = 'org-form-'.$wpId.'@example.local';
        $user->display_name = 'Organisation Form Test';
        $user->password = bcrypt('safe-test-password');
        $user->user_role = '2';
        $user->status = 'active';
        $user->save();
        $mirror = new WPUsers();
        $mirror->user_id = $wpId;
        $mirror->email = $user->email;
        $mirror->display_name = $user->display_name;
        $mirror->package = 'free';
        $mirror->save();

        $organization = Organization::create(['name' => 'Form organisation '.$wpId, 'contact_name' => 'Test contact', 'contact_email' => 'form-contact-'.$wpId.'@example.local', 'status' => 'active']);
        $quote = OrganizationQuote::create([
            'organization_id' => $organization->id, 'quote_number' => 'FORM-ORG-'.$wpId,
            'package_slug' => 'decodemybrain-deep-dive', 'seat_count' => 1,
            'unit_amount_minor' => 2900, 'discount_amount_minor' => 0, 'total_amount_minor' => 2900,
            'billing_type' => 'one_time', 'access_term' => 'permanent', 'status' => 'paid', 'paid_at' => now(),
        ]);
        app(OrganizationSeatService::class)->allocatePaidSeats($quote);
        $code = app(OrganizationCodeService::class)->createOrReplace($quote);

        $this->withSession(['user_id' => $wpId, 'intended_package' => 'decodemybrain-deep-dive'])
            ->post(route('access.code'), ['code' => $code])
            ->assertRedirect('/questions/q1');

        $this->assertDatabaseHas('organization_seats', [
            'organization_quote_id' => $quote->id,
            'status' => 'claimed',
            'claimed_by_wp_user_id' => $wpId,
        ]);
    }

    public function test_guest_can_validate_an_organisation_code_before_registration_then_claim_it_after_sign_in(): void
    {
        $wpId = max(9_250_000, (int) User::max('wp_user_id') + 101);
        $user = User::create([
            'username' => 'org_code_guest_'.$wpId,
            'email' => 'org-code-'.$wpId.'@example.local', 'display_name' => 'Guest code test',
            'password' => bcrypt('safe-test-password'), 'user_role' => '2', 'status' => 'active',
        ]);
        $user->wp_user_id = $wpId;
        $user->save();
        $mirror = new WPUsers();
        $mirror->user_id = $wpId;
        $mirror->email = $user->email;
        $mirror->display_name = $user->display_name;
        $mirror->package = 'free';
        $mirror->save();
        $organization = Organization::create(['name' => 'Guest organisation '.$wpId, 'contact_name' => 'Test contact', 'contact_email' => 'contact-'.$wpId.'@example.local', 'status' => 'active']);
        $quote = OrganizationQuote::create([
            'organization_id' => $organization->id, 'quote_number' => 'GUEST-ORG-'.$wpId,
            'package_slug' => 'decodemybrain-deep-dive', 'seat_count' => 1,
            'unit_amount_minor' => 2900, 'discount_amount_minor' => 0, 'total_amount_minor' => 2900,
            'billing_type' => 'one_time', 'access_term' => 'permanent', 'status' => 'paid', 'paid_at' => now(),
        ]);
        app(OrganizationSeatService::class)->allocatePaidSeats($quote);
        $code = app(OrganizationCodeService::class)->createOrReplace($quote);

        $this->post(route('access.code.begin'), ['code' => $code])
            ->assertRedirect('sign-up')
            ->assertSessionHas('pending_organization_code');

        $this->withSession(['user_id' => $wpId, 'pending_organization_code' => Crypt::encryptString($code)])
            ->get(route('access.code.complete'))
            ->assertRedirect('/questions/q1');

        $this->assertDatabaseHas('organization_seats', [
            'organization_quote_id' => $quote->id, 'status' => 'claimed', 'claimed_by_wp_user_id' => $wpId,
        ]);
    }

    public function test_admin_can_disable_and_reenable_the_same_existing_organisation_code(): void
    {
        $suffix = (string) max(9_275_000, (int) User::max('wp_user_id') + 101);
        $organization = Organization::create([
            'name' => 'Toggle organisation '.$suffix,
            'contact_name' => 'Toggle contact',
            'contact_email' => 'contact-'.$suffix.'@example.local',
            'status' => 'active',
        ]);
        $quote = OrganizationQuote::create([
            'organization_id' => $organization->id,
            'quote_number' => 'TOGGLE-ORG-'.$suffix,
            'package_slug' => 'decodemybrain-deep-dive',
            'seat_count' => 1,
            'unit_amount_minor' => 2900,
            'discount_amount_minor' => 0,
            'total_amount_minor' => 2900,
            'billing_type' => 'one_time',
            'access_term' => 'permanent',
            'status' => 'paid',
            'paid_at' => now(),
        ]);
        app(OrganizationSeatService::class)->allocatePaidSeats($quote);
        $codes = app(OrganizationCodeService::class);
        $code = $codes->createOrReplace($quote);
        $encryptedCode = $quote->fresh()->shared_code_encrypted;

        $admin = new User();
        $admin->email = 'org-admin-'.$suffix.'@example.local';
        $admin->password = bcrypt('safe-test-password');
        $admin->user_role = '1';
        $admin->status = 'active';
        $admin->save();

        $this->actingAs($admin)
            ->post('/admin/organization-quotes/'.$quote->id.'/shared-code/status', ['enabled' => '0'])
            ->assertRedirect()
            ->assertSessionHas('success', fn (string $message): bool => str_contains($message, 'disabled'));

        $quote->refresh();
        $this->assertFalse($quote->shared_code_enabled);
        $this->assertSame($encryptedCode, $quote->shared_code_encrypted);
        try {
            $codes->validateAvailability($code);
            $this->fail('A disabled enterprise code must not be valid.');
        } catch (\RuntimeException) {
            $this->addToAssertionCount(1);
        }

        $this->actingAs($admin)
            ->post('/admin/organization-quotes/'.$quote->id.'/shared-code/status', ['enabled' => '1'])
            ->assertRedirect()
            ->assertSessionHas('success', fn (string $message): bool => str_contains($message, 'enabled'));

        $quote->refresh();
        $this->assertTrue($quote->shared_code_enabled);
        $this->assertSame($encryptedCode, $quote->shared_code_encrypted);
        $this->assertSame($quote->id, $codes->validateAvailability($code)->id);
    }

    public function test_admin_creates_an_unpaid_agreement_from_an_enquiry_then_payment_activates_the_shared_code(): void
    {
        $suffix = (string) max(9_300_000, (int) User::max('wp_user_id') + 101);
        $admin = new User();
        $admin->email = 'org-admin-'.$suffix.'@example.local';
        $admin->password = bcrypt('safe-test-password');
        $admin->user_role = '1';
        $admin->status = 'active';
        $admin->save();

        $enquiry = OrganizationEnquiry::create([
            'organization_name' => 'Instant access '.$suffix,
            'group_size' => 2,
            'contact_name' => 'Instant Admin',
            'contact_email' => 'instant-'.$suffix.'@example.local',
            'contact_phone' => '+1 555 0100',
            'status' => 'new',
        ]);

        $this->actingAs($admin)
            ->post('/admin/organization-quotes', [
                'organization_enquiry_id' => $enquiry->id,
                'organization_name' => 'Instant access '.$suffix,
                'contact_name' => 'Instant Admin',
                'contact_email' => 'instant-'.$suffix.'@example.local',
                'contact_phone' => '+1 555 0100',
                'package_slug' => 'decodemybrain-deep-dive',
                'seat_count' => 2,
                'agreed_amount' => '29.00',
            ])
            ->assertSessionHas('success', fn (string $message): bool => str_contains($message, 'Record payment'));

        $quote = OrganizationQuote::where('organization_id', Organization::where('contact_email', 'instant-'.$suffix.'@example.local')->value('id'))->firstOrFail();
        $this->assertSame('draft', $quote->status);
        $this->assertFalse($quote->shared_code_enabled);
        $this->assertSame(0, $quote->seats()->count());
        $this->assertSame($enquiry->id, $quote->organization_enquiry_id);
        $this->assertDatabaseHas('organization_enquiries', ['id' => $enquiry->id, 'status' => 'converted']);

        $this->actingAs($admin)
            ->post('/admin/organization-quotes/'.$quote->id.'/mark-paid')
            ->assertSessionHas('organization_code', fn (string $code): bool => str_starts_with($code, 'DMB-ORG-'));

        $quote->refresh();
        $this->assertSame('paid', $quote->status);
        $this->assertTrue($quote->shared_code_enabled);
        $this->assertSame(2, $quote->seats()->count());

        $this->get('/admin/organization-quotes')
            ->assertOk()
            ->assertSee('Instant access '.$suffix)
            ->assertSee($quote->quote_number);
    }
}
