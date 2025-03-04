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
        Schema::create('d__customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('d__users')->onDelete('cascade');
            $table->string('battery_no', 655);
            $table->string('chassis_no', 655);
            $table->string('controller_no', 655);
            $table->unsignedBigInteger('vehicle_id');
            $table->foreign('vehicle_id')->references('id')->on('d__vehicles')->onDelete('cascade');
            $table->date('date_of_purchase');
            $table->date('produce_date');
            $table->unsignedBigInteger('whose_customer');
            $table->foreign('whose_customer')->references('id')->on('d__users')->onDelete('cascade');
            $table->string('invoice_no', 655);
            $table->string('insurance_policy_no', 655);
            $table->string('customer_gstno', 655);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d__customers');
    }
};
