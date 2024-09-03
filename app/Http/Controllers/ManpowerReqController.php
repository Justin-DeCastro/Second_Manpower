<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ManpowerReq;
use App\Models\User;
use Illuminate\Support\Facades\Auth; // Add this line
class ManpowerReqController extends Controller
{
    public function index()
    {  
        $user=User::find(Auth::user()->id);
        $manpower = ManpowerReq::all();
        $totalApplies = ManpowerReq::count();
        return view('admin.manpower', compact('manpower','totalApplies','user')); // Ensure you have this view file
    }

    public function create()
    {
        $qualifications = [ 
            'CPA License' => 'CPA License',
            'National Certificate' => 'National Certificate',
            'Licensed Professional' => 'Licensed Professional'
        ];

        return view('admin.create_manpower', compact('qualifications'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
             'company_website' => 'required|string|max:255',
              'company_name' => 'required|string|max:255',
                'contact_name' => 'required|string|max:255',
                  'contact_number' => 'required|string|max:255',
            'work_type' => 'required|string|max:255',
            'vacant_position' => 'required|string|max:255',
            'job_category' => 'required|string|max:255',
            'no_of_vacancy' => 'required|integer',
            'years_experience' => 'required|string|max:255',
            'working_location' => 'required|string|max:255',
            'working_schedule_hours' => 'nullable|string|max:255',
            'working_schedule_days' => 'nullable|string|max:255',
            'payout_firstdate' => 'required',
            'payout_seconddate' => 'required',
            'preferred_gender' => 'nullable|string|max:255',
            'job_requirements' => 'nullable|string',
            'other_requirements' => 'nullable|string',
            'salary_from' => 'nullable|string|max:255',
            'salary_to' => 'nullable|string|max:255',
            'target_date' => 'nullable|date',
            'screening_method' => 'required|string|max:255',
            'job_description' => 'required|string',
            'qualifications' => 'nullable|array', // Validate as array
            'qualifications.*' => 'nullable|string|max:255', // Validate each item in the array
        ]);

        // Process qualifications array
        $validated['qualifications'] = implode(', ', $request->input('qualifications', []));

        ManpowerReq::create($validated);

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
