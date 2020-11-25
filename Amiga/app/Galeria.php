<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    public function guia()
    {
        return $this->belongsTo('App\Guia','guia_id');
    }
}
