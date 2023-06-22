<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;

class MenuController extends Controller
{
    public function index($id_category)
    {
        $category = Category::findOrFail($id_category);
        $menu = Menu::where('id_category', $id_category)->get();

        return view('pembeli.daftar_cabang_menu', compact('category', 'menu'));
    }

    public function variant($id)
    {
        $menu = Menu::where('id', $id)->get();

        return view('pembeli.cutomer_variant', compact('menu'));
    }
}
