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
            $table->boolean('store_accept_status')->default(0);
            $table->boolean('pyment_method');
            $table->double('voucher');
            $table->double('tax')->nullable();
            $table->integer('delivered_code')->nullable();
            $table->integer('receipt_code')->nullable();
            $table->double('total_amount');
            $table->integer('table_number')->nullable();
            $table->enum('type', ['internal', 'outer']);
            $table->enum('status', ['pending', 'processing','delivering','completed','cancelled','refunded']);
            $table->enum('payment_status', ['pending', 'paid','failed']);
            $table->text('note')->nullable();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
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
