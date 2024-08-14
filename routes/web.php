<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HiringController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\OjtController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminJobController;
use App\Http\Controllers\JobfairsController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\ManpowerReqController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\BulletinController;
use App\Http\Controllers\ExecutiveController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\CareerControllerUpdate;
use App\Http\Controllers\OjtformUpdate;
use App\Http\Controllers\UpdateProfile;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\CompanyManpowerController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ResumeController;

use App\Http\Controllers\Auth\RegisterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('User.home');
// });
// Route::get('/properties', [HomeController::class, 'properties'])->name('properties');
Route::fallback(function () {
    return redirect('/');
});
Route::get('/careers', [HomeController::class, 'hiring'])->name('careers');
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/service', [HomeController::class, 'service'])->name('service');
// Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/awards', [HomeController::class, 'award'])->name('award');
Route::get('/bulletin', [HomeController::class, 'bulletin'])->name('bulletin');
Route::get('/resumebuilder', [HomeController::class, 'resume'])->name('resumebuilder');
//admin dashboard
// Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
// Protect the dashboard route with authentication middleware
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});
//application hiring
Route::get('/apply', [HiringController::class, 'showForm'])->name('apply.form');
Route::post('/apply-submit', [HiringController::class, 'submitApplication'])->name('apply.submit');
Route::get('/applications', [HiringController::class, 'applications'])->name('applications');


//contact message
Route::post('/contact', [ContactMessageController::class, 'store'])->name('contact.store');

//calendar
Route::middleware(['auth'])->group(function () {
   Route::get('/calendars', [AdminController::class, 'calendar'])->name('calendars');
});

Route::get('/schedule', [HiringController::class, 'schedule'])->name('schedule');
Route::post('assign-date/{id}', [HiringController::class, 'assignDate']);
Route::middleware(['auth'])->group(function () {
   Route::get('applications', [HiringController::class, 'applications'])->name('applications');
});



Route::post('submit-application', [HiringController::class, 'submitApplication']);
Route::post('assign-date/{id}', [HiringController::class, 'assignDate']);
Route::get('calendar', [HiringController::class, 'calendar']);

//send email
Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');
//admin acredited company
Route::get('/acredited-company', [AdminController::class, 'acreditedcompany'])->name('acredited-company');
// Protect the dashboard route with authentication middleware
Route::middleware(['auth'])->group(function () {
    Route::get('/acredited-company', [AdminController::class, 'acreditedcompany'])->name('acredited-company');
});

Route::post('/companies/store', [CompanyController::class, 'store'])->name('companies.store');
Route::post('/job/store', [JobController::class, 'store'])->name('job.store');

Route::middleware(['auth'])->group(function () {
 Route::get('/job-fair', [AdminController::class, 'jobfair'])->name('job-fair');
});
Route::get('/requisition', [HomeController::class, 'requisition'])->name('requisition');

Route::get('/labor', [HomeController::class, 'labor'])->name('labor');
// Route::post('/send-approval-email', [AppointmentController::class, 'sendApprovalEmail'])->name('send-approval-email');

//botman
Route::match(['get', 'post'], '/botman', [BotmanController::class, 'handle']);

//OJT
Route::get('/ojtform', [OjtController::class, 'showForm'])->name('ojtform');

Route::middleware(['auth'])->group(function () {
Route::get('/ojtindex', [OjtController::class, 'index'])->name('ojt.index');
});

Route::post('/ojt', [OjtController::class, 'store'])->name('ojt.store');

//company profile
Route::post('/submit-profile', [ProfileController::class, 'store'])->name('profile.store');

Route::middleware(['auth'])->group(function () {
 Route::get('/profileindex', [ProfileController::class, 'index'])->name('profile.index');
});

Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

//admin job edit and addd
Route::post('/joboffers', [AdminJobController::class, 'add'])->name('adminjob.add');

Route::middleware(['auth'])->group(function () {
   Route::get('/jobindex', [AdminJobController::class, 'index'])->name('joboffer.index');
});

//jobfair

Route::post('/jobfairs', [JobfairsController::class, 'store'])->name('jobfairs.store');
// Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
// Route::post('/hiring/applications/{id}/assign-date', [HiringController::class, 'assignDate'])->name('hiring.applications.assign-date');
// Route::get('/hiring/applications/{id}/attend', [HiringController::class, 'attendInterview'])->name('hiring.applications.attend');

Route::post('/hiring/send-email', [HiringController::class, 'sendEmail'])->name('hiring.send-email');
Route::get('/applications/search', [HiringController::class, 'searchApplications'])->name('search.applications');
Route::get('/hiring/applications/{id}/attend', [HiringController::class, 'attendInterview'])->name('hiring.applications.attend');

//manpower
// Route::get('/submit_job_form', [ManpowerReqController::class, 'create']);
Route::post('/submit_job_form', [ManpowerReqController::class, 'store'])->name('submit.store');

Route::middleware(['auth'])->group(function () {
 Route::get('/manindex', [ManpowerReqController::class, 'index'])->name('manpower.index');
});
Route::post('change-status/{id}', [HiringController::class,'changeStatus'])->name('change-status');


//award

Route::middleware(['auth'])->group(function () {
  Route::get('/award', [AwardController::class, 'index'])->name('award.index');
});
Route::post('/award-store', [AwardController::class, 'store'])->name('award.store');
//bulletin

Route::middleware(['auth'])->group(function () {
Route::get('/bulletinboard', [BulletinController::class, 'index'])->name('bulletin.index');
});
Route::post('/bulletin-store', [BulletinController::class, 'store'])->name('bulletin.store');

