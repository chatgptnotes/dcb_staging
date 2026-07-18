<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('pricing_packages')) {
            return;
        }

        if (! Schema::hasColumn('pricing_packages', 'age_range')) {
            Schema::table('pricing_packages', function (Blueprint $table) {
                $table->string('age_range', 50)->nullable()->after('subtitle');
            });
        }

        DB::table('pricing_packages')
            ->where('slug', 'decodemybrain-deep-dive')
            ->update(['age_range' => 'Ages 12–15', 'updated_at' => now()]);
        DB::table('pricing_packages')
            ->where('slug', 'decodemybrain-guided-friend-and-family-connect')
            ->update(['age_range' => 'Ages 16–17', 'updated_at' => now()]);
        DB::table('pricing_packages')
            ->where('slug', 'small-group')
            ->update(['age_range' => 'Ages 18+', 'updated_at' => now()]);
    }

    public function down(): void
    {
        if (Schema::hasTable('pricing_packages') && Schema::hasColumn('pricing_packages', 'age_range')) {
            Schema::table('pricing_packages', function (Blueprint $table) {
                $table->dropColumn('age_range');
            });
        }
    }
};
