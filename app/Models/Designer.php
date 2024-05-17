<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designer extends Model
{
    use HasFactory;

    protected $fillable = [
        'nameBrand',
    ];

    public function user(){
        return $this->belongsTo(User::class);

    }

    public function payment(){
        return$this->hasOne(Payment::class);
    }



}
