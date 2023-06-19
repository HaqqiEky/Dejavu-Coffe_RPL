<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Kota;
use App\Models\Outlet;

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
            'no_telp' => '081907319592',
            'email' => 'haqqi@gmail.com',
            'password' => Hash::make('arwank111'),
        ]);

        $kota = new Kota();
        $outlet = new Outlet();

        Kota::insert($kota->fillTable());
        Outlet::insert($outlet->fillTable());
    }
}
