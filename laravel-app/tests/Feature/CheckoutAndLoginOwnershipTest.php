<?php

namespace Tests\Feature;

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Stripe\ApiRequestor;
use Stripe\HttpClient\ClientInterface;
use Tests\TestCase;

class CheckoutAndLoginOwnershipTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        config(['database.default' => 'ownership_test', 'database.connections.ownership_test' => [
            'driver' => 'sqlite', 'database' => ':memory:', 'prefix' => '',
        ], 'cashier.secret' => 'sk_test_fake', 'packages.plans' => ['deep-dive' => ['name' => 'Deep Dive']]]);
        foreach (['question_answers_main', 'dimensional_question_answers_main'] as $name) {
            Schema::create($name, function ($t) {
                $t->id();
                $t->integer('user_id')->nullable();
                $t->string('status')->nullable();
                $t->timestamps();
            });
        }
        Schema::create('question_answers', function ($t) {
            $t->id();
            $t->integer('answer_main_id');
            $t->integer('question_no');
        });
        Schema::create('users', function ($t) {
            $t->id();
            $t->integer('wp_user_id');
            $t->string('email');
            $t->string('status');
            $t->string('package')->nullable();
            $t->string('activated_date')->nullable();
            $t->timestamps();
        });
        Schema::create('wp_users', function ($t) {
            $t->id();
            $t->integer('user_id');
            $t->string('package')->nullable();
            $t->timestamps();
        });
        DB::table('users')->insert(['wp_user_id' => 42, 'email' => 'buyer@example.com', 'status' => 'active']);
    }

    protected function tearDown(): void
    {
        ApiRequestor::setHttpClient(new \Stripe\HttpClient\CurlClient());
        DB::purge('ownership_test');
        parent::tearDown();
    }

    private function stripeResponse(int $owner = 42, string $status = 'paid'): void
    {
        $client = \Mockery::mock(ClientInterface::class);
        $client->shouldReceive('request')->once()->andReturn([json_encode([
            'id' => 'cs_test_owned', 'object' => 'checkout.session', 'payment_status' => $status,
            'status' => 'complete', 'subscription' => 'sub_test',
            'metadata' => ['wp_user_id' => (string) $owner, 'package' => 'deep-dive'],
            'customer_details' => ['email' => 'someone-else@example.com'],
        ]), 200, []]);
        ApiRequestor::setHttpClient($client);
    }

    public function test_guest_cannot_login_using_a_checkout_url(): void
    {
        $client = \Mockery::mock(ClientInterface::class);
        $client->shouldNotReceive('request');
        ApiRequestor::setHttpClient($client);
        $this->get('/checkout/success?session_id=cs_test_owned')->assertRedirect('sign-in');
        $this->assertNull(session('user_id'));
    }

    public function test_other_members_checkout_is_rejected_without_changes(): void
    {
        $this->stripeResponse(99);
        $this->withSession(['user_id' => 42])->get('/checkout/success?session_id=cs_test_owned')
            ->assertRedirect('/')->assertSessionHas('fail');
        $this->assertSame(42, session('user_id'));
        $this->assertNull(DB::table('users')->value('package'));
    }

    public function test_legacy_checkout_without_an_owner_cannot_select_account_by_email(): void
    {
        $this->stripeResponse(0);
        $this->withSession(['user_id' => 42])->get('/checkout/success?session_id=cs_test_owned')
            ->assertRedirect('/')->assertSessionHas('fail');
        $this->assertSame(42, session('user_id'));
        $this->assertNull(DB::table('users')->value('package'));
    }

    public function test_missing_checkout_id_never_claims_payment_success(): void
    {
        $this->withSession(['user_id' => 42])->get('/checkout/success')
            ->assertRedirect('/')->assertSessionHas('fail')->assertSessionMissing('success');
    }

    public function test_paid_owner_keeps_registered_identity_and_receives_access(): void
    {
        $this->stripeResponse();
        $this->withSession(['user_id' => 42])->get('/checkout/success?session_id=cs_test_owned')
            ->assertRedirect('/questions/q1')->assertSessionHas('success');
        $this->assertSame(42, session('user_id'));
        $this->assertSame('buyer@example.com', DB::table('users')->value('email'));
        $this->assertSame('deep-dive', DB::table('users')->value('package'));
    }

    public function test_unpaid_complete_subscription_does_not_grant_access(): void
    {
        $this->stripeResponse(42, 'unpaid');
        $this->withSession(['user_id' => 42])->get('/checkout/success?session_id=cs_test_owned')
            ->assertRedirect('/')->assertSessionHas('fail');
        $this->assertNull(DB::table('users')->value('package'));
    }

    /** @dataProvider attemptOwners */
    public function test_login_preserves_answers_and_checks_attempt_ownership(?int $owner, bool $existing, bool $kept): void
    {
        foreach (['question_answers_main', 'dimensional_question_answers_main'] as $table) {
            DB::table($table)->insert(['id' => 1, 'user_id' => $owner]);
            if ($existing) {
                DB::table($table)->insert(['id' => 2, 'user_id' => 42]);
            }
        }
        DB::table('question_answers')->insert(['answer_main_id' => 1, 'question_no' => 10]);
        session(['user_id' => 42, 'answer_main_id' => 1, 'd_answer_main_id' => 1,
            'pending_organization_invite_token' => 'test-only']);
        $request = Request::create('/sign-in', 'POST');
        $request->setLaravelSession(app('session.store'));
        $method = new \ReflectionMethod(UserController::class, 'adoptGuestAnswersAndRedirect');
        $method->setAccessible(true);
        $method->invoke(app(UserController::class), $request);
        foreach (['question_answers_main', 'dimensional_question_answers_main'] as $table) {
            $this->assertSame($kept ? 42 : $owner, DB::table($table)->where('id', 1)->value('user_id'));
        }
        $this->assertSame(1, DB::table('question_answers')->count());
        $this->assertSame($kept ? 1 : null, session('answer_main_id'));
        $this->assertSame($kept ? 1 : null, session('d_answer_main_id'));
    }

    public static function attemptOwners(): array
    {
        return [
            'own unfinished attempt' => [42, false, true],
            'another members attempt' => [99, false, false],
            'guest adopted without generating results' => [null, false, true],
            'guest preserved when member has an attempt' => [null, true, false],
        ];
    }
}
