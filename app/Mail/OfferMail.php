<?php

namespace App\Mail;

use http\Client\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OfferMail extends Mailable
{
    use Queueable, SerializesModels;

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
        return $this->view('landing.emails.offer')
            ->with([
                'fields' => $this->fields,
            ])
            ->subject('Заявка предложения');
    }


}
