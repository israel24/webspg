@extends('layouts.master')

@section('content')

    <h1>Carrera</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nombre</th><th>Código</th><th>Misión</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $carrera->id }}</td> <td> {{ $carrera->nombre }} </td><td> {{ $carrera->codigo }} </td><td> {{ $carrera->mision }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection