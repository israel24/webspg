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

				
					<h1 class='sombra5'>->Organigrama </h1>
					<div class='sombra1' style="width:70%; text-align:center; padding:none;">
					

					
					<div style="text-align:center;" >
								 
					 <img src="{{asset('/100'.$variable9->organigrama.'.jpg')}}" alt="organigrama" />
					 
					</div> 
					



				</div>
			</div>
		</div>
	</div>
</div>
@endsection
