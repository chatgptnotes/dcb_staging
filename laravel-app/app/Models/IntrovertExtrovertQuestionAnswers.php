<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntrovertExtrovertQuestionAnswers extends Model
{
    use HasFactory;

    protected $table = 'introvert_extrovert_question_answers';
    protected $primaryKey = 'id';
}
