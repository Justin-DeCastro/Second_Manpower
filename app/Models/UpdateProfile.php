<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpdateProfile extends Model
{
    use HasFactory;

    protected $table = 'profile_updates'; // Ensure this matches your table name

    protected $fillable = [
        'title',
        'description',
        'profession', // Make sure this matches your database column name
        'image',
    ];
}
