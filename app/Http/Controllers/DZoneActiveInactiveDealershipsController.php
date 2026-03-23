<?php

namespace App\Http\Controllers;

use App\Models\D_State_Active_Inactive_Dealerships;
use App\Models\D_Zone_Active_Inactive_Dealerships;
use Illuminate\Http\Request;

class DZoneActiveInactiveDealershipsController extends Controller
{
    public function add()
    {
        $states = D_State_Active_Inactive_Dealerships::all();
        $data = compact('states');
        return view('backend.manage-zone-active-inactive.add-zone-active-inactive')->with($data);
    }

    public function create(Request $request)
    {
        $request->validate([
            'zone' => 'required',
            'status' => 'required',
            'whose_dealer' => 'required',
            'under_dealer' => 'required',
            'state' => 'required',
        ]);

        $status = new D_Zone_Active_Inactive_Dealerships();
        $status->zone = $request['zone'];
        $status->status = $request['status'];
        $status->whose_dealer = $request['user_id'];
        $status->under_whom = $request['under_id'];
        $status->state = $request['state'];
        $status->save();

        return redirect('/manage-state-active-inactive');
    }

    public function edit($id)
    {
        $status = D_Zone_Active_Inactive_Dealerships::where('id', $id)->first();
        $states = D_State_Active_Inactive_Dealerships::all();
        $data = compact('status', 'states');
        return view('backend.manage-zone-active-inactive.edit-zone-active-inactive')->with($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'zone' => 'required',
            'status' => 'required',
            'whose_dealer' => 'required',
            'under_dealer' => 'required',
            'state' => 'required',
        ]);

        $status = D_Zone_Active_Inactive_Dealerships::find($id);
        $status->zone = $request['zone'];
        $status->status = $request['status'];
        $status->whose_dealer = $request['user_id'];
        $status->under_whom = $request['under_id'];
        $status->state = $request['state'];
        $status->save();

        return redirect('/manage-state-active-inactive');
    }

    public function delete($id)
    {
        $status = D_Zone_Active_Inactive_Dealerships::find($id)->delete();
        return redirect()->back();
    }

    public function manage($id)
    {
        $status = D_Zone_Active_Inactive_Dealerships::where('state', $id)->paginate(10);
        $data = compact('status');
        return view('backend.manage-zone-active-inactive.manage-zone-active-inactive')->with($data);
    }
}