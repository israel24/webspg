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
                    <li><a href="#"></i>Materias</a></li>
                    </ol>

                </div>

                <div class="panel-body">


                    <!-- asta aqui-->

    <h1>Departamento</h1>
    
    
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nombre Departamento</th><th>Descripción</th><th>Fecha Creación</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $departamento->id }}</td> <td> {{ $departamento->nombre_departamento }} </td><td> {{ $departamento->descripcion }} </td><td> {{ $departamento->fecha_creacion }} </td>
                </tr>
            </tbody>    
        </table>
    </div>
    
    
    <h1>Materia <a href="{{ url('admin/departamento/' . $departamento->id . '/createmateria') }}" class="btn btn-primary pull-right btn-sm">Crear Nueva Materia</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Nombre Materia</th><th>Sigla Materia</th><th>Codigo</th><th>Acciones</th>

                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($departamento->materium as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('admin/materia', $item->id) }}">{{ $item->nombre_materia }}</a></td><td>{{ $item->sigla_materia }}</td><td>{{ $item->codigo }}</td>
                    <td>
                        <a href="{{ url('admin/materia', $item->id) }}">
                            <button type="submit" class="btn btn-info btn-xs">Ver Plan Global</button>
                        </a> /

                        <a href="{{ url('admin/materia/'.$item->id.'/indexgrupo') }}">
                            <button type="submit" class="btn btn-info btn-xs">Ver Grupos</button>
                        </a> /

                        <a href="{{ url('admin/materia/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Editar</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/materia', $item->id],
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



            </div>
        </div>
    </div>
</div>
</div>

@endsection