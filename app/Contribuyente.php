<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contribuyente extends Model
{
    protected $fillable=['nombre_contribuyente','nombre_empresa','nit','departamento_id'];

    public function departamento()
    {
    	return $this->hasOne('App\Departamento');
    }
}
