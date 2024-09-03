<?php

namespace App\Http\Controllers;

use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicantNotification;
use App\Mail\ApplicationInProcess;
use App\Mail\InterviewAssigned;
use App\Mail\FailedAssigned;
use App\Mail\NoShowAssigned;
use App\Mail\NotQualifiedAssigned;
use App\Mail\PoolingAssigned;
use App\Mail\InterviewRescheduled;
use App\Mail\RescheduleNotification;
use App\Mail\RescheduleConfirmationMail;
use App\Mail\AdminRescheduleConfirmationMail;
use App\Mail\InterviewDeclined;
use App\Mail\AdminRescheduleDeclineMail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HiringController extends Controller
{
    public function searchApplications(Request $request)
    {
        $query = $request->input('query');

        $applications = Application::query()
            ->where('id', 'like', "%$query%")
            ->orWhere('name', 'like', "%$query%")
            ->orWhere('email', 'like', "%$query%")
            ->orWhere('address', 'like', "%$query%")
            ->orWhere('status', 'like', "%$query%")
            ->orWhere('position', 'like', "%$query%")
            ->orWhere('message', 'like', "%$query%")
            ->orWhere('phone', 'like', "%$query%")
            ->get();

        return response()->json($applications);
    }

    public function applications()
    {
        $user = User::find(Auth::user()->id);
        $applications = Application::all();
        return view('admin.hiring', compact('applications', 'user'));
    }

    public function calendar()
    {
        $interviews = Application::whereNotNull('date')
            ->where('applicant_status', 'Accepted')
            ->get(['id', 'full_name', 'date']);

        return view('admin.calendar', ['interviews' => $interviews]);
    }

    public function submitApplication(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'message' => 'nullable|string',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $resumeName = time() . '_' . $request->file('resume')->getClientOriginalName();
        $request->file('resume')->move(public_path('hiring'), $resumeName);

        $application = new Application();
        $application->name = $request->name;
        $application->email = $request->email;
        $application->address = $request->address;
        $application->phone = $request->phone;
        $application->position = $request->position;
        $application->message = $request->message;
        $application->applicant_status = 'Pending';
        $application->resume = 'hiring/' . $resumeName;
        $application->save();

        $ccRecipients = ['abicmprecruitmenthub1@gmail.com', 'abicmprecruitmenthub2@gmail.com'];

        try {
            Mail::to($application->email)
                ->cc($ccRecipients)
                ->send(new ApplicationInProcess($application));

            return redirect()->back()->with('success', 'Your application has been submitted successfully!');
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to send email', 'error' => $e->getMessage()], 500);
        }
    }

    public function changeStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:For Interview,For Pooling,Not Qualified,No Show,Failed,Done',
            'date' => 'nullable|date_format:Y-m-d\TH:i'
        ]);

        $application = Application::findOrFail($id);
        $application->status = $request->status;

        if ($request->filled('date')) {
            $date = date('Y-m-d H:i:s', strtotime($request->date));
            $application->date = $date;
        }

        $application->save();

        switch ($request->status) {
            case 'For Interview':
                Mail::to($application->email)->send(new InterviewAssigned($application));
                break;
            case 'For Pooling':
                // Mail::to($application->email)->send(new PoolingAssigned($application));
                break;
            case 'Done':
                // You might want to handle "Done" status specific actions here, if any
                break;
            case 'Not Qualified':
                Mail::to($application->email)->send(new NotQualifiedAssigned($application));
                break;
            case 'No Show':
                Mail::to($application->email)->send(new NoShowAssigned($application));
                break;
            case 'Failed':
                Mail::to($application->email)->send(new FailedAssigned($application));
                break;
        }

        return redirect()->back()->with('success', 'Status assigned successfully!');
    }

    public function attendInterview($id)
    {
        $application = Application::findOrFail($id);
        $application->status = 'For Interview';
        $application->attended = true;
        $application->save();

        return redirect()->back()->with('success', 'Applicant attended status updated to For Interview.');
    }

    public function getInterviews()
    {
        $interviews = Application::select('id', 'full_name', 'date', 'job_name', 'job_category')->get();
        return view('admin.calendar')->with('interviews', $interviews);
    }

    public function schedule()
    {
        $interviews = Application::whereNotNull('date')->get(['id', 'full_name', 'date']);
        return view('admin.calendar', ['interviews' => $interviews]);
    }

    public function getJobApplications(Request $request)
    {
        if ($request->ajax()) {
            $data = Application::select('id', 'name', 'email', 'address', 'status', 'position', 'message', 'resume', 'date', 'phone');
            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    $btn = '<form method="POST" action="' . route('change-status', $row->id) . '">
                        ' . csrf_field() . '
                        <div class="form-group">
                            <label for="date">Choose Interview Date and Time:</label>
                            <input type="datetime-local" id="date" name="date" class="form-control" value="' . old('date', $row->date) . '">
                        </div>
                        <div class="form-group">
                            <label for="status">Status:</label>
                            <select class="form-select" name="status" id="status">
                                <option value="For Interview"' . (old('status', $row->status) == 'For Interview' ? 'selected' : '') . '>For Interview</option>
                                <option value="For Pooling"' . (old('status', $row->status) == 'For Pooling' ? 'selected' : '') . '>For Pooling</option>
                                <option value="Done"' . (old('status', $row->status) == 'Done' ? 'selected' : '') . '>Done</option>
                                <option value="Not Qualified"' . (old('status', $row->status) == 'Not Qualified' ? 'selected' : '') . '>Not Qualified</option>
                                <option value="No Show"' . (old('status', $row->status) == 'No Show' ? 'selected' : '') . '>No Show</option>
                                <option value="Failed"' . (old('status', $row->status) == 'Failed' ? 'selected' : '') . '>Failed</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Update Application</button>
                    </form>';
                    return $btn;
                })
                ->editColumn('resume', function ($row) {
                    return '<a href="' . asset($row->resume) . '" target="_blank">Download Resume</a>';
                })
                ->rawColumns(['action', 'resume'])
                ->make(true);
        }

        return view('admin.hiring');
    }

    public function acceptInterview($id)
    {
        $application = Application::findOrFail($id);
        $application->applicant_status = 'Accepted';
        $application->save();

        Mail::to($application->email)->send(new InterviewAssigned($application));

        return redirect()->back()->with('success', 'Successful');
    }

    public function declineInterview($id)
    {
        $application = Application::findOrFail($id);
        $application->applicant_status = 'Declined';
        $application->save();

        Mail::to('abicmanpower@gmail.com')->send(new InterviewDeclined($application));

        return redirect()->back()->with('success', 'Interview declined successfully!');
    }

    public function showRescheduleForm($id)
    {
        $application = Application::findOrFail($id);
        return view('interview.reschedule', compact('application'));
    }
    public function rescheduleInterview(Request $request, $applicationId)
{
    $request->validate([
        'new_date' => ['required', 'date', 'after_or_equal:today', 'before_or_equal:' . now()->addDays(7)->toDateString()],
    ]);

    // Find the application and update the interview date
    $application = Application::findOrFail($applicationId);
    $application->interview_date = $request->input('new_date');
    $application->save();

    return redirect()->back()->with('success', 'Interview rescheduled successfully.');
}


    public function reschedule(Request $request, $id)
    {
        $request->validate([
            'new_date' => 'required|date|after:today',
        ]);

        $application = Application::findOrFail($id);
        $application->new_date = $request->input('new_date');
        $application->save();

        Mail::to('abicmanpower@gmail.com')->send(new RescheduleConfirmationMail($application));

        return redirect()->route('interview.reschedule', $application->id)
            ->with('success', 'Interview rescheduled successfully!');
    }

    public function acceptReschedule($id)
    {
        \Log::info("acceptReschedule method called for application ID: $id");

        $application = Application::findOrFail($id);
        $application->applicant_status = 'Accepted';
        $application->date = $application->new_date;
        $application->save();

        \Log::info("Sending email to: " . $application->email);
        Mail::to($application->email)->send(new AdminRescheduleConfirmationMail($application));

        return redirect()->back()->with('success', 'Rescheduled interview accepted successfully!');
    }

    public function declineReschedule($id)
    {
        \Log::info("declineReschedule method called for application ID: $id");

        $application = Application::findOrFail($id);
        $application->status = 'Declined';
        $application->applicant_status = 'Declined';
        $application->save();

        \Log::info("Sending email to: " . $application->email);
        Mail::to($application->email)->send(new AdminRescheduleDeclineMail($application));

        return redirect()->back()->with('error', 'Rescheduled interview declined successfully!');
    }
}
