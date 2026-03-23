<?php

namespace App\Http\Controllers;

use App\Models\D_Stocks;
use App\Models\D_Stocks_By_Colors;
use Illuminate\Http\Request;

class DStocksByColorsController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'color' => 'required',
            'quantity' => 'required',
            'whose_stock_id' => 'required',
        ]);

        $stock = new D_Stocks_By_Colors();
        $stock->color = $request['color'];
        $stock->quantity = $request['quantity'];
        $stock->whose_stocks_id = $request['user_id'];
        $stock->save();

        return redirect('/dashboard');
    }

    public function edit($id)
    {
        $colorstock = D_Stocks_By_Colors::where('id', $id)->first();
        $data = compact('colorstock');
        return view('backend.manage-colors-stock.edit-colors-stock')->with($data);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'color' => 'required',
            'quantity' => 'required',
            'whose_stocks_id' => 'required',
            'user_id' => 'required',
        ]);

        $stock = D_Stocks_By_Colors::find($id);
        $stock->color = $request['color'];
        $stock->quantity = $request['quantity'];
        $stock->whose_stocks_id = $request['user_id'];
        $stock->save();

        return redirect('/dashboard');
    }

    public function delete($id)
    {
        $stock = D_Stocks_By_Colors::find($id)->delete();
        return redirect()->back();
    }

    public function manage()
    {
        $stocks = D_Stocks_By_Colors::paginate(10);
        $data = compact('stocks');
        return view('backend.manage-colors-stock.manage-colors-stock')->with($data);
    }
}