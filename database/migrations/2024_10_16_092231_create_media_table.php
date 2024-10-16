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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(); // اسم الصورة أو الملف
            $table->string('image'); // مسار الصورة
            $table->string('file_name')->nullable(); // اسم الملف إذا لزم
            $table->foreignId('product_id')->nullable()->constrained('products')->cascadeOnDelete(); // الربط مع المنتج
            $table->foreignId('category_id')->nullable()->constrained('categories')->cascadeOnDelete(); // الربط مع الصنف
            $table->boolean('is_featured')->default(false); // لتحديد الصورة الرئيسية
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
