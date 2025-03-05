<?php

namespace App\Http\Controllers;

use App\Models\D_Stocks;
use App\Models\D_Vehicles;
use Illuminate\Http\Request;

class DStocksController extends Controller
{
    public function add()
    {
        $vehicles = D_Vehicles::all();
        $data = compact('vehicles');
        return view('backend.manage-stock.add-stock')->with($data);
    }

    public function create(Request $request)
    {
        $request->validate([
            'vehicle_id' => 'required',
            'quantity' => 'required',
            'whose_stock' => 'required',
        ]);

        $stock = new D_Stocks();
        $stock->vehicle_id = $request['vehicle_id'];
        $stock->quantity = $request['quantity'];
        $stock->whose_stock = $request['user_id'];
        $stock->save();

        return redirect('/manage-stock');
    }

    public function edit($id)
    {
        $vehicles = D_Vehicles::all();
        $stock = D_Stocks::where('id', $id)->first();
        $data = compact('stock', 'vehicles');
        return view('backend.manage-stock.edit-stock')->with($data);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'vehicle_id' => 'required',
            'quantity' => 'required',
            'whose_stock' => 'required',
            'user_id' => 'required',
        ]);

        $stock = D_Stocks::find($id);
        $stock->vehicle_id = $request['vehicle_id'];
        $stock->quantity = $request['quantity'];
        $stock->whose_stock = $request['user_id'];
        $stock->save();

        return redirect('/manage-stock');
    }

    public function delete($id)
    {
        $stock = D_Stocks::find($id)->delete();
        return redirect()->back();
    }

    public function manage()
    {
        $stocks = D_Stocks::paginate(10);
        $data = compact('stocks');
        return view('backend.manage-stock.manage-stock')->with($data);
    }
}
