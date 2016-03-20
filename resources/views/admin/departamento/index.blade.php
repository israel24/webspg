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
                    <li><a href="#"></i>Lista De Departamentos</a></li>
                    </ol>

                </div>

                <div class="panel-body">


                
<div class="table-responsive">

    <!-- asta aqui-->
    
    <h1 >Departamento <a href="{{ url('admin/departamento/create') }}" class="btn btn-primary pull-right btn-sm">Crear Nuevo Departamento</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Nombre De Departamento</th><th>Descripción</th><th>Fecha Creación</th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($departamento as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nombre_departamento }}</td><td>{{ $item->descripcion }}</td><td>{{ $item->fecha_creacion }}</td>
                    <td>
                        <a href="{{ url('admin/departamento', $item->id) }}">
                            <button type="submit" class="btn btn-success btn-xs">Ver Materias</button>
                        </a> /
                        <a href="{{ url('admin/departamento/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Editar</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/departamento', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $departamento->render() !!} </div>
       </div>

       <!-- asta aqui-->

       </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
