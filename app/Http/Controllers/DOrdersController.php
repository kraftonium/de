<?php

namespace App\Http\Controllers;

use App\Models\D_Dealership_Details;
use App\Models\D_Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DOrdersController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'chassis_no' => 'required',
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

        // Update total_revenue in D_Dealership_Details
        D_Dealership_Details::where('user_id', $request['user_id'])
            ->increment('total_revenue', $request['price_including_gst']);

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
            'chassis_no' => 'required',
            'whose_name' => 'required',
            'price_including_gst' => 'required',
            'warranty' => 'required',
        ]);

        $order = D_Orders::find($id);

        // Get the old total price before updating
        $oldPrice = $order->total_price;


        $order->user_id = $request['user_id'];
        $order->customer_id = $request['customer_id'];
        $order->total_price = $request['price_including_gst'];
        $order->warranty = $request['warranty'];
        $order->save();

        // Calculate the price difference
        $priceDifference = $request['price_including_gst'] - $oldPrice;

        // Update total_revenue in D_Dealership_Details
        D_Dealership_Details::where('user_id', $request['user_id'])
            ->increment('total_revenue', $priceDifference);

        return redirect('/manage-orders');
    }

    public function delete($id)
    {
        // $order = D_Orders::find($id)->delete();
        $order = D_Orders::find($id);

        if ($order) {
            // Get the total price of the order before deletion
            $orderTotalPrice = $order->total_price;

            // Get the user_id associated with the order
            $userId = $order->user_id;

            // Delete the order
            $order->delete();

            // Decrease total_revenue in D_Dealership_Details
            D_Dealership_Details::where('user_id', $userId)
                ->decrement('total_revenue', $orderTotalPrice);
        }
        return redirect()->back();
    }

    public function manage()
    {
        // $orders = D_Orders::paginate(10);
        // $data = compact('orders');
        // return view('backend.manage-orders.manage-order')->with($data);
        $orders = D_Orders::with(['orderByCustomer', 'customerDetails.vehicle.vehicletype', 'orderByWhom'])->paginate(10);
        $data = compact('orders');
        return view('backend.manage-orders.manage-order')->with($data);
    }

    public function manage_own_orders()
    {
        $orders = D_Orders::where('user_id', Auth::user()->id)->paginate(10);
        $data = compact('orders');
        return view('backend.manage-orders.manage-order')->with($data);
    }
}