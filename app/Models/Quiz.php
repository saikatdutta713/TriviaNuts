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
}
