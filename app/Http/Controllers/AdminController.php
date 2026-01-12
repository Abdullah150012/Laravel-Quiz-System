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
        return $admin;
    }
}
