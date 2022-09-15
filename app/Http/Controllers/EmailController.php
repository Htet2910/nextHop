<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendingEmail;

class EmailController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function send(Request $request)
    {
        $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
        ]);

        $data = array(
            'name' => $request->name,
            'message' => $request->message
        );

        Mail::to('hteteilay2012@gmail.com')->send(new sendingEmail($data));
        return back()->with('success', 'Your message has been sent. Thank you!');
    }
}
