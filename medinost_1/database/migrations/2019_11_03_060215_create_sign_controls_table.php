<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSignControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('sign_controls')) {
            Schema::create('sign_controls', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('firstName');
                $table->string('lastName');
                $table->string('email');
                $table->string('pwd');
                $table->string('roleName');
                $table->integer('rid')->unsigned()->nullable(false);
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
        Schema::dropIfExists('sign_controls');
    }
}
