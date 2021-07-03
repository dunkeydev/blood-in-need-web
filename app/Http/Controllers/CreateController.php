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
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11',
            'gender'=>'required',
            'bloodgroup'=>'required',
            'division'=>'required',
            'district'=>'required',
            'postcode'=>'required|integer'
        ]);

        $data = User::find(session('LoggedUser'));
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->username = $request->username;
        $data->phone = $request->phone;
        $data->gender = $request->gender;
        $data->bloodgroup = $request->bloodgroup;
        $data->division = $request->division;
        $data->district = $request->district;
        $data->postcode = $request->postcode;

        $save = $data->save();

        return dd($save);
    }
}
