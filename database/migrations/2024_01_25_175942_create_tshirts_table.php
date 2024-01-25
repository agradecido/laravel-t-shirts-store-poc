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
        Schema::create('tshirts', function (Blueprint $table) {
            $table->string('SKU', 40)->primary();
            $table->string('name', 40);
            $table->string('color', 40);
            $table->foreign('color')->references('slug')->on('colors');
            $table->enum('stock', ['in_stock', 'out_of_stock']);
            $table->boolean('stamp');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tshirts');
    }
};
