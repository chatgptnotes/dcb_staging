<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrainCodeResults extends Model
{
    use HasFactory;

    protected $table = 'brain_code_results';
    protected $primaryKey = 'id';
}
