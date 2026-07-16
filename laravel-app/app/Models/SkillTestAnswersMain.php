<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillTestAnswersMain extends Model
{
    use HasFactory;

    protected $table = 'skill_test_answers_main';
    protected $primaryKey = 'id';
}
