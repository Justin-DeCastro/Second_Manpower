<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InterviewDeclined extends Mailable
{
    use Queueable, SerializesModels;

    public $application;
    public $reason;
    public $userName;

    /**
     * Create a new message instance.
     *
     * @param  mixed  $application
     * @param  string  $reason
     * @param  string  $userName
     * @return void
     */
    public function __construct($application, )
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
        return $this->view('emails.interview_decline')
                    ->with([
                        'name' => $this->application->name,
                       
                       
                    ]);
    }
}
