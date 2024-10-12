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
        Schema::create('order_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('region');
            $table->string('street');
            $table->string('floor');
            $table->string('near');
            $table->string('another_details');
            $table->double('longitude');
            $table->double('latitude');
            $table->string('phone');
            $table->string('post_code');
            $table->foreignId('user_id');
            $table->foreignId('order_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_addresses');
    }
};
