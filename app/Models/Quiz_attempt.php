<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz_attempt extends Model
{
    use HasFactory;
    protected $fillable = ["user_id", "sector_id", "voucher_code"];
}
