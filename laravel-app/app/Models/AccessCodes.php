<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessCodes extends Model
{
    
    use HasFactory;

    protected $table = 'access_codes';
    protected $primaryKey = 'id';

}
