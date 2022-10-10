<?php

namespace App\Http\Controllers;
use App\Mail\SampleMail;
use Illuminate\Http\Request;

use Mail;

class UserController extends Controller
{
    public function contact(){
        return view('contact');
    }

    public function sendEmail(Request $request)
    {
        $detail = [
            'name' =>$request->name,
            'email' =>$request->email,
            'phone' =>$request->phone,
            'msg' =>$request->msg,
        ];
        Mail::to('fayzanaliwork@gmail.com')->send(new SampleMail($detail));
        return back()->with(['message' => 'Email successfully sent!']);
    }

    public function index()
    {
        return view('index');
    }

    public function whyus(){
        return view('whyus');
    }
    public function portfolio(){
        return view('portfolio');
    }
    public function services(){
        return view('services');
    }
    public function animation2d(){
        return view('animation2d');
    }
    public function animation3d(){
        return view('animation3d');
    }
    public function logo(){
        return view('logo');
    }
    public function payoneer(){
        return view('payoneer');
    }
    public function illustration(){
        return view('illustration');
    }
    public function pearsona(){
        return view('pearsona');
    }
    public function whiteboard(){
        return view('whiteboard');
    }
    public function typography(){
        return view('typography');
    }
    public function screencast(){
        return view('screencast');
    }
    public function bit_torrent(){
        return view('bit-torrent');
    }

    public function explainer(){
        return view('explainer');
    }
    public function explainer_videos(){
        return view('explainer_videos');
    }
    public function ace_hardware(){
        return view('ace_hardware');
    }

    public function policy(){
        return view('policy');
    }

    public function terms(){
        return view('terms');
    }

    public function commercial(){
        return view('commercial');
    }
    public function webdevelopment(){
        return view('webdevelopment');
    }
    public function appdevelopment(){
        return view('appdevelopment');
    }
    public function graphic(){
        return view('graphic');
    }
    public function brand(){
        return view('brand');
    }
    public function uiux(){
        return view('uiux');
    }
    public function software(){
        return view('software');
    }
    public function social(){
        return view('social');
    }
    public function videoediting(){
        return view('videoediting');
    }
    public function term(){
        return view('term');
    }
    public function home(){
        return view('home');
    }
    public function home2(){
        return view('home2');
    }
    public function contact2(){
        return view('contact2');
    }
}
