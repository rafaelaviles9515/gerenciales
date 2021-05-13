<?php

namespace App\Http\Controllers;

use App\RentaGrabada;
use Illuminate\Http\Request;

class RentaGrabadaController extends Controller
{
     public function index()
    {

    	$rentasgravadas = RentaGrabada::all();
    	return view('rentagravada.lista',compact('rentasgravadas'));
    }
}
