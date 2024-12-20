<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotiveNation extends Model
{
    use HasFactory;
    protected $fillable = ['motive_id','nation_id','creator_id'];
}