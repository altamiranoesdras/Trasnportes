<table class="table table-responsive" id="vehiculos-table">
    <thead>
        <th>Marca Id</th>
        <th>Modelo Id</th>
        <th>Placa</th>
        <th>Kilometraje</th>

        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($vehiculos as $vehiculos)
        <tr>
            <td>{!! $vehiculos->marca->descripcion !!}</td>
            <td>{!! $vehiculos->modelo->descripcion !!}</td>
            <td>{!! $vehiculos->placa !!}</td>
            <td>{!! $vehiculos->kilometraje !!}</td>
            <td>
                {!! Form::open(['route' => ['vehiculos.destroy', $vehiculos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('vehiculos.show', [$vehiculos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('vehiculos.edit', [$vehiculos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>