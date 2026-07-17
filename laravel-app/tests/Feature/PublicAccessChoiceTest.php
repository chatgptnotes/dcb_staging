<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class PublicAccessChoiceTest extends TestCase
{
    public function test_landing_assessment_choice_is_public_and_pay_myself_reaches_plans(): void
    {
        $this->get(route('access.choice'))
            ->assertOk()
            ->assertSee('I have a code')
            ->assertSee("I'll pay myself", false);

        $this->post(route('access.pay'))
            ->assertRedirect(route('public.plans'));
    }

    public function test_invalid_public_code_stays_on_choice_screen_with_an_error(): void
    {
        $this->from(route('access.choice'))
            ->post(route('access.code.begin'), ['code' => 'NOT-A-VALID-CODE'])
            ->assertRedirect(route('access.choice'))
            ->assertSessionHas('fail');
    }
}
