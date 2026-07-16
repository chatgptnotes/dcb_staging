<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('organization_enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('organization_name');
            $table->unsignedInteger('group_size');
            $table->string('contact_name');
            $table->string('contact_phone', 50)->nullable();
            $table->string('contact_email');
            $table->text('message')->nullable();
            $table->enum('status', ['new', 'reviewed', 'converted', 'closed'])->default('new')->index();
            $table->unsignedBigInteger('reviewed_by_admin_id')->nullable()->index();
            $table->timestamps();
        });

        Schema::table('organization_quotes', function (Blueprint $table) {
            $table->string('shared_code_hash', 64)->nullable()->unique()->after('payment_reference');
            $table->text('shared_code_encrypted')->nullable()->after('shared_code_hash');
            $table->string('shared_code_hint', 32)->nullable()->after('shared_code_encrypted');
            $table->boolean('shared_code_enabled')->default(false)->after('shared_code_hint');
        });
    }

    public function down(): void
    {
        Schema::table('organization_quotes', function (Blueprint $table) {
            $table->dropUnique(['shared_code_hash']);
            $table->dropColumn(['shared_code_hash', 'shared_code_encrypted', 'shared_code_hint', 'shared_code_enabled']);
        });
        Schema::dropIfExists('organization_enquiries');
    }
};
