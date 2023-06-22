<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kota;

class KotaController extends Controller
{
    public function index()
    {
        $kota = Kota::all();

        return view('pembeli.kota_terdapat_oulet')->with('kota', $kota);
    }
}
