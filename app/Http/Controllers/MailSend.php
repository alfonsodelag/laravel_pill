
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\SendMail;
use App\Http\Controllers\Controller;

class MailSend extends Controller
{
    public function mailsend()
    {
        $details = [
            'title' => 'Title: Mail from Real Programmer',
            'body' => 'Body: This is for testing email using smtp'
        ];

        \Mail::to('alfonsodelag1@gmail.com')->send(new SendMail($details));
        return view('emails.thanks');
    }

}
