<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="{{ url('/home') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>S</b>PG</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>SPG </b> &copy; lugrawibe</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">

                <li class="active"><a href="{{ url('/') }}">Facultad<span class="sr-only">(current)</span></a></li>
                <li class="active"><a href="{{ url('carreras') }}">Carreras<span class="sr-only">(current)</span></a></li>
                <li class="active"><a href="{{ url('autoridades') }}">Autoridad<span class="sr-only">(current)</span></a></li>
                <li class="active"><a href="#">Información<span class="sr-only">(current)</span></a></li>
                <li class="active"><a href="#">Noticias<span class="sr-only">(current)</span></a></li>
                <li class="active"><a href="{{ url('/organigrama') }}">Organigrama<span class="sr-only">(current)</span></a></li>
                <!--<li><a href="#">nada</a></li>-->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ayuda<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Documentacion</a></li>
                    <li><a href="#">Ayuda para el sistema</a></li>
                    <li><a href="#">Contactos de ayuda</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Ayuda en linea</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Ayudas rapidas</a></li>
                  </ul>
                </li>
              </ul>
              
            </div><!-- /.navbar-collapse -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="{{asset('/img/user2-160x160.jpg')}}" class="user-image" alt="User Image"/>
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                            <p>
                                {{ Auth::user()->name }}
                                <small>{{ $variablefecha }}</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="col-xs-4 text-center">
                                <a href="#">Sistema</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Planes</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Globales</a>
                            </div>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Perfil</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ url('/auth/logout') }}" class="btn btn-default btn-flat">Salir</a>
                            </div>
                        </li>

                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>

        
    </nav>
</header>