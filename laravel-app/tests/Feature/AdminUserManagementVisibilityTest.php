<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\EntitlementGrant;
use App\Models\User;
use App\Models\WPUsers;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class AdminUserManagementVisibilityTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        DB::beginTransaction();
    }

    protected function tearDown(): void
    {
        DB::rollBack();
        parent::tearDown();
    }

    public function test_admin_sees_registered_voucher_user_on_dashboard_plan_and_status_pages(): void
    {
        $suffix = (string) max(9_200_000, (int) User::max('wp_user_id') + 202);
        $admin = new User();
        $admin->email = 'admin-visibility-'.$suffix.'@example.local';
        $admin->password = bcrypt('safe-test-password');
        $admin->user_role = '1';
        $admin->status = 'active';
        $admin->save();

        $customer = new User();
        $customer->wp_user_id = (int) $suffix;
        $customer->username = 'visibility_'.$suffix;
        $customer->email = 'visibility-'.$suffix.'@example.local';
        $customer->display_name = 'Admin Visible User';
        $customer->password = bcrypt('safe-test-password');
        $customer->user_role = '2';
        $customer->status = 'active';
        $customer->save();

        $mirror = new WPUsers();
        $mirror->user_id = (int) $suffix;
        $mirror->email = $customer->email;
        $mirror->display_name = $customer->display_name;
        $mirror->package = 'decodemybrain-deep-dive';
        $mirror->save();

        EntitlementGrant::create([
            'wp_user_id' => (int) $suffix,
            'package_slug' => 'decodemybrain-deep-dive',
            'source_type' => 'voucher',
            'source_id' => (int) $suffix,
            'is_permanent' => true,
            'starts_at' => now(),
            'status' => 'active',
        ]);

        $this->actingAs($admin);
        $this->get('/admin/dashboard')->assertOk()->assertSee('Admin Visible User')->assertSee('Permanent voucher');
        $this->get('/admin/user-plan')->assertOk()->assertSee('Admin Visible User')->assertSee('Permanent voucher');
        $this->get('/admin/user-status')->assertOk()->assertSee('Admin Visible User');
    }
}
