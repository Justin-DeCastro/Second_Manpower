<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resume;

class ResumeController extends Controller
{
    public function store(Request $request)
{
    // Validate the request
    $validated = $request->validate([
        'profile_pic' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'objectives' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|string',
        'address' => 'required|string',
        'degree' => 'required|string',
        'school' => 'required|string',
        'graduation-date' => 'required|date',
        'job-title' => 'required|string',
        'company' => 'required|string',
        'start-date' => 'required|date',
        'end-date' => 'nullable|date',
        'skills' => 'required|string',
        'certifications' => 'nullable|string',
    ]);

    // Store file
    $file = $request->file('profile_pic');
    $fileName = time() . '_' . $file->getClientOriginalName();
    $file->move(public_path('profile_pics'), $fileName);

    // Create new resume
    Resume::create([
        'profile_pic' => $fileName,
        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name'),
        'objectives' => $request->input('objectives'),
        'email' => $request->input('email'),
        'phone' => $request->input('phone'),
        'address' => $request->input('address'),
        'degree' => $request->input('degree'),
        'school' => $request->input('school'),
        'graduation-date' => $request->input('graduation-date'),
        'job-title' => $request->input('job-title'),
        'company' => $request->input('company'),
        'start-date' => $request->input('start-date'),
        'end-date' => $request->input('end-date'),
        'skills' => $request->input('skills'),
        'certifications' => $request->input('certifications'),
    ]);

    return redirect()->back()->with('success', 'Resume submitted successfully!');
}

}
