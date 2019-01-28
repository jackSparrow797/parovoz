<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CallBackMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $fields;

    /**
     * Create a new message instance.
     *
     * @param $fields
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
        return $this->view('landing.emails.callback')
            ->with([
                'fields' => $this->fields,
            ])
            ->subject('Заявка на обратный звонок с сайта ' . env('APP_NAME'));
    }
}
