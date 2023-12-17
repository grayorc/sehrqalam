<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('age_category', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('label');
        });

        Schema::create('submissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->BigInteger('price');
            $table->string('status');
            //book
            $table->string('title');
            $table->string('type');
            $table->string('secondary_title');
            $table->string('english_title');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('age_category_id');
            $table->string('word_number');
            $table->boolean('editing');
            $table->boolean('cover_design');
            $table->text('cover_detail');
            $table->text('file_path');
            $table->boolean('licence');
            //person
            $table->string('name');
            $table->string('code_meli');
            $table->string('code_posti');
            $table->string('phone_number');
            $table->unsignedBigInteger('shahr_id');
            $table->unsignedBigInteger('ostan_id');
            //
            $table->timestamp('closed_at')->nullable();
            $table->timestamps();
            //references
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('age_category_id')->references('id')->on('age_category');
            $table->foreign('shahr_id')->references('id')->on('shahr');
            $table->foreign('ostan_id')->references('id')->on('ostan');
        });

        Schema::create('writers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('submission_id');
            $table->string('code_meli')->nullable();
            $table->string('name');

            //
            $table->foreign('submission_id')->references('id')->on('submissions');
        });

        Schema::create('translators', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('submission_id');
            $table->string('code_meli');
            $table->string('name');

            //
            $table->foreign('submission_id')->references('id')->on('submissions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submissions');
        Schema::dropIfExists('writers');
        Schema::dropIfExists('translators');
        Schema::dropIfExists('age_category');
    }
};
