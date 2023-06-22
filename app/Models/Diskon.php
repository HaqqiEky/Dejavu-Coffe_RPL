<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diskon extends Model
{
    use HasFactory;

    protected $table = 'diskons';

    protected $fillable = [
        'kode',
        'discount',
        'minimal',
        'maximal_disc',
    ];

    protected $primaryKey = 'id_diskon';

    public function fillTable()
    {
        $diskon = [
            [
                "kode" => "MYPJUNE66",
                "discount" => 15,//%
                "minimal" => 50000, //minimal pembelian
                "maximal_disc" => 15000,
            ],
            [
                "kode" => "BSIJUNE66",
                "discount" => 30, //%
                "minimal" => 150000, //minimal pembelian
                "maximal_disc" => 30000,
            ],
            [
                "kode" => "MEGAJUNE66",
                "discount" => 50,
                "minimal" => 200000,
                "maximal_disc" => 50000,
            ],
            [
                "kode" => "MYPJUNE66",
                "discount" => 60,
                "minimal" => 250000,
                "maximal_disc" => 100000,
            ],
        ];
        return $diskon;
    }
}
