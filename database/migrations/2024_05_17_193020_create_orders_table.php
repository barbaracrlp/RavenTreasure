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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('buyer_id')->constrained('buyers')->onDelete('cascade');
            $table->unsignedBigInteger('buyer_id'); // Define the column that references 'user_id' in 'designers'
            $table->foreign('buyer_id')->references('user_id')->on('buyers')->onDelete('cascade');
            $table->foreignId('cart_id')->constrained('carts')->onDelete('cascade');
            $table->string('state');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
