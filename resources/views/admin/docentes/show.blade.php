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
                    
                    <li><a href="{{ url('admin/docentes') }}">Docentes</a></li>
                    <li><a href="#">Materias</a></li>
                    </ol>

                </div>

                <div class="panel-body">

                    <div class="table-responsive">

    <!-- asta aqui-->
    <h1>Docente</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nombre</th><th>Código</th><th>CI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $docente->id }}</td> <td> {{ $docente->nombre }} </td><td> {{ $docente->codigo }} </td><td> {{ $docente->CI }} </td>
                </tr>
            </tbody>    
        </table>
    </div>


        <h1>Grupos</h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Grupos</th><th>Control De Planes Globales</th><th>Materias</th>
                </tr>
            </thead>
            <tbody>
           
            @foreach($grupo as $item)
                
                <tr>
                   
                    <td>{{ $item->grupo }}</td>

                    @if($item->control_de_plan_global==1)
                    <td>Responsable del plan global</td>
                    @endif

                     @if($item->control_de_plan_global==0)
                    <td>...........</td>
                    @endif

                    <td>{{ $item->nombre_materia }}</td>
                    
                </tr>
            @endforeach
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