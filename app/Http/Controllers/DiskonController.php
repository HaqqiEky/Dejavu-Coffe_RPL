<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diskon;
use App\Models\Cart;

class DiskonController extends Controller
{
    public function index()
    {
        $diskon = Diskon::all();

        return view('pembeli.customer_voucher')->with('diskon', $diskon);
    }
    
    public function cart($id_diskon)
    {
        $diskon = Diskon::where($id_diskon);
        $carts = Cart::join('menus', 'carts.id_menu', '=', 'menus.id')
            ->select('carts.*', 'menus.nama as nama', 'menus.harga as harga')
            ->get();

        return view('pembeli.cart_diskon.customer_cart', compact('diskon', 'carts'));
    }
}