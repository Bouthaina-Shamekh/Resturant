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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->string('reason_of_refuse')->nullable();
            $table->tinyInteger('store_accept_status');
            $table->tinyInteger('type_payment');
            $table->integer('voucher');
            $table->integer('tax')->nullable();
            $table->integer('delivered_code')->nullable();
            $table->integer('receipt_code')->nullable();
            $table->integer('total_amount');
            $table->integer('table_number')->nullable();
            $table->integer('note')->nullable();
            $table->enum('type', ['internal', 'outer']);
            $table->enum('status', ['pending', 'processing','delivering','completed','cancelled','refunded']);
            $table->enum('payment_status', ['pending', 'paid','failed']);
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
