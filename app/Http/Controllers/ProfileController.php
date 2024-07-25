<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Mail\ProfileMail;
use Illuminate\Support\Facades\Mail;


use App\Models\Profile;
class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::all();
        // Typically used to show the form view
        return view('admin.profile',compact('profile'));
    }
    public function store(Request $request)
{
    // Validate incoming request
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'website' => 'required|url',
        'person'=> 'required',
        'phone' => 'required|string|regex:/[0-9]{11}/',
        'position' => 'required|string|max:255',
        'email' => 'required|email',
        'sec_certificate' => 'required|file',
        'business_permit' => 'required|file',
    ]);

    // Handle file uploads (SEC/DTI Certificate and Business Permit)
    // if ($request->hasFile('sec_certificate')) {
    //     $secCertificateFile = $request->file('sec_certificate');
    //     $secCertificatePath = $secCertificateFile->store('certificates', 'public');
    //     // Move to public_path
    //     $secCertificateFile->move(public_path('certificates'), $secCertificateFile->getClientOriginalName());
    // }
    $request->file('sec_certificate')->move('public/certificates', $request->file('sec_certificate')->getClientOriginalName());
    $request->file('business_permit')->move('public/permits', $request->file('business_permit')->getClientOriginalName());


    // Store form data in database
    $contactForm = new Profile();
    $contactForm->name = $validatedData['name'];
    $contactForm->website = $validatedData['website'];
    $contactForm->person = $validatedData['person'];
    $contactForm->phone = $validatedData['phone'];
    $contactForm->position = $validatedData['position'];
    $contactForm->email = $validatedData['email'];
    $contactForm->sec_certificate = $request->file('sec_certificate')->getClientOriginalName();
    $contactForm->business_permit = $request->file('business_permit')->getClientOriginalName();

    $contactForm->save();

    session()->flash('message', 'Your application was successfully submitted!');
    Mail::to('decastrojustin321@gmail.com')->send(new ProfileMail());
    // Redirect or respond as needed after successful submission
    return redirect()->back()->with('success', 'Form submitted successfully!');
}


}
