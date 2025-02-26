<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Exception;
use App\Mail\D_Careers_Mail;
use App\Models\D_Careers;

class DCareersController extends Controller
{
    public function create(Request $request)
    {

        try {
            $resumename = null;
            if ($request->hasFile('resume')) {
                $resume = $request->file('resume');
                $path = public_path('/career_resumes/');

                // Ensure the directory exists
                if (!is_dir($path)) {
                    mkdir($path, 0755, true);
                }

                $resumename = 'career_resumes/' . time() . '.' . $resume->getClientOriginalExtension();
                $resume->move($path, basename($resumename));
            } else {
                Log::warning('Resume file was not found in the request.');
            }

            $career = new D_Careers();
            $career->name = $request['name'];
            $career->email = $request['email'];
            $career->phoneno = $request['phoneno'];
            $career->profile = $request['profile'];
            $career->resumepath = $resumename;
            $career->coverletter = $request['coverletter'];
            $career->save();



            $maildata = [
                'Title' => 'Career Details',
                'Name' => $request['name'],
                'Email' => $request['email'],
                'Phoneno' => $request['phoneno'],
                'Profile' => $request['profile'],
                'Coverletter' => $request['coverletter'],
                'Resume' => $resumename,
            ];

            Mail::to('divyashaktienterprise25@gmail.com')->send(new D_Careers_Mail($maildata));


            return redirect()->back()->with('success', 'Form submitted successfully!');
        } catch (Exception $e) {

            return redirect()->back()->with('error', 'Sorry, something went wrong.');
        }
    }
}
