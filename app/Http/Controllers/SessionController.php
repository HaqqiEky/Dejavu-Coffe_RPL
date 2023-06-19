<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    function index()
    {
        return view("session/login");
    }

    function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required' => 'Email atau Username Wajib di isi!',
            'password.required' => 'Password Wajib di isi!',
        ]);

        $dataLogin = $request->only('email', 'password');

        if (Auth::attempt($dataLogin)) {
            return redirect('/Dashboard');
        }

        return back()->withErrors(['email' => 'Email atau Password tidak valid']);
    }
}
