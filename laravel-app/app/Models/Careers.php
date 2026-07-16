<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{
    use HasFactory;

    protected $table = 'careers';
    protected $primaryKey = 'id';
    
     protected $fillable = ['title', 'description', 'short_description'];

   public function ratings()
    {
        return $this->hasMany(CareerRatings::class);
    }

    public function ratingForProfile($brain_profile_id)
    {
        return $this->ratings()->where('brain_profile_id', $brain_profile_id)->value('rating');
    }
}
