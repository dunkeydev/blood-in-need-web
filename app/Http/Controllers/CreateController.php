<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CreateController extends Controller
{
    function createaccount(Request $request)
    {
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'username'=>'required|unique:users',
            'phone'=>'required|integer',
            'gender'=>'required',
            'bloodgroup'=>'required',
            'division'=>'required',
            'district'=>'required',
            'postcode'=>'required|integer'
        ]);

        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];

        return $request->input();
    }
}
