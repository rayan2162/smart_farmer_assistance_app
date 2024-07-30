<?php
// app/Http/Controllers/MailController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function create()
    {
        return view('emails.sendEmailPage');
    }

    public function send(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $details = [
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::send('emails.contact', compact('details'), function ($message) use ($details) {
            $message->to('your-email@example.com')
                    ->subject('Contact Us Message');
        });

        return back()->with('success', 'Email sent successfully!');
    }
}
