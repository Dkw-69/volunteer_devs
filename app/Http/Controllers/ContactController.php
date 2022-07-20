<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller{
    
    // show contact page
    public function contact(){
        return view('pages.contact');
    }

    // validate and send email
    public function sendEmail(Request $req){
        
        $this->validate($req, [
                        'name' => 'required|string',
                        'email' => 'required|email',
                        'msg' => 'required|string'
                ]);

        Mail::send('email', [
                'name' => $req->get('name'),
                'email' => $req->get('email'),
                'msg' => $req->get('msg') ],
                function ($message) use($req){
                        $message->from($req->get('email'));
                        $message->to('admin@webtrybe.com', 'Admin')
                        ->subject('Volunteer Devs Inquiry');
        });

        return back()->with('message', 'Thanks for contacting us, we will get back to you soon!');

    }
}
