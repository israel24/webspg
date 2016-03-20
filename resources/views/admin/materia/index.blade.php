@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">

                   <ol class="breadcrumb">
                    <li><a href="{{ url('admin/departamento') }}"></i>Departamentos</a></li>
                    <li><a href="{{ url('admin/departamento', $materia->departamento_id) }}"></i>Materias</a></li>
                    </ol>

                </div>

                <div class="panel-body">


                    <!-- asta aqui-->

    <h1>Materia <a href="{{ url('admin/materia/create') }}" class="btn btn-primary pull-right btn-sm">Añadir Nueva Materia</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Nombre de la Materia</th><th>Sigla de la Materia</th><th>Código</th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($materia as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nombre_materia }}</td><td>{{ $item->sigla_materia }}</td><td>{{ $item->codigo }}</td>
                    <td>
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
        <div class="pagination"> {!! $materia->render() !!} </div>
    </div>
            </div>
        </div>
    </div>
</div>

@endsection
