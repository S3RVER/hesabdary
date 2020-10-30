<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    public function registrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {

        $request->validate([
            'username'    => 'required|unique:users|max:255',
            'email'  => 'required',
            'password'  => 'required',
            // TODO model cast

        ]);

        $x = User::create([
//            'username'    => $request->username,
            'password'  => bcrypt($request->input('password')),
            'email'     => $request->input('email'),
            'username'     => $request->input('username'),

        ]);

        Auth::login($x);

        if (Auth::check()) {
            return redirect()->route('home');
        }
        return redirect()->route('login')->withErrors(['لطفا وارد شوید']);
    }

}
