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


    <h1>Justificación General</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Razón De Ser La Asignatura</th><th>Por Que Se Enseña Y Por Que Esta Dentro Del Plan De Estudios</th><th>En Que Medida Contribuye A La Formación Integral Del Profesional</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $justificaiongeneral->id }}</td> <td> {{ $justificaiongeneral->razon_de_ser_la_asignatura }} </td><td> {{ $justificaiongeneral->por_que_se_ensena_y_por_que_esta_dentro_del_plan_de_estudios }} </td><td> {{ $justificaiongeneral->en_que_medida_contribuye_a_la_formacion_integral_del_profesional }} </td>
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

@endsection