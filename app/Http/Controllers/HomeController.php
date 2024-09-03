<?php

namespace App\Http\Controllers;
Use App\Models\Company;
Use App\Models\Job;
Use App\Models\Award;
Use App\Models\Jobfair;
Use App\Models\AdminJob;
Use App\Models\Feedback;
Use App\Models\Executives;
Use App\Models\Bulletin;
Use App\Models\UpdateProfile;
Use App\Models\OjtUpdate;
Use App\Models\UpdateManpower;
Use App\Models\CareerUpdate;
Use App\Models\Backend;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function home(){
    //   $ojtupdate = OjtUpdate::all();
    $bulletins = Bulletin::all();
    $backends = Backend::all();
    $Jobs = Jobfair::all();
    $executives = Executives::all();
    $awards = Award::all();
    $feedback = Feedback::all();
    return view('home.home',compact('feedback','awards','executives','Jobs','backends','bulletins'));
  }
  public function hiring(){
       $careers = CareerUpdate::all();
    $joboffer = AdminJob::all();
    return view('home.careers',compact('joboffer','careers'));
  }
  public function about(){
      // In your controller
$executivess = Executives::orderByRaw("CASE WHEN position = 'President and CEO' THEN 0 ELSE 1 END")->get();

    $executives = Executives::all();
    $awards = Award::all();
    $Jobs = Jobfair::all();
    $companies = Company::all();
    return view('home.About', compact('companies','Jobs','executives','awards','executivess'));
  }
  public function service(){
    return view('User.services');
  }
  public function requisition(){
      $manpowers = UpdateManpower::all();
       return view('home.requisition', ['manpowers' => $manpowers]); // Adjusted view name
    
  }
  public function bulletin(){
    $bulletins = Bulletin::all();
    return view('home.bulletin',compact('bulletins'));
  }
  public function profile(){
      $profiles = UpdateProfile::all();
    return view('home.profile', ['profiles' => $profiles]); // Adjusted view name
  }
  public function labor(){
    return view('home.labor');
  }
  public function resume(){
    return view('Home.Resumebuilder');
  }
  public function award(){
    $backends = Backend::all();
    $executives = Executives::all();
    $Jobs = Jobfair::all();
    $awards = Award::all();
    return view('home.award',compact('awards','Jobs','executives','backends'));
  }
}
