@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">

                   <ol class="breadcrumb">
                    <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>Inicio</a></li>
                    <li><a href="{{ url('admin/departamento') }}"></i>Departamentos</a></li>
                    <li><a href="{{ url('admin/departamento') }}"></i>Lista De Departamentos</a></li>
                    </ol>

                </div>

                <div class="panel-body">
    <h1 class="sombra5" >Materia</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nombre De La Materia</th><th>Sigla De La Materia</th><th>Código</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $materium->id }}</td> <td> {{ $materium->nombre_materia }} </td><td> {{ $materium->sigla_materia }} </td><td> {{ $materium->codigo }} </td>
                </tr>
            </tbody>    
        </table>
    </div>
</div>
</div>
</div>
</div>
</div>

@endsection