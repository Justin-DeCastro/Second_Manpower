<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_pic',
        'first_name',
        'last_name',
        'objectives',
        'email',
        'phone',
        'address',
        'degree',
        'school',
        'graduation-date',
        'job-title',
        'company',
        'start-date',
        'end-date',
        'skills',
        'certifications',
    ];
}
