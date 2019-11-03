<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('doctor_controls')) {
            Schema::create('doctor_controls', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('vid')->unsigned();
                $table->foreign('vid')->references('vid')->on('patient_controls');
                $table->integer('rid')->unsigned();
                $table->foreign('rid')->references('rid')->on('sign_controls');
                $table->string('certification')->nullable(false);
                $table->string('education')->nullable(false);
                $table->string('activeLicense')->nullable(false);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_controls');
    }
}
