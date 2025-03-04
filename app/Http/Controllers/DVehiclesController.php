<?php

namespace App\Http\Controllers;

use App\Models\D_Vehicle_Type;
use App\Models\D_Vehicles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class DVehiclesController extends Controller
{
    public function add()
    {
        $vehicletypes = D_Vehicle_Type::all();
        $data = compact('vehicletypes');
        return view('backend.manage-vehicle.add-vehicle')->with($data);
    }


    public function create(Request $request)
    {
        $request->validate([
            'name_of_vehicle' => 'required',
            'type_of_vehicle_id' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif',
            'color' => 'required',
        ]);

        $imagename = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = public_path('/vehicle_images/');

            if (!is_dir($path)) {
                mkdir($path, 0755, true);
            }

            $imagename = 'vehicle_images/' . time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($path, basename($imagename));
        } else {
            Log::warning('Image file was not found in the request.');
        }

        $vehicle = new D_Vehicles();
        $vehicle->name_of_vehicle = $request['name_of_vehicle'];
        $vehicle->type_of_vehicle_id = $request['type_of_vehicle_id'];
        $vehicle->image = $imagename;
        $vehicle->color = $request['color'];
        $vehicle->save();

        return redirect('/manage-vehicles');
    }

    public function edit($id)
    {
        $vehicle = D_Vehicles::where('id', $id)->first();
        $vehicletypes = D_Vehicle_Type::all();
        $data = compact('vehicle', 'vehicletypes');
        return view('backend.manage-vehicle.edit-vehicle')->with($data);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name_of_vehicle' => 'required',
            'type_of_vehicle_id' => 'required',
            'color' => 'required',
        ]);

        $vehicle = D_Vehicles::find($id);
        $imagename = null;
        if ($request->hasFile('image')) {
            File::delete(public_path($vehicle->image));
            $image = $request->file('image');
            $path = public_path('/vehicle_images/');

            if (!is_dir($path)) {
                mkdir($path, 0755, true);
            }

            $imagename = 'vehicle_images/' . time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($path, basename($imagename));
        } else {
            Log::warning('Image file was not found in the request.');
        }

        $vehicle->name_of_vehicle = $request['name_of_vehicle'];
        $vehicle->type_of_vehicle_id = $request['type_of_vehicle_id'];
        if ($request->hasFile('image')) {
            $vehicle->image = $imagename;
        }
        $vehicle->color = $request['color'];
        $vehicle->save();

        return redirect('/manage-vehicles');
    }

    public function delete($id)
    {
        $vehicle = D_Vehicles::find($id)->delete();
        return redirect()->back();
    }

    public function manage()
    {
        $vehicles = D_Vehicles::paginate(10);
        $data = compact('vehicles');
        return view('backend.manage-vehicle.manage-vehicle')->with($data);
    }
}
