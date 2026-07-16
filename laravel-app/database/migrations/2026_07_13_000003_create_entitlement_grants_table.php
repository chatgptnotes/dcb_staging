<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('entitlement_grants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('wp_user_id')->index();
            $table->string('package_slug');
            $table->enum('source_type', ['voucher', 'organization_seat', 'stripe']);
            $table->unsignedBigInteger('source_id')->nullable();
            $table->boolean('is_permanent')->default(false);
            $table->timestamp('starts_at')->nullable();
            $table->timestamp('ends_at')->nullable()->index();
            $table->enum('status', ['active', 'revoked'])->default('active')->index();
            $table->timestamps();
            $table->unique(['source_type', 'source_id', 'wp_user_id'], 'entitlement_grant_source_user_unique');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('entitlement_grants');
    }
};
