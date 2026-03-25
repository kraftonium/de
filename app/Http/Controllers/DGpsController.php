<?php

namespace App\Http\Controllers;

use App\Mail\D_Gps_Mail;
use App\Models\D_Gps;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DGpsController extends Controller
{
    public function create(Request $request)
    {
        $gps = new D_Gps();
        $gps->name = $request['name'];
        $gps->email = $request['email'];
        $gps->phoneno = $request['phoneno'];
        $gps->subject = $request['subject'];
        $gps->city = $request['city'];
        $gps->state = $request['state'];
        $gps->message = $request['message'];
        $gps->save();

        try {
            // Log::info('start');
            $maildata = [
                'Title' => 'GPS Details',
                'Name' => $request['name'],
                'Email' => $request['email'],
                'Phoneno' => $request['phoneno'],
                'Subject' => $request['subject'],
                'City' => $request['city'],
                'State' => $request['state'],
                'Message' => $request['message'],
            ];
            // Log::info('m');
            Mail::to('divyashaktienterprise25@gmail.com')->send(new D_Gps_Mail($maildata));

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
        $gpss = D_Gps::paginate(10);
        $data = compact('gpss');
        return view('backend.manage-gps.manage-gps')->with($data);
    }

    public function delete($id)
    {
        $gps = D_Gps::find($id)->delete();
        return redirect()->back();
    }
}
