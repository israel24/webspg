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
                    <li><a href="#">Temas</a></li>
                    
                    </ol>

                </div>

                <div class="panel-body">


                
<div class="table-responsive">
<div class="container">
	 @include('temas.show_fields')
</div>

  
    </div>
</div>
  </div>
        </div>
    </div>
</div>
@endsection
