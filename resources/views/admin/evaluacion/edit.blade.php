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
    <li class="MainNav1-Button MainNav1-Button_LeftOfActive"><a href="#">Registro de Unidades</a></li>
    <li class="MainNav1-Button MainNav1-Button_Active"><a href="#">Evaluación del Plan Global</a></li>
  </ul>
  </div>


  
                
<div class="table-responsive">
<div class="col-md-11">
    <!-- asta aqui-->

    <!-- asta aqui-->

    <h1>Editar Evaluación</h1>
    <hr/>

    {!! Form::model($evaluacion, [
        'method' => 'PATCH',
        'url' => ['admin/evaluacion', $evaluacion->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('evaluacion') ? 'has-error' : ''}}">
                {!! Form::label('evaluacion', 'Evaluación: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('evaluacion', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('evaluacion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Guardar', ['class' => 'btn btn-primary form-control']) !!}
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
 <!-- asta aqui-->

       </div>
            </div>
        </div>
    </div>
</div>
<link href="{{ asset('/css/plan.css') }}" rel="stylesheet" type="text/css" />

</div>
</div>
</div>

@endsection