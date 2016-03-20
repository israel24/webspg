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
                    <li><a href="#"></i>Configuración de Imagenes</a></li>
                    </ol>

                </div>

                <div class="panel-body">


                
<div class="table-responsive">

    <h1>Configuraciones <a href="{{ url('admin/configuracion/create') }}" class="btn btn-primary pull-right btn-sm">Añadir Nueva Configuracion</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Nombre</th><th>Estado</th><th>Logo</th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($configuracion as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nombre }}</td><td>{{ $item->estado }}</td><td>{{ $item->logo }}</td>
                    <td>
                        <a href="{{ url('admin/configuracion', $item->id) }}">
                            <button type="submit" class="btn btn-primary btn-xs">Ver Configuración</button>
                        </a> /
                        <a href="{{ url('admin/configuracion/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Editar</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/configuracion', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $configuracion->render() !!} </div>
    </div>

       </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
