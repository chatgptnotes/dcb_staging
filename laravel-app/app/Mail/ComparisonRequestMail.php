<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ComparisonRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $senderName;
    public $senderEmail;

    public function __construct($senderName, $senderEmail)
    {
        $this->senderName = $senderName;
        $this->senderEmail = $senderEmail;
    }

    public function build()
    {
        return $this->subject('New Comparison Request')
                    ->view('emails.comparison_request');
    }
}
