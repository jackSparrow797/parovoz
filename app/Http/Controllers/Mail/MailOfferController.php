<?php

namespace App\Http\Controllers\Mail;

use App\Http\Requests\OfferRequest;
use App\Mail\OfferMail;
use App\Models\SiteOptions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Mail;

class MailOfferController extends Controller
{
    public function send(OfferRequest $request)
    {
        $request->validated();
        Mail::to(SiteOptions::find(1)->emailTo)
            ->bcc(env('MAIL_CC'))
            ->send(new OfferMail($request));
        return response()->json([
            'response' => true,
            'message'  => 'Ваша заявка принята'
        ]);
    }
}
