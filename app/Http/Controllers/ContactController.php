<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
// Brevo/SendinBlue library ke sahi namespaces:
use SendinBlue\Client\Configuration;
use SendinBlue\Client\Api\TransactionalEmailsApi;
use SendinBlue\Client\Model\SendSmtpEmail;

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
            // API Key ko Render Environment Variables se uthayega
            $config = Configuration::getDefaultConfiguration()->setApiKey('api-key', env('BREVO_API_KEY'));
            $apiInstance = new TransactionalEmailsApi(new Client(), $config);

            // Aapka khubsurat design wala template render karein
            $htmlContent = view('emails.contact', ['details' => $details])->render();

            // Email bhejne ka structure
            $sendSmtpEmail = new SendSmtpEmail([
                'subject' => $request->subject,
                'sender'  => ['name' => $request->name, 'email' => $request->email],
                'to'      => [['name' => 'Ahmad Husain', 'email' => 'ahmadmohdrock007@gmail.com']],
                'htmlContent' => $htmlContent
            ]);

            // API ke through email bhej rahe hain (SMTP connection ki zarurat nahi)
            $apiInstance->sendTransacEmail($sendSmtpEmail);

            return redirect()->to(url()->previous() . '#contact')->with('message_sent', 'Message Sent!');
            
        } catch (\Exception $e) {
            // Agar koi error aaye, toh wahi page par error dikhayein
            return back()->withErrors(['msg' => 'Error: ' . $e->getMessage()]);
        }
    }    
}