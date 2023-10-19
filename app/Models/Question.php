<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $primaryKey = 'question_id';

    protected $fillable = [
        'question_text',
        'question_picture',
        'answer_option_a',
        'answer_option_b',
        'answer_option_c',
        'answer_option_d',
        'correct_option',
        'category_id',
    ];
}
