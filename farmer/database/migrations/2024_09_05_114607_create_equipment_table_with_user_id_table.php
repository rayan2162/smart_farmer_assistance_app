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
        Schema::create('equipments', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Equipment name
            $table->string('type'); // Equipment type
            $table->string('manufacturer'); // Manufacturer of the equipment
            $table->date('purchase_date'); // Date when the equipment was purchased
            $table->decimal('cost', 15, 2); // Cost of the equipment
            $table->string('condition'); // Condition of the equipment (e.g., new, used)
            $table->string('location'); // Location where the equipment is stored
            $table->text('notes')->nullable(); // Additional notes
            $table->unsignedBigInteger('user_id'); // Foreign key to users table
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipments');
    }
};
