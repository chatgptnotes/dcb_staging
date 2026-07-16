<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * The legacy `users` table (built outside migrations) carries entitlement and
 * role columns that committed code reads/writes (package, activated_date,
 * user_role, status, brain_profile_id). They already exist on the live/local
 * DB, so each add is guarded — this migration is a no-op there and only fills
 * the gap on a freshly migrated database.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'user_role')) {
                $table->string('user_role')->nullable();
            }
            if (!Schema::hasColumn('users', 'status')) {
                $table->string('status')->default('active');
            }
            if (!Schema::hasColumn('users', 'package')) {
                $table->text('package')->nullable();
            }
            if (!Schema::hasColumn('users', 'activated_date')) {
                $table->string('activated_date')->nullable();
            }
            if (!Schema::hasColumn('users', 'brain_profile_id')) {
                $table->integer('brain_profile_id')->nullable();
            }
        });
    }

    public function down(): void
    {
        // No-op: these columns predate the migration system; dropping them would
        // remove legacy data outside this migration's ownership.
    }
};
