<?php

namespace App\Http\Controllers\Mail;

use App\Http\Requests\CallBackRequest;
use App\Http\Controllers\Controller;
use App\Mail\CallBackMail;
use App\Models\SiteOptions;
use Mail;

class MailCallBackController extends Controller
{
    public function send(CallBackRequest $request)
    {
        $request->validated();
        Mail::to(SiteOptions::find(1)->get('emailTo'))
            ->bcc(env('MAIL_CC'))
            ->send(new CallBackMail($request));
        return response()->json([
            'response' => true,
            'message'  => 'Ваша заявка принята'
        ]);
    }
}
