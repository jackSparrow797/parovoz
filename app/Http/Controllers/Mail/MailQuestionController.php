<?php

namespace App\Http\Controllers\Mail;

use App\Http\Requests\QuestionRequest;
use App\Http\Controllers\Controller;
use App\Mail\QuestionMail;
use Mail;

class MailQuestionController extends Controller
{
    public function send(QuestionRequest $request)
    {
        $request->validated();
        Mail::to('jack123456789@mail.ru')->send(new QuestionMail($request));
        return response()->json([
            'response' => true,
            'message'  => 'Ваша заявка принята'
        ]);
    }
}
