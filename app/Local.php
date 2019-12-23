<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table = 'tb_locales';
    protected $fillable = ['nom_local','direc_local','tele_local'];
    protected $primaryKey = 'id_local';
}
