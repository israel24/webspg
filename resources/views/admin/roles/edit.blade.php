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
                    <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>Administrador de Usuarios</a></li>
                    <li><a href="{{ url('admin/roles') }}"></i>Roles</a></li>
                    <li><a href="#"></i>Editar rol</a></li>
                    </ol>

                </div>

                <div class="panel-body">


                
<div class="table-responsive">

    <h1>Editar Rol</h1>
    <hr/>

    {!! Form::model($role, [
        'method' => 'PATCH',
        'url' => ['admin/roles', $role->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                {!! Form::label('name', 'Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('display_name') ? 'has-error' : ''}}">
                {!! Form::label('display_name', 'Visualización De Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('display_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('display_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                {!! Form::label('description', 'Descripción: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('description', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


            <div class="form-group">
                {!! Form::label('permisos', 'Permisos: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">

                    {!! Form::select('permission_id[]', $permissions, isset($permission_role) ? $permission_role : null, array(
                    'multiple' => true, 'class' => 'multi-select', 'id' => 'permissionSelect')) !!}




                </div>
            </div>

            


     
              <link href="{{ asset('js/jquery-multi-select/css/multi-select.css') }}" rel="stylesheet" />
            <script src="{{ asset('/jquery.min.js') }}" type="text/javascript"></script>
             <script src="{{ asset('js/jquery-multi-select/js/jquery.multi-select.js') }}"></script>
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
@endsection