<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable=[
        'buyer_id',
        'totalPrice',
    ];

    public function itemcarts(){
        return $this->hasMany(CartItem::class);
    }

    public function order(){
        return $this->belongsTo(Order::class);
    }
}
