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
    	$alumnos = DB::select('select * from Alumnos  where Matricula !=  0 and Matricula not in (select ab.Matricula from Alum_Bajas ab)');
        return view('titulacion/index', ['alumnos' => $alumnos]);
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
