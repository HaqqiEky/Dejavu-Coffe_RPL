<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;

    protected $table = 'outlets';

    protected $fillable = [
        'nama',
        'id_kota',
        'alamat',
        'gambar',
        'jam_buka',
        'jam_tutup',
    ];

    public function Kota() {
        return $this->belongsTo(Kota::class, 'id_kota');
    }

    public function fillTable()
    {
        $outlet = [
            //jakarta
            [
                "nama" => "DejaVu Coffe Tebet",
                "id_kota" => "1",
                "alamat" => "MT Haryono St No.9, RT.11/RW.5, West Tebet, Jakarta, South Jakarta City, Jakarta 12810",
                "gambar" => "assets/Store-1.png",
                "jam_buka" => "08:00",
                "jam_tutup" => "23:59"
            ],
            [
                "nama" => "DejaVu Coffee Slamet Riyadi",
                "id_kota" => "1",
                "alamat" => "Slamet Riyadi St No.301, Penumping, Laweyan, Surakarta City, Central Java 57141",
                "gambar" => "assets/Store-2.png",
                "jam_buka" => "08:00",
                "jam_tutup" => "22:00"
            ],
            [
                "nama" => "DejaVu Coffee Malioboro",
                "id_kota" => "1",
                "alamat" => "Jl. Malioboro No.41, Sosromenduran, Gedong Tengen, Daerah Istimewa Yogyakarta 55271",
                "gambar" => "assets/Store-3.png",
                "jam_buka" => "08:00",
                "jam_tutup" => "23:59"
            ],
            [
                "nama" => "DejaVu Coffee Gubeng",
                "id_kota" => "1",
                "alamat" => "Jl. Raya Gubeng No.33, RT.002/RW.06, Gubeng, Kec. Gubeng, Surabaya, Jawa Timur 60281",
                "gambar" => "assets/Store-4.png",
                "jam_buka" => "08:00",
                "jam_tutup" => "22:00"
            ],
            [
                "nama" => "DejaVu Coffee Madiun",
                "id_kota" => "1",
                "alamat" => "Jl. Cokroaminoto No.40, Kejuron, Kec. Taman, Kota Madiun, Jawa Timur 63133",
                "gambar" => "assets/Store-5.png",
                "jam_buka" => "08:00",
                "jam_tutup" => "22:00"
            ],
        ];
        return $outlet;
    }
}
