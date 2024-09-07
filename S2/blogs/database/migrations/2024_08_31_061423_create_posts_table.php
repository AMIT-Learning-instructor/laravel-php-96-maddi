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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->longText('content')->nullable();
            $table->float('starts')->default(0.0);
            $table->string('image')->nullable();
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->on('authors')->references('id')->onDelete('cascade');
            // $table->foreign('author_id')->on('authors')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
