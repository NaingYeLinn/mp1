<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    // admin creating list
    public function createAdmin(Request $request){
        // Checking Validate
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        //creating new keyword to keep database
        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = "admin";
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('admin-list');
    }

    // for Admin List Show
    public function index(){
        $users= User::Where('role','=','admin')->select()->get();
        return view('admin-list', compact('users'));
    }

    //for Admin Delete
    public function delete($id){
        User::findorfail($id)->delete(); //how to delete id
        return redirect()->route('admin-list');
    }
     //for Admin edit
     public function edit($id){
        $users= User::findorfail($id);
        return view('admin-edit', compact('users'));
    }
    //update admin
    public function updateAdmin(Request $request,$id){
        // Checking Validate
        $validated = $request->validate([ 
            'name' => 'required',
            'email' => 'required',
        ]);

        $user= User::findorfail($id);//how to find id
        $user->name = $request->name; //setting new value
        $user->email = $request->email;
        $user->save(); //saving to database
        return redirect()->route('admin-list'); //back to list of admin
    }
}
