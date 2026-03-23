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
        Schema::create('d__state__active__inactive__dealerships', function (Blueprint $table) {
            $table->id();
            $table->string('state', 655);
            $table->string('status', 655);
            $table->unsignedBigInteger('under_whom');
            $table->foreign('under_whom')->references('id')->on('d__users')->onDelete('cascade');
            $table->unsignedBigInteger('whose_dealer');
            $table->foreign('whose_dealer')->references('id')->on('d__users')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d__state__active__inactive__dealerships');
    }
};
