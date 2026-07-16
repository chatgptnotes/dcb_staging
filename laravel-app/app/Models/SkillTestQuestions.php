<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillTestQuestions extends Model
{
    use HasFactory;

    protected $table = 'skill_test_questions';
    protected $primaryKey = 'id';
}
