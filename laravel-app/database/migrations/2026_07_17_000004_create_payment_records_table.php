<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('payment_records')) {
            return;
        }

        Schema::create('payment_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('wp_user_id')->nullable()->index();
            $table->string('checkout_session_id')->unique();
            $table->string('stripe_payment_intent_id')->nullable()->index();
            $table->string('stripe_subscription_id')->nullable()->index();
            $table->string('stripe_customer_id')->nullable()->index();
            $table->string('customer_name')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('package_slug')->nullable();
            $table->string('coupon_code')->nullable();
            $table->unsignedBigInteger('amount_subtotal_minor')->nullable();
            $table->unsignedBigInteger('amount_total_minor')->nullable();
            $table->string('currency', 3)->default('usd');
            $table->string('status', 24)->default('paid');
            $table->timestamp('paid_at')->nullable()->index();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payment_records');
    }
};
