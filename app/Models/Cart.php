<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';

    protected $fillable = [
        'id_menu',
        'size',
        'sugar',
        'ice',
        'whip',
        'jumlah',
    ];

    public function Menus() {
        return $this->belongsToMany(Menu::class, 'carts_menus', 'cart_id', 'menu_id');
    }

    public function OrderList()
{
    return $this->belongsToMany(OrderList::class, 'carts_orderList', 'id_cart', 'id_order');
}
}
