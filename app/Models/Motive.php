<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motive extends Model
{
    use HasFactory;
    protected $fillable=['motive_title','motive_source','motive_date','motive_notes','motive_img','creator_id'];
}
