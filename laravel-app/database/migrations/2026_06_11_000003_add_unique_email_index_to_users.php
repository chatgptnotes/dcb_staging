<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * The legacy (WordPress-imported) users table never carried the email UNIQUE
 * index the original migration declared. Native registration relies on email
 * uniqueness, so add it as the real DB-level backstop (the app check alone is
 * subject to a check-then-insert race). Guarded: only adds the index when the
 * data is already clean (no duplicate/empty emails) and the index is absent.
 */
return new class extends Migration
{
    public function up(): void
    {
        $indexExists = collect(DB::select("SHOW INDEX FROM users WHERE Key_name = 'users_email_unique'"))->isNotEmpty();
        if ($indexExists) {
            return;
        }

        $dupeRows = DB::select(
            "SELECT LOWER(email) e, COUNT(*) c FROM users GROUP BY LOWER(email) HAVING c > 1"
        );
        $emptyEmails = (int) DB::table('users')->where('email', '')->orWhereNull('email')->count();

        if (count($dupeRows) > 0 || $emptyEmails > 0) {
            // Don't blindly fail a deploy — leave a breadcrumb to clean first.
            \Log::warning('Skipped users.email unique index: duplicate/empty emails present. Resolve, then re-run.');
            return;
        }

        Schema::table('users', function (Blueprint $table) {
            $table->unique('email', 'users_email_unique');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique('users_email_unique');
        });
    }
};
