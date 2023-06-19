<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('session/register');
    }

    public function store(Request $request)
    {
        $dataRegister = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'no_telp' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ],[
            'name.required' => 'Nama Wajib di isi!',
            'username.required' => 'Username Wajib di isi!',
            'no_telp.required' => 'Nomor Telefon Wajib di isi!',
            'no_telp.unique' => 'Nomor Telefon sudah digunakan!',
            'email.required' => 'Email Wajib di isi!',
            'email.email' => 'Email tidak valid!',
            'email.unique' => 'Email Sudah sudah digunakan!',
            'password.required' => 'Password Wajib di isi!',
            'password.min' => 'Password minimal 8 karakter!'
        ]);
        $dataRegister['password'] = bcrypt($dataRegister['password']);
        $dataRegister['role'] = 'pembeli';

        $user = User::create($dataRegister);
        session()->flash('success', 'Akun Anda berhasil dibuat. Silakan masukkan email dan password untuk masuk ke dalam sistem.');
        return redirect('/Login')->with('success', 'Anda sudah dapat masuk dengan akun yang baru saja dibuat.');
    }
}
