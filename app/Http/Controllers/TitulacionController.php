<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use PDF;
use App\Http\Controllers\App;

class TitulacionController extends Controller
{
    
    
     public function __construct()
    {
        $this->middleware('auth');
    }
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
        $titulo = DB::select('select * from Alumnos where Matricula = '.$matricula.'');
        $carrera = DB::select('select * from Carreras where IDCarrera = '.$titulo[0]->Carrera.'');
       
        
       
        //return view('titulacion.titulo', ['datos' => $titulo, 'carrera' => $carrera]);
        

        $pdf = PDF::loadView('titulacion.titulo', ['datos' => $titulo, 'carrera' => $carrera]);
        
        return $pdf->stream('invoice.pdf');
    }

}
