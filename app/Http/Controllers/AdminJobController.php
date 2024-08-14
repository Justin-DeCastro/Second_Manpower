<?php

namespace App\Http\Controllers;

use App\Models\AdminJob;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminJobController extends Controller
{
    public function add(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'location' => 'required',
        ]);

        $job = new AdminJob();
        $job->title = $request->title;
        $job->location = $request->location;
        $job->save();

        if ($request->ajax()) {
            return response()->json([
                'message' => 'Job created successfully!',
                'job' => $job
            ]);
        }

        return redirect()->back()->with('success', 'Job created successfully');
    }

    public function index()
    {
        $user = User::find(Auth::user()->id);
        $joboffer = AdminJob::all();
        return view('admin.adminjob', compact('joboffer', 'user'));
    }

    public function update(Request $request, $id)
    {
        $job = AdminJob::findOrFail($id);
        $job->update($request->all());

        if ($request->ajax()) {
            return response()->json([
                'message' => 'Job offer updated successfully!',
                'job' => $job
            ]);
        }

        return redirect()->back()->with('success', 'Job offer updated successfully!');
    }

    public function destroy($id)
    {
        $job = AdminJob::findOrFail($id);
        $job->delete();

        if (request()->ajax()) {
            return response()->json(['message' => 'Job offer deleted successfully!']);
        }

        return redirect()->back()->with('success', 'Job offer deleted successfully!');
    }
}
