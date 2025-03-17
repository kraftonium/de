<?php

namespace App\Http\Controllers;

use App\Models\D_Dealership_Details;
use App\Models\D_Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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

    // public function searchOrders(Request $request)
    // {
    //     try {
    //         $query = $request->get('query');

    //         $orders = D_Orders::with([
    //             'orderByWhom',  // Admin/Dealer who placed the order
    //             'orderByCustomer.user', // The actual customer
    //             'customerDetails.vehicle.vehicletype' // Vehicle & its type
    //         ])
    //             ->where('id', 'LIKE', "%$query%")
    //             ->orWhereHas('orderByWhom', function ($q) use ($query) {
    //                 $q->where('name', 'LIKE', "%$query%");
    //             })
    //             ->orWhereHas('orderByCustomer.user', function ($q) use ($query) {
    //                 $q->where('name', 'LIKE', "%$query%")
    //                     ->orWhere('email', 'LIKE', "%$query%")
    //                     ->orWhere('phoneno', 'LIKE', "%$query%");
    //             })
    //             ->orWhereHas('customerDetails', function ($q) use ($query) {
    //                 $q->where('chassis_no', 'LIKE', "%$query%")
    //                     ->orWhere('battery_no', 'LIKE', "%$query%")
    //                     ->orWhere('controller_no', 'LIKE', "%$query%");
    //             })
    //             ->orWhereHas('customerDetails.vehicle', function ($q) use ($query) {
    //                 $q->where('name_of_vehicle', 'LIKE', "%$query%");
    //             })
    //             ->get();

    //         // Debug: Check if data is loading correctly
    //         foreach ($orders as $order) {
    //             Log::info('Order ID: ' . $order->id);
    //             Log::info('Order By: ' . optional($order->orderByWhom)->name);
    //             Log::info('Customer Name: ' . optional(optional($order->orderByCustomer)->user)->name);
    //             Log::info('Chassis No: ' . optional($order->customerDetails)->chassis_no);
    //         }

    //         return response()->json($orders);
    //     } catch (\Exception $e) {
    //         Log::error($e->getMessage());
    //         return response()->json(['error' => 'Something went wrong'], 500);
    //     }
    // }

    public function searchOrders(Request $request)
    {
        try {
            $query = $request->get('query');

            $order = D_Orders::with([
                'orderByWhom',
                'orderByCustomer.user',
                'customerDetails.vehicle.vehicletype'
            ])
                ->where('id', 'LIKE', "%$query%")
                ->orWhereHas('orderByWhom', function ($q) use ($query) {
                    $q->where('name', 'LIKE', "%$query%");
                })
                ->orWhereHas('orderByCustomer.user', function ($q) use ($query) {
                    $q->where('name', 'LIKE', "%$query%");
                })
                ->orWhereHas('customerDetails', function ($q) use ($query) {
                    $q->where('chassis_no', 'LIKE', "%$query%");
                })
                ->get();

            // Debug: Return JSON response in proper structure
            Log::info(json_encode($order));
            return response()->json($order);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }
}