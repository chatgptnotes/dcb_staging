<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class PublicPlanSelectionTest extends TestCase
{
    public function test_signed_in_customer_selecting_a_plan_reaches_checkout(): void
    {
        $wpUserId = max(9_910_000, (int) User::max('wp_user_id') + 101);
        $email = 'public-plan-selection-'.$wpUserId.'@example.local';

        try {
            $user = new User();
            $user->wp_user_id = $wpUserId;
            $user->username = 'public_plan_'.$wpUserId;
            $user->email = $email;
            $user->display_name = 'Public Plan Selection';
            $user->date_of_birth = now()->subYears(13)->subDay()->toDateString();
            $user->password = bcrypt('safe-test-password');
            $user->user_role = '2';
            $user->status = 'active';
            $user->save();

            $this->withSession(['user_id' => $wpUserId])
                ->get(route('public.plans.continue', 'decodemybrain-deep-dive'))
                ->assertRedirect(route('checkout.start', 'decodemybrain-deep-dive'))
                ->assertSessionHas('intended_package', 'decodemybrain-deep-dive');
        } finally {
            User::where('email', $email)->delete();
        }
    }

    public function test_guest_cannot_use_the_signed_in_plan_continuation_route(): void
    {
        $this->get(route('public.plans.continue', 'decodemybrain-deep-dive'))
            ->assertRedirect('sign-in');
    }

    public function test_invalid_or_free_plan_cannot_enter_the_purchase_flow(): void
    {
        $this->withSession(['user_id' => 990555])
            ->get(route('public.plans.continue', 'free'))
            ->assertRedirect(route('public.plans'))
            ->assertSessionHas('fail', 'Choose a valid assessment before continuing.');
    }
}
