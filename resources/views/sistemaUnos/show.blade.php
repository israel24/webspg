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
                    <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>Inicio</a></li>
                    <li><a href="{{ url('admin/carreras') }}"></i>Carreras</a></li>
                    <li><a href="{{ url('admin/carreras') }}"></i>Lista De Carreras</a></li>
                    </ol>

                </div>

                <div class="panel-body">
	 @include('sistemaUnos.show_fields')
</div>
<!-- asta aqui-->

            </div>
        </div>
    </div>
</div>

<!-- asta aqui-->
@endsection
