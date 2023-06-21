<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $tabel = 'menus';

    protected $fillable = [
        'nama',
        'id_category',
        'harga',
        'stok',
        'gambar'
    ];

    public function Category() {
        return $this->belongsTo(Category::class, 'id_category');
    }

    public function fillTable()
    {
        $menu = [
            //BLENDED COFFEE
            [
                "nama" => "Caramel Farppuchino",
                "id_category" => "1",
                "harga" => "40000",
                "stok" => "20",
                "gambar" => "assets\a\a.jpg"
            ],
            [
                "nama" => "Coffe Frappuchino",
                "id_category" => "1",
                "harga" => "40000",
                "stok" => "22",
                "gambar" => "assets\a\b.jpg"
            ],
            [
                "nama" => "Mocha Frappuchino",
                "id_category" => "1",
                "harga" => "40000",
                "stok" => "14",
                "gambar" => "assets\a\c.jpg"
            ],
            [
                "nama" => "Caramel Java Chip Frappuchino",
                "id_category" => "1",
                "harga" => "40000",
                "stok" => "11",
                "gambar" => "assets\a\d.jpg"
            ],
            [
                "nama" => "Java Chip Frappuchino",
                "id_category" => "1",
                "harga" => "40000",
                "stok" => "9",
                "gambar" => "assets\a\g.jpg"
            ],

             //BLENDED CREAM
             [
                "nama" => "Caramel Cream Frappuchino",
                "id_category" => "2",
                "harga" => "40000",
                "stok" => "12",
                "gambar" => "assets\b\a.jpg"
            ],
            [
                "nama" => "Green Tea Cream Frappuchino",
                "id_category" => "2",
                "harga" => "40000",
                "stok" => "6",
                "gambar" => "assets\b\b.jpg"
            ],
            [
                "nama" => "Double Chocolate Cream Frappuchina",
                "id_category" => "2",
                "harga" => "40000",
                "stok" => "33",
                "gambar" => "assets\b\c.jpg"
            ],
            [
                "nama" => "Vanila Cream Frappuchino",
                "id_category" => "2",
                "harga" => "40000",
                "stok" => "12",
                "gambar" => "assets\b\d.jpg"
            ],

            //BLENDED TEA
            [
                "nama" => "Manggo Passion Frappuchino",
                "id_category" => "3",
                "harga" => "40000",
                "stok" => "12",
                "gambar" => "assets\c\a.jpg"
            ],
            [
                "nama" => "Rasberry Currant Frappuchino",
                "id_category" => "3",
                "harga" => "40000",
                "stok" => "6",
                "gambar" => "assets\c\b.jpg"
            ],

            //BREWED COFFE
            [
                "nama" => "Cold Brew",
                "id_category" => "4",
                "harga" => "40000",
                "stok" => "12",
                "gambar" => "assets\d\a.jpg"
            ],
            [
                "nama" => "Misto",
                "id_category" => "4",
                "harga" => "40000",
                "stok" => "6",
                "gambar" => "assets\d\b.jpg"
            ],
            [
                "nama" => "Freshly Brewed Coffe",
                "id_category" => "4",
                "harga" => "40000",
                "stok" => "33",
                "gambar" => "assets\d\c.jpg"
            ],
            [
                "nama" => "Vanila Sweet Cream Cold Brew",
                "id_category" => "4",
                "harga" => "40000",
                "stok" => "12",
                "gambar" => "assets\d\d.jpg"
            ],

            //ESPRESSO
            [
                "nama" => "Cafe Latte",
                "id_category" => "5",
                "harga" => "40000",
                "stok" => "20",
                "gambar" => "assets\g\a.jpg"
            ],
            [
                "nama" => "Cafe Mocha",
                "id_category" => "5",
                "harga" => "40000",
                "stok" => "22",
                "gambar" => "assets\g\b.jpg"
            ],
            [
                "nama" => "Caramel Macchiato",
                "id_category" => "5",
                "harga" => "40000",
                "stok" => "14",
                "gambar" => "assets\g\c.jpg"
            ],
            [
                "nama" => "Cold Foam",
                "id_category" => "5",
                "harga" => "40000",
                "stok" => "11",
                "gambar" => "assets\g\d.jpg"
            ],
            [
                "nama" => "Espresso Con Pann",
                "id_category" => "5",
                "harga" => "40000",
                "stok" => "9",
                "gambar" => "assets\g\g.jpg"
            ],
            [
                "nama" => "Iced Espresso & Matcha Fusion",
                "id_category" => "5",
                "harga" => "40000",
                "stok" => "9",
                "gambar" => "assets\g\h.jpg"
            ]
        ];
        return $menu;
    }
}
