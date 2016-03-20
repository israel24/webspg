@extends('layouts.master')

@section('content')

    <h1>Materia <a href="{{ url('cli/materia/create') }}" class="btn btn-primary pull-right btn-sm">Añadir Nueva Materia</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Nombre De La Materia</th><th>Sigla De La Materia</th><th>Código</th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($materia as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nombre_materia }}</td><td>{{ $item->sigla_materia }}</td><td>{{ $item->codigo }}</td>
                    <td>
                        <a href="{{ url('cli/materia/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Editar</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['cli/materia', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $materia->render() !!} </div>
    </div>

@endsection
