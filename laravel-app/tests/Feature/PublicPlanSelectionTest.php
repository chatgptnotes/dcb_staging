<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class PublicPlanSelectionTest extends TestCase
{
    public function test_signed_in_customer_selecting_a_plan_reaches_code_or_payment_choice(): void
    {
        $this->withSession(['user_id' => 990555])
            ->get(route('public.plans.continue', 'decodemybrain-deep-dive'))
            ->assertRedirect(route('access.choice'))
            ->assertSessionHas('intended_package', 'decodemybrain-deep-dive')
            ->assertSessionHas('new_purchase_flow', true);
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
