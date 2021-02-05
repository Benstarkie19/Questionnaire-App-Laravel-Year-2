<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class questionnaire extends Model
{
    protected $fillable = ['answer1', 'answer2' , 'answer3'  , 'answer4' , 'number'];
}


/*
|--------------------------------------------------------------------------
| Answers
|--------------------------------------------------------------------------
|
| This is each one of the id's for the questionnaires
|
*/
