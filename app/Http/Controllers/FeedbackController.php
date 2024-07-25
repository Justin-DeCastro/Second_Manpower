<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    /**
     * Show the feedback form.
     *
     * @return \Illuminate\View\View
     */
    public function testimonials()
    {
        $feedback = Feedback::all();
        return view('admin.testimonials',compact('feedback'));
    }

    /**
     * Store the feedback.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
           
            'message' => 'required|string',
        ]);

        Feedback::create($request->all());

        return redirect()->back()->with('success', 'Feedback submitted successfully!');
    }
}
