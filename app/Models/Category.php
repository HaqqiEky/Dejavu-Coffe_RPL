<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $tabel = 'categories';

    protected $fillable = [
        'nama',
        'gambar'
    ];

    public function Menu() {
        return $this->hasMany(Menu::class);
    }

    public function fillTable()
    {
        $category = [
            [
                "nama" => "BLENDED COFFEE",
                "gambar" => "assets\a\a.jpg"
            ],
            [
                "nama" => "BLENDED CREAM",
                "gambar" => "assets\b\a.jpg"
            ],
            [
                "nama" => "BLENDED TEA",
                "gambar" => "assets\c\a.jpg"
            ],
            [
                "nama" => "BREWED COFFEE",
                "gambar" => "assets\d\a.jpg"
            ],
            [
                "nama" => "ESPRESSO",
                "gambar" => "assets\g\a.jpg"
            ]
        ];
        return $category;
    }
}
