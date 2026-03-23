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
        Schema::create('d__inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name', 655);
            $table->string('email', 655);
            $table->string('phoneno', 15);
            $table->string('city', 655);
            $table->string('inquiry_subject', 655);
            $table->text('description');
            $table->unsignedBigInteger('whose_inquiry');
            $table->foreign('whose_inquiry')->references('id')->on('d__users')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d__inquiries');
    }
};
