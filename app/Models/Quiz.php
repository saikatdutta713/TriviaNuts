<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $primaryKey = 'quiz_id';

    protected $fillable = [
        'time',
        'title',
        'duration',
        'category_id',
        'questions',
        'status',
    ];

    public function participants()
    {
        return $this->hasMany(Participant::class, 'quiz_id');
    }

    public function getQuestions()
    {
        $questionsString = $this->questions;
        $questionIds = explode(',', $questionsString);
        $questionIds = array_filter($questionIds, 'is_numeric');
        $questions = Question::whereIn('question_id', $questionIds)->get();

        return $questions;
    }
}
