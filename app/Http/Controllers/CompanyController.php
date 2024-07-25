<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {
        // Retrieve all companies
        $companies = Company::all();
        return view('admin.acredited', compact('companies'));
    }

    public function store(Request $request)
    {
        // Validate and store new company data
        $request->validate([
            'companyname' => 'required|string|max:255',
            'companyimage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $company = new Company();
        $company->name = $request->companyname;

        if ($request->hasFile('companyimage')) {
            $image = $request->file('companyimage');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('acredited'), $imageName); // Move to public/hiring directory

            $company->image = 'acredited/' . $imageName; // Store relative path in database
        }

        $company->save();

        return redirect()->back()->with('success', 'Company details uploaded successfully!');
    }
}
