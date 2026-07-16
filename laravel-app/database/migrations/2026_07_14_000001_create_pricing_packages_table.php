<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Create the admin-managed pricing catalog when a local database was
     * imported without the formerly separate pricing_packages.sql seed.
     */
    public function up(): void
    {
        if (Schema::hasTable('pricing_packages')) {
            return;
        }

        Schema::create('pricing_packages', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('price_label', 50)->nullable();
            $table->string('old_price_label', 50)->nullable();
            $table->decimal('amount', 10, 2)->nullable();
            $table->string('currency', 10)->default('usd');
            $table->string('billing_interval', 20)->nullable();
            $table->text('features')->nullable();
            $table->string('button_text', 100)->default('Select Plan');
            $table->string('stripe_price_id')->nullable();
            $table->string('stripe_product_id')->nullable();
            $table->string('type', 20)->default('subscription');
            $table->boolean('is_visible')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });

        $now = now();

        DB::table('pricing_packages')->insert([
            [
                'slug' => 'decodemybrain-deep-dive',
                'title' => 'Decodemybrain Deep Dive',
                'subtitle' => 'Your Success Begins Here',
                'price_label' => '$800',
                'old_price_label' => '$499',
                'amount' => 800.00,
                'currency' => 'usd',
                'billing_interval' => 'month',
                'features' => "Basic brain blueprint - Mybraindesign®\nAdvanced brain blueprint - Mybraindesign® Advanced\nUnlock Future Choices\nUnlock Strengths & Weakness\nBrain connect - Match with 1 brain of your choice\nFlow & Grow - Holistic brain group coaching\nEmail & call support for a year\nEligibility For 1% Decodemybrain Club",
                'button_text' => 'Select Plan',
                'type' => 'subscription',
                'is_visible' => true,
                'sort_order' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'slug' => 'decodemybrain-guided-friend-and-family-connect',
                'title' => 'Decodemybrain Guided Friend & Family Connect',
                'subtitle' => null,
                'price_label' => '$499',
                'old_price_label' => '$499',
                'amount' => 499.00,
                'currency' => 'usd',
                'billing_interval' => 'month',
                'features' => "All features of Decodemybrain Deep Dive +\nAdvanced brain blueprint - Mybraindesign® Advanced\nUnlock Future Choices\nUnlock Strengths & Weakness\nFlow & Grow - Holistic brain group coaching\nEmail & call support for a year\nBrain Connect (Family maps) preactivated for 2 matches\n2 hours personalized detailed brain coaching\nDiscounts for Smart Neuro Scan (if required)\nEligibility for 1% Decodemybrain Club",
                'button_text' => 'Select Plan',
                'type' => 'subscription',
                'is_visible' => true,
                'sort_order' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('pricing_packages');
    }
};
