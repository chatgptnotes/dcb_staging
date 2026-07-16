<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildQuestions extends Model
{
    use HasFactory;

    protected $table = 'child_questions';  
    protected $primaryKey = 'id';
}
