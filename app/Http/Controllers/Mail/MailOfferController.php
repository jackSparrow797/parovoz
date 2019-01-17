<?php

namespace App\Http\Controllers\Mail;

use App\Mail\OfferMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailOfferController extends Controller
{
    public function send(Request $request)
    {
//        $fields = [];
//        $fields['title'] = $request->title;
//        $fields['name'] = $request->name;
//        $fields['email'] = $request->email;
//        $fields['phone'] = $request->phone;
//        $fields['text'] = $request->text;
        Mail::to('jack123456789@mail.ru')->send(new OfferMail($request));
    }
}
