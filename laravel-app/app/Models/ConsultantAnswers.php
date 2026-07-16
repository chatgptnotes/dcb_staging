<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultantAnswers extends Model
{
    use HasFactory;

    protected $table = 'consultant_answers';
    protected $primaryKey = 'id';
    
     protected $fillable = [
        'user_id',
        'answers',
        'status',
    ];
}
