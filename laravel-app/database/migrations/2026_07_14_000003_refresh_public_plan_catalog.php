<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('pricing_packages')) {
            return;
        }

        $plans = [
            'decodemybrain-deep-dive' => [
                'title' => 'Core', 'subtitle' => 'The full assessment and your plain-language profile.',
                'price_label' => '$29', 'old_price_label' => null, 'amount' => 29,
                'features' => "Complete assessment\nSave and resume\nInstant results", 'button_text' => 'Choose Core', 'sort_order' => 1,
            ],
            'decodemybrain-guided-friend-and-family-connect' => [
                'title' => 'Plus', 'subtitle' => 'Everything in Core, plus a deeper breakdown and a PDF report.',
                'price_label' => '$49', 'old_price_label' => null, 'amount' => 49,
                'features' => "Everything in Core\nExtended breakdown\nDownloadable PDF report", 'button_text' => 'Choose Plus', 'sort_order' => 2,
            ],
        ];
        foreach ($plans as $slug => $values) {
            DB::table('pricing_packages')->where('slug', $slug)->update(array_merge($values, ['updated_at' => now()]));
        }
    }

    public function down(): void
    {
        // Catalogue copy is intentionally not rolled back; historical plan
        // presentation must never alter existing entitlements.
    }
};
