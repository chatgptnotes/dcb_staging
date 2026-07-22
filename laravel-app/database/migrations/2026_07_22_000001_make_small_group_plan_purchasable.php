<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('pricing_packages')) {
            return;
        }

        DB::table('pricing_packages')
            ->where('slug', 'small-group')
            ->update([
                'cta_mode' => 'purchase',
                'updated_at' => now(),
            ]);
    }

    public function down(): void
    {
        if (! Schema::hasTable('pricing_packages')) {
            return;
        }

        DB::table('pricing_packages')
            ->where('slug', 'small-group')
            ->update([
                'cta_mode' => 'enquiry',
                'updated_at' => now(),
            ]);
    }
};
