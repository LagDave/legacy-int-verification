<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailVerificationsController extends Controller
{
    public function index($email){

        $random_key = mt_rand(150000, 990000);

        $data = [
            'title'=>$random_key,
            'content'=> "Use the code above to verify your account."
        ];

        Mail::send('mail.test', $data, function($message){
            $message->to('rdavephp@gmail.com', '')->subject("Verify your Legacy-Interactive Account!");
        });

        return view('verification.index', compact('email','random_key'));


    }
    public function verifycode(){

    }
}
