<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('specialty')->nullable();
            $table->string('title')->nullable();
            $table->string('degrees')->nullable();
            $table->integer('departnemt_id')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('photo')->nullable();
            $table->string('phone')->nullable();
            $table->string('emergency_phone')->nullable();
            $table->string('serial_phone')->nullable();
            $table->string('office_phone')->nullable();
            $table->string('address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->tinyInteger('marital_status')->nullable();
            $table->string('spouse_phone')->nullable();
            $table->string('spouse_name')->nullable();
            $table->json('experienced_details')->nullable();
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
        Schema::dropIfExists('h_doctors');
    }
}
