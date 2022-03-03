<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('scheduled_time')->nullable();
            $table->dateTime('appointments_time_start')->nullable();
            $table->dateTime('appointments_time_end')->nullable();
            $table->dateTime('rescheduled_to')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->integer('hospital_id')->nullable();
            $table->integer('department_id')->nullable();
            $table->integer('doctor_id')->nullable();
            $table->integer('client_id')->nullable();
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
        Schema::dropIfExists('h_appointments');
    }
}
