<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    
    public function home()
    {
        $user = auth()->user();
        
        if ($user->can('pembeli')) {
            return view('pembeli.home', compact('user'));
        }
    }
}
