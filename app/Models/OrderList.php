<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderList extends Model
{
    use HasFactory;

    protected $table = 'order_lists';

    protected $fillable = [
        'id_cart',
        'id_user',
    ];

    protected $primaryKey = 'id_order';

    public function Menus() {
        return $this->hasMany(Cart::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function carts()
{
    return $this->belongsToMany(Cart::class, 'carts_orderList', 'id_cart', 'id_order');
}
}