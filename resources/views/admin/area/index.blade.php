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
                    <li><a href="#"><i class="fa fa-dashboard"></i>Areas</a></li>
                    <!--li><a href="{{ url('admin/departamento') }}"></i>Departamentos</a></li>
                    <li><a href="{{ url('admin/departamento') }}"></i>Lista De Departamentos</a></li-->
                    </ol>

                </div>

                <div class="panel-body">


                
<div class="table-responsive">

    <!-- asta aqui-->
    

    <h1 >Area <a href="{{ url('admin/area/create') }}" class="btn btn-primary pull-right btn-sm">Crear Nueva Area</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Nombre Area</th><th>Estado</th><th>Descripción</th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($area as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nombre_area }}</td><td>{{ $item->estado }}</td><td>{{ $item->descripcion }}</td>
                    <td>
                        
                        <a href="{{ url('admin/area', $item->id) }}">
                            <button type="submit" class="btn btn-success btn-xs">Ver Sub Areas</button>
                        </a> /
                        <a href="{{ url('admin/area/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Editar</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/area', $item->id],
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
</div>
@endsection
