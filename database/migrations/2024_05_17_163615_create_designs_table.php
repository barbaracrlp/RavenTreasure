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
        Schema::create('designs', function (Blueprint $table) {
            $table->id();
            $table->foreign('designer_id')->references('id')->on('designers');
            $table->string('name')->unique();
            $table->foreign('collection_id')->references('id')->on('collections');
         
            $table->integer('stock');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('type_id')->references('id')->on('types');
            $table->timestamps();
         
            $table->date('expiration')->nullable();
            $table->decimal('price');
            $table->string('file_path')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('designs');
    }
};
