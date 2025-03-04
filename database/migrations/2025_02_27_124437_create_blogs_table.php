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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->foreignId('author_id')->constrained(
                table: 'users', 
                indexName: 'blogs_author_id'
            );
            // $table->unsignedInteger('author_id');
            // $table->foreign('author_id')->references('id')->on('users');

            $table->text('body');
            $table->string('thumb');
            $table->foreignId('categorie_id')->constrained(
                table: 'categories',
                indexName: 'blogs_categories_id'
            );
            $table->string('author_pic');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
