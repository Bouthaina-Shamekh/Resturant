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
        Schema::create('delivery_orders', function (Blueprint $table) {
            $table->text('description_en')->nullable();
            $table->text('description_ar')->nullable();
            $table->integer('expected_time')->nullable();
            $table->integer('real_time')->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('delviry_accept_status')->default(0);
            $table->double('delivery_fee');
            $table->double('delivery_tips');

            $table->foreignId('delivery_id')->constrained('deliveries')->cascadeOnDelete();
            $table->foreignId('order_id')->constrained('orders')->cascadeOnDelete();

            $table->primary(['delivery_id','order_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery__orders');
    }
};
