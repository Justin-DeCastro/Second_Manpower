<?php

namespace App\Mail;

use App\Models\Application;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminRescheduleConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $application;
    public $newDate;

    /**
     * Create a new message instance.
     *
     * @param  Application  $application
     * @return void
     */
    public function __construct(Application $application)
    {
        $this->application = $application;
        $this->newDate = $application->new_date;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.admin_reschedule_confirmation')
                    ->subject('Interview Rescheduled Confirmation')
                    ->with([
                        'application' => $this->application,
                        'newDate' => $this->newDate,
                    ]);
    }
}
