<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotiveType extends Model
{
    use HasFactory;
    protected $fillable =['motive_id','type_id','creator_id'];
}

