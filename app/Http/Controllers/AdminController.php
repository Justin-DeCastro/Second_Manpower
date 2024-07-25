<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Application;
Use App\Models\Job;
Use App\Models\Jobfair;
Use App\Models\Company;
use App\Models\ManpowerReq;
use App\Models\Ojt;
class AdminController extends Controller
{
 public function dashboard(){
    $ojtapplies = Ojt::count();
    $totalApplies = ManpowerReq::count();
    $applicationsCount = Application::count();
    $onProcessCount = Application::where('status', 'On process')->count();
    return view('admin.dashboard',compact('applicationsCount','onProcessCount','totalApplies','ojtapplies'));
 }
 public function Manpower()
 {
     $manpower = ManpowerReq::all();
     $totalApplies = ManpowerReq::count();
     return view('admin.manpower', compact('manpower','totalApplies')); // Ensure you have this view file
 }
 public function acreditedcompany(){
    $companies = Company::all();
    return view('admin.acredited', compact('companies'));
 }
 public function jobfair(){
   $Jobs = Jobfair::all();
   return view('admin.jobfair',compact('Jobs'));
}
 public function calendar(){
    $interviews = Application::all();
    return view('admin.calendar',compact('interviews'));
 }
}
