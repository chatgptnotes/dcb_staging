<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StarRatings extends Model
{
    use HasFactory;

    protected $table = 'star_ratings';
    protected $primaryKey = 'id';
}
