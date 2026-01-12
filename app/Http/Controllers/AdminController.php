<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Quiz;

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
    function categories(){
        $categories = Category::get();
        $admin = Session::get('admin');
        if($admin){
            return view("categories", ["name" => ucfirst($admin->name), "categories" => $categories]);
        }else{
            return redirect("admin-login");
        }
    }
    function adminLogout(){
        Session::forget('admin');
        return redirect("admin-login");
    }
    function addCategory(Request $request){
        $validation = $request->validate([
            "category" => "required | min:3 | unique:categories,name"
        ]);
        $admin = Session::get('admin');
        $category = new Category();
        $category->name = $request->category;
        $category->creator = $admin->name;
        if($category->save()){
            Session::flash('category', "Category " . $request->category . " successfully added.");
        }
        return redirect('/admin-categories');
    }
    function deleteCategory( Request $request, $id){
        $isDeleted = Category::find($id)->delete();
        if($isDeleted){
            Session::flash('category', "Category " . $request->category . " successfully Deleted.");
        }
        return redirect('/admin-categories');
    }
    function addQuiz(){
        $categories = Category::get();
        $admin = Session::get('admin');
        if($admin){
            return view("add-quiz", ["name" => ucfirst($admin->name), "categories" => $categories]);
        }else{
            return redirect("admin-login");
        }
    }
}
