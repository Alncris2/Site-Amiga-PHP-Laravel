<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo extends Model
{
    public function guias()
    {
    	return $this->hasMany('App\Guia','tipo_id');
    }
}
