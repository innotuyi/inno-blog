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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('catID');
            $table->unsignedBigInteger('tagID');
            $table->unsignedBigInteger('userID');
            $table->string('title');
            $table->string('body');
            $table->string('image')->nullable();
            $table->foreign('catID')->references('id')->on('categories');
            $table->foreign('tagID')->references('id')->on('tags');
            $table->foreign('userID')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
