<!-- Titulo Field -->
<div class="form-group col-sm-6">
	
    {!! Form::label('titulo', 'Titulo:') !!}
    

	{!! Form::text('titulo', null, ['class' => 'form-control']) !!}
	 

<!-- Facultad Field -->

    {!! Form::label('facultad', 'Facultad:') !!}
   
	{!! Form::text('facultad', null, ['class' => 'form-control']) !!}
	


<!-- Logo Field -->

    {!! Form::label('logo', 'Logo:') !!}
    
	{!! Form::file('logo') !!}
	

<!-- Estado Field -->

    {!! Form::label('estado', 'Estado:') !!}
    
	{!! Form::select('estado', [ 'Activo' => 'Activo', 'NoActivo' => 'NoActivo' ], null, ['class' => 'form-control']) !!}
	



<!-- Submit Field -->

    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
