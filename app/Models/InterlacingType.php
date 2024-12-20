<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterlacingType extends Model
{
    use HasFactory;
    protected $fillable = ['interlacing_id','interlacing_title','creator_id'];
}
