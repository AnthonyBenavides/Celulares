<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'tb_usuarios';
    protected $fillable = ['usu_nom','usu_ape','fecha_naci','usu_gene','usu_tele','usu_correo','usu_docu','id_rol','id_estado'];
    protected $primaryKey = 'id_usu';
    
}
