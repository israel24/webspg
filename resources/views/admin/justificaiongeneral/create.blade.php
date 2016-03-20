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
    <li class="MainNav1-Button MainNav1-Button_Active"><a href="#">Justificación General</a></li>
    <li class="MainNav1-Button MainNav1-Button_LeftOfActive"><a href="#">Propositos Generales</a></li>
    <li class="MainNav1-Button MainNav1-Button_LeftOfActive"><a href="#">Objetivo General</a></li>
    <li class="MainNav1-Button MainNav1-Button_LeftOfActive"><a href="#">Registro de Unidades</a></li>
    <li class="MainNav1-Button MainNav1-Button_LeftOfActive"><a href="#">Evaluación del Plan Global</a></li>
  </ul>
  </div>


  
                
<div class="table-responsive">
<div class="col-md-11">
    <!-- asta aqui-->

    <h1>Crear Justificación General</h1>
    <hr/>

    {!! Form::open(['url' => 'admin/justificaiongeneral', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('plan_global_id') ? 'has-error' : ''}}">
                
                <div class="col-sm-6">
                    {!! Form::hidden('plan_global_id',$plan, ['class' => 'form-control' , 'required' => 'required']) !!}
                    {!! $errors->first('plan_global_id', '<p class="help-block">:message</p>') !!}
                </div>
                </div>

                <div class="form-group {{ $errors->has('razon_de_ser_la_asignatura') ? 'has-error' : ''}}">
                {!! Form::label('razon_de_ser_la_asignatura', 'Razon De Ser La Asignatura: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('razon_de_ser_la_asignatura', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('razon_de_ser_la_asignatura', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('por_que_se_ensena_y_por_que_esta_dentro_del_plan_de_estudios') ? 'has-error' : ''}}">
                {!! Form::label('por_que_se_ensena_y_por_que_esta_dentro_del_plan_de_estudios', 'Por Que Se Ensena Y Por Que Esta Dentro Del Plan De Estudios: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('por_que_se_ensena_y_por_que_esta_dentro_del_plan_de_estudios', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('por_que_se_ensena_y_por_que_esta_dentro_del_plan_de_estudios', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('en_que_medida_contribuye_a_la_formacion_integral_del_profesional') ? 'has-error' : ''}}">
                {!! Form::label('en_que_medida_contribuye_a_la_formacion_integral_del_profesional', 'En Que Medida Contribuye A La Formacion Integral Del Profesional: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('en_que_medida_contribuye_a_la_formacion_integral_del_profesional', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('en_que_medida_contribuye_a_la_formacion_integral_del_profesional', '<p class="help-block">:message</p>') !!}
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
       <!-- asta aqui-->
       
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