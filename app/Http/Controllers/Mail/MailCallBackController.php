<?php

namespace App\Http\Controllers\Mail;

use App\Http\Requests\CallBackRequest;
use App\Http\Controllers\Controller;
use App\Mail\CallBackMail;
use Mail;

class MailCallBackController extends Controller
{
    public function send(CallBackRequest $request)
    {
        $request->validated();
        Mail::to('jack123456789@mail.ru')->send(new CallBackMail($request));
        return response()->json([
            'response' => true,
            'message'  => 'Ваша заявка принята'
        ]);
    }
}
