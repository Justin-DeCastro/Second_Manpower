<?php

namespace App\Http\Controllers;

use App\Models\UpdateProfile; // Ensure you have the Profile model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CompanyProfileController extends Controller
{
    // Display a listing of the profiles.
    public function index()
    {
        $profiles = UpdateProfile::all();
        return view('admin.UpdateProfile', ['profiles' => $profiles]); // Adjusted view name
    }

    // Store a newly created profile in storage.
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'profession' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $profile = new UpdateProfile();
        $profile->title = $request->input('title');
        $profile->description = $request->input('description');
        $profile->profession = $request->input('profession');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/profiles'), $imageName);
            $profile->image = 'images/profiles/' . $imageName;
        }

        $profile->save();

        return redirect()->back()->with('success', 'Profile created successfully!');
    }

    // Show the form for editing the specified profile.
    public function edit($id)
    {
        $profile = Profile::findOrFail($id);
        return view('admin.editProfile', ['profile' => $profile]); // Adjusted view name
    }

    // Update the specified profile in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'profession' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $profile = UpdateProfile::findOrFail($id);

        $profile->title = $request->input('title');
        $profile->description = $request->input('description');
        $profile->profession = $request->input('profession');

        if ($request->hasFile('image')) {
            if ($profile->image && File::exists(public_path($profile->image))) {
                File::delete(public_path($profile->image));
            }

            $image = $request->file('image');
            $imagePath = 'images/profiles/' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/profiles'), $imagePath);

            $profile->image = $imagePath;
        }

        $profile->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    // Remove the specified profile from storage.
    public function destroy($id)
    {
        $profile = UpdateProfile::findOrFail($id);

        if ($profile->image && File::exists(public_path($profile->image))) {
            File::delete(public_path($profile->image));
        }

        $profile->delete();

        return redirect()->back()->with('success', 'Profile deleted successfully.');
    }
}
