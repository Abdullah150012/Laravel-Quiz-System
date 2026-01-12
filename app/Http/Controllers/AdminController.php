<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    function login(Request $request){
        $admin = admin::where([
            ['name','=',$request->name],
            ['password','=',$request->password]
        ])->first();
        // return $admin;
        if($admin){
            return view("admin", ["name" => ucfirst($admin->name)]);
        }else{
            return "User not Found.";
        }
    }
}
