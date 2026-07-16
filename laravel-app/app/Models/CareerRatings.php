<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerRatings extends Model
{
    use HasFactory;

    protected $table = 'career_ratings';
    protected $primaryKey = 'id';
    
     protected $fillable = ['careers_id', 'brain_profile_id', 'rating'];

   public function career()
    {
        return $this->belongsTo(Careers::class);
    }
}
