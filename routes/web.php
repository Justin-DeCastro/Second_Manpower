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
use App\Http\Controllers\Auth\LoginController;

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
Route::get('/careers', [HomeController::class, 'hiring'])->name('careers');
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/awards', [HomeController::class, 'award'])->name('award');
Route::get('/bulletin', [HomeController::class, 'bulletin'])->name('bulletin');
//admin dashboard
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

//application hiring
Route::get('/apply', [HiringController::class, 'showForm'])->name('apply.form');
Route::post('/apply-submit', [HiringController::class, 'submitApplication'])->name('apply.submit');
Route::get('/applications', [HiringController::class, 'applications'])->name('applications');

//contact message
Route::post('/contact', [ContactMessageController::class, 'store'])->name('contact.store');

//calendar
Route::get('/calendars', [AdminController::class, 'calendar'])->name('calendars');
Route::get('/schedule', [HiringController::class, 'schedule'])->name('schedule');
Route::post('assign-date/{id}', [HiringController::class, 'assignDate']);

Route::get('applications', [HiringController::class, 'applications'])->name('applications');
Route::post('submit-application', [HiringController::class, 'submitApplication']);
Route::post('assign-date/{id}', [HiringController::class, 'assignDate']);
Route::get('calendar', [HiringController::class, 'calendar']);

//send email
Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');
//admin acredited company
Route::get('/acredited-company', [AdminController::class, 'acreditedcompany'])->name('acredited-company');

Route::post('/companies/store', [CompanyController::class, 'store'])->name('companies.store');
Route::post('/job/store', [JobController::class, 'store'])->name('job.store');
Route::get('/job-fair', [AdminController::class, 'jobfair'])->name('job-fair');
Route::get('/requisition', [HomeController::class, 'requisition'])->name('requisition');

Route::get('/labor', [HomeController::class, 'labor'])->name('labor');
// Route::post('/send-approval-email', [AppointmentController::class, 'sendApprovalEmail'])->name('send-approval-email');

//botman
Route::match(['get', 'post'], '/botman', [BotmanController::class, 'handle']);

//OJT
Route::get('/ojtform', [OjtController::class, 'showForm'])->name('ojtform');
Route::get('/ojtindex', [OjtController::class, 'index'])->name('ojt.index');
Route::post('/ojt', [OjtController::class, 'store'])->name('ojt.store');

//company profile
Route::post('/submit-profile', [ProfileController::class, 'store'])->name('profile.store');
Route::get('/profileindex', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

//admin job edit and addd
Route::post('/joboffer', [AdminJobController::class, 'store'])->name('adminjob.store');
Route::get('/jobindex', [AdminJobController::class, 'index'])->name('joboffer.index');

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
Route::get('/manindex', [ManpowerReqController::class, 'index'])->name('manpower.index');
Route::post('change-status/{id}', [HiringController::class,'changeStatus'])->name('change-status');


//award
Route::get('/award', [AwardController::class, 'index'])->name('award.index');
Route::post('/award-store', [AwardController::class, 'store'])->name('award.store');
//bulletin
Route::get('/bulletinboard', [BulletinController::class, 'index'])->name('bulletin.index');
Route::post('/bulletin-store', [BulletinController::class, 'store'])->name('bulletin.store');

//
Route::get('/executive', [ExecutiveController::class, 'index'])->name('executive.index');
Route::post('/executive-store', [ExecutiveController::class, 'store'])->name('executive.store');
Route::post('/update-application/{id}', [HiringController::class, 'updateApplication'])->name('update-application');
Route::post('/sendStatusEmail/{id}', [HiringController::class, 'sendStatusEmail'])->name('sendStatusEmail');
//feedback
Route::get('/feedback', [FeedbackController::class, 'testimonials'])->name('feedback.form');
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

