<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('education_details', function (Blueprint $table) {
            $table->id();

            // Polymorphic fields
            $table->unsignedBigInteger('user_id');
            $table->enum('user_type', [
                'jobseeker', 'recruiter', 'mentor', 'coach', 'assessor', 'expat', 'trainer'
            ]);

            // Education fields
            $table->string('high_education');     // e.g., Bachelor's, Master's
            $table->string('field_of_study');     // e.g., Computer Science
            $table->string('institution');        // e.g., University Name
            $table->year('graduate_year');        // e.g., 2022

            $table->timestamps();

            // Optional index for better lookup performance
            $table->index(['user_id', 'user_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education_details');
    }
};
