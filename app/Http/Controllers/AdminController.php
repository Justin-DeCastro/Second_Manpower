<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Application;
Use App\Models\Job;
Use App\Models\Jobfair;
Use App\Models\Company;
use App\Models\ManpowerReq;
use App\Models\Ojt;
use App\Models\User;
use Illuminate\Support\Facades\Auth; // Add this line
class AdminController extends Controller
{
 public function dashboard(){
$user=User::find(Auth::user()->id);
    $ojtapplies = Ojt::count();
    $totalApplies = ManpowerReq::count();
    $applicationsCount = Application::count();
    $onInterviewCount = Application::where('status', 'For Interview')->count();
    return view('admin.dashboard',compact('applicationsCount','onInterviewCount','totalApplies','ojtapplies','user'));
 }
 public function Manpower()
 {
   $user=User::find(Auth::user()->id);
     $manpower = ManpowerReq::all();
     $totalApplies = ManpowerReq::count();
     return view('admin.manpower', compact('manpower','totalApplies','user')); // Ensure you have this view file
 }
 public function acreditedcompany(){
   $user=User::find(Auth::user()->id);
    $companies = Company::all();
    return view('admin.acredited', compact('companies','user'));
 }
 public function jobfair(){
   $user=User::find(Auth::user()->id);
   $Jobs = Jobfair::all();
   return view('admin.jobfair',compact('Jobs','user'));
}
 public function calendar(){
   $user=User::find(Auth::user()->id);
    $interviews = Application::all();
    return view('admin.calendar',compact('interviews','user'));
 }
}
