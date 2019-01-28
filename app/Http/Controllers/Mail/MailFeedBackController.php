<?php

namespace App\Http\Controllers\Mail;

use App\Http\Requests\FeedBackRequest;
use App\Http\Controllers\Controller;
use App\Mail\FeedBackMail;
use Mail;

class MailFeedBackController extends Controller
{
    public function send(FeedBackRequest $request)
    {
        $request->validated();
        Mail::to('jack123456789@mail.ru')->send(new FeedBackMail($request));
        return response()->json([
            'response' => true,
            'message'  => 'Ваше сообщение принято! В ближашее время мы свяжемся с Вами!'
        ]);
    }
}
