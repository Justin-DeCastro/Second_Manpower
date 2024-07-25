<?php

namespace App\Http\Controllers;

use App\Models\AdminJob;
use Illuminate\Http\Request;

class AdminJobController extends Controller
{
    /**
     * Store a newly created job in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */

     public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        // Create a new job instance
        $job = new AdminJob();
        $job->title = $request->title;
        $job->location = $request->location;
        // Add any additional fields you may have in your Job model

        // Save the job to the database
        $job->save();

        // Redirect back to the previous page with a success message
        return redirect()->back()->with('success', 'Job created successfully');
    }
    public function index()
{
    $joboffer = AdminJob::all();
return view('admin.adminjob',compact('joboffer'));
}
}
