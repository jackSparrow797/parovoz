<?php

namespace App\Http\Controllers\Mail;

use App\Http\Requests\PayneRequest;
use App\Mail\PayneMail;
use App\Http\Controllers\Controller;
use App\Models\SiteOptions;
use Mail;

class MailPayneController extends Controller
{
    public function send(PayneRequest $request)
    {
        $request->validated();
        Mail::to(SiteOptions::find(1)->emailTo)
            ->bcc(env('MAIL_CC'))
            ->send(new PayneMail($request));
        return response()->json([
            'response' => true,
            'message'  => 'Ваша заявка принята'
        ]);
    }
}
