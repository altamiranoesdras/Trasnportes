<li class="{{ Request::is('categorias*') ? 'active' : '' }}">
    <a href="{!! route('categorias.index') !!}"><i class="fa fa-edit"></i><span>Categorías</span></a>
</li>

<li class="{{ Request::is('marcas*') ? 'active' : '' }}">
    <a href="{!! route('marcas.index') !!}"><i class="fa fa-edit"></i><span>Marcas</span></a>
</li>

<li class="{{ Request::is('sucursals*') ? 'active' : '' }}">
    <a href="{!! route('sucursals.index') !!}"><i class="fa fa-edit"></i><span>Sucursales</span></a>
</li>

<li class="{{ Request::is('modelos*') ? 'active' : '' }}">
    <a href="{!! route('modelos.index') !!}"><i class="fa fa-edit"></i><span>Modelos</span></a>
</li>

<li class="{{ Request::is('vehiculos*') ? 'active' : '' }}">
    <a href="{!! route('vehiculos.index') !!}"><i class="fa fa-edit"></i><span>Vehiculos</span></a>
</li>

