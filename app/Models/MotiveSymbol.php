<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotiveSymbol extends Model
{
    use HasFactory;
    protected $fillable = ['motive_id','symbol_id','creator_id'];
}