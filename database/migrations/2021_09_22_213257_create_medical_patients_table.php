<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_patients', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->id();
            $table->string('name');
            $table->Integer('age');
            $table->string('gender');
            $table->string('date_of_birth');
            $table->string('address');
            $table->string('phone');
            $table->float('weight');
            $table->float('height');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->unsignedBigInteger('paciente_id')->nullable()->nullable();
            $table->foreign('paciente_id')->references('id')->on('users')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('medical_patients');
        Schema::enableForeignKeyConstraints();
    }
}
