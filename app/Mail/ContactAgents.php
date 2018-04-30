<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactAgents extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $user;

    /**
     * Create a new message instance.
     *
     * @param Request $data
     */
    public function __construct(Request $data, User $user)
    {
        $this->data = $data;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("donotreply@ferdenrealtycorporation.com", "Ferden Realty Corporation")
                    ->markdown('emails.contact.agents');
    }
}
