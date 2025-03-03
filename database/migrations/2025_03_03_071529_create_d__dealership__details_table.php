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
        Schema::create('d__dealership__details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('d__users')->onDelete('cascade');
            $table->string('firm_name', 1255);
            $table->text('firm_address');
            $table->string('firm_pincode', 10);
            $table->string('firm_area', 655)->nullable();
            $table->string('firm_taluka', 655)->nullable();
            $table->string('firm_district', 655)->nullable();
            $table->string('firm_zone', 655)->nullable();
            $table->string('firm_state', 655)->nullable();
            $table->string('firm_country', 655)->nullable();
            $table->string('firm_email', 655);
            $table->string('firm_phoneno', 655);
            $table->string('firm_gstno', 655)->nullable();
            $table->string('firm_photo', 1255);
            $table->string('firm_google_business_profile_link', 1255)->nullable();
            $table->string('total_revenue')->nullable();
            $table->string('total_profit')->nullable();
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
        Schema::dropIfExists('d__dealership__details');
    }
};