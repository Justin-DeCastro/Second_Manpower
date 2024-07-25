<?php

// app/Mail/ApplicationConfirmation.php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $interviewDate;

    public function __construct($interviewDate)
    {
        $this->interviewDate = $interviewDate;
    }

    public function build()
    {
        return $this->view('emails.application_confirmation')
                    ->with(['interviewDate' => $this->interviewDate]);
    }
}
