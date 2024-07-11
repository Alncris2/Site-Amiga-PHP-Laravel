<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portal extends Model
{
    public function portal()
    {
        return $this->belongsTo('App\Portal','portal_id');
    }
}
