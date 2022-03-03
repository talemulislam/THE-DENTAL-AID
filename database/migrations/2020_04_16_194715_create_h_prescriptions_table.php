<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHPrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_prescriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')->nullable();
            $table->integer('doctor_id')->nullable();
            $table->string('disease')->nullable();
            $table->json('problem_details')->nullable();
            $table->json('test_details')->nullable();
            $table->json('medicine_details')->nullable();
            $table->date('next_visit_date')->nullable();
            $table->json('instruction_details')->nullable();
            $table->json('next_test_details')->nullable();
            $table->float('weight')->nullable();
            $table->float('height')->nullable();
            $table->string('pressure')->nullable();
            $table->string('puls_rate')->nullable();
            $table->text('any_special_issue')->nullable();
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
        Schema::dropIfExists('h_prescriptions');
    }
}
