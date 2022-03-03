<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_medicines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('generic_name')->nullable();
            $table->string('brand_name')->nullable();
            $table->text('description')->nullable();
            $table->text('indications')->nullable();
            $table->text('adult_dose')->nullable();
            $table->text('child_dose')->nullable();
            $table->text('renal_dose')->nullable();
            $table->text('administration')->nullable();
            $table->text('contraindications')->nullable();
            $table->text('side_effects')->nullable();
            $table->text('precautions')->nullable();
            $table->text('pregnancy_lactation')->nullable();
            $table->text('therapeutic_class')->nullable();
            $table->text('mode_of_action')->nullable();
            $table->text('interaction')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('h_medicines');
    }
}
