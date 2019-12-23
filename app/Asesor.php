<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asesor extends Model
{
    protected $table = 'tb_asesores';
    protected $fillable = ['ase_nom','ase_ape','fecha_naci','ase_gene','ase_tel','ase_docu','id_estado'];
    protected $primaryKey = 'id_ase';
    
}
