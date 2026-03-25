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
        // Log::info('0');
        try {
            $resumename = null;
            if ($request->hasFile('resume')) {
                $resume = $request->file('resume');
                $path = public_path('/career_resumes/');

                // Ensure the directory exists
                if (!is_dir($path)) {
                    mkdir($path, 0755, true);
                }

                $resumename = 'career_resumes/' . time() . '_' . uniqid() . '.' . $resume->getClientOriginalExtension();
                $resume->move($path, basename($resumename));
            } else {
                Log::warning('Resume file was not found in the request.');
            }
            // Log::info('1');
            $career = new D_Careers();
            $career->name = $request['name'];
            $career->email = $request['email'];
            $career->phoneno = $request['phoneno'];
            $career->experience = $request['experience'];
            $career->city = $request['city'];
            $career->profile = $request['profile'];
            $career->resumepath = $resumename;
            $career->coverletter = $request['coverletter'];
            $career->save();
            // Log::info('2');


            $maildata = [
                'Title' => 'Career Details',
                'Name' => $request['name'],
                'Email' => $request['email'],
                'Phoneno' => $request['phoneno'],
                'Experience' => $request['experience'],
                'City' => $request['city'],
                'Profile' => $request['profile'],
                'Coverletter' => $request['coverletter'],
                'Resume' => $resumename,
            ];
            // Log::info('3');
            Mail::to('divyashaktienterprise25@gmail.com')->send(new D_Careers_Mail($maildata));
            // Log::info('4');

            return redirect()->back()->with('success', 'Form submitted successfully!');
            // Log::info('5');
        } catch (Exception $e) {

            return redirect()->back()->with('error', 'Sorry, something went wrong.');
        }
    }

    public function manage()
    {
        $careers = D_Careers::paginate(10);
        $data = compact('careers');
        return view('backend.manage-career.manage-career')->with($data);
    }

    public function delete($id)
    {
        $career = D_Careers::find($id)->delete();
        return redirect()->back();
    }
}
