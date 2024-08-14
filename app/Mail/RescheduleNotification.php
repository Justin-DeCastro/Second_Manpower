<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RescheduleNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $application;
    public $newDate;

    public function __construct($application, $newDate)
    {
        $this->application = $application;
        $this->newDate = $newDate;
    }

    public function build()
    {
        return $this->view('emails.reschedule_notification')
                    ->subject('Interview Reschedule Request');
    }
}
