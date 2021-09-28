<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->unsignedBigInteger('medical_patients_id')->nullable();
            $table->foreign('medical_patients_id')->references('id')->on('medical_patients')->onDelete('set null');
            $table->unsignedBigInteger('health_conditions_id')->nullable();
            $table->foreign('health_conditions_id')->references('id')->on('health_conditions')->onDelete('set null');
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
        Schema::dropIfExists('visits');
        Schema::enableForeignKeyConstraints();

    }
}
