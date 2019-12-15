<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'tb_estados';
    protected $fillable = ['nom_estado','id_ase'];
    protected $primaryKey = 'id_estado';
}
