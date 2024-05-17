<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable=[
        'id_cart',
        'design_id',
        'quantity',
        'price_unit',
        'total',
    ];

    //relacion con el carrito en si 
    public function cart(){
        return $this->belongsTo(Cart::class);
    }
}
