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
                    <li><a href="#">Docentes</a></li>
                    
                    </ol>

                </div>

                <div class="panel-body">

                    <div class="table-responsive">

    <!-- asta aqui-->
    <h1 >Docentes <a href="{{ url('admin/docentes/create') }}" class="btn btn-primary pull-right btn-sm">Añadir Nuevo Docente</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Nombre</th><th>Código</th><th>CI</th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($docentes as $item)
                 @if($item->codigo!=399)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nombre }}</td><td>{{ $item->codigo }}</td><td>{{ $item->CI }}</td>
                    <td>
                                        
                        <a href="{{ url('admin/docentes',$item->id) }}">
                            <button type="submit" class="btn btn-info btn-xs">Materias</button>
                        </a> /
                        <a href="{{ url('admin/docentes/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Editar</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/docentes', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
                 @endif
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $docentes->render() !!} </div>
    </div>
<!-- asta aqui-->
</div>
            </div>
        </div>
    </div>
</div>

<!-- asta aqui-->
@endsection
