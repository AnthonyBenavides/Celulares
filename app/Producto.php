<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'tb_productos';
    protected $fillable = ['produ_nom', 'id_marca'];
    protected $primaryKey = 'id_produ';
    
}
