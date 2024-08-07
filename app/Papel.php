<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Papel extends Model
{
    protected $fillable=[
        'nome',
        'descricao'
    ];

    public function permissoes()
    {
        return $this->belongsToMany(Papel::class);
        
    }
}
