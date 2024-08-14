<?php

namespace App\Http\Controllers;

use App\Models\UpdateManpower; // Ensure you have the Manpower model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CompanyManpowerController extends Controller
{
    // Display a listing of the manpowers.
    public function index()
    {
        $manpowers = UpdateManpower::all();
        return view('admin.UpdateManpower', ['manpowers' => $manpowers]); // Adjusted view name
    }

    // Store a newly created manpower in storage.
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'profession' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $manpower = new UpdateManpower();
        $manpower->title = $request->input('title');
        $manpower->description = $request->input('description');
        $manpower->profession = $request->input('profession');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/manpowers'), $imageName);
            $manpower->image = 'images/manpowers/' . $imageName;
        }

        $manpower->save();

        return redirect()->back()->with('success', 'Manpower created successfully!');
    }

    // Show the form for editing the specified manpower.
    public function edit($id)
    {
        $manpower = UpdateManpower::findOrFail($id);
        return view('admin.editManpower', ['manpower' => $manpower]); // Adjusted view name
    }

    // Update the specified manpower in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'profession' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $manpower = UpdateManpower::findOrFail($id);

        $manpower->title = $request->input('title');
        $manpower->description = $request->input('description');
        $manpower->profession = $request->input('profession');

        if ($request->hasFile('image')) {
            if ($manpower->image && File::exists(public_path($manpower->image))) {
                File::delete(public_path($manpower->image));
            }

            $image = $request->file('image');
            $imagePath = 'images/manpowers/' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/manpowers'), $imagePath);

            $manpower->image = $imagePath;
        }

        $manpower->save();

        return redirect()->back()->with('success', 'Manpower updated successfully.');
    }

    // Remove the specified manpower from storage.
    public function destroy($id)
    {
        $manpower = UpdateManpower::findOrFail($id);

        if ($manpower->image && File::exists(public_path($manpower->image))) {
            File::delete(public_path($manpower->image));
        }

        $manpower->delete();

        return redirect()->back()->with('success', 'Manpower deleted successfully.');
    }
}
