<table class="table table-responsive" id="datosActas-table">
    <thead>
        <th>Horadictamen</th>
        <th>Fechadictamen</th>
        <th>Especialidad</th>
        <th>Mediotitulacion</th>
        <th>Proyecto</th>
        <th>Horainstalacion</th>
        <th>Presidente</th>
        <th>Secretario</th>
        <th>Vocal</th>
        <th>Tipodictamen</th>
        <th>Terminodictamen</th>
        <th>Jefedivision</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($datosActas as $datosActa)
        <tr>
            <td>{!! $datosActa->horaDictamen !!}</td>
            <td>{!! $datosActa->fechaDictamen !!}</td>
            <td>{!! $datosActa->especialidad !!}</td>
            <td>{!! $datosActa->medioTitulacion !!}</td>
            <td>{!! $datosActa->proyecto !!}</td>
            <td>{!! $datosActa->horaInstalacion !!}</td>
            <td>{!! $datosActa->presidente !!}</td>
            <td>{!! $datosActa->secretario !!}</td>
            <td>{!! $datosActa->vocal !!}</td>
            <td>{!! $datosActa->tipoDictamen !!}</td>
            <td>{!! $datosActa->terminoDictamen !!}</td>
            <td>{!! $datosActa->jefeDivision !!}</td>
            <td>{!! $datosActa->created_at !!}</td>
            <td>{!! $datosActa->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['datosActas.destroy', $datosActa->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('datosActas.show', [$datosActa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('datosActas.edit', [$datosActa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
