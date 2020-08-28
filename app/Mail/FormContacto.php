<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormContacto extends Mailable
{
    use Queueable, SerializesModels;

    public $author;
    public $email;
    public $phone;
    public $comment;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($author, $email, $phone, $comment)
    {
        $this->author = $author;
        $this->email = $email;
        $this->phone = $phone;
        $this->comment = $comment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.formcontacto');
    }
}
