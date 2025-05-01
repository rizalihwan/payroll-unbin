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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('date_of_birth');
            $table->enum('gender', [0, 1])->default(0);
            $table->longText('address');
            $table->string('phone_number')->unique();
            $table->string('office_position');
            $table->string('joining_date');
            $table->enum('merital_status', [0, 1])->default(0);
            $table->enum('employment_type', [0, 1, 2])->default(0);
            $table->string('bank_name');
            $table->string('bank_account_number')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
