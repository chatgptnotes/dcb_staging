<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('voucher_redemptions')) {
            Schema::table('voucher_redemptions', function (Blueprint $table) {
                if (!Schema::hasColumn('voucher_redemptions', 'package_slug')) $table->string('package_slug')->nullable();
                if (!Schema::hasColumn('voucher_redemptions', 'checkout_session_id')) $table->string('checkout_session_id')->nullable()->unique();
                if (!Schema::hasColumn('voucher_redemptions', 'stripe_payment_intent_id')) $table->string('stripe_payment_intent_id')->nullable()->index();
                if (!Schema::hasColumn('voucher_redemptions', 'stripe_subscription_id')) $table->string('stripe_subscription_id')->nullable()->index();
                if (!Schema::hasColumn('voucher_redemptions', 'original_amount_minor')) $table->unsignedBigInteger('original_amount_minor')->nullable();
                if (!Schema::hasColumn('voucher_redemptions', 'discount_amount_minor')) $table->unsignedBigInteger('discount_amount_minor')->nullable();
                if (!Schema::hasColumn('voucher_redemptions', 'final_amount_minor')) $table->unsignedBigInteger('final_amount_minor')->nullable();
            });
            return;
        }
        Schema::create('voucher_redemptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('voucher_id')->constrained()->cascadeOnDelete();
            $table->unsignedBigInteger('wp_user_id')->index();
            $table->string('package_slug');
            $table->string('checkout_session_id')->nullable()->unique();
            $table->string('stripe_payment_intent_id')->nullable()->index();
            $table->string('stripe_subscription_id')->nullable()->index();
            $table->unsignedBigInteger('original_amount_minor')->nullable();
            $table->unsignedBigInteger('discount_amount_minor')->nullable();
            $table->unsignedBigInteger('final_amount_minor')->nullable();
            $table->string('currency', 3)->default('usd');
            $table->timestamp('redeemed_at');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        if (!Schema::hasTable('voucher_recipients')) Schema::dropIfExists('voucher_redemptions');
    }
};
