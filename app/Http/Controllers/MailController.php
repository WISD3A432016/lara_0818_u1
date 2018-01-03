<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function getSend()
    {

        $content='Hello test email~';
        $data = ['name' => '張三', 'content'=> $content, ];
        Mail::send('email.test', $data, function($message){
            $message->subject('Laravel 5 Mail');
            $message->to('sun.3a432016@gmail.com', '張三');
            $message->from('renthouse104@gmail.com', 'admin');
        });


    }
}
