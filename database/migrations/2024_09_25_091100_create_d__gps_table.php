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
        Schema::create('d__gps', function (Blueprint $table) {
            $table->id();
            $table->string('name', 1255);
            $table->string('email', 655);
            $table->string('phoneno', 15);
            $table->string('subject', 1255);
            $table->string('city', 1255);
            $table->string('state', 655);
            $table->text('message');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d__gps');
    }
};
