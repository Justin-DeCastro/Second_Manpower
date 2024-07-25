<?php

// In your InterviewAssigned Mailable class

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InterviewAssigned extends Mailable
{
    use Queueable, SerializesModels;

    public $application;

    // Add a public property to hold the date
    public $date;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($application)
    {
        $this->application = $application;
        // Assuming 'date' is a property of $application
        $this->date = $application->date;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.interview_assigned')
                    ->with([
                        'name' => $this->application->name,
                        'date' => $this->date,
                    ]);
    }
    
}
