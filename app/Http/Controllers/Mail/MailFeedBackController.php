<?php

namespace App\Http\Controllers\Mail;

use App\Http\Requests\FeedBackRequest;
use App\Http\Controllers\Controller;
use App\Mail\FeedBackMail;
use App\Models\SiteOptions;
use Mail;

class MailFeedBackController extends Controller
{
    public function send(FeedBackRequest $request)
    {
        $request->validated();
        Mail::to(SiteOptions::find(1)->emailTo)
            ->bcc(env('MAIL_CC'))
            ->send(new FeedBackMail($request));
        return response()->json([
            'response' => true,
            'message'  => 'Ваше сообщение принято! В ближашее время мы свяжемся с Вами!'
        ]);
    }
}
