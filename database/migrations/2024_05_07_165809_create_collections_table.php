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
        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('designer_id')->constrained('designers')->onDelete('cascade');
            $table->timestamps();
            $table->string('name');
            $table->string('description');
            $table->decimal('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collections');
    }
};
