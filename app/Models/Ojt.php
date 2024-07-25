<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ojt extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname', 'email', 'school', 'course', 'phone', 'ojt_hours', 'resume', 'message'
    ];
}
