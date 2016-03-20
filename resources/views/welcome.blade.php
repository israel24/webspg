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
					
					<div class='sombra1' style="width:70%; text-align:center; padding:none;">
					<p> <span class='sombra5'>web SPG</span> Bienvenido al SITIO WEB del Sistema de Administracion de Planes Globales de la Facultad de {{ $variable7 }} de la Universidad Mayor de San Simón.</p>

<p>En esta página encontrará información referente a las Carreras que cuenta nuestra Facultad, sus autoridades, Planes globales de cada materia y docentes.</p>

<p>Este SITIO brinda tanto a docentes como a autoridades, el sistema coadyuva a docentes para realizar su plan global de su asignada materia, además de poder efectuar enlaces importantes con páginas relacionadas al entorno universitario.</p>
					</div>

					<div style="text-align:center;" > <img src="{{asset('/100'.$variable9->facultad.'.jpg')}}" alt="Facultad"  />
					</div> 

				</div>
			</div>
		</div>
	</div>
</div>
@endsection

