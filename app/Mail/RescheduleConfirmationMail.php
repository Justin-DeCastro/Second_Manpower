<?php
// app/Mail/RescheduleConfirmationMail.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RescheduleConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $application;

    /**
     * Create a new message instance.
     *
     * @return void
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
        return $this->view('emails.reschedule_confirmation')
                    ->with([
                        'name' => $this->application->name,
                        'date' => $this->application->new_date, // Ensure you're using 'new_date' here
                    ]);
    }
}
