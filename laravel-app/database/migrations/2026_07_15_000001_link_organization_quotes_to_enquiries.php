<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('organization_quotes', function (Blueprint $table) {
            $table->foreignId('organization_enquiry_id')
                ->nullable()
                ->unique()
                ->after('organization_id')
                ->constrained('organization_enquiries')
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('organization_quotes', function (Blueprint $table) {
            $table->dropConstrainedForeignId('organization_enquiry_id');
        });
    }
};
