<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_answer extends Model
{
    use HasFactory;
    protected $fillable = ["user_id", "quiz_attempt_id", "question_id", "answer_id", "is_correct", "score"];
}
