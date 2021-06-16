<?php

namespace App\Http\Controllers;

use App\RentaGrabada;
use Illuminate\Http\Request;
use Illuminate\Support\collect;

class ContribuyenteController extends Controller
{
    public function ano(){

    	$rentasGrabadas=RentaGrabada::all();
    	$anos=collect([]);
    	$primerValor=null;

    	foreach ($rentasGrabadas as $rentasGrabada) {
    		
    		if($primerValor)
            {

                if($primerValor!=$rentasGrabada->ano){
                    $anos->push($rentasGrabada->ano);
                    $primerValor=$rentasGrabada->ano;
                }
            }
            else{
                $anos->push($rentasGrabada->ano);
                $primerValor=$rentasGrabada->ano;
            } 

    	}

    	return view('contribuyente.ano',compact('anos'));
    }

    public function reporte(Request $request){

    	$ano=$request->ano;
    	$contribuyentesAnoSeleccionado=RentaGrabada::where('ano',$ano)->count();
    	

    	return view('contribuyente.reporte',compact('contribuyentesAnoSeleccionado','ano'));
    }
}
