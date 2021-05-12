<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RentaGrabada extends Model
{
    protected $fillable=['ano','sueldos','profesiones','servicios','comerciales','','industriales','agropecuarios','dividendos','otros','total_renta_gravada','contribuyente_id','departamento_id','clase_id','cartera_id'];

    public function contribuyente()
    {
    	return $this->hasOne('App\Contribuyente');
    }

    public function departamento()
    {
    	return $this->hasOne('App\Departamento');
    }

    public function clase()
    {
    	return $this->hasOne('App\Clase');
    }

    public function cartera()
    {
    	return $this->hasOne('App\Cartera');
    }
}
