@extends('auth.auth')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-14 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-body">
               
<div class="table-responsive">
    <h1 class='sombra5'>->Autoridad </h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Codigo</th><th>Nombre</th><th>Cargo</th><th>Inicio de Gestion</th><th>Fin de Gestion</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($autoridad as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $item->codigo }}</td>
                    <td><a href="{{ url('admin/autoridad', $item->id) }}">{{ $item->nombre }}</a></td>
                    <td>{{ $item->cargo }}</td>
                    <td>{{ $item->fecha_Inicio }}</td>
                    <td>{{ $item->fecha_fin }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $autoridad->render() !!} </div>
    </div>
<!-- asta aqui-->

            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- asta aqui-->
@endsection
