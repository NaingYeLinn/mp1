<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    //
    public function createAdmin(Request $request){
        //creating new keyword to keep database
        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = "admin";
        $user->password = Hash::make($request->password);
        $user->save();
    }

    public function index(){
        return view('admin-list');
    }
}
