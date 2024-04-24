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
        Schema::create('plates', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default('0');   
            $table->boolean('delivery')->default('0');   
            $table->string('name');
            $table->string('description');
            $table->string('ingredients');
            $table->foreignId('IdChef')->constrained('chefs');
            $table->foreignId('IdCategory')->constrained('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plates');
    }
};
