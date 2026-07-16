<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoTips extends Model
{
    use HasFactory;

    protected $table = 'video_tips';
    protected $primaryKey = 'id';
}
