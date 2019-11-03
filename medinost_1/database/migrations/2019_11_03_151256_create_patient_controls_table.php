<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('patient_controls')) {
            Schema::create('patient_controls', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('rid')->unsigned();
                $table->foreign('rid')->references('rid')->on('sign_controls');
                $table->string('report_desc');
                $table->string('history');
                $table->integer('vid')->unsigned()->nullable(false);
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
        Schema::dropIfExists('patient_controls');
    }
}
