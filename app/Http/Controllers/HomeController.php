<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function send(Request $request)
    {
        $data = array(
            'name'      =>  $request->name,
            'email'     =>  $request->email,
            'phone'     => $request->phone,
            'message'     =>  $request->message,
        );

        Mail::to('info@alifenterprise.co')->send(new SendMail($data));
        return back()->with('success', 'Thank you for contact');
    }
}
