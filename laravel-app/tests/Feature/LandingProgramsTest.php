<?php

namespace Tests\Feature;

use App\Models\PricingPackage;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class LandingProgramsTest extends TestCase
{
    use DatabaseTransactions;

    public function test_saved_package_changes_appear_on_cards_and_details(): void
    {
        $package = PricingPackage::where('slug', 'decodemybrain-deep-dive')->firstOrFail();
        $package->update([
            'title' => 'Updated youth program', 'subtitle' => 'Updated program description',
            'minimum_age' => 13, 'maximum_age' => 16, 'features' => "New feature one\nNew feature two",
            'button_text' => 'Explore updated plan', 'is_visible' => true, 'cta_mode' => 'purchase',
        ]);
        $response = $this->get('/')->assertOk();
        foreach (['Updated youth program', 'Updated program description', 'Ages 13–16', 'New feature one', 'New feature two'] as $text) {
            $this->assertSame(2, substr_count($response->getContent(), '>'.$text.'<'));
        }
        $response->assertSee('Explore updated plan')
            ->assertSee(route('public.plans').'#package-'.$package->slug, false)
            ->assertDontSee('Pre-Teen · For Ages 12 to 14');

        $package->update(['maximum_age' => null, 'cta_mode' => 'enquiry', 'button_text' => 'Ask about a group']);
        $this->get('/')->assertOk()->assertSee('Ages 13+')
            ->assertSee('href="'.route('organization.enquiry.create').'">Ask about a group', false);
    }

    public function test_card_visibility_and_order_follow_admin_catalog(): void
    {
        PricingPackage::query()->update(['is_visible' => false]);
        $first = PricingPackage::where('slug', 'small-group')->firstOrFail();
        $second = PricingPackage::where('slug', 'decodemybrain-deep-dive')->firstOrFail();
        $first->update(['is_visible' => true, 'sort_order' => 0, 'title' => 'First catalog card']);
        $second->update(['is_visible' => true, 'sort_order' => 10, 'title' => 'Second catalog card']);
        $this->get('/')->assertOk()->assertSeeInOrder(['First catalog card', 'Second catalog card'])
            ->assertDontSee('data-package="decodemybrain-guided-friend-and-family-connect"', false)
            ->assertDontSee('id="program-decodemybrain-guided-friend-and-family-connect"', false);
    }
}
