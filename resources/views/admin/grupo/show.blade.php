@extends('layouts.master')

@section('content')

    <h1>Grupo</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Grupo</th><th>Control De Plan Global</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $grupo->id }}</td> <td> {{ $grupo->grupo }} </td><td> {{ $grupo->control_de_plan_global }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection