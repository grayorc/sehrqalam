<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('کاربر سحر قلم');
            $table->string('email')->unique()->nullable();
            $table->string('phone_number')->unique()->nullable();
            $table->string('password');
            $table->integer('verification_token');
//            after adding shahr and ostan tables

            $table->string('code_meli')->nullable();
            $table->string('code_posti')->nullable();
            $table->integer('wallet')->default(0);
            $table->boolean('is_disabled')->default(1);
            $table->boolean('is_superuser')->default(0);
            $table->boolean('is_staff')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
