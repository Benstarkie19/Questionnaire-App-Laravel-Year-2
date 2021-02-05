<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionnairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionnaires', function (Blueprint $table) {
          $table->string('answer1'); //varchar(255)
          $table->string('answer2');
          $table->string('answer3');
          $table->string('answer4');
          $table->string('number');
          $table->timestamps();
          $table->id();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questionnaires');
    }
}


/*
|--------------------------------------------------------------------------
| Questionnaire
|--------------------------------------------------------------------------
|
| This is the starting the migrations for the questionaire, each answer of
 the questionaire will start with answer* then the users answer 
|
*/
