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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('category_id');
            $table->tinyInteger('is_disabled')->default(0);
            $table->string('slug')->unique();
            $table->text('detail');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->integer('qty')->nullable();
            $table->boolean('is_pdf')->default(1);
//            $table->boolean('is_physical')->nullable();
            $table->integer('price');
            $table->tinyInteger('stars')->nullable();
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
