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
        Schema::create('discountcode_orders', function (Blueprint $table) {
            $table->double('discount');
            $table->foreignId('discount_code_id');
            $table->foreignId('order_id');
            $table->primary(['discount_code_id','order_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discountcode__orders');
    }
};
