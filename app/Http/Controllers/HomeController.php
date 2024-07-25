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
Use App\Models\Backend;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function home(){
    $bulletins = Bulletin::all();
    $backends = Backend::all();
    $Jobs = Jobfair::all();
    $executives = Executives::all();
    $awards = Award::all();
    $feedback = Feedback::all();
    return view('home.home',compact('feedback','awards','executives','Jobs','backends','bulletins'));
  }
  public function hiring(){
    $joboffer = AdminJob::all();
    return view('Home.careers',compact('joboffer'));
  }
  public function about(){
    $Jobs = Jobfair::all();
    $companies = Company::all();
    return view('Home.About', compact('companies','Jobs'));
  }
  public function service(){
    return view('User.services');
  }
  public function requisition(){
    return view('User.manpower');
  }
  public function bulletin(){
    $bulletins = Bulletin::all();
    return view('User.bulletin',compact('bulletins'));
  }
  public function profile(){
    return view('User.profile');
  }
  public function labor(){
    return view('User.labor');
  }
  public function contact(){
    return view('User.contact');
  }
  public function award(){
    $backends = Backend::all();
    $executives = Executives::all();
    $Jobs = Jobfair::all();
    $awards = Award::all();
    return view('User.award',compact('awards','Jobs','executives','backends'));
  }
}
