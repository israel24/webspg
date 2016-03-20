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

    <h1>Imagen</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nombre Original</th><th>Nombre del archivo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $image->id }}</td> <td> {{ $image->original_name }} </td><td> {{ $image->filename }} </td>
                </tr>

            </tbody>    
        </table>

         <div style="text-align:center;" >
                  
                                
                     <img src="{{asset('/100'.$image->filename.'.jpg')}}" onerror="this.src='{{asset('/'.$image->filename.'.jpg')}}'"/>
        </div> 
        
       
    </div>

       </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection