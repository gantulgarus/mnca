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
        Schema::create('building_material_prices', function (Blueprint $table) {
            $table->id();
            $table->string('material_name'); // Жишээ: ТӨМӨР, ЦЕМЕНТ
            $table->decimal('price', 12, 2); // Үнэ: 10500.00
            $table->decimal('percentage_change', 5, 2); // Хувийн өөрчлөлт: 5.25%
            $table->enum('trend', ['up', 'down', 'no_change']); // Өссөн, буурсан эсэх
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('building_material_prices');
    }
};