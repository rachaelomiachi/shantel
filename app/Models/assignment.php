<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type_id', 
        'faculty_id',
        'department_id', 
        'course_id', 
        'body',
        'file_url',
    ];
}
