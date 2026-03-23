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
        Schema::create('d__stocks__by__colors', function (Blueprint $table) {
            $table->id();
            $table->string('color', 655);
            $table->string('quantity', 15);
            $table->unsignedBigInteger('whose_stocks_id');
            $table->foreign('whose_stocks_id')->references('id')->on('d__users')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d__stocks__by__colors');
    }
};