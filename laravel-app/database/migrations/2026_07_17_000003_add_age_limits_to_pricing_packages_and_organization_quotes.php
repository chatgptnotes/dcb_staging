<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('pricing_packages')) {
            Schema::table('pricing_packages', function (Blueprint $table) {
                if (! Schema::hasColumn('pricing_packages', 'minimum_age')) {
                    $table->unsignedTinyInteger('minimum_age')->nullable()->after('age_range');
                }
                if (! Schema::hasColumn('pricing_packages', 'maximum_age')) {
                    $table->unsignedTinyInteger('maximum_age')->nullable()->after('minimum_age');
                }
            });

            $ranges = [
                'decodemybrain-deep-dive' => [12, 15, 'Ages 12–15'],
                'decodemybrain-guided-friend-and-family-connect' => [16, 17, 'Ages 16–17'],
                'small-group' => [18, null, 'Ages 18+'],
            ];
            foreach ($ranges as $slug => [$minimumAge, $maximumAge, $label]) {
                DB::table('pricing_packages')->where('slug', $slug)->update([
                    'minimum_age' => $minimumAge,
                    'maximum_age' => $maximumAge,
                    'age_range' => $label,
                    'updated_at' => now(),
                ]);
            }
        }

        if (! Schema::hasTable('organization_quotes')) {
            return;
        }

        Schema::table('organization_quotes', function (Blueprint $table) {
            if (! Schema::hasColumn('organization_quotes', 'minimum_age')) {
                $table->unsignedTinyInteger('minimum_age')->nullable()->after('package_slug');
            }
            if (! Schema::hasColumn('organization_quotes', 'maximum_age')) {
                $table->unsignedTinyInteger('maximum_age')->nullable()->after('minimum_age');
            }
        });

        if (! Schema::hasTable('pricing_packages')) {
            return;
        }

        $rangesBySlug = DB::table('pricing_packages')->pluck('minimum_age', 'slug')->all();
        $maximumBySlug = DB::table('pricing_packages')->pluck('maximum_age', 'slug')->all();
        DB::table('organization_quotes')->orderBy('id')->chunkById(100, function ($quotes) use ($rangesBySlug, $maximumBySlug): void {
            foreach ($quotes as $quote) {
                if (! array_key_exists($quote->package_slug, $rangesBySlug)) {
                    continue;
                }
                DB::table('organization_quotes')->where('id', $quote->id)->update([
                    'minimum_age' => $rangesBySlug[$quote->package_slug],
                    'maximum_age' => $maximumBySlug[$quote->package_slug] ?? null,
                ]);
            }
        });
    }

    public function down(): void
    {
        if (Schema::hasTable('organization_quotes')) {
            Schema::table('organization_quotes', function (Blueprint $table) {
                if (Schema::hasColumn('organization_quotes', 'maximum_age')) {
                    $table->dropColumn('maximum_age');
                }
                if (Schema::hasColumn('organization_quotes', 'minimum_age')) {
                    $table->dropColumn('minimum_age');
                }
            });
        }

        if (Schema::hasTable('pricing_packages')) {
            Schema::table('pricing_packages', function (Blueprint $table) {
                if (Schema::hasColumn('pricing_packages', 'maximum_age')) {
                    $table->dropColumn('maximum_age');
                }
                if (Schema::hasColumn('pricing_packages', 'minimum_age')) {
                    $table->dropColumn('minimum_age');
                }
            });
        }
    }
};
