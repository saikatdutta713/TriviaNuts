<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected $primaryKey = 'score_id';

    protected $fillable = [
        'participant_id',
        'user_id',
        'badge_id',
        'right_answer',
        'wrong_answer',
        'score_value',
    ];
}