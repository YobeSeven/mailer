<?php

namespace App\Http\Controllers;

use App\Mail\MailSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function store(Request $request){
        $request->validate([
            "mail" => ["required","string","email","max:255"],
            "subject" => ["required","string","max:255"],
            "content" => ["required","string"]
        ]);

        // $data = [
        //     "mail" => $request->mail,
        //     "subject" => $request->subject,
        //     "content" => $request->content,
        // ];

        Mail::to($request->mail)->send(new MailSender($request));
        return redirect()->back();
    }
}
