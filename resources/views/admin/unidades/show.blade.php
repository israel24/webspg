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

    <h1>Editar Unidades <a href="{{ url('admin/planglobal/' . $plan. '/createunidadesu') }}" class="btn btn-warning pull-right btn-sm">Añadir Nueva Unidad </a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Nombre De La Unidad</th><th>Duración De La Unidad En Periodos Academicos</th><th>Objetivo De La Unidad</th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($unidades as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('admin/unidades', $item->id) }}">{{ $item->nombre_de_la_unidad }}</a></td><td>{{ $item->duracion_de_la_unidad_en_periodos_academicos }}</td><td>{{ $item->objetivo_de_la_unidad }}</td>
                    <td>
                        <a href="{{ url('admin/unidades/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Editar</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/unidades', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



    <div class="col-sm-offset-4 col-sm-4">
        <a href="{{ url('admin/evaluacion/' . $plan . '/edit') }}" class="btn btn-primary form-control">Siguiente</a>
    </div>

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