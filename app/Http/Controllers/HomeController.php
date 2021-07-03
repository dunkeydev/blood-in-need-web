<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{

    function register()
    {
        return view('user.register');
    }


    function saveUser(Request $request)
    {
        $request->validate([
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed|min:6|max:12',
        ]);

        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->firstname = "";
        $user->lastname = "";
        $user->username = "";
        $user->phone = "0";
        $user->gender = "";
        $user->bloodgroup = "";
        $user->division = "";
        $user->district = "";
        $user->postcode = "0";
        $user->verified = 0;

        $save = $user->Save();
        return $request->input();
    }

    function checklogin(Request $req)
    {
        $req->validate([
            'email'=>'required',
            'password'=>'required|min:6|max:12',
        ]);

        $userInfo = User::where('email','=', $req->email)->first();
        if(!$userInfo){
            return redirect("welcome");
        }else{
            //check password
            if(Hash::check($req->password, $userInfo->password)){
                $req->session()->put('LoggedUser', $userInfo->id);
                return redirect("home");
            }else{
                return dd("Fail");
            }
        }
    }

    function check()
    {
        return view('home');
    }

    function userlogout()
    {
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/welcome');
        }
    }
}
