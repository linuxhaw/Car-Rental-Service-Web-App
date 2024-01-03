<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;


class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Send email
        Mail::to('hteinaungwin17@gmail.com')->send(new ContactFormMail($request->all()));

        // return redirect('/contact')->with('success', 'Message sent successfully!');
        return redirect()->back()->withSuccess('Success, Message sent successfully !');
    }
}
