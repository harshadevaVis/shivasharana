<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    public function sendEmail(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'message' => 'required',
            'subject' => 'required',
            'name' => 'required',
        ],
            [
                'email.required' => 'Email is required!',
                'email.email' => 'Email format invalid!',
                'message.required' => 'Message is required!',
                'subject.required' => 'Subject is required!',
                'name.required' => 'Name is required!',
            ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors());
        }

        Mail::to('harshadeva@visirogs.com')->send(new ContactUsMail($request));

        return redirect()->back()->with('success',"Your request has been sent successfully!");
    }
}
