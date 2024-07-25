<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicationConfirmation;
use Illuminate\Support\Facades\Log;
class EmailController extends Controller
{
    public function sendEmail(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'interview_date' => 'required',
    ]);

    $email = $request->input('email');
    $interviewDate = $request->input('interview_date');

    try {
        Mail::to($email)->send(new ApplicationConfirmation($interviewDate));

        Log::info('Email sent successfully to: ' . $email);

        return redirect()->back()->with(['success' => 'Email sent successfully!', 'interviewDate' => $interviewDate]);
    } catch (\Exception $e) {
        Log::error('Failed to send email: ' . $e->getMessage());

        return redirect()->back()->withErrors(['error' => 'Failed to send email.']);
    }



}
}
