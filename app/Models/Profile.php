<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'website', 'person', 'phone', 'position', 'email', 'sec_certificate', 'business_permit',
    ];
}
