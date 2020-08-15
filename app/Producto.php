<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function galeria(){
        return $this->hasMany(Galeria::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
