<?php

namespace App\Http\Controllers\Mail;

use App\Http\Requests\QuestionRequest;
use App\Http\Controllers\Controller;
use App\Mail\QuestionMail;
use App\Models\SiteOptions;
use Mail;

class MailQuestionController extends Controller
{
    public function send(QuestionRequest $request)
    {
        $request->validated();
        Mail::to(SiteOptions::find(1)->emailTo)
            ->bcc(env('MAIL_CC'))
            ->send(new QuestionMail($request));
        return response()->json([
            'response' => true,
            'message'  => 'Ваша заявка принята'
        ]);
    }
}
