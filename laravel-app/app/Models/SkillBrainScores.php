<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillBrainScores extends Model
{
    use HasFactory;

    protected $table = 'skill_brain_scores';
    protected $primaryKey = 'id';
}
