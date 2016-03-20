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
                    <li><a href="#"></i>Configuración de Imagenes</a></li>
                    </ol>

                </div>

                <div class="panel-body">


                
<div class="table-responsive">
    <h1>Edit Configuracion</h1>
    <hr/>

    {!! Form::model($configuracion, [
        'method' => 'PATCH',
        'url' => ['admin/configuracion', $configuracion->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
                {!! Form::label('nombre', 'Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nombre', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
                {!! Form::label('estado', 'Estado: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                <label>{!! Form::radio('estado', '1') !!} Yes</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('estado', '0', true) !!} No</label>
            </div>
                    {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('logo') ? 'has-error' : ''}}">
                {!! Form::label('logo', 'Logo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('logo', $image,null, ['class' => 'form-control']) !!}
                    {!! $errors->first('logo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('facultad') ? 'has-error' : ''}}">
                {!! Form::label('facultad', 'Facultad: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('facultad', $image,null, ['class' => 'form-control']) !!}
                    {!! $errors->first('facultad', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('organigrama') ? 'has-error' : ''}}">
                {!! Form::label('organigrama', 'Organigrama: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('organigrama',$image,null, ['class' => 'form-control']) !!}
                    {!! $errors->first('organigrama', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('imgenuno') ? 'has-error' : ''}}">
                {!! Form::label('imgenuno', 'Imgenuno: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('imgenuno', $image,null, ['class' => 'form-control']) !!}
                    {!! $errors->first('imgenuno', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('imgendos') ? 'has-error' : ''}}">
                {!! Form::label('imgendos', 'Imgendos: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('imgendos', $image,null, ['class' => 'form-control']) !!}
                    {!! $errors->first('imgendos', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('imgentres') ? 'has-error' : ''}}">
                {!! Form::label('imgentres', 'Imgentres: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('imgentres', $image,null, ['class' => 'form-control']) !!}
                    {!! $errors->first('imgentres', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('imgencuatro') ? 'has-error' : ''}}">
                {!! Form::label('imgencuatro', 'Imgencuatro: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('imgencuatro',$image,null, ['class' => 'form-control']) !!}
                    {!! $errors->first('imgencuatro', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('imgencinco') ? 'has-error' : ''}}">
                {!! Form::label('imgencinco', 'Imgencinco: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('imgencinco', $image,null, ['class' => 'form-control']) !!}
                    {!! $errors->first('imgencinco', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Actualizar', ['class' => 'btn btn-primary form-control']) !!}
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