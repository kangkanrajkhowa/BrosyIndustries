<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\JsonResponse;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];

        try {
            // Send the email
            Mail::to('kangkan.raj@gmail.com')->send(new ContactMail($data));

            return response()->json(['message' => 'Your message has been sent. Thank you!'], 200);
        } catch (Exception $e) {
            // Log the exception
            Log::error($e->getMessage());

            return response()->json(['message' => 'An error occurred while sending the email.'], 500);
        }
    }
}
