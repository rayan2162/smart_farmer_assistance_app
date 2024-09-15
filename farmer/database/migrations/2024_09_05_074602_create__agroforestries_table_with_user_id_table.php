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
        Schema::create('agroforestries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->date('planting_date');
            $table->date('harvest_date')->nullable();
            $table->integer('quantity');
            $table->string('location');
            $table->text('notes')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agroforestries');
    }
};
