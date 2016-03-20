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
                    <li><a href="{{ url('admin/departamento') }}"></i>Departamentos</a></li>
                    <li><a href="{{ url('admin/departamento') }}"></i>Lista De Departamentos</a></li>
                    </ol>

                </div>

                <div class="panel-body">


                
<div class="table-responsive">
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

        @include('flash::message')

        
            <h1 class="pull-left">Sistema</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('sistemaUnos.create') !!}">Añadir Nuevo Sistema</a>
       

        
            @if($sistemaUnos->isEmpty())
                <div class="well text-center">No hay Sistemas Registrados</div>
            @else
                @include('sistemaUnos.table')
            @endif
       

        @include('common.paginate', ['records' => $sistemaUnos])


    </div>
    <!-- asta aqui-->

            </div>
        </div>
    </div>
</div>

<!-- asta aqui-->
@endsection
