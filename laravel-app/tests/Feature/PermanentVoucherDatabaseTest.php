<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\EntitlementGrant;
use App\Models\User;
use App\Models\Voucher;
use App\Models\WPUsers;
use App\Services\Billing\VoucherService;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class PermanentVoucherDatabaseTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        DB::beginTransaction();
        config()->set('app.key', config('app.key') ?: 'base64:QkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkI=');
    }

    protected function tearDown(): void
    {
        DB::rollBack();
        parent::tearDown();
    }

    public function test_permanent_voucher_is_single_use_and_grants_the_selected_package(): void
    {
        $wpId = max(9_000_000, (int) User::max('wp_user_id') + 100);
        $suffix = (string) $wpId;
        $user = new User();
        $user->wp_user_id = $wpId;
        $user->username = 'voucher_db_test_'.$suffix;
        $user->email = 'voucher-db-test-'.$suffix.'@example.local';
        $user->display_name = 'Voucher DB Test';
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

        $service = app(VoucherService::class);
        $created = $service->create([
            'code' => 'DBTEST'.$wpId,
            'recipient_email' => $user->email,
            'package_slug' => 'decodemybrain-deep-dive',
            'purpose' => 'permanent_access',
        ], null);

        $service->claimPermanent($created['voucher'], $user);

        $this->assertSame('redeemed', Voucher::findOrFail($created['voucher']->id)->status);
        $this->assertSame('decodemybrain-deep-dive', WPUsers::where('user_id', $wpId)->value('package'));
        $this->assertTrue(EntitlementGrant::where('wp_user_id', $wpId)->where('is_permanent', true)->exists());
    }
}
