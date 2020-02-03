<?php

namespace App\Mail;

use App\User;
use Auth;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailToAdmin extends Mailable
{
    use Queueable, SerializesModels;
     
    public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = Auth::User()->email;
        $user = Auth::User()->name;
        return $this->from($email)
        ->view('email.to_admin', compact('user'));
    }
}
