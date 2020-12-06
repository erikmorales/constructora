<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Razon_Trabajo extends Model
{
	
    protected $table = 'razontrabajo';
    public $timestamps = false;
    protected $fillable=['nombre','descripcion'];
    protected $primaryKey = 'id';
}
