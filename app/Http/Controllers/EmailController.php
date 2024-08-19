<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $email = "zohaibkhanalizai786@gmail.com"; // Assuming the input field name for email is 'email'

        if ($email) {
            Mail::to($email)->send(new SendEmail($request->all()));
            return redirect()->back();
        } else {
            return "No email found to send email.";
        }
    }
}
