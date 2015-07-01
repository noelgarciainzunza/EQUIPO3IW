<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alugrupos extends Model
{
    protected $table = 'alugrupos';
    protected $fillable = ['id_alumno', 'id_grupo'];   
}
