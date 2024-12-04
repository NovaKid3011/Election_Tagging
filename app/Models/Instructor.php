<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'profile',
        'course_id',
    ];

}
