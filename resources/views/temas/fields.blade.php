<!-- Tema Field -->
<div class="form-group col-sm-8">
<div class="form-group col-sm-4">
    {!! Form::label('tema', 'Tema:') !!}
    
	{!! Form::select('tema', [ 'skin-purple-light' => 'Guinda Pastel', 'skin-blue-light' => 'Azul Pastel', 'skin-green-light' => 'Verde Pastel', 'skin-red-light' => 'Rojo Pastel', 'skin-black-light' => 'Negro Pastel', 'skin-yellow-light' => 'Amarillo Pastel', 'skin-purple' => 'Guinda', 'skin-blue' => 'Azul', 'skin-green' => 'Verde', 'skin-red' => 'Rojo', 'skin-black' => 'Negro', 'skin-yellow' => 'Amarrillo' ], null, ['class' => 'form-control']) !!}

</div>
<!-- Menu Field -->
<div class="form-group col-sm-4">
    {!! Form::label('menu', 'Menu:') !!}

	{!! Form::select('menu', [ 'layout-boxed' => 'Protejido', 'layout-top-nav' => 'Ordenado', 'siderbar-collapse' => 'Solapado', 'sidebar-mini' => 'Absoluto' ], null, ['class' => 'form-control']) !!}


</div>

<!-- Submit Field -->


<div class="form-group col-sm-3 pull-left">

    {!! Form::label('accion', 'Accion:') !!}

    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>


</div>



