<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){
        return view('pembeli.pembayaran');
    }

    public function banktransfer_a(){
        return view('pembeli.pembayaran.pembayaran_banktransfer_a');
    }

    public function banktransfer_b(){
        return view('pembeli.pembayaran.pembayaran_banktransfer_b');
    }

    public function banktransfer(){
        return view('pembeli.pembayaran.pembayaran_banktransfer');
    }

    public function gopay(){
        return view('pembeli.pembayaran.pembayaran_gopay');
    }
}
