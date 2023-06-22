<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Menu;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::join('menus', 'carts.id_menu', '=', 'menus.id')
            ->select('carts.*', 'menus.nama as nama', 'menus.harga as harga')
            ->get();

        return view('pembeli.customer_cart', compact('carts'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_menu' => 'required',
            'size' => 'required',
            'sugar' => 'required',
            'ice' => 'required',
            'whip' => 'required',
            'jumlah' => 'required|integer|min:1',
        ]);

        $cartData = [
            'id_menu' => $validatedData['id_menu'],
            'size' => $validatedData['size'],
            'sugar' => $validatedData['sugar'],
            'ice' => $validatedData['ice'],
            'whip' => $validatedData['whip'],
            'jumlah' => $validatedData['jumlah'],
        ];

        Cart::create($cartData);

        return redirect('/Cart')->with('success', 'Item added to cart successfully!');
    }
}
