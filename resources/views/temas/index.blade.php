@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">

                   <ol class="breadcrumb">
                    <li><a href="#">Temas</a></li>
                  
                    </ol>

                </div>

                <div class="panel-body">


                
                  
                        

    <div class="container">


        <div class="row">
            <h1 class="pull-left sombra5 ">Temas</h1>
            
        </div>

        <div class="row">
        <div class="col-md-8 col-md-offset-0">
            @if($temas->isEmpty())
                <div class="well text-center">No hay temas</div>
            @else
                @include('temas.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $temas])


    </div>

      
    </div>
</div>
  </div>
        </div>
    </div>

@endsection
