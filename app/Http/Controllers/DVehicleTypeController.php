<?php

namespace App\Http\Controllers;

use App\Models\D_Vehicle_Type;
use Illuminate\Http\Request;

class DVehicleTypeController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'type_of_vehicle' => 'required',
        ]);

        $type = new D_Vehicle_Type();
        $type->type_of_vehicle = $request['type_of_vehicle'];
        $type->save();

        return redirect('/manage-vehicle-type');
    }

    public function edit($id)
    {
        $type = D_Vehicle_Type::where('id', $id)->first();
        $data = compact('type');
        return view('backend.manage-vehicle-type.edit-vehicletype')->with($data);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'type_of_vehicle' => 'required',
        ]);

        $type = D_Vehicle_Type::find($id);
        $type->type_of_vehicle = $request['type_of_vehicle'];
        $type->save();

        return redirect('/manage-vehicle-type');
    }

    public function delete($id)
    {
        $type = D_Vehicle_Type::find($id)->delete();
        return redirect()->back();
    }

    public function manage()
    {
        $types = D_Vehicle_Type::paginate(10);
        $data = compact('types');
        return view('backend.manage-vehicle-type.manage-vehicletype')->with($data);
    }
}