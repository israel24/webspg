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
                    <li><a href="#"></i>Todas las Imagenes</a></li>
                    </ol>

                </div>

                <div class="panel-body">


                
<div class="table-responsive">

    <!-- asta aqui-->

    <h1>Editar Imagen</h1>
    <hr/>

    {!! Form::model($image, [
        'method' => 'PATCH',
        'url' => ['admin/image', $image->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('original_name') ? 'has-error' : ''}}">
                {!! Form::label('original_name', 'Nombre Original: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('original_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('original_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('filename') ? 'has-error' : ''}}">
                {!! Form::label('filename', 'Nombre del Archivo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('filename', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('filename', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


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