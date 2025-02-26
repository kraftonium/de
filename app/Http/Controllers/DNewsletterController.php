<?php

namespace App\Http\Controllers;

use App\Mail\D_Newsletter_Mail;
use App\Models\D_Newsletter;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;


class DNewsletterController extends Controller
{
    public function create(Request $request)
    {
        $news = new D_Newsletter();
        $news->phoneno = $request['nlphoneno'];
        $news->save();

        try {
            // Log::info('start');
            $maildata = [
                'Title' => 'Newsletter Details',
                'Phoneno' => $request['nlphoneno'],
            ];
            // Log::info('m');
            Mail::to('divyashaktienterprise25@gmail.com')->send(new D_Newsletter_Mail($maildata));

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
