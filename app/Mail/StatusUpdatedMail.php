<?php
// app/Mail/StatusUpdatedMail.php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class StatusUpdatedMail extends Mailable
{
    public $subject;
    public $description;

    public function __construct($subject, $description)
    {
        $this->subject = $subject;
        $this->description = $description;
    }

    public function build()
    {
        return $this->view('emails.status_updated')
                    ->subject($this->subject)
                    ->with(['description' => $this->description]);
    }
}
