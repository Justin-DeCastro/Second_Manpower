<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InterviewScheduled extends Mailable
{
    use Queueable, SerializesModels;

    public $application;

    public function __construct($application)
    {
        $this->application = $application;
    }

    public function build()
    {
        return $this->view('emails.interview_scheduled')
                    ->with([
                        'name' => $this->application->name,
                        'date' => $this->application->date,
                        'position' => $this->application->position,
                    ]);
    }
}
