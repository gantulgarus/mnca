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
        Schema::create('legal_contents', function (Blueprint $table) {
            $table->id();
            $table->string('category'); // legal_framework, guidelines_manuals, contact_staff
            $table->string('title');    // Гарчиг
            $table->text('description')->nullable(); // Тайлбар
            $table->string('pdf_path')->nullable();  // PDF файл хадгалах зам
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('legal_contents');
    }
};
