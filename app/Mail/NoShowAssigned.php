<?php

namespace App\Mail;

use App\Models\Application;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NoShowAssigned extends Mailable
{
    use Queueable, SerializesModels;

    public $application;

    public function __construct(Application $application)
    {
        $this->application = $application;
    }

    public function build()
    {
        return $this->view('emails.no_show_assigned')
                    ->subject('No Show')
                    ->with([
                        'name' => $this->application->name,
                        'position' => $this->application->position,
                        // Add other variables you need in the email view
                    ]);
    }
}
