<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guia extends Model
{
    protected $table = "guias";

    public function tipo()
    {
        return $this->belongsTo('App\tipo', 'tipo_id');
    }
    public function galeria()
    {
        return $this->hasMany('App\Galeria','guia_id');
    }
}
