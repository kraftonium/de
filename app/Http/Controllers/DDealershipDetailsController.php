<?php

namespace App\Http\Controllers;

use App\Models\D_Dealership_Details;
use App\Models\D_Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class DDealershipDetailsController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'firm_address' => 'required',
            'firm_phoneno' => 'required|numeric|min:10',
            'firm_email' => 'email|required',
            'firm_name' => 'required',
            'firm_gstno' => 'required|numeric',
            'total_revenue' => 'required',
            'total_profit' => 'required',
            'firm_photo' => 'required',
            'whose_name' => 'required',
            'firm_pincode' => 'required|numeric|min:6',
            // 'firm_area' => 'required',
            // 'firm_taluka' => 'required',
            // 'firm_district' => 'required',
            // 'firm_zone' => 'required',
            // 'firm_state' => 'required',
            'firm_country' => 'required',
        ]);

        $imagename = null;
        if ($request->hasFile('firm_photo')) {
            $image = $request->file('firm_photo');
            $path = public_path('/dealership_details_images/');

            if (!is_dir($path)) {
                mkdir($path, 0755, true);
            }

            $imagename = 'dealership_details_images/' . time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($path, basename($imagename));
        } else {
            Log::warning('Image file was not found in the request.');
        }

        $dealership = new D_Dealership_Details();
        $dealership->user_id = $request['user_id'];
        $dealership->firm_address = $request['firm_address'];
        $dealership->firm_phoneno = $request['firm_phoneno'];
        $dealership->firm_email = $request['firm_email'];
        $dealership->firm_name = $request['firm_name'];
        $dealership->firm_gstno = $request['firm_gstno'];
        $dealership->total_revenue = $request['total_revenue'];
        $dealership->total_profit = $request['total_profit'];
        $dealership->firm_photo = $imagename;
        $dealership->firm_google_business_profile_link = $request['business_profile_link'];
        $dealership->whose_dealer = $request['whose_user_id'];
        $dealership->firm_pincode = $request['firm_pincode'];
        $dealership->firm_area = $request['firm_area'];
        $dealership->firm_taluka = $request['firm_taluka'];
        $dealership->firm_district = $request['firm_district'];
        $dealership->firm_zone = $request['firm_zone'];
        $dealership->firm_state = $request['firm_state'];
        $dealership->firm_country = $request['firm_country'];
        $dealership->save();


        return redirect('/manage-dealership');
    }

    public function edit($id)
    {
        $dealership = D_Dealership_Details::where('id', $id)->first();
        $data = compact('dealership');
        return view('backend.manage-dealership.edit-dealer')->with($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'firm_address' => 'required',
            'firm_phoneno' => 'required|numeric|min:10',
            'firm_email' => 'email|required',
            'firm_name' => 'required',
            'firm_gstno' => 'required|numeric',
            'total_revenue' => 'required',
            'total_profit' => 'required',
            // 'firm_photo' => 'required',
            'whose_name' => 'required',
            'firm_pincode' => 'required|numeric|min:6',
            // 'firm_area' => 'required',
            // 'firm_taluka' => 'required',
            // 'firm_district' => 'required',
            // 'firm_zone' => 'required',
            // 'firm_state' => 'required',
            'firm_country' => 'required',
        ]);

        $dealership = D_Dealership_Details::find($id);

        $imagename = null;
        if ($request->hasFile('firm_photo')) {
            File::delete(public_path($dealership->firm_photo));
            $image = $request->file('firm_photo');
            $path = public_path('/dealership_details_images/');

            if (!is_dir($path)) {
                mkdir($path, 0755, true);
            }

            $imagename = 'dealership_details_images/' . time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($path, basename($imagename));
        } else {
            Log::warning('Image file was not found in the request.');
        }


        $dealership->user_id = $request['user_id'];
        $dealership->firm_address = $request['firm_address'];
        $dealership->firm_phoneno = $request['firm_phoneno'];
        $dealership->firm_email = $request['firm_email'];
        $dealership->firm_name = $request['firm_name'];
        $dealership->firm_gstno = $request['firm_gstno'];
        $dealership->total_revenue = $request['total_revenue'];
        $dealership->total_profit = $request['total_profit'];
        if ($request->hasFile('firm_photo')) {
            $dealership->firm_photo = $imagename;
        }
        $dealership->firm_google_business_profile_link = $request['business_profile_link'];
        $dealership->whose_dealer = $request['whose_user_id'];
        $dealership->firm_pincode = $request['firm_pincode'];
        $dealership->firm_area = $request['firm_area'];
        $dealership->firm_taluka = $request['firm_taluka'];
        $dealership->firm_district = $request['firm_district'];
        $dealership->firm_zone = $request['firm_zone'];
        $dealership->firm_state = $request['firm_state'];
        $dealership->firm_country = $request['firm_country'];
        $dealership->save();


        return redirect('/manage-dealership');
    }

    public function delete($id)
    {
        $dealer_user_id = D_Dealership_Details::where('id', $id)->value('user_id');
        $user = D_Users::find($dealer_user_id)->delete();
        $dealership = D_Dealership_Details::find($id)->delete();
        return redirect()->back();
    }

    public function manage()
    {
        $totaldealers = D_Dealership_Details::count();
        $dealerships = D_Dealership_Details::paginate(10);
        $data = compact('dealerships', 'totaldealers');
        return view('backend.manage-dealership.manage-dealership')->with($data);
    }

    public function manage_area_dealership()
    {
        $totalareadealerships = D_Users::where('usertype_id', 6)->count();
        $areadealerships = D_Users::where('usertype_id', 6)->pluck('id'); // Get only the user IDs
        $dealerships = D_Dealership_Details::whereIn('user_id', $areadealerships)->paginate(10);
        $data = compact('dealerships', 'totalareadealerships');
        return view('backend.manage-area-dealership.manage-area-dealership')->with($data);
    }


    public function manage_taluka_dealership()
    {
        $totaltalukadealerships = D_Users::where('usertype_id', 5)->count();
        $talukadealerships = D_Users::where('usertype_id', 5)->pluck('id'); // Get only the user IDs
        $dealerships = D_Dealership_Details::whereIn('user_id', $talukadealerships)->paginate(10);
        $data = compact('dealerships', 'totaltalukadealerships');
        return view('backend.manage-taluka-dealership.manage-taluka-dealership')->with($data);
    }

    public function manage_district_dealership()
    {
        $totaldistrictdealerships = D_Users::where('usertype_id', 4)->count();
        $districtdealerships = D_Users::where('usertype_id', 4)->pluck('id'); // Get only the user IDs
        $dealerships = D_Dealership_Details::whereIn('user_id', $districtdealerships)->paginate(10);
        $data = compact('dealerships', 'totaldistrictdealerships');
        return view('backend.manage-district-dealership.manage-district-dealership')->with($data);
    }

    public function manage_zone_dealership()
    {
        $totalzonedealerships = D_Users::where('usertype_id', 3)->count();
        $zonedealerships = D_Users::where('usertype_id', 3)->pluck('id'); // Get only the user IDs
        $dealerships = D_Dealership_Details::whereIn('user_id', $zonedealerships)->paginate(10);
        $data = compact('dealerships', 'totalzonedealerships');
        return view('backend.manage-zone-dealership.manage-zone-dealership')->with($data);
    }

    public function manage_state_dealership()
    {
        $totalstatedealerships = D_Users::where('usertype_id', 2)->count();
        $statedealerships = D_Users::where('usertype_id', 2)->pluck('id'); // Get only the user IDs
        $dealerships = D_Dealership_Details::whereIn('user_id', $statedealerships)->paginate(10);
        $data = compact('dealerships', 'totalstatedealerships');
        return view('backend.manage-state-dealership.manage-state-dealership')->with($data);
    }

    public function dealerprofile($id)
    {
        $dealer = D_Dealership_Details::where('user_id', $id)->first();
        $data = compact('dealer');
        return view('backend.manage-dealership.dealer-profile')->with($data);
    }
}