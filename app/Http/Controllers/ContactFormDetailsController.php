<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\ContactFormDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;



class ContactFormDetailsController extends Controller
{


    public function sendEmail(Request $request): \Illuminate\Http\JsonResponse
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'phone' => 'required',
        ]);

        Log::info('Contact Form Data:', $validatedData);
        $contactForm = ContactFormDetails::create($validatedData);

        Mail::to('wandawairimu@gmail.com')->queue(new ContactFormMail($validatedData));

        return response()->json(['message' => 'Email has been queued for sending']);
    }
    public function getSubmittedForms(): \Illuminate\Http\JsonResponse
    {
        $contacts = ContactFormDetails::all();
        return response()->json($contacts);
    }

}
