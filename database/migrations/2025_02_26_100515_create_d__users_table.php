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
        Schema::create('d__users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 1255);
            $table->string('email', 655);
            $table->string('phoneno', 15);
            $table->string('image', 1255);
            $table->date('dob');
            $table->text('address');
            $table->string('password', 1255);
            $table->enum('gender', ['0', '1', '2'])->comment('0=Female,1=Male,2=Other');
            $table->unsignedBigInteger('usertype_id');
            $table->foreign('usertype_id')->references('id')->on('d__userstypes')->onDelete('cascade');
            $table->string('remember_token')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d__users');
    }
};