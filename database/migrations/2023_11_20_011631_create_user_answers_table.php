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
        Schema::create('user_answers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id");
            $table->bigInteger("question_id");
            $table->bigInteger("answer_id")->nullable();
            $table->bigInteger("is_correct");
            $table->bigInteger("score");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_answers');
    }
    // php artisan migrate:refresh --path=/database/migrations/2023_11_20_011631_create_user_answers_table.php

    // php artisan migrate --path=/database/migrations/2023_11_20_011631_create_user_answers_table.php

    // php artisan migrate --path=database/migrations/2023_11_20_011631_create_user_answers_table.php
};
