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


    <h1>Justificaion General <a href="{{ url('admin/justificaiongeneral/create') }}" class="btn btn-primary pull-right btn-sm">Add New Justificaiongeneral</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Razón De Ser La Asignatura</th><th>Por Que Se Enseña Y Por Que Esta Dentro Del Plan De Estudios</th><th>En Que Medida Contribuye A La Formación Integral Del Profesional</th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($justificaiongeneral as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->razon_de_ser_la_asignatura }}</td><td>{{ $item->por_que_se_ensena_y_por_que_esta_dentro_del_plan_de_estudios }}</td><td>{{ $item->en_que_medida_contribuye_a_la_formacion_integral_del_profesional }}</td>
                    <td>
                        <a href="{{ url('admin/justificaiongeneral/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Editar</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/justificaiongeneral', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $justificaiongeneral->render() !!} </div>
    </div>
           <!-- asta aqui-->
       
       </div>




       
            </div>
        </div>
    </div>
</div>

@endsection
