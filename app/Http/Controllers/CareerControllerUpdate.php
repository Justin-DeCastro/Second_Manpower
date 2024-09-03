<?php

namespace App\Http\Controllers;

use App\Models\CareerUpdate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CareerControllerUpdate extends Controller
{
    public function index()
    {
        $careers = CareerUpdate::all();
        return view('admin.UpdateCareer', ['careers' => $careers]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $career = new CareerUpdate();
        $career->title = $request->input('title');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/careers'), $imageName);
            $career->image = 'images/careers/' . $imageName;
        }

        $career->save();

        return redirect()->back()->with('success', 'Career created successfully!');
    }

    public function edit($id)
    {
        $careers = CareerUpdate::findOrFail($id);
        return view('admin.editCareer', ['careers' => $careers]);
    }
    public function destroy($id)
{
    $career = CareerUpdate::findOrFail($id);
    $career->delete();
    return redirect()->back()->with('success', 'Career deleted successfully.');
}


    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $career = CareerUpdate::findOrFail($id);

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($career->image && File::exists(public_path($career->image))) {
                File::delete(public_path($career->image));
            }

            // Save the new image to the public directory
            $image = $request->file('image');
            $imagePath = 'images/careers/' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/careers'), $imagePath);

            $career->image = $imagePath;
        }

        $career->title = $request->input('title');
        $career->save();

        return redirect()->back()->with('success', 'Career updated successfully.');
    }
}
