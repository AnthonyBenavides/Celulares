<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'tb_roles';
    protected $fillable = ['nom_rol','desc_rol'];
    protected $primaryKey = 'id_rol';
}
