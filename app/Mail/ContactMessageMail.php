<?php

namespace App\Mail;

use App\Models\ContactMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessageMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactMessage;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ContactMessage $contactMessage)
    {
        $this->contactMessage = $contactMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('decastrojustin321@gmail.com', 'ABIC MANPOWER')
                    ->view('emails.contact_message')
                    ->with([
                        'name' => $this->contactMessage->name,
                        'email' => $this->contactMessage->email,
                        'contact_number' => $this->contactMessage->contact_number,
                        'country' => $this->contactMessage->country,
                        'subject' => $this->contactMessage->subject,
                        'message_content' => $this->contactMessage->message, // renamed to avoid conflict
                    ]);
    }
}
