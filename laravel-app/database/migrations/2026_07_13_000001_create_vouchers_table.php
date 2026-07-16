<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('vouchers')) {
            Schema::table('vouchers', function (Blueprint $table) {
                if (!Schema::hasColumn('vouchers', 'code_hash')) $table->string('code_hash', 64)->nullable()->unique();
                if (!Schema::hasColumn('vouchers', 'code_encrypted')) $table->text('code_encrypted')->nullable();
                if (!Schema::hasColumn('vouchers', 'code_hint')) $table->string('code_hint', 16)->nullable();
                if (!Schema::hasColumn('vouchers', 'recipient_email')) $table->string('recipient_email')->nullable()->index();
                if (!Schema::hasColumn('vouchers', 'package_slug')) $table->string('package_slug')->nullable();
                if (!Schema::hasColumn('vouchers', 'purpose')) $table->string('purpose', 30)->nullable();
                if (!Schema::hasColumn('vouchers', 'discount_type')) $table->string('discount_type', 20)->nullable();
                if (!Schema::hasColumn('vouchers', 'percent_off')) $table->unsignedTinyInteger('percent_off')->nullable();
                if (!Schema::hasColumn('vouchers', 'amount_off_minor')) $table->unsignedBigInteger('amount_off_minor')->nullable();
                if (!Schema::hasColumn('vouchers', 'minimum_order_amount_minor')) $table->unsignedBigInteger('minimum_order_amount_minor')->nullable();
                if (!Schema::hasColumn('vouchers', 'claimed_by_wp_user_id')) $table->unsignedBigInteger('claimed_by_wp_user_id')->nullable()->index();
                if (!Schema::hasColumn('vouchers', 'claim_reserved_until')) $table->timestamp('claim_reserved_until')->nullable();
                if (!Schema::hasColumn('vouchers', 'stripe_promotion_code_id')) $table->string('stripe_promotion_code_id')->nullable()->unique();
                if (!Schema::hasColumn('vouchers', 'last_sync_error')) $table->text('last_sync_error')->nullable();
                if (!Schema::hasColumn('vouchers', 'created_by_admin_id')) $table->unsignedBigInteger('created_by_admin_id')->nullable()->index();
            });
            return;
        }
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->string('code_hash', 64)->unique();
            $table->text('code_encrypted');
            $table->string('code_hint', 16);
            $table->string('recipient_email')->index();
            $table->string('package_slug');
            $table->enum('purpose', ['checkout_discount', 'permanent_access']);
            $table->enum('discount_type', ['percentage', 'fixed'])->nullable();
            $table->unsignedTinyInteger('percent_off')->nullable();
            $table->unsignedBigInteger('amount_off_minor')->nullable();
            $table->string('currency', 3)->default('usd');
            $table->unsignedBigInteger('minimum_order_amount_minor')->nullable();
            $table->unsignedInteger('max_redemptions')->default(1);
            $table->enum('status', ['draft', 'active', 'claimed', 'redeemed', 'expired', 'disabled', 'sync_failed'])->default('draft')->index();
            $table->unsignedBigInteger('claimed_by_wp_user_id')->nullable()->index();
            $table->timestamp('claim_reserved_until')->nullable();
            $table->timestamp('expires_at')->nullable()->index();
            $table->string('stripe_coupon_id')->nullable()->unique();
            $table->string('stripe_promotion_code_id')->nullable()->unique();
            $table->text('last_sync_error')->nullable();
            $table->unsignedBigInteger('created_by_admin_id')->nullable()->index();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        // The table may pre-date this module. Never drop existing business
        // voucher data during rollback.
        if (!Schema::hasTable('voucher_recipients')) Schema::dropIfExists('vouchers');
    }
};
