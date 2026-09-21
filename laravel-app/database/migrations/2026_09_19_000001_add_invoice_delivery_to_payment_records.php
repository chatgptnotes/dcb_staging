<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('payment_records', function (Blueprint $table) {
            $table->json('invoice_data')->nullable();
            $table->timestamp('invoice_sent_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('payment_records', fn (Blueprint $table) => $table->dropColumn(['invoice_data', 'invoice_sent_at']));
    }
};
