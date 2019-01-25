<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class QuestionMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $fields;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fields)
    {
        $this->fields = $fields;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('landing.emails.question')
            ->from('jack123456789@mail.ru')
            ->with([
                'fields' => $this->fields,
            ])
            ->subject('Вопрос с сайта Parovoz');
    }
}
