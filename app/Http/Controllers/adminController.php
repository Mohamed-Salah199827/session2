<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class adminController extends Controller
{
    function index()
    {
        $admins = admin::get();
        return view('admins', compact('admins'));
    }
    function create()
    {

        return view('create');
    }
    function destroy($id)
    {
         admin::find($id)->delete();
         return redirect()->route("admin.index");


    }
    function update($id)
    {
        $admin_id= admin::find($id);
         return view("update",compact("admin_id"));


    }
    function store($id ,Request $request)
    {

        $admin_id= admin::find($id)->update([
            "name"=>$request->name,
            "email"=>$request->email
        ]);
        return redirect()->route("admin.index");


    }

}
