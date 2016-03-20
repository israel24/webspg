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
                    <li><a href="#"></i>Roles</a></li>
                    
                    </ol>

                </div>

                <div class="panel-body">


                
<div class="table-responsive">
    <h1>Roles <a href="{{ url('admin/roles/create') }}" class="btn btn-primary pull-right btn-sm">Añadir Nuevo Rol</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Nombre</th><th>Visualización De Nombre</th><th>Descripción</th><th>Permisos</th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($roles as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->name }}</td><td>{{ $item->display_name }}</td><td>{{ $item->description }}</td>
                    <td><ul>
                                                @foreach($item->permissions as $permissions)
                                                <li>
                                                    {{ $permissions->display_name }}
                                                </li>
                                                @endforeach
                    </ul></td>

                    <td>
                        <a href="{{ url('admin/roles/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Editar</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/roles', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        
    </div>
</div>
  </div>
        </div>
    </div>
</div>
@endsection
