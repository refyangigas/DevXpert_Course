<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->text('details')->nullable();
            $table->string('image')->nullable();
            $table->string('category');
            $table->string('student_name');
            $table->string('batch')->nullable(); 
            $table->boolean('is_featured')->default(false);
            $table->integer('order')->nullable();
            $table->json('technologies')->nullable();
            $table->string('demo_link')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
