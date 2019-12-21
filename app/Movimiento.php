<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    protected $table = 'tb_movimientos';
    protected $fillable = ['id_usu','id_ase', 'id_produ', 
    'id_prove','id_local','imei','id_ase_sali','id_local_sali','observacion'];
    protected $primaryKey = 'id_movi';
}
