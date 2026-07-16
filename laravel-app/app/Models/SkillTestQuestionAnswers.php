<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillTestQuestionAnswers extends Model
{
    use HasFactory;

    protected $table = 'skill_test_question_answers';
    protected $primaryKey = 'id';
}
