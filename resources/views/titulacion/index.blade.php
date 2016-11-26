@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
            
                <div class="panel-body">
                    Ests en titulacion
                </div>
            </div>
        </div>
    </div>
</div>
@foreach ($alumnos as $alumno)
    <p><a href="titulo/{{$alumno->Matricula}}">{{$alumno->Matricula}}</a></p>
@endforeach
@endsection
