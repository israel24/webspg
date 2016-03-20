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
                    <li><a href="{{ url('/admin/area') }}"><i class="fa fa-dashboard"></i>Areas</a></li>
                    <li><a href="#"></i>Sub Areas</a></li>
                    
                    </ol>

                </div>

                <div class="panel-body">


                
<div class="table-responsive">

    <!-- asta aqui-->
    
    <h1>Area</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nombre Area</th><th>Estado</th><th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $area->id }}</td> <td> {{ $area->nombre_area }} </td><td> {{ $area->estado }} </td><td> {{ $area->descripcion }} </td>
                </tr>
            </tbody>    
        </table>
    </div>
    
<div class="table-responsive">

    <h1>Subarea <a href="{{ url('admin/area/' . $area->id . '/createsubarea') }}" class="btn btn-primary pull-right btn-sm">Crear Subarea</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Nombre Subarea</th><th>Descripción</th><th>Estado</th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($area->subarea as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('admin/subarea', $item->id) }}">{{ $item->nombre_subarea }}</a></td><td>{{ $item->descripcion }}</td><td>{{ $item->estado }}</td>
                    <td>

                        <a href="{{ url('admin/subarea', $item->id) }}">
                            <button type="submit" class="btn btn-info btn-xs">Ver Materias</button>
                        </a> /
                        <a href="{{ url('admin/subarea/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Editar</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/subarea', $item->id],
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

    <div class="table-responsive">





    
    </div>


  </div>
  </div>
  </div>
        </div>
    </div>
</div>
@endsection