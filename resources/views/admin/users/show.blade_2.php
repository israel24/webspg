@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">

                   <ol class="breadcrumb">
                    <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>Inicio</a></li>
                    <li><a href="{{ url('admin/docentes') }}"></i>Docentes</a></li>
                    <li><a href="{{ url('admin/docentes') }}"></i>Lista De Docentes</a></li>
                    </ol>

                </div>

                <div class="panel-body">

                    <div class="table-responsive">

    <h1>User</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nombre</th><th>Email</th><th>Contraseña</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $user->id }}</td> <td> {{ $user->name }} </td><td> {{ $user->email }} </td><td> {{ $user->password }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

    
                 


      <form  action='show.blade.php' method='post'>

      <div class="form-group">
        <div class="col-sm-off set-0 col-sm-3">
            <th>Roles Asignado</th>
      <select class="form-control" multiple="multiple" id="origen" name="origenm[]" size="15">

        @foreach($user->roles as $role)
        <option value='.$role->id.'>{{ $role->display_name }}</option>
                                            
        @endforeach
      
    </select>
    </div>
    </div>
    <div class="form-group" >
    <div class="col-sm-off set-1 col-sm-5" style="margin-left:65px; margin-top:100px;margin-bottom:7px;">
      <input type="button" class="pasar izq btn btn-primary col-sm-5" value="Retirar>>">
      <input type="button" class="quitar der btn btn-primary col-sm-5" value="<<Asignar">
      <br>
      <input type="button" class="pasartodos izq btn btn-primary col-sm-5" value="Total>>">
      <input type="button" class="quitartodos der btn btn-primary col-sm-5" value="<<Total">
    </div>
    </div>
    <div class="form-group">
        <div class="col-sm-off set-0 col-sm-3">
            <th>Roles</th>
      <select class="form-control" name="destinom[]" id="destino" multiple="multiple" size="15">
         @foreach($rolew as $roled)
        <option value='.$roled-id.'>{{ $roled->display_name }}</option>                             
        @endforeach
    </select>
    </div>
    </div>
    <br>
    
    <div class="form-group">
    <div class="col-sm-offset-3 col-sm-8">
    <input style="margin-top:30px;margin-bottom:15px; margin-left:15px;" 
    name="boton" class="submit btn btn-primary col-sm-8" type="button" value="Actualizar" 
    onclick="$(location).attr('href','{{ url('/user/'.$user->id.'/roles/'.$destino.'/asigno') }}');" >

    </div>
   </div>

  </form>
 
  
<script src="{{ asset('/jquery.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('/jqw.js') }}" type="text/javascript"></script>

 


            </div>
        </div>
    </div>
</div>
</div>

</div>
@endsection