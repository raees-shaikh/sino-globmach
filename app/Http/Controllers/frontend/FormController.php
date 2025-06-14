<?php

namespace App\Http\Controllers\frontend;

use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;

class FormController extends Controller
{
    //
    function showForm()
    {
        return view('contact');
    }
    function mailForm(Request $req)
    {
        //dd($req);
        $req->validate(
            [
                'name' => 'required|string|min:3|max:40',
                'email' => 'required|email:rfc,dns|min:5|max:40',
                'phone' => 'required|string|digits:10',
                'subject' => 'required|string|min:2|max:100',
                'message' => 'required|string|min:2|max:250',
                'recaptcha_response' => 'required',
            ],
            [],
            [
                'recaptcha_response' => 'google recaptcha'
            ]
        );
        $response = Http::get('https://www.google.com/recaptcha/api/siteverify' . '?secret=' . config('app.google_captcha_secret_key') . '&response=' . $req->recaptcha_response)->json();
        //dd($response);
        if ($response && $response['success'] == true && $response['score'] >= 0.5 && $response['action'] == 'submit') {
            $data =  (object) array();
            $data->name = $req->get('name');
            $data->email = $req->get('email');
            $data->phone = $req->get('phone');
            $data->subject = $req->get('subject');
            $data->message = $req->get('message');

            $contact = new Contact();
            $contact->name = $req->name;
            $contact->email = $req->email;
            $contact->phone = $req->phone;
            $contact->subject = $req->subject;
            $contact->message = $req->message;
            $contact->page_name = 'Contact';
            $contact->ip_address = $_SERVER['REMOTE_ADDR'];
            $contact->save();
            Mail::to(config('app.mail_to_address'))->send(new ContactMail($data));
            if (Mail::failures()) {
                return redirect('contact-us')->with([
                    "message" => "Something went wrong. Please contact us via email or phone.",
                    "alert-type" => "error"
                ]);
            } else {
                return redirect('/contact-us')->with([
                    "message" => "Message Sent Successfully",
                    "alert-type" => "success"
                ]);
            }
        } else {
            return redirect()->back()->with(['alert-type' => 'error', 'message' => 'Google Captcha is Invalid'])->withInput();
        }
    }
}
