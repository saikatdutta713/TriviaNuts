<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $table = 'quiz_participants';

    protected $primaryKey = 'participant_id';

    protected $fillable = [
        'participant_id',
        'user_id',
        'quiz_id',
        'question_id',
        'answer_id',
        'score_id',
        'badge_id',
        'total_time_consumed',
        'per_question_time',
    ];

    // public function questions()
    // {
    //     return $this->hasMany(Question::class);
    // }
}
