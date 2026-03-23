<?php

namespace App\Http\Controllers;

use App\Models\D_District_Active_Inactive_Dealerships;
use App\Models\D_Zone_Active_Inactive_Dealerships;
use Illuminate\Http\Request;

class DDistrictActiveInactiveDealershipsController extends Controller
{
    public function add()
    {
        $zones = D_Zone_Active_Inactive_Dealerships::all();
        $data = compact('zones');
        return view('backend.manage-district-active-inactive.add-district-active-inactive')->with($data);
    }

    public function create(Request $request)
    {
        $request->validate([
            'district' => 'required',
            'status' => 'required',
            'whose_dealer' => 'required',
            'under_dealer' => 'required',
            'zone' => 'required',
        ]);

        $status = new D_District_Active_Inactive_Dealerships();
        $status->district = $request['district'];
        $status->status = $request['status'];
        $status->whose_dealer = $request['user_id'];
        $status->under_whom = $request['under_id'];
        $status->zone = $request['zone'];
        $status->save();

        return redirect('/manage-state-active-inactive');
    }

    public function edit($id)
    {
        $status = D_District_Active_Inactive_Dealerships::where('id', $id)->first();
        $zones = D_Zone_Active_Inactive_Dealerships::all();
        $data = compact('status', 'zones');
        return view('backend.manage-district-active-inactive.edit-district-active-inactive')->with($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'district' => 'required',
            'status' => 'required',
            'whose_dealer' => 'required',
            'under_dealer' => 'required',
            'zone' => 'required',
        ]);

        $status = D_District_Active_Inactive_Dealerships::find($id);
        $status->district = $request['district'];
        $status->status = $request['status'];
        $status->whose_dealer = $request['user_id'];
        $status->under_whom = $request['under_id'];
        $status->zone = $request['zone'];
        $status->save();

        return redirect('/manage-state-active-inactive');
    }

    public function delete($id)
    {
        $status = D_District_Active_Inactive_Dealerships::find($id)->delete();
        return redirect()->back();
    }

    public function manage($id)
    {
        $status = D_District_Active_Inactive_Dealerships::where('zone', $id)->paginate(10);
        $data = compact('status');
        return view('backend.manage-district-active-inactive.manage-district-active-inactive')->with($data);
    }
}