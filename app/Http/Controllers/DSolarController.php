<?php

namespace App\Http\Controllers;

use App\Mail\D_Solar_Mail;
use App\Models\D_Solar;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DSolarController extends Controller
{
    public function create(Request $request)
    {
        $solar = new D_Solar();
        $solar->name = $request['name'];
        $solar->email = $request['email'];
        $solar->phoneno = $request['phoneno'];
        $solar->subject = $request['subject'];
        $solar->city = $request['city'];
        $solar->state = $request['state'];
        $solar->message = $request['message'];
        $solar->save();

        try {
            // Log::info('start');
            $maildata = [
                'Title' => 'Solar Details',
                'Name' => $request['name'],
                'Email' => $request['email'],
                'Phoneno' => $request['phoneno'],
                'Subject' => $request['subject'],
                'City' => $request['city'],
                'State' => $request['state'],
                'Message' => $request['message'],
            ];
            // Log::info('m');
            Mail::to('divyashaktienterprise25@gmail.com')->send(new D_Solar_Mail($maildata));

            if (Mail::failures()) {
                // Log::error('Mail not sent, there are failures.');
                return redirect()->back()->with('error', 'Mail not sent.');
            }
            // Log::info('end');
            return redirect()->back()->with('success', 'Form submitted successfully!');
        } catch (Exception $e) {
            // Log::error('Mail sending failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Sorry Something Went Wrong.');
            // Log::info('cancel');
        }
    }
}
