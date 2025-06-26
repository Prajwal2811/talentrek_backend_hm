<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('training_materials_documents', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('trainer_id');                 // FK to trainers
            $table->unsignedBigInteger('training_material_id');       // FK to training_materials

            $table->string('training_title');
            $table->text('description')->nullable();
            $table->string('file_path');
            $table->string('file_name');

            $table->timestamps();

            // Foreign key constraints with short names
            $table->foreign('trainer_id', 'fk_trainer_id')
                  ->references('id')
                  ->on('trainers')
                  ->onDelete('cascade');

            $table->foreign('training_material_id', 'fk_training_material_id')
                  ->references('id')
                  ->on('training_materials')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('training_materials_documents');
    }
};
