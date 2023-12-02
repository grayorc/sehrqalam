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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->text('content');
            $table->string('status')->default('pending');
            $table->integer('product_id')->nullable();
            $table->integer('post_id')->nullable();
            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('post_id')->references('id')->on('posts');
            // $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
