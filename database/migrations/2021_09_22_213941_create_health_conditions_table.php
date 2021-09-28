<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_conditions', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->id();
            $table->string('description',255)->nullable();            
            $table->float('systolic_pressure');
            $table->float('diastolic_pressure');
            $table->float('oxigen_saturation');
            $table->float('temperature');
            $table->float('fasting_glucose');
            $table->float('postprandial_glucose');
            $table->unsignedBigInteger('medical_patients_id')->nullable();
            $table->foreign('medical_patients_id')->references('id')->on('medical_patients')->onDelete('set null');
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
        Schema::dropIfExists('health_conditions');
        Schema::enableForeignKeyConstraints();
    }
}
