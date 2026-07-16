<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DimensionalQuestionAnswers extends Model
{
    use HasFactory;

    protected $table = 'dimensional_question_2_answer';
    protected $primaryKey = 'id';
    
}
