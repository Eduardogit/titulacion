@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="pull-left">Create New Datos Acta</h1>
        </div>
    </div>

    @include('core-templates::common.errors')

    <div class="row">
        {!! Form::open(['route' => 'datosActas.store']) !!}

            @include('datos_actas.fields')

        {!! Form::close() !!}
    </div>
@endsection
