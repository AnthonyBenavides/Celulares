<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'tb_proveedores';
    protected $fillable = ['prove_nom', 'prove_docu', 'prove_tele', 'prove_correo'];
    protected $primaryKey = 'id_prove';
}
