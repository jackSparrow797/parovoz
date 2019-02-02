<?php

namespace App\Http\Controllers\Mail;

use App\Http\Requests\WorkRequest;
use App\Http\Controllers\Controller;
use App\Mail\WorkMail;
use App\Models\SiteOptions;
use Mail;

class MailWorkController extends Controller
{
    public function send(WorkRequest $request)
    {
        $request->validated();
        Mail::to(SiteOptions::find(1)->emailTo)
            ->bcc(env('MAIL_CC'))
            ->send(new WorkMail($request));
        return response()->json([
            'response' => true,
            'message'  => 'Ваша заявка принята'
        ]);
    }
}
