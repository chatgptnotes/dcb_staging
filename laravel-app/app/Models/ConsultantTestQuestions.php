<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultantTestQuestions extends Model
{
    use HasFactory;

    protected $table = 'consultant_test_questions';
    protected $primaryKey = 'id';
}
