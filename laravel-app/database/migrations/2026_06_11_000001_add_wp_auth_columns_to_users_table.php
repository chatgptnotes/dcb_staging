<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('users')) {
            return;
        }

        Schema::table('users', function (Blueprint $table) {
            // WordPress identity carried over so session('user_id') keeps holding WP IDs
            if (!Schema::hasColumn('users', 'wp_user_id')) {
                $table->unsignedBigInteger('wp_user_id')->nullable()->unique()->after('id');
            }
            if (!Schema::hasColumn('users', 'username')) {
                $table->string('username', 60)->nullable()->index()->after('wp_user_id');
            }
            if (!Schema::hasColumn('users', 'display_name')) {
                $table->string('display_name', 250)->nullable()->after('email');
            }
            if (!Schema::hasColumn('users', 'date_of_birth')) {
                $table->date('date_of_birth')->nullable()->after('display_name');
            }
            if (!Schema::hasColumn('users', 'billing_phone')) {
                $table->string('billing_phone', 32)->nullable()->after('date_of_birth');
            }
            if (!Schema::hasColumn('users', 'billing_country')) {
                $table->string('billing_country', 8)->nullable()->after('billing_phone');
            }
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique(['wp_user_id']);
            $table->dropIndex(['username']);
            $table->dropColumn([
                'wp_user_id',
                'username',
                'display_name',
                'date_of_birth',
                'billing_phone',
                'billing_country',
            ]);
        });
    }
};
