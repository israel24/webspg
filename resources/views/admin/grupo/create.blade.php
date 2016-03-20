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
                    <li><a href="{{ url('admin/departamento', $materia->departamento_id) }}"></i>Materias</a></li>
                    <li><a href="{{ url('admin/materia/'.$materia->id.'/indexgrupo') }}"></i>Grupos</a></li>
                    </ol>

                </div>

                <div class="panel-body">


                    <!-- asta aqui-->
    <h1>Crear Nuevo Grupo</h1>
    <hr/>

    {!! Form::open(['url' => 'admin/grupo', 'class' => 'form-horizontal']) !!}


                 <div class="form-group {{ $errors->has('materium_id') ? 'has-error' : ''}}">
                
                <div class="col-sm-6">
                    {!! Form::hidden('materium_id',$mate, ['class' => 'form-control' , 'required' => 'required']) !!}
                    {!! $errors->first('materium_id', '<p class="help-block">:message</p>') !!}
                </div>
                </div>

                <div class="form-group {{ $errors->has('grupo') ? 'has-error' : ''}}">
                {!! Form::label('grupo', 'Grupo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('grupo', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('grupo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('control_de_plan_global') ? 'has-error' : ''}}">
                {!! Form::label('control_de_plan_global', 'Control De Plan Global: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                <label>{!! Form::radio('control_de_plan_global', '1') !!} Si</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('control_de_plan_global', '0', true) !!} No</label>
            </div>
                    {!! $errors->first('control_de_plan_global', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


             <div class="form-group {{ $errors->has('grupo') ? 'has-error' : ''}}">
                {!! Form::label('docente', 'Docente: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('docente_id', $docente, null, ['class' => 'form-control']) !!}
                    {!! $errors->first('grupo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Crear', ['class' => 'btn btn-primary form-control']) !!}
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
@endsection