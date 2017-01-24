@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Datos Acta</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($datosActa, ['route' => ['datosActas.update', $datosActa->id], 'method' => 'patch']) !!}

            @include('datos_actas.fields')

            {!! Form::close() !!}
        </div>
@endsection
