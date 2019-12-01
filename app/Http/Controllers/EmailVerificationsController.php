<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailVerificationsController extends Controller
{
    public $email;
    public function index($email){

        $this->email = $email;
        $random_key = mt_rand(150000, 990000);

        $data = [
            'random_key'=>$random_key
        ];

        Mail::send('mail.test', $data, function($message){
            $message->to($this->email, '')->subject("Verify your Legacy-Interactive Account!");
        });

        return view('verification.index', compact('email','random_key'));


    }
}
