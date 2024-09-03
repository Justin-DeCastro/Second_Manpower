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
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('profile_pic');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('objectives');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('address');
            $table->string('degree');
            $table->string('school');
            $table->string('graduation-date');
            $table->string('job-title');
            $table->string('company');
            $table->string('start-date');        
            $table->string('end-date');
            $table->string('skills');
            $table->string('certifications');
         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resumes');
    }
};
