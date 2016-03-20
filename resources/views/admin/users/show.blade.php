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
                    <li><a href="{{ url('admin/docentes') }}"></i>Docentes</a></li>
                    <li><a href="{{ url('admin/docentes') }}"></i>Lista De Docentes</a></li>
                    </ol>

                </div>

                <div class="panel-body">

                    <div class="table-responsive">

    <h1>User</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nombre</th><th>Email</th><th>Contraseña</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $user->id }}</td> <td> {{ $user->name }} </td><td> {{ $user->email }} </td><td> {{ $user->password }} </td>
                </tr>
            </tbody>    
        </table>
    </div>




 


            </div>
        </div>
    </div>
</div>
</div>

</div>
@endsection