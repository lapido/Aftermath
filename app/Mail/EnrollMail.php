<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EnrollMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $event;

    public function __construct($event)
    {
        $this->event = $event;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.email_2')
            ->from($this->event['email'])
            ->with([
                        'name' => $this->event['name'],
                        'program' => $this->event['program'],
                        'phoneNo' => $this->event['phoneNo'],
                        'radioInline'=> $this->event['radioInline'],
                        'lga'=>$this->event['lga'],
                        'ppa'=>$this->event['ppa'],
                        'email'=>$this->event['email'],
                    ]);
    }
}
