<?php

namespace App\Http\Controllers;

use App\Models\D_District_Active_Inactive_Dealerships;
use App\Models\D_Taluka_Active_Inactive_Dealerships;
use Illuminate\Http\Request;

class DTalukaActiveInactiveDealershipsController extends Controller
{

    public function add()
    {
        $districts = D_District_Active_Inactive_Dealerships::all();
        $data = compact('districts');
        return view('backend.manage-taluka-active-inactive.add-taluka-active-inactive')->with($data);
    }

    public function create(Request $request)
    {
        $request->validate([
            'taluka' => 'required',
            'status' => 'required',
            'whose_dealer' => 'required',
            'under_dealer' => 'required',
            'district' => 'required',
        ]);

        $status = new D_Taluka_Active_Inactive_Dealerships();
        $status->taluka = $request['taluka'];
        $status->status = $request['status'];
        $status->whose_dealer = $request['user_id'];
        $status->under_whom = $request['under_id'];
        $status->district = $request['district'];
        $status->save();

        return redirect('/manage-state-active-inactive');
    }

    public function edit($id)
    {
        $status = D_Taluka_Active_Inactive_Dealerships::where('id', $id)->first();
        $districts = D_District_Active_Inactive_Dealerships::all();
        $data = compact('status', 'districts');
        return view('backend.manage-taluka-active-inactive.edit-taluka-active-inactive')->with($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'taluka' => 'required',
            'status' => 'required',
            'whose_dealer' => 'required',
            'under_dealer' => 'required',
            'district' => 'required',
        ]);

        $status = D_Taluka_Active_Inactive_Dealerships::find($id);
        $status->taluka = $request['taluka'];
        $status->status = $request['status'];
        $status->whose_dealer = $request['user_id'];
        $status->under_whom = $request['under_id'];
        $status->district = $request['district'];
        $status->save();

        return redirect('/manage-state-active-inactive');
    }

    public function delete($id)
    {
        $status = D_Taluka_Active_Inactive_Dealerships::find($id)->delete();
        return redirect()->back();
    }

    public function manage($id)
    {
        $status = D_Taluka_Active_Inactive_Dealerships::where('district', $id)->paginate(10);
        $data = compact('status');
        return view('backend.manage-taluka-active-inactive.manage-taluka-active-inactive')->with($data);
    }
}
