<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnvoiMail extends Controller
{
    public function sendMail()
    {
        Mail::to('kaaouardaachraf@gmail.com')->send(new TestMail());
        return 'mail envoyé !';
    }
}
