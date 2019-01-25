<?php

namespace App\Http\Controllers\Mail;

use App\Http\Requests\PayneRequest;
use App\Mail\PayneMail;
use App\Http\Controllers\Controller;
use Mail;

class MailPayneController extends Controller
{
    public function send(PayneRequest $request)
    {
        $request->validated();
        Mail::to('jack123456789@mail.ru')->send(new PayneMail($request));
        return response()->json([
            'response' => true,
            'message'  => 'Ваша заявка принята'
        ]);
    }
}
