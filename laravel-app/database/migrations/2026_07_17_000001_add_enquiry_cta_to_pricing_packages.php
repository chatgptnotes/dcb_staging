<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('pricing_packages')) {
            return;
        }

        Schema::table('pricing_packages', function (Blueprint $table) {
            if (! Schema::hasColumn('pricing_packages', 'cta_mode')) {
                $table->string('cta_mode', 20)->default('purchase')->after('button_text');
            }
            if (! Schema::hasColumn('pricing_packages', 'price_suffix')) {
                $table->string('price_suffix', 50)->nullable()->after('price_label');
            }
        });

        if (! DB::table('pricing_packages')->where('slug', 'small-group')->exists()) {
            DB::table('pricing_packages')->insert([
                'slug' => 'small-group',
                'title' => 'Small group',
                'subtitle' => 'Buy a handful of seats and apply a discount code at checkout.',
                'price_label' => '5–6',
                'price_suffix' => 'people',
                'amount' => 5,
                'currency' => 'usd',
                'features' => "Same assessment for all\nStripe coupon discount\nFor larger groups, use bulk",
                'button_text' => 'Get a coupon',
                'cta_mode' => 'enquiry',
                'type' => 'one_time',
                'is_visible' => true,
                'sort_order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    public function down(): void
    {
        if (! Schema::hasTable('pricing_packages')) {
            return;
        }

        DB::table('pricing_packages')->where('slug', 'small-group')->delete();
        Schema::table('pricing_packages', function (Blueprint $table) {
            if (Schema::hasColumn('pricing_packages', 'cta_mode')) {
                $table->dropColumn('cta_mode');
            }
            if (Schema::hasColumn('pricing_packages', 'price_suffix')) {
                $table->dropColumn('price_suffix');
            }
        });
    }
};
