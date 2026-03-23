<?php

namespace App\Http\Controllers;

use App\Models\D_Customers;
use App\Models\D_Dealership_Details;
use App\Models\D_Inquiries;
use App\Models\D_Orders;
use App\Models\D_Stocks;
use App\Models\D_Stocks_By_Colors;
use App\Models\D_Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

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
        $totalcustomers = D_Customers::whereHas('whoseuser', function ($query) {
            $query->where('usertype_id', 6);
        })->count();
        $totalorders = D_Orders::whereHas('orderByWhom', function ($query) {
            $query->where('usertype_id', 6);
        })->count();
        $totalrevenue = D_Dealership_Details::whereHas('user', function ($query) {
            $query->where('usertype_id', 6);
        })->sum('total_revenue');

        $dealerships = D_Dealership_Details::whereIn('user_id', $areadealerships)->paginate(10);
        $data = compact('dealerships', 'totalareadealerships', 'totalcustomers', 'totalorders', 'totalrevenue');
        return view('backend.manage-area-dealership.manage-area-dealership')->with($data);
    }


    public function manage_taluka_dealership()
    {
        $totaltalukadealerships = D_Users::where('usertype_id', 5)->count();
        $talukadealerships = D_Users::where('usertype_id', 5)->pluck('id'); // Get only the user IDs
        $totalcustomers = D_Customers::whereHas('whoseuser', function ($query) {
            $query->where('usertype_id', 5);
        })->count();
        $totalorders = D_Orders::whereHas('orderByWhom', function ($query) {
            $query->where('usertype_id', 5);
        })->count();
        $totalrevenue = D_Dealership_Details::whereHas('user', function ($query) {
            $query->where('usertype_id', 5);
        })->sum('total_revenue');

        $dealerships = D_Dealership_Details::whereIn('user_id', $talukadealerships)->paginate(10);
        $data = compact('dealerships', 'totaltalukadealerships', 'totalcustomers', 'totalorders', 'totalrevenue');
        return view('backend.manage-taluka-dealership.manage-taluka-dealership')->with($data);
    }

    public function manage_district_dealership()
    {
        $totaldistrictdealerships = D_Users::where('usertype_id', 4)->count();
        $districtdealerships = D_Users::where('usertype_id', 4)->pluck('id'); // Get only the user IDs
        $totalcustomers = D_Customers::whereHas('whoseuser', function ($query) {
            $query->where('usertype_id', 4);
        })->count();
        $totalorders = D_Orders::whereHas('orderByWhom', function ($query) {
            $query->where('usertype_id', 4);
        })->count();
        $totalrevenue = D_Dealership_Details::whereHas('user', function ($query) {
            $query->where('usertype_id', 4);
        })->sum('total_revenue');

        $dealerships = D_Dealership_Details::whereIn('user_id', $districtdealerships)->paginate(10);
        $data = compact('dealerships', 'totaldistrictdealerships', 'totalcustomers', 'totalorders', 'totalrevenue');
        return view('backend.manage-district-dealership.manage-district-dealership')->with($data);
    }

    public function manage_zone_dealership()
    {
        $totalzonedealerships = D_Users::where('usertype_id', 3)->count();
        $zonedealerships = D_Users::where('usertype_id', 3)->pluck('id'); // Get only the user IDs
        $totalcustomers = D_Customers::whereHas('whoseuser', function ($query) {
            $query->where('usertype_id', 3);
        })->count();
        $totalorders = D_Orders::whereHas('orderByWhom', function ($query) {
            $query->where('usertype_id', 3);
        })->count();
        $totalrevenue = D_Dealership_Details::whereHas('user', function ($query) {
            $query->where('usertype_id', 3);
        })->sum('total_revenue');

        $dealerships = D_Dealership_Details::whereIn('user_id', $zonedealerships)->paginate(10);
        $data = compact('dealerships', 'totalzonedealerships', 'totalcustomers', 'totalorders', 'totalrevenue');
        return view('backend.manage-zone-dealership.manage-zone-dealership')->with($data);
    }

    public function manage_state_dealership()
    {
        $totalstatedealerships = D_Users::where('usertype_id', 2)->count();
        $statedealerships = D_Users::where('usertype_id', 2)->pluck('id'); // Get only the user IDs
        $totalcustomers = D_Customers::whereHas('whoseuser', function ($query) {
            $query->where('usertype_id', 2);
        })->count();
        $totalorders = D_Orders::whereHas('orderByWhom', function ($query) {
            $query->where('usertype_id', 2);
        })->count();
        $totalrevenue = D_Dealership_Details::whereHas('user', function ($query) {
            $query->where('usertype_id', 2);
        })->sum('total_revenue');

        $dealerships = D_Dealership_Details::whereIn('user_id', $statedealerships)->paginate(10);
        $data = compact('dealerships', 'totalstatedealerships', 'totalcustomers', 'totalorders', 'totalrevenue');
        return view('backend.manage-state-dealership.manage-state-dealership')->with($data);
    }

    public function dealerprofile()
    {
        $dealer = D_Dealership_Details::where('user_id', Auth::user()->id)->first();
        $data = compact('dealer');
        return view('backend.manage-dealership.dealer-profile')->with($data);
    }

    public function manage_single_dealer($id)
    {
        $totalcustomers = D_Customers::where('whose_customer', $id)->count();
        $totalorders = D_Orders::where('user_id', $id)->count();
        $totalrevenue = D_Dealership_Details::where('user_id', $id)->sum('total_revenue');
        $tds = round($totalrevenue * 0.05, 2);
        $lastmonthrevenue = D_Dealership_Details::where('user_id', $id)
            ->whereMonth('created_at', Carbon::now()->subMonth()->month)
            ->whereYear('created_at', Carbon::now()->subMonth()->year)
            ->sum('total_revenue');
        $lastmonthorders = D_Orders::where('user_id', $id)
            ->whereMonth('created_at', Carbon::now()->subMonth()->month)
            ->whereYear('created_at', Carbon::now()->subMonth()->year)
            ->count();
        $dealership = D_Dealership_Details::where('user_id', $id)->first();
        $totalstock = D_Stocks::where('whose_stock', $id)->sum('quantity');
        $colorstocks = D_Stocks_By_Colors::where('whose_stocks_id', $id)->get();
        $stocks = D_Stocks::where('whose_stock', $id)->get();
        $totalhisdealers = D_Dealership_Details::where('whose_dealer', $id)->paginate(10);
        $inquiries = D_Inquiries::where('whose_inquiry', $id)->paginate(10);
        $data = compact('dealership', 'totalcustomers', 'totalorders', 'totalrevenue', 'totalstock', 'stocks', 'lastmonthrevenue', 'lastmonthorders', 'colorstocks', 'totalhisdealers', 'inquiries', 'tds');
        return view('backend.manage-single-dealer')->with($data);
    }


    public function dashboard_of_dealership()
    {
        $id = Auth::user()->id;
        $totalcustomers = D_Customers::where('whose_customer', $id)->count();
        $totalorders = D_Orders::where('user_id', $id)->count();
        $totalrevenue = D_Dealership_Details::where('user_id', $id)->sum('total_revenue');
        $dealership = D_Dealership_Details::where('user_id', $id)->first();
        $totalstock = D_Stocks::where('whose_stock', $id)->sum('quantity');
        $stocks = D_Stocks::where('whose_stock', $id)->get();
        $data = compact('dealership', 'totalcustomers', 'totalorders', 'totalrevenue', 'totalstock', 'stocks');
        return view('backend.manage-single-dealer')->with($data);
        // $data = compact('dealerships', 'totalstatedealerships', 'totalcustomers', 'totalorders', 'totalrevenue');
        // return view('backend.manage-state-dealership.manage-state-dealership')->with($data);
    }

    public function manage_zone_for_state()
    {
        $dealer = D_Dealership_Details::where('user_id', Auth::user()->id)->first();

        if (!$dealer) {
            return redirect()->back()->withErrors('No dealership found for the current user.');
        }

        // Get the IDs of users (zone dealerships) in the same state and with usertype_id = 3
        $zoneDealerUserIds = D_Users::where('usertype_id', 3)
            ->whereHas('dealershipDetails', function ($query) use ($dealer) {
                $query->where('firm_state', $dealer->firm_state);
            })->pluck('id');

        // Debug - Check zone dealer user IDs
        // Log::info('Zone dealer user IDs:', $zoneDealerUserIds->toArray());

        // Total zone dealerships
        $totalzonedealerships = $zoneDealerUserIds->count();

        // Total customers of zone dealers in this state
        $totalcustomers = D_Customers::whereIn('whose_customer', $zoneDealerUserIds)->count();

        // Total orders from zone dealers in this state
        $totalorders = D_Orders::whereIn('user_id', $zoneDealerUserIds)->count();

        // Total revenue from those dealerships
        $totalrevenue = D_Dealership_Details::whereIn('user_id', $zoneDealerUserIds)->sum('total_revenue');

        $dealerships = D_Dealership_Details::whereIn('user_id', $zoneDealerUserIds)
            ->where('firm_state', $dealer->firm_state)
            ->paginate(10);

        $data = compact('totalzonedealerships', 'totalcustomers', 'totalorders', 'totalrevenue', 'dealerships');
        // dd($data);
        return view('backend.manage-zone-dealership.manage-zone-dealership')->with($data);
    }

    public function manage_district_for_state()
    {
        $dealer = D_Dealership_Details::where('user_id', Auth::user()->id)->first();

        if (!$dealer) {
            return redirect()->back()->withErrors('No dealership found for the current user.');
        }

        // Get the IDs of users (zone dealerships) in the same state and with usertype_id = 3
        $districtDealerUserIds = D_Users::where('usertype_id', 4)
            ->whereHas('dealershipDetails', function ($query) use ($dealer) {
                $query->where('firm_state', $dealer->firm_state);
            })->pluck('id');

        // Debug - Check zone dealer user IDs
        // Log::info('Zone dealer user IDs:', $zoneDealerUserIds->toArray());

        // Total zone dealerships
        $totaldistrictdealerships = $districtDealerUserIds->count();

        // Total customers of zone dealers in this state
        $totalcustomers = D_Customers::whereIn('whose_customer', $districtDealerUserIds)->count();

        // Total orders from zone dealers in this state
        $totalorders = D_Orders::whereIn('user_id', $districtDealerUserIds)->count();

        // Total revenue from those dealerships
        $totalrevenue = D_Dealership_Details::whereIn('user_id', $districtDealerUserIds)->sum('total_revenue');

        $dealerships = D_Dealership_Details::whereIn('user_id', $districtDealerUserIds)
            ->where('firm_state', $dealer->firm_state)
            ->paginate(10);

        $data = compact('totaldistrictdealerships', 'totalcustomers', 'totalorders', 'totalrevenue', 'dealerships');
        // dd($data);
        return view('backend.manage-district-dealership.manage-district-dealership')->with($data);
    }

    public function manage_taluka_for_state()
    {
        $dealer = D_Dealership_Details::where('user_id', Auth::user()->id)->first();

        if (!$dealer) {
            return redirect()->back()->withErrors('No dealership found for the current user.');
        }

        // Get the IDs of users (zone dealerships) in the same state and with usertype_id = 3
        $talukaDealerUserIds = D_Users::where('usertype_id', 5)
            ->whereHas('dealershipDetails', function ($query) use ($dealer) {
                $query->where('firm_state', $dealer->firm_state);
            })->pluck('id');

        // Debug - Check zone dealer user IDs
        // Log::info('Zone dealer user IDs:', $zoneDealerUserIds->toArray());

        // Total zone dealerships
        $totaltalukadealerships = $talukaDealerUserIds->count();

        // Total customers of zone dealers in this state
        $totalcustomers = D_Customers::whereIn('whose_customer', $talukaDealerUserIds)->count();

        // Total orders from zone dealers in this state
        $totalorders = D_Orders::whereIn('user_id', $talukaDealerUserIds)->count();

        // Total revenue from those dealerships
        $totalrevenue = D_Dealership_Details::whereIn('user_id', $talukaDealerUserIds)->sum('total_revenue');

        $dealerships = D_Dealership_Details::whereIn('user_id', $talukaDealerUserIds)
            ->where('firm_state', $dealer->firm_state)
            ->paginate(10);

        $data = compact('totaltalukadealerships', 'totalcustomers', 'totalorders', 'totalrevenue', 'dealerships');
        // dd($data);
        return view('backend.manage-taluka-dealership.manage-taluka-dealership')->with($data);
    }

    public function manage_area_for_state()
    {
        $dealer = D_Dealership_Details::where('user_id', Auth::user()->id)->first();

        if (!$dealer) {
            return redirect()->back()->withErrors('No dealership found for the current user.');
        }

        // Get the IDs of users (zone dealerships) in the same state and with usertype_id = 3
        $areaDealerUserIds = D_Users::where('usertype_id', 6)
            ->whereHas('dealershipDetails', function ($query) use ($dealer) {
                $query->where('firm_state', $dealer->firm_state);
            })->pluck('id');

        // Debug - Check zone dealer user IDs
        // Log::info('Zone dealer user IDs:', $zoneDealerUserIds->toArray());

        // Total zone dealerships
        $totalareadealerships = $areaDealerUserIds->count();

        // Total customers of zone dealers in this state
        $totalcustomers = D_Customers::whereIn('whose_customer', $areaDealerUserIds)->count();

        // Total orders from zone dealers in this state
        $totalorders = D_Orders::whereIn('user_id', $areaDealerUserIds)->count();

        // Total revenue from those dealerships
        $totalrevenue = D_Dealership_Details::whereIn('user_id', $areaDealerUserIds)->sum('total_revenue');

        $dealerships = D_Dealership_Details::whereIn('user_id', $areaDealerUserIds)
            ->where('firm_state', $dealer->firm_state)
            ->paginate(10);

        $data = compact('totalareadealerships', 'totalcustomers', 'totalorders', 'totalrevenue', 'dealerships');
        // dd($data);
        return view('backend.manage-area-dealership.manage-area-dealership')->with($data);
    }

    public function manage_district_for_zone()
    {
        $dealer = D_Dealership_Details::where('user_id', Auth::user()->id)->first();

        if (!$dealer) {
            return redirect()->back()->withErrors('No dealership found for the current user.');
        }


        $districtDealerUserIds = D_Users::where('usertype_id', 4)
            ->whereHas('dealershipDetails', function ($query) use ($dealer) {
                $query->where('firm_zone', $dealer->firm_zone);
            })->pluck('id');

        // Debug - Check zone dealer user IDs
        // Log::info('Zone dealer user IDs:', $zoneDealerUserIds->toArray());

        // Total zone dealerships
        $totaldistrictdealerships = $districtDealerUserIds->count();

        // Total customers of zone dealers in this state
        $totalcustomers = D_Customers::whereIn('whose_customer', $districtDealerUserIds)->count();

        // Total orders from zone dealers in this state
        $totalorders = D_Orders::whereIn('user_id', $districtDealerUserIds)->count();

        // Total revenue from those dealerships
        $totalrevenue = D_Dealership_Details::whereIn('user_id', $districtDealerUserIds)->sum('total_revenue');

        $dealerships = D_Dealership_Details::whereIn('user_id', $districtDealerUserIds)
            ->where('firm_state', $dealer->firm_state)
            ->paginate(10);

        $data = compact('totaldistrictdealerships', 'totalcustomers', 'totalorders', 'totalrevenue', 'dealerships');
        // dd($data);
        return view('backend.manage-district-dealership.manage-district-dealership')->with($data);
    }

    public function manage_taluka_for_zone()
    {
        $dealer = D_Dealership_Details::where('user_id', Auth::user()->id)->first();

        if (!$dealer) {
            return redirect()->back()->withErrors('No dealership found for the current user.');
        }

        // Get the IDs of users (zone dealerships) in the same state and with usertype_id = 3
        $talukaDealerUserIds = D_Users::where('usertype_id', 5)
            ->whereHas('dealershipDetails', function ($query) use ($dealer) {
                $query->where('firm_zone', $dealer->firm_zone);
            })->pluck('id');

        // Debug - Check zone dealer user IDs
        // Log::info('Zone dealer user IDs:', $zoneDealerUserIds->toArray());

        // Total zone dealerships
        $totaltalukadealerships = $talukaDealerUserIds->count();

        // Total customers of zone dealers in this state
        $totalcustomers = D_Customers::whereIn('whose_customer', $talukaDealerUserIds)->count();

        // Total orders from zone dealers in this state
        $totalorders = D_Orders::whereIn('user_id', $talukaDealerUserIds)->count();

        // Total revenue from those dealerships
        $totalrevenue = D_Dealership_Details::whereIn('user_id', $talukaDealerUserIds)->sum('total_revenue');

        $dealerships = D_Dealership_Details::whereIn('user_id', $talukaDealerUserIds)
            ->where('firm_state', $dealer->firm_state)
            ->paginate(10);

        $data = compact('totaltalukadealerships', 'totalcustomers', 'totalorders', 'totalrevenue', 'dealerships');
        // dd($data);
        return view('backend.manage-taluka-dealership.manage-taluka-dealership')->with($data);
    }

    public function manage_area_for_zone()
    {
        $dealer = D_Dealership_Details::where('user_id', Auth::user()->id)->first();

        if (!$dealer) {
            return redirect()->back()->withErrors('No dealership found for the current user.');
        }

        // Get the IDs of users (zone dealerships) in the same state and with usertype_id = 3
        $areaDealerUserIds = D_Users::where('usertype_id', 6)
            ->whereHas('dealershipDetails', function ($query) use ($dealer) {
                $query->where('firm_zone', $dealer->firm_zone);
            })->pluck('id');

        // Debug - Check zone dealer user IDs
        // Log::info('Zone dealer user IDs:', $zoneDealerUserIds->toArray());

        // Total zone dealerships
        $totalareadealerships = $areaDealerUserIds->count();

        // Total customers of zone dealers in this state
        $totalcustomers = D_Customers::whereIn('whose_customer', $areaDealerUserIds)->count();

        // Total orders from zone dealers in this state
        $totalorders = D_Orders::whereIn('user_id', $areaDealerUserIds)->count();

        // Total revenue from those dealerships
        $totalrevenue = D_Dealership_Details::whereIn('user_id', $areaDealerUserIds)->sum('total_revenue');

        $dealerships = D_Dealership_Details::whereIn('user_id', $areaDealerUserIds)
            ->where('firm_state', $dealer->firm_state)
            ->paginate(10);

        $data = compact('totalareadealerships', 'totalcustomers', 'totalorders', 'totalrevenue', 'dealerships');
        // dd($data);
        return view('backend.manage-area-dealership.manage-area-dealership')->with($data);
    }

    public function manage_taluka_for_district()
    {
        $dealer = D_Dealership_Details::where('user_id', Auth::user()->id)->first();

        if (!$dealer) {
            return redirect()->back()->withErrors('No dealership found for the current user.');
        }

        // Get the IDs of users (zone dealerships) in the same state and with usertype_id = 3
        $talukaDealerUserIds = D_Users::where('usertype_id', 5)
            ->whereHas('dealershipDetails', function ($query) use ($dealer) {
                $query->where('firm_district', $dealer->firm_district);
            })->pluck('id');

        // Debug - Check zone dealer user IDs
        // Log::info('Zone dealer user IDs:', $zoneDealerUserIds->toArray());

        // Total zone dealerships
        $totaltalukadealerships = $talukaDealerUserIds->count();

        // Total customers of zone dealers in this state
        $totalcustomers = D_Customers::whereIn('whose_customer', $talukaDealerUserIds)->count();

        // Total orders from zone dealers in this state
        $totalorders = D_Orders::whereIn('user_id', $talukaDealerUserIds)->count();

        // Total revenue from those dealerships
        $totalrevenue = D_Dealership_Details::whereIn('user_id', $talukaDealerUserIds)->sum('total_revenue');

        $dealerships = D_Dealership_Details::whereIn('user_id', $talukaDealerUserIds)
            ->where('firm_state', $dealer->firm_state)
            ->paginate(10);

        $data = compact('totaltalukadealerships', 'totalcustomers', 'totalorders', 'totalrevenue', 'dealerships');
        // dd($data);
        return view('backend.manage-taluka-dealership.manage-taluka-dealership')->with($data);
    }

    public function manage_area_for_district()
    {
        $dealer = D_Dealership_Details::where('user_id', Auth::user()->id)->first();

        if (!$dealer) {
            return redirect()->back()->withErrors('No dealership found for the current user.');
        }

        // Get the IDs of users (zone dealerships) in the same state and with usertype_id = 3
        $areaDealerUserIds = D_Users::where('usertype_id', 6)
            ->whereHas('dealershipDetails', function ($query) use ($dealer) {
                $query->where('firm_district', $dealer->firm_district);
            })->pluck('id');

        // Debug - Check zone dealer user IDs
        // Log::info('Zone dealer user IDs:', $zoneDealerUserIds->toArray());

        // Total zone dealerships
        $totalareadealerships = $areaDealerUserIds->count();

        // Total customers of zone dealers in this state
        $totalcustomers = D_Customers::whereIn('whose_customer', $areaDealerUserIds)->count();

        // Total orders from zone dealers in this state
        $totalorders = D_Orders::whereIn('user_id', $areaDealerUserIds)->count();

        // Total revenue from those dealerships
        $totalrevenue = D_Dealership_Details::whereIn('user_id', $areaDealerUserIds)->sum('total_revenue');

        $dealerships = D_Dealership_Details::whereIn('user_id', $areaDealerUserIds)
            ->where('firm_state', $dealer->firm_state)
            ->paginate(10);

        $data = compact('totalareadealerships', 'totalcustomers', 'totalorders', 'totalrevenue', 'dealerships');
        // dd($data);
        return view('backend.manage-area-dealership.manage-area-dealership')->with($data);
    }

    public function manage_area_for_taluka()
    {
        $dealer = D_Dealership_Details::where('user_id', Auth::user()->id)->first();

        if (!$dealer) {
            return redirect()->back()->withErrors('No dealership found for the current user.');
        }

        // Get the IDs of users (zone dealerships) in the same state and with usertype_id = 3
        $areaDealerUserIds = D_Users::where('usertype_id', 6)
            ->whereHas('dealershipDetails', function ($query) use ($dealer) {
                $query->where('firm_taluka', $dealer->firm_taluka);
            })->pluck('id');

        // Debug - Check zone dealer user IDs
        // Log::info('Zone dealer user IDs:', $zoneDealerUserIds->toArray());

        // Total zone dealerships
        $totalareadealerships = $areaDealerUserIds->count();

        // Total customers of zone dealers in this state
        $totalcustomers = D_Customers::whereIn('whose_customer', $areaDealerUserIds)->count();

        // Total orders from zone dealers in this state
        $totalorders = D_Orders::whereIn('user_id', $areaDealerUserIds)->count();

        // Total revenue from those dealerships
        $totalrevenue = D_Dealership_Details::whereIn('user_id', $areaDealerUserIds)->sum('total_revenue');

        $dealerships = D_Dealership_Details::whereIn('user_id', $areaDealerUserIds)
            ->where('firm_state', $dealer->firm_state)
            ->paginate(10);

        $data = compact('totalareadealerships', 'totalcustomers', 'totalorders', 'totalrevenue', 'dealerships');
        // dd($data);
        return view('backend.manage-area-dealership.manage-area-dealership')->with($data);
    }

    //this functions for search menu on navbar starts

    public function search_dealership(Request $request)
    {
        try {
            $query = $request->get('query');

            $dealerships = D_Dealership_Details::with(['user.usertype', 'whoseuser'])
                ->where(function ($q) use ($query) {
                    $q->whereHas('user', function ($q) use ($query) {
                        $q->where('name', 'LIKE', "%$query%")
                            ->orWhere('email', 'LIKE', "%$query%")
                            ->orWhere('phoneno', 'LIKE', "%$query%");
                    })
                        ->orWhere('firm_name', 'LIKE', "%$query%")
                        ->orWhere('firm_email', 'LIKE', "%$query%");
                })
                ->get();

            return response()->json($dealerships);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }

    public function search_state_dealership(Request $request)
    {
        try {
            $query = $request->get('query');

            $dealershipsQuery = D_Dealership_Details::with(['user.usertype', 'whoseuser'])
                ->whereHas('user', function ($q) use ($query) {
                    $q->where('usertype_id', 2)
                        ->where(function ($q) use ($query) {
                            $q->where('name', 'LIKE', "%$query%")
                                ->orWhere('email', 'LIKE', "%$query%")
                                ->orWhere('phoneno', 'LIKE', "%$query%");
                        });
                })
                ->orWhere(function ($q) use ($query) {
                    $q->whereHas('user', function ($q) {
                        $q->where('usertype_id', 2); // Enforce the same condition here
                    })
                        ->where(function ($q) use ($query) {
                            $q->where('firm_name', 'LIKE', "%$query%")
                                ->orWhere('firm_email', 'LIKE', "%$query%");
                        });
                });


            // Debug SQL BEFORE running the query
            // Log::info($dealershipsQuery->toSql());
            // Log::info($dealershipsQuery->getBindings());

            $dealerships = $dealershipsQuery->get();

            // Log::info('Total dealerships: ' . $dealerships->count());

            // foreach ($dealerships as $dealership) {
            //     Log::info('Usertype ID: ' . ($dealership->user->usertype_id ?? 'No user'));
            // }

            return response()->json($dealerships);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }

    public function search_zone_dealership(Request $request)
    {
        try {
            $query = $request->get('query');

            $dealershipsQuery = D_Dealership_Details::with(['user.usertype', 'whoseuser'])
                ->whereHas('user', function ($q) use ($query) {
                    $q->where('usertype_id', 3)
                        ->where(function ($q) use ($query) {
                            $q->where('name', 'LIKE', "%$query%")
                                ->orWhere('email', 'LIKE', "%$query%")
                                ->orWhere('phoneno', 'LIKE', "%$query%");
                        });
                })
                ->orWhere(function ($q) use ($query) {
                    $q->whereHas('user', function ($q) {
                        $q->where('usertype_id', 3); // Enforce the same condition here
                    })
                        ->where(function ($q) use ($query) {
                            $q->where('firm_name', 'LIKE', "%$query%")
                                ->orWhere('firm_email', 'LIKE', "%$query%");
                        });
                });


            // Debug SQL BEFORE running the query
            // Log::info($dealershipsQuery->toSql());
            // Log::info($dealershipsQuery->getBindings());

            $dealerships = $dealershipsQuery->get();

            // Log::info('Total dealerships: ' . $dealerships->count());

            // foreach ($dealerships as $dealership) {
            //     Log::info('Usertype ID: ' . ($dealership->user->usertype_id ?? 'No user'));
            // }

            return response()->json($dealerships);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }

    public function search_district_dealership(Request $request)
    {
        try {
            $query = $request->get('query');

            $dealershipsQuery = D_Dealership_Details::with(['user.usertype', 'whoseuser'])
                ->whereHas('user', function ($q) use ($query) {
                    $q->where('usertype_id', 4)
                        ->where(function ($q) use ($query) {
                            $q->where('name', 'LIKE', "%$query%")
                                ->orWhere('email', 'LIKE', "%$query%")
                                ->orWhere('phoneno', 'LIKE', "%$query%");
                        });
                })
                ->orWhere(function ($q) use ($query) {
                    $q->whereHas('user', function ($q) {
                        $q->where('usertype_id', 4); // Enforce the same condition here
                    })
                        ->where(function ($q) use ($query) {
                            $q->where('firm_name', 'LIKE', "%$query%")
                                ->orWhere('firm_email', 'LIKE', "%$query%");
                        });
                });


            // Debug SQL BEFORE running the query
            // Log::info($dealershipsQuery->toSql());
            // Log::info($dealershipsQuery->getBindings());

            $dealerships = $dealershipsQuery->get();

            // Log::info('Total dealerships: ' . $dealerships->count());

            // foreach ($dealerships as $dealership) {
            //     Log::info('Usertype ID: ' . ($dealership->user->usertype_id ?? 'No user'));
            // }

            return response()->json($dealerships);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }

    public function search_taluka_dealership(Request $request)
    {
        try {
            $query = $request->get('query');

            $dealershipsQuery = D_Dealership_Details::with(['user.usertype', 'whoseuser'])
                ->whereHas('user', function ($q) use ($query) {
                    $q->where('usertype_id', 5)
                        ->where(function ($q) use ($query) {
                            $q->where('name', 'LIKE', "%$query%")
                                ->orWhere('email', 'LIKE', "%$query%")
                                ->orWhere('phoneno', 'LIKE', "%$query%");
                        });
                })
                ->orWhere(function ($q) use ($query) {
                    $q->whereHas('user', function ($q) {
                        $q->where('usertype_id', 5); // Enforce the same condition here
                    })
                        ->where(function ($q) use ($query) {
                            $q->where('firm_name', 'LIKE', "%$query%")
                                ->orWhere('firm_email', 'LIKE', "%$query%");
                        });
                });


            // Debug SQL BEFORE running the query
            // Log::info($dealershipsQuery->toSql());
            // Log::info($dealershipsQuery->getBindings());

            $dealerships = $dealershipsQuery->get();

            // Log::info('Total dealerships: ' . $dealerships->count());

            // foreach ($dealerships as $dealership) {
            //     Log::info('Usertype ID: ' . ($dealership->user->usertype_id ?? 'No user'));
            // }

            return response()->json($dealerships);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }

    public function search_area_dealership(Request $request)
    {
        try {
            $query = $request->get('query');

            $dealershipsQuery = D_Dealership_Details::with(['user.usertype', 'whoseuser'])
                ->whereHas('user', function ($q) use ($query) {
                    $q->where('usertype_id', 6)
                        ->where(function ($q) use ($query) {
                            $q->where('name', 'LIKE', "%$query%")
                                ->orWhere('email', 'LIKE', "%$query%")
                                ->orWhere('phoneno', 'LIKE', "%$query%");
                        });
                })
                ->orWhere(function ($q) use ($query) {
                    $q->whereHas('user', function ($q) {
                        $q->where('usertype_id', 6); // Enforce the same condition here
                    })
                        ->where(function ($q) use ($query) {
                            $q->where('firm_name', 'LIKE', "%$query%")
                                ->orWhere('firm_email', 'LIKE', "%$query%");
                        });
                });


            // Debug SQL BEFORE running the query
            // Log::info($dealershipsQuery->toSql());
            // Log::info($dealershipsQuery->getBindings());

            $dealerships = $dealershipsQuery->get();

            // Log::info('Total dealerships: ' . $dealerships->count());

            // foreach ($dealerships as $dealership) {
            //     Log::info('Usertype ID: ' . ($dealership->user->usertype_id ?? 'No user'));
            // }

            return response()->json($dealerships);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }

    //this functions for search menu on navbar ends
}
