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
                    <li><a href="{{ url('/admin/carreras') }}"><i class="fa fa-dashboard"></i>Carreras</a></li>
                    
                    </ol>

                </div>

                <div class="panel-body">


                
<div class="table-responsive">

    <!-- asta aqui-->
    

                    <!-- asta aqui-->


    <h1 >Carreras <a href="{{ url('admin/carreras/create') }}" class="btn btn-primary pull-right btn-sm">Añadir Nueva Carrera</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Nombre</th><th>Codigo</th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($carreras as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nombre }}</td><td>{{ $item->codigo }}</td>
                    <td>
                        <a href="{{ url('admin/carreras', $item->id) }}">
                            <button type="submit" class="btn btn-success btn-xs">Ver Materias</button>
                        </a> /
                        
                        <a href="{{ url('admin/carreras/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Editar</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/carreras', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $carreras->render() !!} </div>
    </div>
</div>

<!-- asta aqui-->

            </div>
        </div>
    </div>
</div>
</div>

<!-- asta aqui-->
@endsection
