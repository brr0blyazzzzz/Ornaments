<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotiveInterlacing extends Model
{
    use HasFactory;
    protected $fillable = ['motive_id','interlacing_id','creator_id'];
}
