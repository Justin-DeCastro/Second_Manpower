<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        // Retrieve all companies
        $Jobs = Job::all();
        return view('admin.acredited', compact('Jobs'));
    }

    public function store(Request $request)
    {
        // Validate and store new company data
        $request->validate([
            'companyname' => 'required|string|max:255',
            'companyimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Adjust validation rules as needed
        ]);

        $Jobs = new Job();
        $Jobs->companyname = $request->companyname;

        if ($request->hasFile('companyimage')) {
            $image = $request->file('companyimage');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('jobfair'), $imageName); // Move to public/jobfair directory

            $Jobs->companyimage = 'jobfair/' . $imageName; // Store relative path in database
        }

        $Jobs->save();

        return redirect()->back()->with('success', 'Company details uploaded successfully!');
    }
}
