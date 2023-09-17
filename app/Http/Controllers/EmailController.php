<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DynamicMail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        // $recipient = $request->input('recipient');
        // $subject = $request->input('subject');
        // $content = $request->input('content');

        $data = [
            'content' => 'test test',
        ];

        Mail::to('sdrdtemp@gmail.com')->send(new DynamicMail('Mailing system testing', $data));

        dd("Email sent successfully!");
    }
}
