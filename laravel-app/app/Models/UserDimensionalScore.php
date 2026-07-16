<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDimensionalScore extends Model
{
    use HasFactory;

    protected $table = 'user_dimensional_score_2';
    protected $primaryKey = 'id';
}
