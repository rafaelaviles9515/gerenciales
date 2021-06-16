<?php

namespace App\Imports;

use App\Contribuyente;
use App\RentaGrabada;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class RentasGrabadasImport implements ToCollection, WithHeadingRow
{
    
    public function collection(Collection $rows)
    {
        
        foreach ($rows as $row) 
        {
            
            $nombre=$row['contribuyente'];
            
            $persona=Contribuyente::where('nombre_contribuyente',$nombre)->first();

            

            $rentagrabada=RentaGrabada::create([
                'ano' => $row['ano'],
                'contribuyente_id' => $persona->id,
                'departamento_id' => $row['departamento'],
                'clase_id' => $row['clase'],
                'cartera_id' => $row['cartera'],
                'actividad_id' => $row['actividad'],
                'sueldos' => $row['sueldos'],
                'profesiones' => $row['profesiones'],
                'servicios' => $row['servicios'],
                'comerciales' => $row['comerciales'],
                'industriales' => $row['industriales'],
                'agropecuarios' => $row['agropecuarios'],
                'dividendos' => $row['dividendos'],
                'otros' => $row['otros'],
                'total_renta_gravada' => $row['total_renta_gravada']
            ]);

            
        }
    }

    
}
