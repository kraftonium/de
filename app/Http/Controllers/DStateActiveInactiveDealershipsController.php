<?php

namespace App\Http\Controllers;

use App\Models\D_State_Active_Inactive_Dealerships;
use Illuminate\Http\Request;

class DStateActiveInactiveDealershipsController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'state' => 'required',
            'status' => 'required',
            'whose_dealer' => 'required',
            'under_dealer' => 'required',
        ]);

        $status = new D_State_Active_Inactive_Dealerships();
        $status->state = $request['state'];
        $status->status = $request['status'];
        $status->whose_dealer = $request['user_id'];
        $status->under_whom = $request['under_id'];
        $status->save();

        return redirect('/manage-state-active-inactive');
    }

    public function manage()
    {
        $status = D_State_Active_Inactive_Dealerships::paginate(10);
        $data = compact('status');
        return view('backend.manage-state-active-inactive.manage-state-active-inactive')->with($data);
    }

    public function edit($id)
    {
        $status = D_State_Active_Inactive_Dealerships::where('id', $id)->first();
        $data = compact('status');
        return view('backend.manage-state-active-inactive.edit-state-active-inactive')->with($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'state' => 'required',
            'status' => 'required',
            'whose_dealer' => 'required',
            'under_dealer' => 'required',
        ]);

        $status = D_State_Active_Inactive_Dealerships::find($id);
        $status->state = $request['state'];
        $status->status = $request['status'];
        $status->whose_dealer = $request['user_id'];
        $status->under_whom = $request['under_id'];
        $status->save();

        return redirect('/manage-state-active-inactive');
    }

    public function delete($id)
    {
        $status = D_State_Active_Inactive_Dealerships::find($id)->delete();
        return redirect()->back();
    }
}
