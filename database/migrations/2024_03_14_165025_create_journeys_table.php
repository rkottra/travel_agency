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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string("type");
        });

        Schema::create('journeys', function (Blueprint $table) {
            $table->id();
            $table->foreignId("vehicle");
            $table->string("country");
            $table->string("description");
            $table->date("departure");
            $table->integer("capacity")->default(1);
            $table->string("pictureUrl");

            $table->foreign("vehicle")->references("id")->on("vehicles");
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journeys');
        Schema::dropIfExists('vehicles');
    }
};
