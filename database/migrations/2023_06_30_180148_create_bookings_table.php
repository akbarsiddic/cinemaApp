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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            // movie id from movies table
            $table->foreignId('movie_id')->constrained()->onDelete('cascade');
            $table->integer('seats');
            $table->string('name');
            $table->integer('age');
            // price of each seat
            $table->integer('price');
            // total price of all seats
            $table->integer('total_price');
            

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
