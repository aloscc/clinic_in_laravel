<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialtyDoctorTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('specialty_doctor', function (Blueprint $table) {
      $table->integer('doctor_id')->unsigned();
      $table->integer('especialty_id')->unsigned();
      $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');  
      $table->foreign('especialty_id')->references('id')->on('specialties')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('specialty_doctor');
  }
}
