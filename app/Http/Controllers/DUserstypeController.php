<?php

namespace App\Http\Controllers;

use App\Models\D_Userstype;
use Illuminate\Http\Request;

class DUserstypeController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'usertype' => 'required',
        ]);

        $type = new D_Userstype();
        $type->usertype = $request['usertype'];
        $type->save();

        return redirect('/manage-usertype');
    }

    public function edit($id)
    {
        $type = D_Userstype::where('id', $id)->first();
        $data = compact('type');
        return view('backend.manage-usertype.edit-usertype')->with($data);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'usertype' => 'required',
        ]);

        $type = D_Userstype::find($id);
        $type->usertype = $request['usertype'];
        $type->save();

        return redirect('/manage-usertype');
    }

    public function delete($id)
    {
        $type = D_Userstype::find($id)->delete();
        return redirect()->back();
    }

    public function manage()
    {
        $types = D_Userstype::paginate(10);
        $data = compact('types');
        return view('backend.manage-usertype.manage-usertype')->with($data);
    }
}