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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('career')->nullable();
            $table->string('type_work')->nullable();
            $table->string('deadline')->nullable();
            $table->string('experience')->nullable();
            $table->integer('wage_min')->nullable();
            $table->integer('wage_max')->nullable();
            $table->integer('gender')->nullable();
            $table->string('work_address')->nullable();
            $table->string('degree')->nullable();
            $table->string('jobStatusId')->nullable();
            $table->string('job_description')->nullable();
            $table->string('job_requirements')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
