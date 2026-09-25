<?php

namespace Tests\Feature;

use App\Models\PricingPackage;
use DOMDocument;
use DOMXPath;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class LandingProgramsTest extends TestCase
{
    use DatabaseTransactions;

    private function xpath(string $html): DOMXPath
    {
        $document = new DOMDocument();
        @$document->loadHTML('<?xml encoding="utf-8" ?>'.$html);
        return new DOMXPath($document);
    }

    public function test_saved_package_changes_appear_on_cards_and_details(): void
    {
        $package = PricingPackage::where('slug', 'decodemybrain-deep-dive')->firstOrFail();
        $package->update([
            'title' => 'Updated youth program', 'subtitle' => 'Updated program description',
            'minimum_age' => 13, 'maximum_age' => 16, 'features' => "New feature one\nNew feature two",
            'button_text' => 'Explore updated plan', 'is_visible' => true, 'cta_mode' => 'purchase',
        ]);
        $html = $this->get('/')->assertOk()->getContent();
        $xpath = $this->xpath($html);
        $card = $xpath->query('//*[@data-package="'.$package->slug.'"]')->item(0);
        $this->assertNotNull($card);
        foreach (['Updated youth program', 'Updated program description', 'Ages 13–16'] as $text) {
            $this->assertStringContainsString($text, $card->textContent);
        }
        $this->assertStringContainsString('Discover your child’s unique learning style', $card->textContent);
        $this->assertStringNotContainsString('New feature one', $card->textContent);
        $this->assertGreaterThan(0, $xpath->query('.//details//img', $card)->length);
        $this->assertSame(route('public.program.quest'), $xpath->query('.//a[contains(@class,"program-read-more")]', $card)->item(0)->getAttribute('href'));
        $this->get('/quest')->assertOk()->assertSee('Updated youth program')->assertSee('Ages 13–16')
            ->assertSee('Updated program description')->assertSee('New feature one')->assertSee('Explore updated plan')
            ->assertSee(route('public.plans').'#package-'.$package->slug, false);

        $package->update(['maximum_age' => null, 'cta_mode' => 'enquiry', 'button_text' => 'Ask about a group']);
        $this->get('/quest')->assertOk()->assertSee('Ages 13+')
            ->assertSee('href="'.route('organization.enquiry.create').'">Ask about a group', false);
    }

    public function test_card_and_navigation_visibility_and_order_follow_admin_catalog(): void
    {
        PricingPackage::query()->update(['is_visible' => false]);
        PricingPackage::where('slug', 'small-group')->update(['is_visible' => true, 'sort_order' => 0, 'title' => 'First catalog card']);
        PricingPackage::where('slug', 'decodemybrain-deep-dive')->update(['is_visible' => true, 'sort_order' => 10, 'title' => 'Second catalog card']);
        $html = $this->get('/')->assertOk()->getContent();
        $xpath = $this->xpath($html);
        $cards = $xpath->query('//*[@data-package]');
        $this->assertCount(2, $cards);
        $this->assertSame('small-group', $cards->item(0)->getAttribute('data-package'));
        $this->assertSame('decodemybrain-deep-dive', $cards->item(1)->getAttribute('data-package'));
        $links = $xpath->query('//details[summary="Programs"]//a');
        $this->assertCount(2, $links);
        $this->assertSame('First catalog card', trim($links->item(0)->textContent));
        $this->assertSame('Second catalog card', trim($links->item(1)->textContent));
        $this->get('/evolve')->assertNotFound();
    }

    public function test_all_program_pages_use_current_names_and_age_limits(): void
    {
        foreach (PricingPackage::all() as $package) {
            $key = $package->publicProgramKey();
            if (! $key) continue;
            $package->update(['title' => 'Renamed & '.$key, 'minimum_age' => 21, 'maximum_age' => null, 'is_visible' => true]);
            $html = $this->get('/'.$key)->assertOk()->assertSee('Renamed & '.$key)->assertSee('Ages 21+')->getContent();
            $main = $this->xpath($html)->query('//main')->item(0)->textContent;
            $this->assertDoesNotMatchRegularExpression('/\b(Quest|Evolve|Summit)\b|12 to 14|15 to 18|18 to 50/', $main);
            $package->update(['minimum_age' => null, 'maximum_age' => null, 'age_range' => null]);
            $html = $this->get('/'.$key)->assertOk()->getContent();
            $this->assertStringNotContainsString('For Ages', $this->xpath($html)->query('//main')->item(0)->textContent);
        }
    }

    public function test_public_information_pages_render_with_local_assets_and_footer(): void
    {
        foreach (['/', '/science', '/our-method'] as $path) {
            $html = $this->get($path)->assertOk()->assertSee('Start your journey today')->assertSee('Privacy Policy')->getContent();
            foreach ($this->xpath($html)->query('//img[@src] | //script[@src] | //link[@rel="stylesheet"]') as $node) {
                $url = $node->getAttribute($node->tagName === 'link' ? 'href' : 'src');
                $assetPath = parse_url($url, PHP_URL_PATH);
                if (str_starts_with($assetPath ?? '', '/assets/')) {
                    $this->assertFileExists(public_path(ltrim($assetPath, '/')), $url);
                }
            }
        }
    }
}
