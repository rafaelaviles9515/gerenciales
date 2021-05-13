<?php

use App\Actividad;
use App\Cartera;
use App\Clase;
use App\Contribuyente;
use App\Departamento;
use App\RentaGrabada;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
       $actividad=new Actividad;
       $actividad->id=1;
       $actividad->nombre='Servicios de ingenieria';
       $actividad->save();

       $actividad2=new Actividad;
       $actividad2->id=2;
       $actividad2->nombre='Cultivo de cafe';
       $actividad2->save();

       $cartera=new Cartera;
       $cartera->id=1;
       $cartera->nombre='Grandes';
       $cartera->save();

       $cartera2=new Cartera;
       $cartera2->id=2;
       $cartera2->nombre='Medianos';
       $cartera2->save();

       $cartera2=new Cartera;
       $cartera2->id=3;
       $cartera2->nombre='Otros';
       $cartera2->save();

       $clase=new Clase;
       $clase->id=1;
       $clase->nombre='Juridicos';
       $clase->save();

       $clase2=new Clase;
       $clase2->id=2;
       $clase2->nombre='Naturales';
       $clase2->save();

       $departamento=new Departamento;
       $departamento->id=1;
       $departamento->nombre='San Salvador';
       $departamento->save();

       $departamento2=new Departamento;
       $departamento2->id=2;
       $departamento2->nombre='Santa Ana';
       $departamento2->save();

       $contribuyente=new Contribuyente;
       $contribuyente->id=1;
       $contribuyente->nombre_contribuyente='juan';
       $contribuyente->nombre_empresa='Siman';
       $contribuyente->nit='222-555-2020';
       $contribuyente->departamento_id=1;
       $contribuyente->save();

       $contribuyente2=new Contribuyente;
       $contribuyente2->id=2;
       $contribuyente2->nombre_contribuyente='paola';
       $contribuyente2->nombre_empresa='nike';
       $contribuyente2->nit='222-555-2020';
       $contribuyente2->departamento_id=2;
       $contribuyente2->save();

       $rentagrabada= new RentaGrabada;
       $rentagrabada->contribuyente_id=1;
       $rentagrabada->departamento_id=1;
       $rentagrabada->clase_id=2;
       $rentagrabada->cartera_id=3;
       $rentagrabada->actividad_id=2;
       $rentagrabada->ano=2020;
       $rentagrabada->sueldos=0.00;
       $rentagrabada->profesiones=0.00;
       $rentagrabada->servicios=121.00;
       $rentagrabada->comerciales=795203.92;
       $rentagrabada->industriales=0.00;
       $rentagrabada->agropecuarios=325.68;
       $rentagrabada->dividendos=0.00;
       $rentagrabada->otros=1460.48;
       $rentagrabada->total_renta_gravada=797111.08;
       $rentagrabada->save();

    }
}
