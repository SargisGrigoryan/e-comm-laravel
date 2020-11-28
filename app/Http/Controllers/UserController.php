<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function login(Request $req){
        $user = User::where(['email' => $req->email])->first();
        if(!$user || !Hash::check($req->password, $user->password)){
            return "Username or password is incorrect";
        }else{
            $req->session()->put('user', $user);
            return redirect('/');
        }
    }

    function register(Request $req){
        $user = new User;
        $user->name = $req->username;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);

        // Check email if not registered
        if(User::where(['email' => $user->email])->first()){
            return "You email is already registered, please try another one...";
        }else{
            $user->save();
            return redirect ('/login');
        }
    }
}