//

Route::middleware(['auth'])->group(function () {
Route::get('/ourteam', [ExecutiveController::class, 'index'])->name('executive.index');
});
Route::post('/executive-store', [ExecutiveController::class, 'store'])->name('executive.store');
Route::post('/update-application/{id}', [HiringController::class, 'updateApplication'])->name('update-application');
Route::post('/sendStatusEmail/{id}', [HiringController::class, 'sendStatusEmail'])->name('sendStatusEmail');
Route::delete('/executives/{id}', [ExecutiveController::class, 'destroy'])->name('executives.destroy');

//feedback

Route::middleware(['auth'])->group(function () {
Route::get('/feedback', [FeedbackController::class, 'testimonials'])->name('feedback.form');
});


Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
Route::get('get-job-applications', [HiringController::class, 'getJobApplications'])->name('get-job-applications');

//backend
Route::get('/backend', [BackendController::class, 'index'])->name('backend.index');
Route::post('/backend-store', [BackendController::class, 'store'])->name('backend.store');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


//register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

//applicant accept

Route::get('interview/accept/{id}', [HiringController::class, 'acceptInterview'])->name('interview.accept');
Route::get('interview/decline/{id}', [HiringController::class, 'declineInterview'])->name('interview.decline');


Route::get('/interview/reschedule/{id}', [HiringController::class, 'showRescheduleForm'])->name('interview.reschedule');
Route::post('/interview/reschedule/{id}', [HiringController::class, 'reschedule'])->name('interview.reschedule.submit');

Route::get('/admin/accept-reschedule/{applicationId}', [HiringController::class, 'acceptReschedule'])->name('acceptreschedule');
Route::get('/decline-reschedule/{id}', [HiringController::class, 'declineReschedule'])->name('decline.reschedule');

// web.php
Route::get('executives/{id}/edit', [ExecutiveController::class, 'edit'])->name('executives.edit');
Route::put('executives/{id}', [ExecutiveController::class, 'update'])->name('executives.update');



Route::middleware(['auth'])->group(function () {
Route::get('/careersindex', [CareerControllerUpdate::class, 'index'])->name('careers.index');
});

Route::post('/careersstore', [CareerControllerUpdate::class, 'store'])->name('careers.store');
// Route::get('/careers/{id}/edit', [CareerControllerUpdate::class, 'edit'])->name('careers.edit');

// Route to handle the update request
Route::put('/careersupdate/{id}', [CareerControllerUpdate::class, 'update'])->name('careers.update');

Route::delete('careers/{id}', [CareerControllerUpdate::class, 'destroy'])->name('careers.destroy');


Route::middleware(['auth'])->group(function () {
Route::get('/ojtupdates', [OjtformUpdate::class, 'index'])->name('ojtupdates.index');
});



Route::post('/ojtupdates', [OjtformUpdate::class, 'store'])->name('ojtupdates.store');


// Show the form to edit an existing OJT update
Route::get('/ojtupdates/{id}/edit', [OjtformUpdate::class, 'edit'])->name('ojtupdates.edit');

Route::put('/ojtupdates/{id}', [OjtformUpdate::class, 'update'])->name('ojtupdates.update');




// Delete an existing OJT update
Route::delete('/ojtupdates/{id}', [OjtformUpdate::class, 'destroy'])->name('ojtupdates.destroy');


Route::middleware(['auth'])->group(function () {
Route::get('/companyprofile', [CompanyProfileController::class, 'index'])->name('companyprofiles.index');
});


// Route to store a new profile
Route::post('/companyprofile', [CompanyProfileController::class, 'store'])->name('companyprofiles.store');

// Route to show the form to edit an existing profile
Route::get('/companyprofile/{id}/edit', [CompanyProfileController::class, 'edit'])->name('companyprofiles.edit');

// Route to update an existing profile
Route::put('/companyprofile/{id}', [CompanyProfileController::class, 'update'])->name('companyprofiles.update');

// Route to delete an existing profile
Route::delete('/companyprofile/{id}', [CompanyProfileController::class, 'destroy'])->name('companyprofiles.destroy');



// Route to display the list of manpowers


Route::middleware(['auth'])->group(function () {
Route::get('/companymanpower', [CompanyManpowerController::class, 'index'])->name('companymanpowers.index');
});


// Route to store a new manpower
Route::post('/companymanpower', [CompanyManpowerController::class, 'store'])->name('companymanpowers.store');

// Route to show the form to edit an existing manpower
Route::get('/companymanpower/{id}/edit', [CompanyManpowerController::class, 'edit'])->name('companymanpowers.edit');

// Route to update an existing manpower
Route::put('/companymanpower/{id}', [CompanyManpowerController::class, 'update'])->name('companymanpowers.update');

// Route to delete an existing manpower
Route::delete('/companymanpower/{id}', [CompanyManpowerController::class, 'destroy'])->name('companymanpowers.destroy');



Route::put('/adminjob/update/{id}', [AdminjobController::class, 'update'])->name('adminjob.update');
Route::delete('/adminjob/destroy/{id}', [AdminjobController::class, 'destroy'])->name('adminjob.destroy');


Route::get('/companies/{company}/edit', [CompanyController::class, 'edit'])->name('companies.edit');

// Route to handle the update request
Route::put('/companies/{company}', [CompanyController::class, 'update'])->name('companies.update');

// Route to handle the delete request
Route::delete('/companies/{company}', [CompanyController::class, 'destroy'])->name('companies.destroy');


Route::post('/resumestore', [ResumeController::class, 'store'])->name('resumestore.store');