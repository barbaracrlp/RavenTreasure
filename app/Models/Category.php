<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    protected $fillable = ['name'];

    public function designs()
    {
        return $this->belongsToMany(Design::class, 'category_design');
    }
}
