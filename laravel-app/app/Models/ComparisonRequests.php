<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComparisonRequests extends Model
{
    use HasFactory;

    protected $table = 'comparison_requests';  
    protected $primaryKey = 'id';
}
