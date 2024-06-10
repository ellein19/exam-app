<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssesseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assesse', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name');
          $table->string('email', 100)->unique();
          $table->string('password');
          $table->string('institution');
          $table->string('department');
          $table->integer('registration')->unique();
          $table->string('year');
          $table->string('contact');
          $table->string('gender');
          $table->string('image')->nullable();
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
        Schema::dropIfExists('assesse');
    }
}
