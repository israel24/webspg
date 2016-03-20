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
    
    <h1>Plan global</h1>
    <small><strong>Materia:</strong>{{ $planglobal->materium->nombre_materia }}</small>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nombre Del Plan Global</th><th>Sigla Del Plan Global</th><th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $planglobal->id }}</td> <td> {{ $planglobal->nombre_plan_global }} </td><td> {{ $planglobal->sigla_plan_global }} </td><td> {{ $planglobal->estado }} </td>
                </tr>
            </tbody>    
        </table>
    </div>
     </div>

<div class="table-responsive">


    <h1>Justificaion General <a href="{{ url('admin/planglobal/' . $planglobal->id . '/createjustificaiongeneral') }}" class="btn btn-primary pull-right btn-sm">Crear Justificacion General</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Razón De Ser La Asignatura</th><th>Por Que Se Enseña Y Por Que Esta Dentro Del Plan De Estudios</th><th>En Que Medida Contribuye A La Formación Integral Del Profesional</th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($planglobal->justificaiongeneral as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('admin/justificaiongeneral', $item->id) }}">{{ $item->razon_de_ser_la_asignatura }}</a></td><td>{{ $item->por_que_se_ensena_y_por_que_esta_dentro_del_plan_de_estudios }}</td><td>{{ $item->en_que_medida_contribuye_a_la_formacion_integral_del_profesional }}</td>
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
    </div>
           <!-- asta aqui-->
       
       </div>



<div class="table-responsive">

    <!-- asta aqui-->
    

    <h1>Propositos Generales <a href="{{ url('admin/planglobal/' . $planglobal->id . '/createpropositosgenerales') }}" class="btn btn-primary pull-right btn-sm">Crear Propositos Generales</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Propositos Generales</th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($planglobal->propositosgenerale as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('admin/propositosgenerales', $item->id) }}">{{ $item->propositos_generales }}</a></td>
                    <td>
                        <a href="{{ url('admin/propositosgenerales/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Editar</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/propositosgenerales', $item->id],
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

    <!-- asta aqui-->
    

    <h1>Objetivos Generales <a href="{{ url('admin/planglobal/' . $planglobal->id . '/createobjetivosgenerales') }}" class="btn btn-primary pull-right btn-sm">Crear Objetivos Generales</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Objetivos Generales</th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($planglobal->objetivosgenerale as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('admin/objetivosgenerales', $item->id) }}">{{ $item->objetivos_generales }}</a></td>
                    <td>
                        <a href="{{ url('admin/objetivosgenerales/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Editar</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/objetivosgenerales', $item->id],
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
     <!-- asta aqui-->

       </div>


<div class="table-responsive">

    <!-- asta aqui-->
    

    <h1>Unidades <a href="{{ url('admin/planglobal/' . $planglobal->id . '/createunidades') }}" class="btn btn-primary pull-right btn-sm">Crear Nueva Unidad</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Nombre De La Unidad</th><th>Duración De La Unidad En Periodos Académicos</th><th>Objetivo De La Unidad</th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($planglobal->unidade as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('admin/unidades', $item->id) }}">{{ $item->nombre_de_la_unidad }}</a></td><td>{{ $item->duracion_de_la_unidad_en_periodos_academicos }}</td><td>{{ $item->objetivo_de_la_unidad }}</td>
                    <td>
                        <a href="{{ url('admin/unidades/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Editar</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/unidades', $item->id],
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

    <!-- asta aqui-->

    <h1>Evaluacion <a href="{{ url('admin/planglobal/' . $planglobal->id . '/createevaluacion') }}" class="btn btn-primary pull-right btn-sm">Crear Evaluación</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Evaluación</th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($planglobal->evaluacion as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('admin/evaluacion', $item->id) }}">{{ $item->evaluacion }}</a></td>
                    <td>
                        <a href="{{ url('admin/evaluacion/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Editar</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/evaluacion', $item->id],
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
 <!-- asta aqui-->

       </div>

     

            </div>
        </div>
    </div>
</div>
@endsection