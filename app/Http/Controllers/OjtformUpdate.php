<?php

namespace App\Http\Controllers;

use App\Models\OjtUpdate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OjtformUpdate extends Controller
{
    // Display a listing of the resources.
    public function index()
    {
        $ojtupdate = OjtUpdate::all();
        return view('admin.UpdateOjt', ['ojtupdate' => $ojtupdate]);
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'profession' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $ojt = new OjtUpdate();
        $ojt->title = $request->input('title');
        $ojt->description = $request->input('description');
        $ojt->profession = $request->input('profession');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/ojt'), $imageName);
            $ojt->image = 'images/ojt/' . $imageName;
        }

        $ojt->save();

        return redirect()->back()->with('success', 'Career created successfully!');
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $ojt = OjtUpdate::findOrFail($id);
        return view('admin.editOjt', ['ojt' => $ojt]);
    }

    // Update the specified resource in storage.
   public function update(Request $request, $id)
{
    // Validate the incoming request data
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'profession' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Find the record to update
    $ojt = OjtUpdate::findOrFail($id);

    // Update the record with new data
    $ojt->title = $request->input('title');
    $ojt->description = $request->input('description');
    $ojt->profession = $request->input('profession');

    // Handle file upload
    if ($request->hasFile('image')) {
        // Delete old image if exists
        if ($ojt->image && File::exists(public_path($ojt->image))) {
            File::delete(public_path($ojt->image));
        }

        // Upload new image
        $image = $request->file('image');
        $imagePath = 'images/ojt/' . time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/ojt'), $imagePath);

        // Save the image path to the record
        $ojt->image = $imagePath;
    }

    // Save the updated record
    $ojt->save();

    // Redirect with success message
    return redirect()->back()->with('success', 'Career updated successfully.');
}



    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $ojt = OjtUpdate::findOrFail($id);

        // Delete the image if it exists
        if ($ojt->image && File::exists(public_path($ojt->image))) {
            File::delete(public_path($ojt->image));
        }

        $ojt->delete();

        return redirect()->back()->with('success', 'Career deleted successfully.');
    }
}
