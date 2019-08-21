<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('pacients', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('name');
      $table->string('num_document')->unique();
      $table->string('type_document')->nullable(); 
      $table->string('email')->nullable();
      $table->string('age');
      $table->string('born_date');
      $table->string('city_born');
      $table->softDeletes();
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
    Schema::dropIfExists('pacients');
  }
}
