@extends('layouts.master')

@section('content')

    <h1>Crear Nueva Materia</h1>
    <hr/>

    {!! Form::open(['url' => 'cli/materia', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('nombre_materia') ? 'has-error' : ''}}">
                {!! Form::label('nombre_materia', 'Nombre De La Materia: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nombre_materia', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nombre_materia', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('sigla_materia') ? 'has-error' : ''}}">
                {!! Form::label('sigla_materia', 'Sigla De La Materia: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('sigla_materia', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('sigla_materia', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('codigo') ? 'has-error' : ''}}">
                {!! Form::label('codigo', 'Código: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('codigo', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('codigo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fecha_creacion') ? 'has-error' : ''}}">
                {!! Form::label('fecha_creacion', 'Fecha De Creación: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('fecha_creacion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fecha_creacion', '<p class="help-block">:message</p>') !!}
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

@endsection