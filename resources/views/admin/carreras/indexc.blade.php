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
    <h1 class='sombra5'> ->Carreras </h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Codigo</th><th>Nombre</th><th>Lema</th>
                </tr>
            </thead>
            <tbody>
           <!--  {{-- */$x=0;/* --}} -->
            @foreach($carreras as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <!-- <td>{{ $x }}</td> -->
                    <td>{{ $item->codigo }}</td>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->lema }}</td>
<!--                     <td>
                        <a href="{{ url('admin/materia') }}">
                            <button type="submit" class="btn btn-success btn-xs">Ver Materias</button>
                        </a> 
                    </td> -->
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $carreras->render() !!} </div>
    </div>
</div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- asta aqui-->
@endsection
