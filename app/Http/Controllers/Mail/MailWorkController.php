<?php

namespace App\Http\Controllers\Mail;

use App\Http\Requests\WorkRequest;
use App\Http\Controllers\Controller;
use App\Mail\WorkMail;
use Mail;

class MailWorkController extends Controller
{
    public function send(WorkRequest $request)
    {
        $request->validated();
        Mail::to('jack123456789@mail.ru')->send(new WorkMail($request));
        return response()->json([
            'response' => true,
            'message'  => 'Ваша заявка принята'
        ]);
    }
}
