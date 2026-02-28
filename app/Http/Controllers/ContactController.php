<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Brevo\Client\Configuration;
use Brevo\Client\Api\TransactionalEmailsApi;
use Brevo\Client\Model\SendSmtpEmail;

class ContactController extends Controller
{
    public function sendEmail(Request $request) {
        $request->validate([
            'email'   => 'required|email',
            'name'    => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $details = [
            'email'   => $request->email,
            'name'    => $request->name,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        try {
            $config = Configuration::getDefaultConfiguration()->setApiKey('api-key', env('BREVO_API_KEY'));
            $apiInstance = new TransactionalEmailsApi(new Client(), $config);

           
            $htmlContent = view('emails.contact', ['details' => $details])->render();

            $sendSmtpEmail = new SendSmtpEmail([
                'subject' => $request->subject,
                'sender'  => ['name' => $request->name, 'email' => $request->email],
                'to'      => [['name' => 'Ahmad Husain', 'email' => 'ahmadmohdrock007@gmail.com']],
                'htmlContent' => $htmlContent
            ]);

            $apiInstance->sendTransacEmail($sendSmtpEmail);

            return redirect()->to(url()->previous() . '#contact')->with('message_sent', 'Message Sent!');
            
        } catch (\Exception $e) {
            return back()->withErrors(['msg' => 'Error: ' . $e->getMessage()]);
        }
    }    
}