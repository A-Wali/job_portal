<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    public function registration()
    {
        return view('home.account.registration');
    }

    public function processregistration(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed | min:5',
            'password_confirmation' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('account.registration')->withInput()->withErrors($validator);
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('account.login')->with('success', 'You have registered successfully!');
    }

    public function login()
    {
        return view('home.account.login');
    }
}
