<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrainScores extends Model
{
    use HasFactory;

    protected $table = 'brain_scores';
    protected $primaryKey = 'id';

    protected $fillable = [
        'answer_main_id',
        'l1_score',
        'l2_score',
        'r1_score',
        'r2_score',
        'cerebral_score',
        'limbic_score',
        'result_code',
        'brain_type',
        'brain_type_description',
    ];
}
