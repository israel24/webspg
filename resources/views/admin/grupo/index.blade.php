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
                   <li><a href="#"></i>Grupos</a></li>
                    </ol>

                </div>

                <div class="panel-body">


                    <!-- asta aqui-->
    <h1>Grupos<a href="{{ url('admin/materia/'.$mate.'/creategrupo') }}" class="btn btn-primary pull-right btn-sm">Añadir Nuevo Grupo</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Grupos</th><th>Control De Plan Global</th><th>Docente</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            
            @foreach($grupo as $item)
               
                <tr>
                    
                    <td>{{ $item->grupo }}</td><td>{{ $item->control_de_plan_global }}</td><td>{{ $item->docente->nombre }}</td>
                    <td>
                        <a href="{{ url('admin/grupo/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Editar</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/grupo', $item->id],
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
