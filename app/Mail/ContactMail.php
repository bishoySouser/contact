<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

use App\Settings;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $body;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->email = $request;
        $this->body = Settings::where('id', 1)->firstOrFail();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Contact us')
                    ->from('Bishoy@user.com')
                    ->to('test@test.com')
                    ->view('email.emailcontact');
    }
}
