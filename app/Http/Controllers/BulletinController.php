<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bulletin;

class BulletinController extends Controller
{
    // Display a listing of bulletins
    public function index()
    {
        $bulletins = Bulletin::all();
        return view('admin.bulletin', compact('bulletins'));
    }

    // Show the form for creating a new bulletin


    // Store a newly created bulletin in storage
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'link' => 'required|url'
        ]);

        $bulletin = new Bulletin([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'link' => $request->get('link')
        ]);
        $bulletin->save();

        return redirect()->back()->with('success', 'Bulletin saved!');
    }

    // Display the specified bulletin
    
}
