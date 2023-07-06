<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Kota;
use App\Models\Outlet;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Diskon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Haqqi',
            'username' => 'haq',
            'no_telp' => '1051609749',
            'email' => 'haqqi@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'username' => 'admin',
            'no_telp' => '0584016259',
            'email' => 'admin@example.com',
            'role' => 'administrator',
            'password' => Hash::make('password'),
        ]);

        $kota = new Kota();
        $outlet = new Outlet();
        $category = new Category();
        $menu = new Menu();
        $diskon = new Diskon();

        Kota::insert($kota->fillTable());
        Outlet::insert($outlet->fillTable());
        Category::insert($category->fillTable());
        Menu::insert($menu->fillTable());
        Diskon::insert($diskon->fillTable());
    }
}
