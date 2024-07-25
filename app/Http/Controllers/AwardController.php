<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Award;
class AwardController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'companyname' => 'required|string|max:255',
            'description' => 'required|string|max:255',
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
        Award::create($validatedData);

        // Optionally, redirect back or somewhere else after storing
        return redirect()->back()->with('success', 'Company details saved successfully!');
    }
    public function index()
    {
        // Retrieve all companies
        $awards = Award::all();
        return view('admin.award', compact('awards'));
    }
}
