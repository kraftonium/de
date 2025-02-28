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
        Schema::create('d__vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_vehicle', 1255);
            $table->string('image', 1255);
            $table->string('color', 655)->nullable();
            $table->unsignedBigInteger('type_of_vehicle_id');
            $table->foreign('type_of_vehicle_id')->references('id')->on('d__vehicle__types')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d__vehicles');
    }
};