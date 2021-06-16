<?php

namespace App\Http\Controllers;

use App\Imports\RentasGrabadasImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RentasGrabadasImportController extends Controller
{
    public function store(Request $request){

    	$file= $request->file('file')->store('import');

    	Excel::import(new RentasGrabadasImport, $file);

    	return back()->with('status','Datos importados con exito.');
    }
}
