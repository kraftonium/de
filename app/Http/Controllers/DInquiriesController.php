<?php

namespace App\Http\Controllers;

use App\Models\D_Inquiries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DInquiriesController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phoneno' => 'required|numeric|min:10',
            'city' => 'required',
            'inquiry_subject' => 'required',
            'description' => 'required',
            'whose_inquiry' => 'required',
        ]);

        $inquiry = new D_Inquiries();
        $inquiry->name = $request['name'];
        $inquiry->email = $request['email'];
        $inquiry->phoneno = $request['phoneno'];
        $inquiry->city = $request['city'];
        $inquiry->inquiry_subject = $request['inquiry_subject'];
        $inquiry->description = $request['description'];
        $inquiry->whose_inquiry = $request['user_id'];
        $inquiry->save();

        return redirect('/manage-inquiries');
    }

    public function edit($id)
    {
        $inquiry = D_Inquiries::where('id', $id)->first();
        $data = compact('inquiry');
        return view('backend.manage-inquiries.edit-inquiries')->with($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phoneno' => 'required|numeric|min:10',
            'city' => 'required',
            'inquiry_subject' => 'required',
            'description' => 'required',
            'whose_inquiry' => 'required',
        ]);

        $inquiry = D_Inquiries::find($id);
        $inquiry->name = $request['name'];
        $inquiry->email = $request['email'];
        $inquiry->phoneno = $request['phoneno'];
        $inquiry->city = $request['city'];
        $inquiry->inquiry_subject = $request['inquiry_subject'];
        $inquiry->description = $request['description'];
        $inquiry->whose_inquiry = $request['user_id'];
        $inquiry->save();

        return redirect('/manage-inquiries');
    }

    public function delete($id)
    {
        $inquiry = D_Inquiries::find($id)->delete();
        return redirect()->back();
    }


    public function manage()
    {
        $inquiries = D_Inquiries::paginate(15);
        $data = compact('inquiries');
        return view('backend.manage-inquiries.manage-inquiries')->with($data);
    }

    public function manage_single_dealer_inquiries($id)
    {
        $inquiries = D_Inquiries::where('whose_inquiry', $id)->paginate(15);
        $data = compact('inquiries');
        return view('backend.manage-inquiries.manage-inquiries')->with($data);
    }

    public function search_inquiries(Request $request)
    {
        // $query = $request->input('query');

        // $search = D_Inquiries::with('whoseInquiry')
        //     ->where(function ($q) use ($query) {
        //         $q->where('name', 'LIKE', "%{$query}%")
        //             ->orWhere('email', 'LIKE', "%{$query}%")
        //             ->orWhere('phoneno', 'LIKE', "%{$query}%")
        //             ->orWhere('city', 'LIKE', "%{$query}%");
        //     })
        //     ->get();

        $authUserId = Auth::id();
        $query = $request->input('query');

        $search = D_Inquiries::with('whoseInquiry')
            ->where('whose_inquiry', '>', $authUserId) // 🔑 hierarchy rule
            ->where('whose_inquiry', '>=', $authUserId)
            ->where(function ($q) use ($query) {
                $q->where('name', 'LIKE', "%{$query}%")
                    ->orWhere('email', 'LIKE', "%{$query}%")
                    ->orWhere('phoneno', 'LIKE', "%{$query}%")
                    ->orWhere('city', 'LIKE', "%{$query}%");
            })
            ->get();

        return response()->json($search);
    }
}