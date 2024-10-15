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
        Schema::create('profiles', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();


            $table->string('first_name');
            $table->string('last_name');

            $table->date('birthday')->nullable();
            $table->enum('gender', ['male', 'female']);

            $table->string('region');
            $table->string('street');
            $table->string('floor')->nullable();
            $table->string('near')->nullable();
            $table->string('another_details')->nullable();

            $table->double('longitude')->nullable();
            $table->double('latitude')->nullable();

            $table->string('country',2)->nullable();
            $table->string('locale',2)->default('en');


            $table->string('phone')->nullable();

            $table->timestamps();

            $table->primary(['user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
