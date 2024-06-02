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
        Schema::create('farmer', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('address',50);
            $table->integer('phone',11);
            $table->date('dob');
            $table->string('password',50);
            $table->boolean('approved',false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmer');
    }
};
