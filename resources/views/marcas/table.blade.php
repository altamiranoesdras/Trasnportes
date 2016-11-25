<table class="table table-responsive" id="marcas-table">
    <thead>
        <th>Descripcion</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($marcas as $marcas)
        <tr>
            <td>{!! $marcas->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['marcas.destroy', $marcas->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('marcas.show', [$marcas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('marcas.edit', [$marcas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>