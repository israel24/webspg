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
                    <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>Administrador de Usuarios</a></li>
                    <li><a href="{{ url('admin/users') }}"></i>Usuarios</a></li>
                    <li><a href="#"></i>Editar</a></li>
                    </ol>

                </div>

                <div class="panel-body">

                    <div class="table-responsive">

    <h1>Editar Usuario</h1>
    <hr/>

    {!! Form::model($user, [
        'method' => 'PATCH',
        'url' => ['admin/users', $user->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                {!! Form::label('name', 'Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                {!! Form::label('email', 'Email: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                {!! Form::label('password', 'Contraseña: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


                            <div class="form-group">
                {!! Form::label('roles', 'Roles: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">

                {!! Form::select('role_id[]', $roles, isset($roles_user) ? $roles_user : null, array(
                'multiple' => true, 'class' => 'multi-select', 'id' => 'roleSelect')) !!}

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