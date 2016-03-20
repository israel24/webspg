@extends('layouts.master')

@section('content')

    <h1>Unidades <a href="{{ url('admin/unidades/create') }}" class="btn btn-primary pull-right btn-sm">Añadir Nueva Unidad</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Nombre De La Unidad</th><th>Duracion De La Unidad En Periodos Academicos</th><th>Objetivo De La Unidad</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($unidades as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nombre_de_la_unidad }}</td><td>{{ $item->duracion_de_la_unidad_en_periodos_academicos }}</td><td>{{ $item->objetivo_de_la_unidad }}</td>
                    <td>
                        <a href="{{ url('admin/unidades/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Editar</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/unidades', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $unidades->render() !!} </div>
    </div>

@endsection
