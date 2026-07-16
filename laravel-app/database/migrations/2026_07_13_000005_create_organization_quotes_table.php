<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('organization_quotes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id')->constrained()->cascadeOnDelete();
            $table->string('quote_number')->unique();
            $table->string('package_slug');
            $table->unsignedInteger('seat_count');
            $table->unsignedBigInteger('unit_amount_minor');
            $table->unsignedBigInteger('discount_amount_minor')->default(0);
            $table->unsignedBigInteger('total_amount_minor');
            $table->string('currency', 3)->default('usd');
            $table->enum('billing_type', ['one_time', 'subscription'])->default('one_time');
            $table->enum('access_term', ['permanent', 'fixed_term', 'subscription_active'])->default('permanent');
            $table->timestamp('access_ends_at')->nullable();
            $table->enum('status', ['draft', 'sent', 'accepted', 'paid', 'expired', 'cancelled'])->default('draft')->index();
            $table->timestamp('expires_at')->nullable()->index();
            $table->string('stripe_checkout_session_id')->nullable()->unique();
            $table->string('payment_reference')->nullable();
            $table->text('internal_notes')->nullable();
            $table->text('customer_notes')->nullable();
            $table->unsignedBigInteger('created_by_admin_id')->nullable()->index();
            $table->timestamp('paid_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('organization_quotes');
    }
};
