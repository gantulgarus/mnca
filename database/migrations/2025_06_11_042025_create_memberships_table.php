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
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->string('organization_name'); // Байгууллагын нэр
            $table->string('address')->nullable(); // Хаяг
            $table->string('phone')->nullable(); // Утас
            $table->string('email')->nullable(); // Мэйл хаяг
            $table->string('website')->nullable(); // Веб сайт
            $table->string('facebook')->nullable(); // Facebook хаяг
            $table->string('twitter')->nullable(); // Twitter хаяг
            $table->string('youtube')->nullable(); // YouTube хаяг
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memberships');
    }
};
