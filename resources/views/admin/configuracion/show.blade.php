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
                    
                    <li><a href="#"></i>Configuración de Imagenes</a></li>
                    </ol>

                </div>

                <div class="panel-body">


                
<div class="table-responsive">

    <h1>Configuracion</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nombre</th><th>Estado</th><th>Logo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $configuracion->id }}</td> <td> {{ $configuracion->nombre }} </td><td> {{ $configuracion->estado }} </td><td> {{ $configuracion->logo }} </td>
                </tr>
            </tbody>    
        </table>
    </div>
        <h1>Logo</h1>
        <div style="text-align:center;" >
                  
                                
                     <img src="{{asset('/'.$configuracion->logo.'.jpg')}}" alt="Logo" />
        </div> 
    

                <h1>Imagen de Facultad</h1>
        <div style="text-align:center;" >
                                
                     <img src="{{asset('/100'.$configuracion->facultad.'.jpg')}}" alt="Facultad" />
        </div> 
                <h1>Imagen de Organigrama</h1>
        <div style="text-align:center;" >
                                
                     <img src="{{asset('/100'.$configuracion->organigrama.'.jpg')}}" alt="Organigrama" />
        </div> 
                <h1>Imagen Administrador</h1>
        <div style="text-align:center;" >
                                
                     <img src="{{asset('/'.$variable9->imgenuno.'.jpg')}}" alt="Administrador" />
        </div> 
            <h1>Imagen Director Academico</h1>
        <div style="text-align:center;" >
                                
                     <img src="{{asset('/'.$variable9->imgendos.'.jpg')}}" alt="Director Academico" />
        </div> 
       
            <h1>Imagen Director de Carrera</h1>
        <div style="text-align:center;" >
                                
                     <img src="{{asset('/'.$variable9->imgentres.'.jpg')}}" alt="Director de Carrera" />
        </div> 
       
            <h1>Imagen Docente</h1>
        <div style="text-align:center;" >
                                
                     <img src="{{asset('/'.$variable9->imgencuatro.'.jpg')}}" alt=" Docente" />
        </div> 
       
            <h1>Imagen Usuario</h1>
        <div style="text-align:center;" >
                                
                     <img src="{{asset('/'.$variable9->imgencinco.'.jpg')}}" alt="Usuario" />
        </div> 
       




       </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection