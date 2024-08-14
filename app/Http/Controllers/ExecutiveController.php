<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Executives; // Ensure the model name matches
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ExecutiveController extends Controller
{
public function store(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'companyname' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'companyimage' => 'required|image|mimes:jpeg,png,jpg,gif|max:50000', 
    ]);

    // Check if a file is uploaded and handle it
    if ($request->hasFile('companyimage')) {
        $image = $request->file('companyimage');
        
        // Generate a unique file name
        $imageName = uniqid() . '.' . $image->extension();
        
        // Move the file to the public/executive directory
        $image->move(public_path('images'), $imageName);
        
        // Store the image path relative to the public directory
        $validatedData['companyimage'] = 'images/' . $imageName;
    }

    // Create a new Executive record in the database
    Executives::create($validatedData);

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Company details saved successfully!');
}


    public function index()
    {
        $user = User::find(Auth::user()->id);
        $executives = Executives::all();
        return view('admin.ourteam', compact('executives', 'user'));
    }
    public function showTeam() {
    $executives = Executives::all(); // Fetch all executives

    // Separate the executives
    $presidentAndCEOs = $executives->filter(function($executive) {
        return $executive->position === 'President and CEO';
    });

    $otherTeamMembers = $executives->filter(function($executive) {
        return $executive->position !== 'President and CEO';
    });

    return view('admin.ourteam',compact('executives','presidentAndCEOs','otherTeamMembers'));
}


    // public function edit($id)
    // {
    //     $executive = Executive::findOrFail($id);
    //     return view('admin.edit_executive', compact('executive'));
    // }

  // ExecutiveController.php

public function edit($id)
{
    // Find the executive by ID
    $executive = Executives::findOrFail($id);

    // Return view with the executive data
    return view('executives.edit', compact('executive'));
}
public function destroy($id)
{
    $executive = Executives::findOrFail($id);
    $executive->delete();

   return redirect()->back()->with('success', 'Executive details deleted successfully!');
}


public function update(Request $request, $id)
{
    // Find the executive by ID
    $executive = Executives::findOrFail($id);

    // Validate and update the executive details
    $validated = $request->validate([
        'companyname' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'companyimage' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $executive->companyname = $validated['companyname'];
    $executive->position = $validated['position'];

    if ($request->hasFile('companyimage')) {
        // Handle file upload and update the image path
        $file = $request->file('companyimage');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $filename);
        $executive->companyimage = $filename;
    }

    $executive->save();

    return redirect()->route('executive.index')->with('success', 'Executive updated successfully.');
}

}