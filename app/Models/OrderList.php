<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderList extends Model
{
    use HasFactory;

    protected $table = 'order_list';

    protected $fillable = [
        'id_cart',
        'total',
    ];

    public function Menus() {
        return $this->belongsToMany(Menu::class);
    }
}
