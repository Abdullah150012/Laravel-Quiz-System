<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;

class AdminController extends Controller
{
    function login(Request $request){
        $validation = $request->validate([
            "name" => "required",
            "password" => "required"
        ]);
        $admin = admin::where([
            ['name','=',$request->name],
            ['password','=',$request->password]
        ])->first();
        if(!$admin){
            $validation = $request->validate([
            "user" => "required"
        ],[
            "user.required" => "User does not exist."
        ]);
        }
        // return $admin;
        if($admin){
            Session::put('admin',$admin);
            return redirect("dashboard");
            // return view("admin", ["name" => ucfirst($admin->name)]);
        }else{
            return "User not Found.";
        }
    }
    function dashboard(){
        $admin = Session::get('admin');
        if($admin){
            return view("admin", ["name" => ucfirst($admin->name)]);
        }else{
            return redirect("admin-login");
        }
    }
}
