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

        return view('daftar_cabang_menu', compact('category', 'menu'));
    }
}
