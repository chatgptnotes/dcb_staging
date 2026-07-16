<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('email_otps')) {
            return;
        }

        Schema::create('email_otps', function (Blueprint $table) {
            $table->id();
            $table->string('email')->index();
            $table->string('purpose', 20);          // register | login | reset
            $table->string('code_hash');            // hashed OTP (never plaintext)
            $table->unsignedTinyInteger('attempts')->default(0);
            $table->timestamp('expires_at');
            $table->timestamps();

            $table->unique(['email', 'purpose']);   // one active OTP per email+purpose
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('email_otps');
    }
};
