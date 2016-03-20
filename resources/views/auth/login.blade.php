@extends('auth.auth')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">

                   <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i>Inicio</a></li>
                    <li><a href="{{ url('auth/login') }}"></i>Iniciar Sesion</a></li>
                    </ol>

                </div>

                <div class="panel-body">
    <div class="login-box">
       

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Alerta!</strong> Datos Incorrectos..<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="login-box-body">
    <p class="login-box-msg">Iniciar Sesion</p>
    <form action="{{ url('/auth/login') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" name="email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Contraseña" name="password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" name="remember"> Recordar
                    </label>
                </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar</button>
            </div><!-- /.col -->
        </div>
    </form>


    <!--<a href="{{ url('/password/email') }}">No recuerdo mi contraseña</a><br> -->
    <a href="{{ url('/auth/register') }}" class="text-center">Crear cuenta</a>

</div><!-- /.login-box-body -->

</div><!-- /.login-box -->

   

    

  </div>
        </div>
    </div>
</div>
@endsection
