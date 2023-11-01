<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class forgetPassword extends Mailable
{

    private $link;

    public function __construct($link)
    {
        $this->link = $link;
    }


    public function build()
    {
        return $this->subject('فراموشی رمز عبور')
            ->view('mail.forget_password', [
                'link' => $this->link
            ]);

    }
}
