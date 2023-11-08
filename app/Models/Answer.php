<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $table = 'user_answers';

    protected $primaryKey = 'answer_id';

    protected $fillable = [
        'answer_id',
        'user_id',
        'quiz_id',
        'question_id',
        'chosen_option',
        'participant_id',
    ];

    public function getUserAnswer($question)
    {
        $answer = $this->where('question_id', $question)->first();

        if ($answer) {
            return strtolower($answer->chosen_option);
        }

        return null;
    }
}
