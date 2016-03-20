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


            <h1 class=" sombra5 ">Temas</h1>
            
             

    @include('common.errors')

    {!! Form::model($tema, ['route' => ['temas.update', $tema->id], 'method' => 'patch']) !!}

        @include('temas.fields')

    {!! Form::close() !!}
</div>
  
    </div>
</div>
  </div>
        </div>
   

@endsection
