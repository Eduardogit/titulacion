@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
            
                <div class="panel-body">
                    Estas en titulacion
                </div>
            </div>
        </div>
    </div>
</div>


        
<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Periodo</th>
            <th>Matricula</th>
            <th>Estatus</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Nombre</th>
            <th>Periodo</th>
            <th>Matricula</th>
            <th>Estatus</th>
        </tr>
    </tfoot>
    <tbody>
    @foreach ($alumnos as $alumno)
        <tr>
            <td>{{$alumno->Nombre}} {{$alumno->Paterno}} {{$alumno->Materno}}</td>
            <td>{{$alumno->Generacion}} </td>
            <td><a href="titulo/{{$alumno->Matricula}}">{{number_format($alumno->Matricula,0,'','')}}</a></td>
            <td><a class="btn btn-sm btn-danger" href="formulario/{{$alumno->Matricula}}">Sin datos</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
        
    
<script>
    $('.table').dataTable({
        "bSort": false 
    });
</script>
@endsection
