<?php

namespace App\Http\Controllers;

use App\Mail\D_Lucky_Draw_Mail;
use App\Models\D_Lucky_Draw;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class DLuckyDrawController extends Controller
{
    public function create(Request $request)
    {
        $draw = new D_Lucky_Draw();
        $draw->name = $request['ldname'];
        $draw->phoneno = $request['ldphoneno'];
        $draw->city = $request['ldcity'];
        $draw->save();

        try {
            $maildata = [
                'Title' => 'Lucky Draw Details',
                'Name' => $request['ldname'],
                'Phoneno' => $request['ldphoneno'],
                'City' => $request['ldcity'],
            ];

            Mail::to('divyashaktienterprise25@gmail.com')->send(new D_Lucky_Draw_Mail($maildata));
            Log::info("Email Done");
            return redirect()->back()->with('success', 'Form submitted successfully!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Sorry Something Went Wrong.');
        }
    }
}
