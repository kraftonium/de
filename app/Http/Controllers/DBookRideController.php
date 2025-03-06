<?php

namespace App\Http\Controllers;

use App\Mail\D_Book_Ride_Mail;
use App\Models\D_Book_Ride;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class DBookRideController extends Controller
{
    public function create(Request $request)
    {
        $dealer = new D_Book_Ride();
        $dealer->name = $request['name'];
        $dealer->email = $request['email'];
        $dealer->phoneno = $request['phoneno'];
        $dealer->vehicle = $request['vehicle'];
        $dealer->ride_date = $request['ride_date'];
        $dealer->ride_time = $request['ride_time'];
        $dealer->city = $request['city'];
        $dealer->state = $request['state'];
        $dealer->pincode = $request['pincode'];
        $dealer->address = $request['address'];
        $dealer->save();

        try {
            // Log::info('start');
            $maildata = [
                'Title' => 'Book Ride Details',
                'Name' => $request['name'],
                'Email' => $request['email'],
                'Phoneno' => $request['phoneno'],
                'Vehicle' => $request['vehicle'],
                'Ride_Date' => $request['ride_date'],
                'Ride_Time' => $request['ride_time'],
                'City' => $request['city'],
                'State' => $request['state'],
                'Pincode' => $request['pincode'],
                'Address' => $request['address'],
            ];
            // Log::info('m');
            Mail::to('divyashaktienterprise25@gmail.com')->send(new D_Book_Ride_Mail($maildata));

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

    public function manage()
    {
        $rides = D_Book_Ride::paginate(10);
        $data = compact('rides');
        return view('backend.manage-book-ride.manage-book-ride')->with($data);
    }

    public function delete($id)
    {
        $ride = D_Book_Ride::find($id)->delete();
        return redirect()->back();
    }
}