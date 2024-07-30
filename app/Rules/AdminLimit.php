<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\User;

class AdminLimit implements Rule
{
    public function passes($attribute, $value)
    {
        // Check the number of admins in the database
        return User::where('is_admin', true)->count() < 2 || User::find($value)?->is_admin;
    }

    public function message()
    {
        return 'You cannot have more than 2 admin accounts.';
    }
}
