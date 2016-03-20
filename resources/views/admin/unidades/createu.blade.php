@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">

                   <ol class="breadcrumb">
                    <li><a href="{{ url('admin/departamento') }}"></i>Departamentos</a></li>
                    <li><a href="{{ url('admin/departamento', $planglobal->materium->departamento_id) }}"></i>Materias</a></li>
                    <li><a href="{{ url('admin/materia', $planglobal->materium_id) }}"></i>Planes Globales</a></li>
                    </ol>

                </div>

                <div class="panel-body">

<div class="row">
  <div class="col-md-3">


<ul class="Nav1 MainNav1">

    <li class="MainNav1-Button MainNav1-Button_LeftOfActive"><a href="#">Registro de Plan Global </a></li>
    <li class="MainNav1-Button MainNav1-Button_LeftOfActive"><a href="#">Justificación General</a></li>
    <li class="MainNav1-Button MainNav1-Button_LeftOfActive"><a href="#">Propositos Generales</a></li>
    <li class="MainNav1-Button MainNav1-Button_LeftOfActive"><a href="#">Objetivo General</a></li>
    <li class="MainNav1-Button MainNav1-Button_Active"><a href="#">Registro de Unidades</a></li>
    <li class="MainNav1-Button MainNav1-Button_LeftOfActive"><a href="#">Evaluación del Plan Global</a></li>
  </ul>
  </div>


  
                
<div class="table-responsive">
<div class="col-md-11">
    <!-- asta aqui-->
    

    <h1>Crear Nueva Unidad</h1>
    <hr/>

    {!! Form::open(['url' => 'admin/unidades', 'class' => 'form-horizontal']) !!}


                <div class="form-group {{ $errors->has('plan_global_id') ? 'has-error' : ''}}">
                
                <div class="col-sm-6">
                    {!! Form::hidden('plan_global_id',$plan, ['class' => 'form-control' , 'required' => 'required']) !!}
                    {!! $errors->first('plan_global_id', '<p class="help-block">:message</p>') !!}
                </div>
                </div>


                <div class="form-group {{ $errors->has('nombre_de_la_unidad') ? 'has-error' : ''}}">
                {!! Form::label('nombre_de_la_unidad', 'Nombre De La Unidad: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nombre_de_la_unidad', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nombre_de_la_unidad', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('duracion_de_la_unidad_en_periodos_academicos') ? 'has-error' : ''}}">
                {!! Form::label('duracion_de_la_unidad_en_periodos_academicos', 'Duración De La Unidad En Periodos Academicos: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('duracion_de_la_unidad_en_periodos_academicos', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('duracion_de_la_unidad_en_periodos_academicos', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('objetivo_de_la_unidad') ? 'has-error' : ''}}">
                {!! Form::label('objetivo_de_la_unidad', 'Objetivo De La Unidad: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('objetivo_de_la_unidad', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('objetivo_de_la_unidad', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('contenido_de_la_unidad') ? 'has-error' : ''}}">
                {!! Form::label('contenido_de_la_unidad', 'Contenido De La Unidad: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('contenido_de_la_unidad', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('contenido_de_la_unidad', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tecnicas_predominantes_propuestas_para_la_unidad') ? 'has-error' : ''}}">
                {!! Form::label('tecnicas_predominantes_propuestas_para_la_unidad', 'Tecnicas Predominantes Propuestas Para La Unidad: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('tecnicas_predominantes_propuestas_para_la_unidad', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('tecnicas_predominantes_propuestas_para_la_unidad', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('evaluacion_de_la_unidad') ? 'has-error' : ''}}">
                {!! Form::label('evaluacion_de_la_unidad', 'Evaluacion De La Unidad: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('evaluacion_de_la_unidad', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('evaluacion_de_la_unidad', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('bibliografia_especifica_de_la_unidad') ? 'has-error' : ''}}">
                {!! Form::label('bibliografia_especifica_de_la_unidad', 'Bibliografia Especifica De La Unidad: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('bibliografia_especifica_de_la_unidad', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('bibliografia_especifica_de_la_unidad', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


            <div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
                {!! Form::label('registra', 'Registrar Otra Unidad: ', ['class' => 'col-sm-3 control-label label-warning ']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                <label>{!! Form::radio('registra', '4') !!} Si</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('registra', '3', true) !!} No</label>
            </div>
                    {!! $errors->first('registra', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        



    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Siguiente', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
<link href="{{ asset('/css/plan.css') }}" rel="stylesheet" type="text/css" />


@endsection