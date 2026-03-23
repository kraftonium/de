<?php

namespace App\Http\Controllers;

use App\Models\D_Area_Active_Inactive_Dealerships;
use App\Models\D_Taluka_Active_Inactive_Dealerships;
use Illuminate\Http\Request;

class DAreaActiveInactiveDealershipsController extends Controller
{
    public function add()
    {
        $talukas = D_Taluka_Active_Inactive_Dealerships::all();
        $data = compact('talukas');
        return view('backend.manage-area-active-inactive.add-area-active-inactive')->with($data);
    }

    public function create(Request $request)
    {
        $request->validate([
            'area' => 'required',
            'status' => 'required',
            'whose_dealer' => 'required',
            'under_dealer' => 'required',
            'taluka' => 'required',
        ]);

        $status = new D_Area_Active_Inactive_Dealerships();
        $status->area = $request['area'];
        $status->status = $request['status'];
        $status->whose_dealer = $request['user_id'];
        $status->under_whom = $request['under_id'];
        $status->taluka = $request['taluka'];
        $status->save();

        return redirect('/manage-state-active-inactive');
    }

    public function edit($id)
    {
        $status = D_Area_Active_Inactive_Dealerships::where('id', $id)->first();
        $talukas = D_Taluka_Active_Inactive_Dealerships::all();
        $data = compact('status', 'talukas');
        return view('backend.manage-area-active-inactive.edit-area-active-inactive')->with($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'area' => 'required',
            'status' => 'required',
            'whose_dealer' => 'required',
            'under_dealer' => 'required',
            'taluka' => 'required',
        ]);

        $status = D_Area_Active_Inactive_Dealerships::find($id);
        $status->area = $request['area'];
        $status->status = $request['status'];
        $status->whose_dealer = $request['user_id'];
        $status->under_whom = $request['under_id'];
        $status->taluka = $request['taluka'];
        $status->save();

        return redirect('/manage-state-active-inactive');
    }

    public function delete($id)
    {
        $status = D_Area_Active_Inactive_Dealerships::find($id)->delete();
        return redirect()->back();
    }

    public function manage($id)
    {
        $status = D_Area_Active_Inactive_Dealerships::where('taluka', $id)->paginate(10);
        $data = compact('status');
        return view('backend.manage-area-active-inactive.manage-area-active-inactive')->with($data);
    }
}
