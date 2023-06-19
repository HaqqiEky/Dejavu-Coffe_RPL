<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;

    protected $tabel = 'kotas';

    protected $fillable = [
        'nama',
    ];

    public function Outlet() {
        return $this->hasMany(Outlet::class);
    }

    public function fillTable()
    {
        $kota = [
            [
                "nama" => "Jakarta"
            ],
            [
                "nama" => "bandung"
            ],
            [
                "nama" => "Surabaya"
            ],
            [
                "nama" => "Yogyakarta"
            ],
            [
                "nama" => "Pekanbaru"
            ],
            [
                "nama" => "Semarang"
            ],
            [
                "nama" => "Malang"
            ],
            [
                "nama" => "Palu"
            ],
            [
                "nama" => "Bekasi"
            ],
            [
                "nama" => "Tangerang"
            ],
            [
                "nama" => "Depok"
            ],
            [
                "nama" => "Bogor"
            ],
            [
                "nama" => "Kediri"
            ],
            [
                "nama" => "Palembang"
            ],
            [
                "nama" => "Padang"
            ],
            [
                "nama" => "Manado"
            ],
            [
                "nama" => "Toraja"
            ],
            [
                "nama" => "Kendari"
            ]
        ];
        return $kota;
    }
}
