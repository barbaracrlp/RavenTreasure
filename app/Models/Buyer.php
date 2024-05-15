<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;

    //de momento solo una 
    protected $fillable = [
        'address',
    ];

    public function user(){
        return $this->belongsTo(User::class);

    }

    public function payment(){
        return$this->hasOne(Payment::class);
    }


}
