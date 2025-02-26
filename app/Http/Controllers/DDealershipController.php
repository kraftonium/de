<?php

namespace App\Http\Controllers;

use App\Mail\D_Dealership_Mail;
use App\Models\D_Dealership;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class DDealershipController extends Controller
{
    public function create(Request $request)
    {
        $dealer = new D_Dealership();
        $dealer->name = $request['name'];
        $dealer->email = $request['email'];
        $dealer->phoneno = $request['phoneno'];
        $dealer->dealership = $request['dealership'];
        $dealer->city = $request['city'];
        $dealer->state = $request['state'];
        $dealer->pincode = $request['pincode'];
        $dealer->address = $request['address'];
        $dealer->save();

        try {
            // Log::info('start');
            $maildata = [
                'Title' => 'Delaership Details',
                'Name' => $request['name'],
                'Email' => $request['email'],
                'Phoneno' => $request['phoneno'],
                'Dealership' => $request['dealership'],
                'City' => $request['city'],
                'State' => $request['state'],
                'Pincode' => $request['pincode'],
                'Address' => $request['address'],
            ];
            // Log::info('m');
            Mail::to('divyashaktienterprise25@gmail.com')->send(new D_Dealership_Mail($maildata));

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
