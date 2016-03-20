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
                    <li><a href="{{ url('/admin/autoridad') }}"><i class="fa fa-dashboard"></i>Autoridades</a></li>
                    <li><a href="#"></i>Editar</a></li>
                    
                    </ol>

                </div>

                <div class="panel-body">


                
<div class="table-responsive">

    <!-- asta aqui-->
    

    <h1>Editar Autoridad</h1>
    <hr/>

    {!! Form::model($autoridad, [
        'method' => 'PATCH',
        'url' => ['admin/autoridad', $autoridad->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
                {!! Form::label('nombre', 'Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nombre', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('codigo') ? 'has-error' : ''}}">
                {!! Form::label('codigo', 'Código: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('codigo', null, ['class' => 'form-control', 'required' => 'required','readonly' => 'true']) !!}
                    {!! $errors->first('codigo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('cargo') ? 'has-error' : ''}}">
                {!! Form::label('cargo', 'Cargo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('cargo', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('cargo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fecha_Inicio') ? 'has-error' : ''}}">
                {!! Form::label('fecha_Inicio', 'Fecha Inicio: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('fecha_Inicio', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fecha_Inicio', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fecha_fin') ? 'has-error' : ''}}">
                {!! Form::label('fecha_fin', 'Fecha Fin: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('fecha_fin', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fecha_fin', '<p class="help-block">:message</p>') !!}
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


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Guardar', ['class' => 'btn btn-primary form-control']) !!}

        </div>
       <div class="col-sm-offset-1 col-sm-3">
        <a href="{{ url('admin/autoridad') }}" class="btn btn-warning form-control">Cancelar</a>
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
<!-- asta aqui-->
</div>
 </div>         </div>
            </div>
        </div>
    </div>


<!-- asta aqui-->
@endsection