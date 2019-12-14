<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'tb_marcas';
    protected $fillable = ['nom_marca'];
    protected $primaryKey = 'id_marca';
}
