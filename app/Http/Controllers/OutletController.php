<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outlet;
use App\Models\Kota;

class OutletController extends Controller
{
    public function index($id_kota)
    {
        $kota = Kota::findOrFail($id_kota);
        $outlets = Outlet::where('id_kota', $id_kota)->get();

        return view('pembeli.outlet_berdasarkan_kota', compact('kota', 'outlets'));
    }
}