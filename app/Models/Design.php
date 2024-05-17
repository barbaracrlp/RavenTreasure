<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Design extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'stock',
        'expiration',
        'price',
        'collection_id',
        'designer_id',
        'collection_id',
        'type_id',
        'file_path',
    ];

    //a partir de aqui creo las relaciones 

    public function designer():BelongsTo{
        return $this->belongsTo(Designer::class);
    }

    //falta el modelo 
    public function type():HasOne{
        return $this->hasOne(Type::class);
    }

    public function collection():BelongsTo{
        return $this->belongsTo(Collection::class);
    }





}
