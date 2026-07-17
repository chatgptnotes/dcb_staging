<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class AdminInsightsPagesTest extends TestCase
{
    private const EMAIL = 'insights-admin@example.local';

    private User $admin;

    protected function setUp(): void
    {
        parent::setUp();
        Config::set('cashier.secret', '');
        User::where('email', self::EMAIL)->delete();
        DB::beginTransaction();

        $this->admin = User::create([
            'email' => self::EMAIL,
            'password' => bcrypt('safe-test-password'),
            'user_role' => '1',
            'status' => 'active',
        ]);
    }

    protected function tearDown(): void
    {
        DB::rollBack();
        User::where('email', self::EMAIL)->delete();
        parent::tearDown();
    }

    public function test_redesigned_admin_pages_are_available_to_admins(): void
    {
        $this->actingAs($this->admin)->get('/admin/dashboard')
            ->assertOk()->assertSee('New corporate inquiries')->assertSee('Recent payments');
        $this->actingAs($this->admin)->get('/admin/users')
            ->assertOk()->assertSee('Search name or email')->assertSee('Export CSV');
        $this->actingAs($this->admin)->get('/admin/payments')
            ->assertOk()->assertSee('Collected this period')->assertSee('TRANSACTION');
    }

    public function test_insight_pages_require_an_admin_session(): void
    {
        $this->get('/admin/users')->assertRedirect('/admin');
        $this->get('/admin/payments')->assertRedirect('/admin');
    }
}
