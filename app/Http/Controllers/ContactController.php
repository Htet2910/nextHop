<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function sentContactInfo(ContactRequest $request)
    {
        $data =$request->all();
        
        $data['messageLines'] = explode("\n", $request->get('message'));
        Mail::send('email.contact', $data, function ($message) use ($data) {
        $message->subject('Contact Form: '.$data['name'])
              ->from(env('MAIL_USERNAME'))
              ->to('htethteteizaw@gmail.com');
         // dd($data);
    return redirect()->back()->with('status','Thank you for your message. It has been sent.');
     
     });
    }

    // public function index()
    // {
    //     return view('frontend.contact');
    // }

    // public function mailsending(Request $request)
    // {
    //     $contact_data = [
    //         'fullname' => $request->input('fullname'),
    //         'email' => $request->input('email'),
    //         'subject' => $request->input('subject'),
    //         'message' => $request->input('message'),
    //     ];
    //     Mail::to('htethteteizaw@gmail.com')->send(new ContactMailable($contact_data));
    //     return redirect()->back()->with('status','Thank you for contact us. We will get back to asap.!');
    // }
}
