<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DimensionalQuestionAnswerMain extends Model
{
    use HasFactory;

    protected $table = 'dimensional_question_answers_main';
    protected $primaryKey = 'id';
}
