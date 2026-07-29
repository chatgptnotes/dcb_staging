<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('organization_quotes')) {
            return;
        }

        Schema::table('organization_quotes', function (Blueprint $table): void {
            if (! Schema::hasColumn('organization_quotes', 'shared_code_created_at')) {
                $table->timestamp('shared_code_created_at')->nullable()->after('shared_code_enabled');
            }
            if (! Schema::hasColumn('organization_quotes', 'shared_code_rotated_at')) {
                $table->timestamp('shared_code_rotated_at')->nullable()->after('shared_code_created_at');
            }
        });
    }

    public function down(): void
    {
        if (! Schema::hasTable('organization_quotes')) {
            return;
        }

        Schema::table('organization_quotes', function (Blueprint $table): void {
            if (Schema::hasColumn('organization_quotes', 'shared_code_rotated_at')) {
                $table->dropColumn('shared_code_rotated_at');
            }
            if (Schema::hasColumn('organization_quotes', 'shared_code_created_at')) {
                $table->dropColumn('shared_code_created_at');
            }
        });
    }
};
