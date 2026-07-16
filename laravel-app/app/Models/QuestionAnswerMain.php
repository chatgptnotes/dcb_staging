<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionAnswerMain extends Model
{
    use HasFactory;

    protected $table = 'question_answers_main';
    protected $primaryKey = 'id';
}
