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
        Schema::create('d__careers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 655);
            $table->string('email', 655);
            $table->string('phoneno', 15);
            $table->string('profile', 655);
            $table->string('resumepath', 655);
            $table->text('coverletter');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d__careers');
    }
};