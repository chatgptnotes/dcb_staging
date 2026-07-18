<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\PricingPackage;
use App\Models\User;
use App\Models\WPUsers;
use Tests\TestCase;

class PlanAgeEligibilityTest extends TestCase
{
    private const SLUG = 'age-restricted-selection-test';
    private const EMAIL = 'age-restricted-selection@example.local';

    protected function setUp(): void
    {
        parent::setUp();
        $this->cleanup();
        config()->set('packages.driver', 'cashier');
    }

    protected function tearDown(): void
    {
        $this->cleanup();
        parent::tearDown();
    }

    public function test_ineligible_logged_in_user_cannot_select_or_directly_checkout_a_plan(): void
    {
        $package = PricingPackage::create([
            'slug' => self::SLUG,
            'title' => 'Ages 12 to 15',
            'amount' => 20,
            'currency' => 'usd',
            'price_label' => '$20',
            'button_text' => 'Choose now',
            'type' => 'one_time',
            'stripe_price_id' => 'price_age_restricted_test',
            'minimum_age' => 12,
            'maximum_age' => 15,
            'is_visible' => true,
            'sort_order' => 99,
        ]);
        $user = $this->user(now()->subYears(16)->subDay()->toDateString());

        $this->withSession(['user_id' => $user->wp_user_id])
            ->get(route('public.plans.continue', $package->slug))
            ->assertRedirect(route('public.plans'))
            ->assertSessionHas('fail', 'This assessment is available only to ages 12–15.');

        $this->withSession(['user_id' => $user->wp_user_id])
            ->get(route('checkout.start', $package->slug))
            ->assertRedirect(route('public.plans'))
            ->assertSessionHas('fail', 'This assessment is available only to ages 12–15.');
    }

    public function test_eligible_logged_in_user_can_continue_to_checkout(): void
    {
        $package = PricingPackage::create([
            'slug' => self::SLUG,
            'title' => 'Ages 12 to 15',
            'amount' => 20,
            'currency' => 'usd',
            'price_label' => '$20',
            'button_text' => 'Choose now',
            'type' => 'one_time',
            'stripe_price_id' => 'price_age_restricted_test',
            'minimum_age' => 12,
            'maximum_age' => 15,
            'is_visible' => true,
            'sort_order' => 99,
        ]);
        $user = $this->user(now()->subYears(13)->subDay()->toDateString());

        $this->withSession(['user_id' => $user->wp_user_id])
            ->get(route('public.plans.continue', $package->slug))
            ->assertRedirect(route('checkout.start', $package->slug));
    }

    private function user(string $dateOfBirth): User
    {
        $wpUserId = max(9_800_000, (int) User::max('wp_user_id') + 101);
        $user = new User();
        $user->wp_user_id = $wpUserId;
        $user->username = 'age_selection_'.$wpUserId;
        $user->email = self::EMAIL;
        $user->display_name = 'Age Selection';
        $user->date_of_birth = $dateOfBirth;
        $user->password = bcrypt('safe-test-password');
        $user->user_role = '2';
        $user->status = 'active';
        $user->save();
        $mirror = new WPUsers();
        $mirror->user_id = $wpUserId;
        $mirror->email = $user->email;
        $mirror->display_name = $user->display_name;
        $mirror->date_of_birth = $dateOfBirth;
        $mirror->package = 'free';
        $mirror->save();

        return $user;
    }

    private function cleanup(): void
    {
        $ids = User::where('email', self::EMAIL)->pluck('wp_user_id')->all();
        User::where('email', self::EMAIL)->delete();
        if ($ids) {
            WPUsers::whereIn('user_id', $ids)->delete();
        }
        PricingPackage::where('slug', self::SLUG)->delete();
    }
}
