<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpdateManpower extends Model
{
    use HasFactory;

    protected $table = 'update_manpowers'; // Ensure this matches your table name

    protected $fillable = [
        'title',
        'description',
        'profession', // Make sure this matches your database column name
        'image',
    ];
}
