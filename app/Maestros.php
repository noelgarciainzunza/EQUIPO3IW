<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Maestros extends Model
{
    protected $table = 'maestros';

    protected $fillable = ['nombre'];

    public function gruposs()
    {
        return  $this->hasMany('Grupos', 'id_maestro', 'id');
    }

}


