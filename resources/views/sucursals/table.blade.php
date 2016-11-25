<table class="table table-responsive" id="sucursals-table">
    <thead>
        <th>Nombre</th>
        <th>Dirección</th>
        <th>Kilómetros</th>
        <th>Teléfono</th>
        <th colspan="3">Acción</th>
    </thead>
    <tbody>
    @foreach($sucursals as $sucursal)
        <tr>
            <td>{!! $sucursal->nombre !!}</td>
            <td>{!! $sucursal->direccion !!}</td>
            <td>{!! $sucursal->kilometros !!}</td>
            <td>{!! $sucursal->telefono !!}</td>
            <td>
                {!! Form::open(['route' => ['sucursals.destroy', $sucursal->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('sucursals.show', [$sucursal->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('sucursals.edit', [$sucursal->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{$sucursals->render()}}