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
        Schema::create('user_cvs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('cv_file')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('gender')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->text('outstanding_achievements')->nullable();
            $table->string('desired_position')->nullable(); 
            $table->string('desired_rank')->nullable(); 
            $table->string('employment_type')->nullable();
            $table->string('industry')->nullable(); 
            $table->string('desired_location')->nullable(); 
            $table->string('desired_salary')->nullable(); 
            $table->string('experience_years')->nullable(); 
            $table->text('career_objective')->nullable(); 
            $table->integer('status')->default(-1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_cv');
    }
};
