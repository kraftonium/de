<?php

namespace App\Http\Controllers;

use App\Mail\D_Admin_Forgot_Password_OTP;
use App\Models\D_Users;
use App\Models\D_Userstype;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class DUsersController extends Controller
{
    public function register()
    {
        $usertypes = D_Userstype::all();
        $data = compact('usertypes');
        return view('backend.auth.register')->with($data);
    }

    public function create(Request $request)
    {
        $request->validate([
            'usertype_id' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:d__users,email',
            'phoneno' => 'required|numeric|min:10',
            'dob' => 'required|date',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif',
            'gender' => 'required',
            'address' => 'required',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);



        $imagename = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = public_path('/users_images/');

            if (!is_dir($path)) {
                mkdir($path, 0755, true);
            }

            $imagename = 'users_images/' . time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($path, basename($imagename));
        } else {
            Log::warning('image file was not found in the request.');
        }

        $user = new D_Users();
        $user->usertype_id = $request['usertype_id'];
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->phoneno = $request['phoneno'];
        $user->dob = $request['dob'];
        $user->image = $imagename;
        $user->gender = $request['gender'];
        $user->address = $request['address'];
        $user->password = Hash::make($request['password']);
        $user->save();

        return redirect('/login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $user = D_Users::where('email', $credentials['email'])->first();

        if ($user) {
            if (Hash::check($credentials['password'], $user->password)) {
                if (Auth::attempt($credentials, $request->has('remember'))) {
                    $request->session()->regenerate();
                    switch ($user->usertype->usertype) {
                        case 'Admin':
                            return redirect('/dashboard');
                        case 'State Dealer':
                            return redirect('/manage-state-dealership');
                        case 'Zone Dealer':
                            return redirect('/manage-zone-dealership');
                        case 'District Dealer':
                            return redirect('/manage-district-dealership');
                        case 'Taluka Dealer':
                            return redirect('/manage-taluka-dealership');
                        case 'Area Dealer':
                            return redirect('/manage-area-dealership');
                    }
                } else {
                    return redirect()->back()->withInput()->withErrors(['problem' => 'Sorry, Something went wrong here.']);
                }
            } else {
                return redirect()->back()->withInput()->withErrors(['password' => 'You have entered the wrong password.']);
            }
        } else {
            return redirect()->back()->withInput()->withErrors(['email' => 'Email is not found.']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function edit($id)
    {
        $user = D_Users::where('id', $id)->first();
        $usertypes = D_Userstype::all();
        $data = compact('user', 'usertypes');
        return view('backend.manage-admin.edit-admin')->with($data);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'usertype_id' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'phoneno' => 'required|numeric|min:10',
            'dob' => 'required|date',
            'gender' => 'required',
            'address' => 'required',
        ]);



        $imagename = null;
        $user = D_Users::find($id);
        if ($request->hasFile('image')) {

            File::delete(public_path($user->image));

            $image = $request->file('image');
            $path = public_path('/users_images/');

            if (!is_dir($path)) {
                mkdir($path, 0755, true);
            }

            $imagename = 'users_images/' . time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($path, basename($imagename));
        } else {
            Log::warning('image file was not found in the request.');
        }


        $user->usertype_id = $request['usertype_id'];
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->phoneno = $request['phoneno'];
        $user->dob = $request['dob'];
        if ($request->hasFile('image')) {
            $user->image = $imagename;
        }
        $user->gender = $request['gender'];
        $user->address = $request['address'];
        $user->save();

        return redirect('/manage-admin');
    }

    public function delete($id)
    {
        $user = D_Users::find($id)->delete();
        return redirect()->back();
    }

    public function manage()
    {
        $users = D_Users::paginate(10);
        $data = compact('users');
        return view('backend.manage-admin.manage-admin')->with($data);
    }

    public function profile()
    {
        $user = Auth::user();
        $usertypes = D_Userstype::all();
        $data = compact('user', 'usertypes');
        return view('backend.manage-admin.admin-profile')->with($data);
    }

    public function updateprofile($id, Request $request)
    {
        $request->validate([
            'usertype_id' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'phoneno' => 'required|numeric|min:10',
            'dob' => 'required|date',
            'gender' => 'required',
            'address' => 'required',
        ]);



        $imagename = null;
        $user = D_Users::find($id);
        if ($request->hasFile('image')) {

            File::delete(public_path($user->image));

            $image = $request->file('image');
            $path = public_path('/users_images/');

            if (!is_dir($path)) {
                mkdir($path, 0755, true);
            }

            $imagename = 'users_images/' . time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($path, basename($imagename));
        } else {
            Log::warning('image file was not found in the request.');
        }


        $user->usertype_id = $request['usertype_id'];
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->phoneno = $request['phoneno'];
        $user->dob = $request['dob'];
        if ($request->hasFile('image')) {
            $user->image = $imagename;
        }
        $user->gender = $request['gender'];
        $user->address = $request['address'];
        $user->save();

        return redirect('/admin-profile')->with('profile-update-success', 'Your Profile Updated Successfully!');;
    }

    public function changepassword(Request $request, $id)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        $user = D_Users::find($id);
        if (Hash::check($request->current_password, $user->password)) {
            $user->password = Hash::make($request['password']);
            $user->save();

            return redirect('/admin-profile')->with('change-passord-success', 'Your Password Changed Successfully!');
        } else {
            return redirect()->back()->withInput()->withErrors(['current_password' => 'Current Password Is Wrong.']);
        }
    }

    public function adminforgotpasswordotp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        if (Auth::user()->email == $request['email']) {

            $otp = random_int(100000, 999999);

            Session::put('otp', $otp);
            Session::put('email', $request['email']);

            $maildata = [
                'Title' => 'Your OTP For Reset Password Is ' . $otp . ' ',

            ];

            Mail::to($request['email'])->send(new D_Admin_Forgot_Password_OTP($maildata));

            return redirect('/admin-reset-password');
        } else {
            return redirect()->back()->withInput()->withErrors(['email' => 'Entered Wrong Email.']);
        }
    }

    public function adminresetpassword(Request $request)
    {
        $request->validate([
            'otp' => 'required',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        if (Session::get('otp') == $request['otp']) {
            $user = D_Users::where('email', Session::get('email'))->first();
            $user->password = Hash::make($request['password']);
            $user->save();

            return redirect('/login');
        } else {
            return redirect()->back()->withInput()->withErrors(['otp' => 'Entered The Wrong OTP.']);
        }
    }

    public function searchUsers(Request $request)
    {
        $query = $request->input('query');

        $users = D_Users::where('name', 'LIKE', "%{$query}%")
            ->limit(10)
            ->get(['id', 'name']);

        return response()->json($users);
    }
}
