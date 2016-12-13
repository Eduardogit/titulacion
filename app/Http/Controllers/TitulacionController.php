<?php

namespace App\Http\Controllers;
use HTML2PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class TitulacionController extends Controller
{
	//TODAS LAS MATRICULAS PARA TITULACION
	public function index()
    {
    	//mandamos atraer todas las matriculas
    	$alumnos = DB::select('select a.Nombre, a.Paterno, a.Materno, c.CarreraNombre, a.Matricula, a.Generacion
                                from Alumnos a, Carreras c  where Matricula !=  0 and 
                                Matricula not in (select ab.Matricula from Alum_Bajas ab) 
                                and a.Carrera = c.IDCarrera
                                AND Generacion   in
                                    (select TOP 10 Generacion 
                                    FROM  Alumnos group by Generacion order by Generacion desc
                                    )
                                 order by Generacion asc');
        $generaciones = DB::select('select distinct Generacion from Alumnos order by Generacion desc');
        return view('titulacion/index', ['alumnos' => $alumnos, 'generaciones' => $generaciones]);
    }

    public function titulo($matricula)
    {

    	$alumno = DB::select('select * from Alumnos where Matricula = '.$matricula.'');

    	$html2pdf = new HTML2PDF('P','LEGAL','de',false,'UTF-8');
		$doc = "<page><h1>".$alumno[0]->Nombre."</h1></page>";
		$html2pdf->setDefaultFont('Arial');
		$html2pdf->writeHTML($doc,false);
		$html2pdf->Output('helloworld.pdf');
		//$html2pdf->Output(base_path().'/storage/app/helloworld.pdf','F');
		echo "aqui";
        //return view('titulacion/titulo', ['alumno' => $alumno] );
    }

}
