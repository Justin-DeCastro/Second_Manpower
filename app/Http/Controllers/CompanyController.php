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
    public function edit($id)
    {
        $company = Company::findOrFail($id);
        return response()->json($company); // Return company details for AJAX
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);
        
        $request->validate([
            'companyname' => 'required|string|max:255',
            'companyimage' => 'nullable|image|max:2048',
        ]);

        $company->companyname = $request->input('companyname');

        if ($request->hasFile('companyimage')) {
            // Delete old image if it exists
            if ($company->companyimage) {
                Storage::delete($company->companyimage);
            }

            // Store the new image
            $imagePath = $request->file('companyimage')->store('public/companies');
            $company->companyimage = basename($imagePath);
        }

        $company->save();

        return response()->json(['message' => 'Company details updated successfully']);
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        
        // Delete the image file if it exists
        if ($company->companyimage) {
            Storage::delete('public/companies/' . $company->companyimage);
        }
        
        $company->delete();

        return redirect()->back()->with('Message', 'Deleted Successfully');
    }
}
