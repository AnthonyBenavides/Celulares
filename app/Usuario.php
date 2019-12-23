<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'users';
    protected $fillable = ['name','usu_ape','fecha_naci','usu_gene','usu_tele','email','usu_docu','password','id_rol','id_estado'];
    protected $primaryKey = 'id';
    
}
