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
                    <li><a href="#"></i>Editar</a></li>
                    </ol>

                </div>

                <div class="panel-body">


                
<div class="table-responsive">

    <!-- asta aqui-->
    


    <h1>Editar Subarea</h1>
    <hr/>

    {!! Form::model($subarea, [
        'method' => 'PATCH',
        'url' => ['admin/subarea', $subarea->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('nombre_subarea') ? 'has-error' : ''}}">
                {!! Form::label('nombre_subarea', 'Nombre Sub Area: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nombre_subarea', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nombre_subarea', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
                {!! Form::label('descripcion', 'Descripción: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
                {!! Form::label('estado', 'Estado: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                <label>{!! Form::radio('estado', '1') !!} Si</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('estado', '0', true) !!} No</label>
            </div>
                    {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fecha_creacion') ? 'has-error' : ''}}">
                {!! Form::label('fecha_creacion', 'Fecha Creacion: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('fecha_creacion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fecha_creacion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('materia', 'Materia: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">

                    {!! Form::select('materium_id[]', $materias, isset($materia_sub_area) ? $materia_sub_area : null, array(
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

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
      </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection