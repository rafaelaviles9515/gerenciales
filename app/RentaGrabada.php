<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RentaGrabada extends Model
{
    protected $fillable=['ano','sueldos','profesiones','servicios','comerciales','','industriales','agropecuarios','dividendos','otros','total_renta_gravada','contribuyente_id','departamento_id','clase_id','cartera_id'];

    public function contribuyente()
    {
    	return $this->belongsTo('App\Contribuyente');
    }

    public function departamento()
    {
    	return $this->belongsTo('App\Departamento');
    }

    public function clase()
    {
    	return $this->belongsTo('App\Clase');
    }

    public function cartera()
    {
    	return $this->belongsTo('App\Cartera');
    }

    public function actividad()
    {
        return $this->belongsTo('App\Actividad');
    }
}
