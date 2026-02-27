<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request){
        $request->validate([
            'email'=> 'required|email',
            'name'=> 'required',
            'subject'=> 'required',
            'message'=> 'required',
            
        ]);
        $details = [
            'email'   => $request->email,
            'name'    => $request->name,
            'subject' => $request->subject,
            'message' => $request->message
        ];
        try {
            Mail::to('ahmadmohdrock007@gmail.com')->send(new ContactMail($details));
            return redirect()->to(url()->previous() . '#contact')->with('message_sent', 'Message Sent!');
        } catch (\Exception $e) {
            return back()->withErrors(['msg' => 'Error: ' . $e->getMessage()]);
        }
    }    
}
