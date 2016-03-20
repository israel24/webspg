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
                    <li><a href="#"></i>Todas las Imagenes</a></li>
                    </ol>

                </div>

                <div class="panel-body">


                
<div class="table-responsive">

    <!-- asta aqui-->

    <h1>Imagen </h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Nombre del Archivo</th><th>Imagen previa</th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($image as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->filename }}</td>
                    <td>
                       <img src="{{asset('/'.$item->filename.'.jpg')}}"/> 
                    </td>
                    
                    <td>
                        

                        <a href="{{ url('admin/image' , $item->id) }}">
                            <button type="submit" class="btn btn-primary btn-xs">Ver Imagen </button>
                        </a> /
                        
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/image', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $image->render() !!} </div>
    </div>

       </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
