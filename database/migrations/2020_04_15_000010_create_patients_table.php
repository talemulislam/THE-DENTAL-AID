<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('optional_phone')->nullable();
            $table->string('email')->nullable();
            $table->string('optional_email')->nullable();
            $table->string('emergency_contact_person')->nullable();
            $table->string('emergency_phone')->nullable();
            $table->string('emergency_email')->nullable();
            $table->string('city')->nullable();
            $table->longText('address')->nullable();
            $table->longText('permanent_address')->nullable();
            $table->string('permanent_city')->nullable();
            $table->integer('no_of_family_member')->nullable();
            $table->date('date_of_birth');
            $table->string('marital_status')->nullable();
            $table->string('spouse_name')->nullable();
            $table->string('gender')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

    }
}
