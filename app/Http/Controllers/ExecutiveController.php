<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Executives;
use App\Models\User;
use Illuminate\Support\Facades\Auth; // Add this line
class ExecutiveController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'companyname' => 'required|string|max:255',
            'awards' => 'required',
            'position' => 'required',
          
            'companyimage' => 'required|image|mimes:jpeg,png,jpg,gif|max:20480', // adjust max size as per your needs
        ]);

        // Handle file upload if there is an image
        if ($request->hasFile('companyimage')) {
            $image = $request->file('companyimage');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $validatedData['companyimage'] = $imageName;
        }

        // Create a new Jobfair instance
        Executives::create($validatedData);

        // Optionally, redirect back or somewhere else after storing
        return redirect()->back()->with('success', 'Company details saved successfully!');
    }
    public function index()
    {
        $user=User::find(Auth::user()->id);
        // Retrieve all companies
        $executives = Executives::all();
        return view('admin.executive', compact('executives','user'));
    }
}
