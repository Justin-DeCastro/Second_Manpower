<?php

// app/Http/Controllers/Auth/RegisterController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Rules\Adminlimit;

class RegisterController extends Controller
{
    // Show the registration form
    public function showRegistrationForm()
    {
        return view('register'); // Ensure the view path is correct
    }

    // Handle the registration request
    public function register(Request $request)
    {
        // Validate the form data
        $this->validator($request->all())->validate();

        // Check if the request is for an admin account and enforce the limit
        if ($request->input('is_admin') === '1') {
            $adminCount = User::where('is_admin', true)->count();
            if ($adminCount >= 2) {
                return redirect()->back()->withErrors(['is_admin' => 'Cannot create more than 2 admin accounts.']);
            }
        }

        // Create a new user
        $this->create($request->all());

        // Log in the user
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

        // Redirect back with error if login fails
        return redirect()->back()->withErrors(['email' => 'Unable to log in after registration.']);
    }

    // Validate the registration data
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'password' => 'required|string|min:8|confirmed',
    //         'is_admin' => 'sometimes|boolean', 
    //     ]);
    // }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'is_admin' => ['sometimes', 'boolean', new AdminLimit], // Apply custom rule here
        ]);
    }
    
    // Create a new user
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'is_admin' => $data['is_admin'] ?? false,
        ]);
    }

    public function getUser()
    {
        // Get the currently authenticated user
        $user = Auth::user();
    
        // Check if the user is authenticated
        if ($user) {
            // Return the user's name
            return response()->json(['name' => $user->name]);
        }
    
        // Return an error response if no user is authenticated
        return response()->json(['error' => 'No authenticated user found'], 401);
    }
}
