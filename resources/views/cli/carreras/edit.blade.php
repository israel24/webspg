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


    <h1>Asignación De Materias a Carrera</h1>
    <hr/>

    {!! Form::model($carrera, [
        'method' => 'PATCH',
        'url' => ['cli/carreras', $carrera->id],
        'class' => 'form-horizontal'
    ]) !!}

              <div class="form-group">
                {!! Form::label('materia', 'Materia: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">

                    {!! Form::select('materium_id[]', $materias, isset($materia_carrera) ? $materia_carrera : null, array(
                    'multiple' => true, 'class' => 'multi-select', 'id' => 'materiacarreraSelect')) !!}




                </div>
            </div>

            


     
              <link href="{{ asset('js/jquery-multi-select/css/multi-select.css') }}" rel="stylesheet" />
            <script src="{{ asset('/jquery.min.js') }}" type="text/javascript"></script>
             <script src="{{ asset('js/jquery-multi-select/js/jquery.multi-select.js') }}"></script>
             
             <script src="{{ asset('js/jquery-multi-select/js/jquery.quicksearch.js') }}"></script>
             
             <script src="{{ asset('js/jquery-multi-select/js/jquery.tinysort.js') }}"></script>
                <script src="{{ asset('js/multi-select-init.js') }}"></script>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Guardar', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    </div>
</div>
            </div>
        </div>
    </div>
</div>

@endsection