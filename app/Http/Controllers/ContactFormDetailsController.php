<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\ContactFormDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormDetailsController extends Controller
{

    public function sendEmail(Request $request)
    {

        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'phone' => 'required',

        ]);
        $contactFormDetails = ContactFormDetails::create($validatedData);


        Mail::to('wandawairimu@gmail.com')->send(new ContactFormMail($validatedData));

        return response()->json(['message' => 'Email sent successfully']);

    }
}
