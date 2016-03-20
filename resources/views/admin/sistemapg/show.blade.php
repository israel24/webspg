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
                    <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>Inicio</a></li>
                    <li><a href="{{ url('admin/departamento') }}"></i>Departamentos</a></li>
                    <li><a href="{{ url('admin/departamento') }}"></i>Lista De Departamentos</a></li>
                    </ol>

                </div>

                <div class="panel-body">


                
<div class="table-responsive">

    <!-- asta aqui-->

    <h1>Sistemapg</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nombre De La Facultad</th><th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $sistemapg->id }}</td> <td> {{ $sistemapg->nombre_de_facultad }} </td><td> {{ $sistemapg->descripcion }} </td>
                </tr>
            </tbody>    
        </table>
    </div>
<!-- asta aqui-->

            </div>
        </div>
    </div>
</div>
</div>

<!-- asta aqui-->
@endsection