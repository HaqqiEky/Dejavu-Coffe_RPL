<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\OrderList;
use App\Models\Payment;

class OrderListController extends Controller
{
    public function store()
{
    $id_carts = $request->input('id_cart');
    $total = $request->input('total');
    $userId = Auth::id(); // Ambil ID user yang sedang login

    // Simpan data ke dalam model OrderList
    $orderList = new OrderList();
    $orderList->id_user = $userId;
    $orderList->save();

    // Simpan ID cart ke dalam OrderList melalui relasi many-to-many
    $orderList->carts()->attach($id_carts);

    // Simpan data ke dalam model Payment
    $payment = new Payment();
    $payment->id_user = $userId;
    $payment->total = $total;
    $payment->status = 'payment';
    $payment->save();

    return redirect('/Payment')->with('success', 'Order berhasil disimpan.');
}
}
