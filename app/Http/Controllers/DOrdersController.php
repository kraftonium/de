<?php

namespace App\Http\Controllers;

use App\Models\D_Orders;
use Illuminate\Http\Request;

class DOrdersController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'whose_name' => 'required',
            'price_including_gst' => 'required',
            'warranty' => 'required',
        ]);

        $order = new D_Orders();
        $order->user_id = $request['user_id'];
        $order->customer_id = $request['customer_id'];
        $order->total_price = $request['price_including_gst'];
        $order->warranty = $request['warranty'];
        $order->save();

        return redirect('/manage-orders');
    }

    public function edit($id)
    {
        $order = D_Orders::where('id', $id)->first();
        $data = compact('order');
        return view('backend.manage-orders.edit-order')->with($data);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'whose_name' => 'required',
            'price_including_gst' => 'required',
            'warranty' => 'required',
        ]);

        $order = D_Orders::find($id);
        $order->user_id = $request['user_id'];
        $order->customer_id = $request['customer_id'];
        $order->total_price = $request['price_including_gst'];
        $order->warranty = $request['warranty'];
        $order->save();

        return redirect('/manage-orders');
    }

    public function delete($id)
    {
        $order = D_Orders::find($id)->delete();
        return redirect()->back();
    }

    public function manage()
    {
        $orders = D_Orders::paginate(10);
        $data = compact('orders');
        return view('backend.manage-orders.manage-order')->with($data);
    }
}
