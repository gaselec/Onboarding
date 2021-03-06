<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserSignedUp extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * The user instance.
     *
     * @var user
     */
    public $user;

    /**
     * Create a new message instance.
     * @param user $user
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
        return $this
            ->from(env('ADMIN_EMAIL'))
            ->view('mail.userSignedUp');
    }
}
