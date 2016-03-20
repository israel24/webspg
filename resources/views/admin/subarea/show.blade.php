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
                    <li><a href="{{ url('admin/area', $subarea->area_id) }}"></i>Sub Areas</a></li>
                    <li><a href="#"></i>Materias</a></li>
                    </ol>

                </div>

                <div class="panel-body">


                
<div class="table-responsive">

    <!-- asta aqui-->
    


    <h1>Subarea</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nombre De La Sub Area</th><th>Descripción</th><th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $subarea->id }}</td> <td> {{ $subarea->nombre_subarea }} </td><td> {{ $subarea->descripcion }} </td><td> {{ $subarea->estado }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

<div class="table-responsive">
        <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Nombre De Materia</th><th>Sigla De Materia</th><th>Código</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($materia_sub_area as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('admin/materia', $item->id) }}">{{ $item->nombre_materia }}</a></td><td>{{ $item->sigla_materia }}</td><td>{{ $item->codigo }}</td>
                    
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
</div>

@endsection