<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contactUsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->details['email'])->subject('Query From House Rental Website')->view('emails.contactMail',['details'=>$this->details]);
        // return [
        //     'driver' => env('MAIL_DRIVER', 'smtp'),
        //     'host' => env('MAIL_HOST', 'smtp.gmail.com'),
        //     'port' => env('MAIL_PORT', 587),
        //     'from' => ['address' => '<<your email>>', 'name' => '<<any name>>'],
        //     'encryption' => env('MAIL_ENCRYPTION', 'tls'),
        //     'username' => env('MAIL_USERNAME'),
        //     'password' => env('MAIL_PASSWORD'),
        //     'sendmail' => '/usr/sbin/sendmail -bs',
        //     'pretend' => false,
        // ];
    }
}