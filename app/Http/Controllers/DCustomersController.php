<?php

namespace App\Http\Controllers;

use App\Models\D_Customers;
use App\Models\D_Stocks;
use App\Models\D_Vehicles;
use Illuminate\Http\Request;

class DCustomersController extends Controller
{
    public function add()
    {
        $vehicles = D_Vehicles::all();
        $data = compact('vehicles');
        return view('backend.manage-customers.add-customer')->with($data);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'battery_no' => 'required',
            'chassis_no' => 'required',
            'controller_no' => 'required',
            'vehicle_id' => 'required',
            'date_of_purchase' => 'required|date',
            'produce_date' => 'required|date',
            'whose_customer_name' => 'required',
            'invoice_no' => 'required',
            'insurance_policy_no' => 'required',
            'customer_gstno' => 'required',
        ]);

        $customer = new D_Customers();
        $customer->user_id = $request['user_id'];
        $customer->battery_no = $request['battery_no'];
        $customer->chassis_no = $request['chassis_no'];
        $customer->controller_no = $request['controller_no'];
        $customer->vehicle_id = $request['vehicle_id'];
        $customer->date_of_purchase = $request['date_of_purchase'];
        $customer->produce_date = $request['produce_date'];
        $customer->whose_customer = $request['whose_customer'];
        $customer->invoice_no = $request['invoice_no'];
        $customer->insurance_policy_no = $request['insurance_policy_no'];
        $customer->customer_gstno = $request['customer_gstno'];
        $customer->save();

        // Decrease stock by 1 for the given vehicle_id
        $stock = D_Stocks::where('vehicle_id', $request['vehicle_id'])
            ->where('whose_stock', $request['whose_customer'])
            ->first();

        if ($stock) {
            if ($stock->quantity > 0) {
                $stock->decrement('quantity', 1);
            } else {
                return redirect()->back()->withInput()->withErrors('vehicle_id', 'Stock for this vehicle is empty!');
            }
        } else {
            return redirect()->back()->withInput()->withErrors('vehicle_id', 'No stock found for this vehicle!');
        }

        return redirect('/manage-customers');
    }

    public function edit($id)
    {
        $vehicles = D_Vehicles::all();
        $customer = D_Customers::where('id', $id)->first();
        $data = compact('customer', 'vehicles');
        return view('backend.manage-customers.edit-customer')->with($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'battery_no' => 'required',
            'chassis_no' => 'required',
            'controller_no' => 'required',
            'vehicle_id' => 'required',
            'date_of_purchase' => 'required|date',
            'produce_date' => 'required|date',
            'whose_customer_name' => 'required',
            'invoice_no' => 'required',
            'insurance_policy_no' => 'required',
            'customer_gstno' => 'required',
        ]);

        $customer = D_Customers::find($id);
        $oldVehicleId = $customer->vehicle_id; // Get the old vehicle_id
        $userId = $customer->whose_customer;

        $customer->user_id = $request['user_id'];
        $customer->battery_no = $request['battery_no'];
        $customer->chassis_no = $request['chassis_no'];
        $customer->controller_no = $request['controller_no'];
        $customer->vehicle_id = $request['vehicle_id'];
        $customer->date_of_purchase = $request['date_of_purchase'];
        $customer->produce_date = $request['produce_date'];
        $customer->whose_customer = $request['whose_customer'];
        $customer->invoice_no = $request['invoice_no'];
        $customer->insurance_policy_no = $request['insurance_policy_no'];
        $customer->customer_gstno = $request['customer_gstno'];
        $customer->save();

        // Adjust stock if vehicle_id has changed
        if ($oldVehicleId != $request['vehicle_id']) {
            // Add 1 back to the old vehicle's stock
            D_Stocks::where('vehicle_id', $oldVehicleId)
                ->where('whose_stock', $userId)
                ->increment('quantity', 1);

            // Reduce 1 from the new vehicle's stock
            $newStock = D_Stocks::where('vehicle_id', $request['vehicle_id'])
                ->where('whose_stock', $request['whose_customer'])
                ->first();

            if ($newStock) {
                if ($newStock->quantity > 0) {
                    $newStock->decrement('quantity', 1);
                } else {
                    return redirect()->back()->withInput()->withErrors('vehicle_id', 'Stock for this vehicle is empty!');
                }
            } else {
                return redirect()->back()->withInput()->withErrors('vehicle_id', 'No stock found for this vehicle!');
            }
        }


        return redirect('/manage-customers');
    }

    public function delete($id)
    {
        $customer = D_Customers::find($id)->delete();
        return redirect()->back();
    }

    public function manage()
    {
        $customers = D_Customers::paginate(10);
        $data = compact('customers');
        return view('backend.manage-customers.manage-customer')->with($data);
    }
}