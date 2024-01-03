<?php

namespace App\Http\Controllers;

use App\Feedbackform;
use Illuminate\Http\Request;
use DB;
use Auth;

class FeedbackController extends Controller
{
    public function showForm()
    {
        return view('faq');
    }

    public function submitForm(Request $request)
    {
        // echo '<prep>';
        // print_r($request->all());

        $feedback = new Feedbackform;
        $feedback->name = $request['name'];
        $feedback->email = $request['email'];
        $feedback->message = $request['feedback'];
        $feedback->save();
        return redirect()->back()->withSuccess('Success, Feedback submitted successfully !');
    }
}
