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
        Schema::create('d__book__rides', function (Blueprint $table) {
            $table->id();
            $table->string('name', 1255);
            $table->string('email', 655);
            $table->string('phoneno', 15);
            $table->string('vehicle', 655);
            $table->date('ride_date');
            $table->time('ride_time');
            $table->string('city', 1255);
            $table->string('state', 655);
            $table->string('pincode', 10);
            $table->text('address');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d__book__rides');
    }
};
