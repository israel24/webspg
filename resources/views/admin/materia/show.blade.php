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
                   <li><a href="{{ url('admin/departamento') }}"></i>Departamentos</a></li>
                    <li><a href="{{ url('admin/departamento', $materium->departamento_id) }}"></i>Materias</a></li>
                    <li><a href="#"></i>Planes Globales</a></li>
                    </ol>

                </div>

                <div class="panel-body">


                    <!-- asta aqui-->

    


 @foreach($materium->planglobal as $planglobal)
 @if($planglobal->estado==1 )
      
        <div class="table-responsive">

    <!-- asta aqui-->
    
    <h1>Plan global</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                     <th>Nombre del Plan Global</th><th>Sigla del Plan Global</th><th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                     <td> {{ $planglobal->nombre_plan_global }} </td><td> {{ $planglobal->sigla_plan_global }} </td><td> Activo </td>
                </tr>
            </tbody>    
        </table>
    </div>
</div>

<div class="table-responsive">


    <h1>Justificación General </h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Razón De Ser La Asignatura</th><th>Por Que Se Enseña Y Por Que Esta Dentro Del Plan De Estudios</th><th>En Que Medida Contribuye A La Formación Integral Del Profesional</th>
                </tr>
            </thead>
            <tbody>
            
            @foreach($planglobal->justificaiongeneral as $item)
                
                <tr>
                    
                    <td>{{ $item->razon_de_ser_la_asignatura }}</td><td>{{ $item->por_que_se_ensena_y_por_que_esta_dentro_del_plan_de_estudios }}</td><td>{{ $item->en_que_medida_contribuye_a_la_formacion_integral_del_profesional }}</td>
                    
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
           <!-- asta aqui-->
       
       </div>



<div class="table-responsive">

    <!-- asta aqui-->
    

    <h1>Propositos Generales </h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Propositos Generales</th>
                </tr>
            </thead>
            <tbody>
            
            @foreach($planglobal->propositosgenerale as $item)
               
                <tr>
                    
                    <td>{{ $item->propositos_generales }}</td>
                    
                </tr>
            @endforeach
            </tbody>
        </table>
       
    </div>
</div>


<div class="table-responsive">

    <!-- asta aqui-->
    

    <h1>Objetivos Generales </h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Objetivos Generales</th>
                </tr>
            </thead>
            <tbody>
            
            @foreach($planglobal->objetivosgenerale as $item)
               
                <tr>
                    
                    <td>{{ $item->objetivos_generales }}</td>
                    
                </tr>
            @endforeach
            </tbody>
        </table>
        
    </div>
     <!-- asta aqui-->

       </div>


<div class="table-responsive">

    <!-- asta aqui-->
    

    <h1>Unidades </h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Nombre De La Unidad</th><th>Duración De La Unidad En Periodos Academicos</th><th>Objetivo De La Unidad</th>
                </tr>
            </thead>
            <tbody>
            
            @foreach($planglobal->unidade as $item)
                
                <tr>
                 
                    <td>{{ $item->nombre_de_la_unidad }}</td><td>{{ $item->duracion_de_la_unidad_en_periodos_academicos }}</td><td>{{ $item->objetivo_de_la_unidad }}</td>
                    
                </tr>
            @endforeach
            </tbody>
        </table>
       
    </div>
</div>



<div class="table-responsive">

    <!-- asta aqui-->

    <h1>Evaluación </h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Evaluación</th>
                </tr>
            </thead>
            <tbody>
            
            @foreach($planglobal->evaluacion as $item)
               
                <tr>
                    
                    <td>{{ $item->evaluacion }}</td>
                    
                </tr>
            @endforeach
            </tbody>
        </table>
       
    </div>
 <!-- asta aqui-->

       </div>



 @endif
@endforeach
    <h1>Lista de Planes Globales  <a href="{{ url('admin/materia/' . $materium->id . '/createplanglobal') }}" class="btn btn-primary pull-right btn-sm">Añadir Nuevo Planglobal</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Nombre Plan Global</th><th>Sigla Plan Global</th><th>Estado</th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($materium->planglobal as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nombre_plan_global }}</td><td>{{ $item->sigla_plan_global }}</td><td>{{ $item->estado }}</td>
                    <td> 
                        
                        <a href="{{ url('admin/planglobal/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Editar</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/planglobal', $item->id],
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

@endsection