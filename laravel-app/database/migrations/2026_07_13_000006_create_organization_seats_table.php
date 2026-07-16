<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('organization_seats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_quote_id')->constrained()->cascadeOnDelete();
            $table->string('package_slug');
            $table->enum('access_term', ['permanent', 'fixed_term', 'subscription_active']);
            $table->timestamp('access_ends_at')->nullable();
            $table->enum('status', ['available', 'invited', 'claimed', 'revoked'])->default('available')->index();
            $table->string('invited_email')->nullable()->index();
            $table->string('invite_token_hash', 64)->nullable()->unique();
            $table->text('invite_token_encrypted')->nullable();
            $table->unsignedBigInteger('claimed_by_wp_user_id')->nullable()->index();
            $table->timestamp('invite_expires_at')->nullable();
            $table->timestamp('claimed_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('organization_seats');
    }
};
