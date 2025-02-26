<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\D_Contat_Us_Mail;
use App\Models\D_Contact_Us;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Log;

class DContactUsController extends Controller
{
    public function create(Request $request)
    {
        $contact = new D_Contact_Us();

        $contact->name = $request['name'];
        $contact->email = $request['email'];
        $contact->phoneno = $request['phoneno'];
        $contact->subject = $request['subject'];
        $contact->message = $request['message'];
        $contact->save();

        try {
            $maildata = [
                'Title' => 'Contact Details',
                'Name' => $request['name'],
                'Email' => $request['email'],
                'Phoneno' => $request['phoneno'],
                'Subject' => $request['subject'],
                'Message' => $request['message'],
            ];

            Mail::to('divyashaktienterprise25@gmail.com')->send(new D_Contat_Us_Mail($maildata));
            Log::info("Email Done");
            return redirect()->back()->with('success', 'Form submitted successfully!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Sorry Something Went Wrong.');
        }
    }
}
