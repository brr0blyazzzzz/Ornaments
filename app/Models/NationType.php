<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NationType extends Model
{
    use HasFactory;
    protected $fillable = ['nation_id','nation_title','creator_id'];
}
