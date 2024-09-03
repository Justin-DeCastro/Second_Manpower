<?php

// app/Mail/InterviewRescheduled.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InterviewRescheduled extends Mailable
{
    use Queueable, SerializesModels;

    public $application; // The Application instance

    /**
     * Create a new message instance.
     *
     * @param $application
     */
    public function __construct($application)
    {
        $this->application = $application;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.interview_rescheduled')
                    ->subject('Interview Rescheduled')
                    ->with([
                        'newDate' => $this->application->interview_date,
                    ]);
    }
}
