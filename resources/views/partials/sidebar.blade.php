<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <!-- 
            <div class="pull-left image">
                <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
               
                <a href="#"><i class="fa fa-circle text-success"></i> En linea</a>
            </div>
            -->
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview">
                <a href="#"><i class="fa fa-dashboard"></i><span>Administrar Usuarios</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/users') }}">Usuarios</a></li>
                    <li><a href="{{ url('admin/roles') }}">Roles</a></li>
                    <li><a href="{{ url('admin/permissions') }}">Permisos</a></li>
                </ul>
            </li>

            <li class="treeview">
              <a href="{{ url('admin/departamento') }}">
                <i class="fa fa-dashboard"></i> <span>Departamentos</span> 
              </a>
              
            </li>
            <li class="treeview">
              <a href="{{ url('admin/carreras') }}">
                <i class="fa fa-dashboard"></i> <span>Carreras</span> 
              </a>
              
            </li>
            <li class="treeview">
              <a href="{{ url('admin/docentes') }}">
                <i class="fa fa-dashboard"></i> <span>Plantel Docente</span> 
              </a>
              
            </li>
        
            <li class="treeview">
              <a href="{{ url('admin/autoridad') }}">
                
                <i class="fa fa-dashboard"></i> <span>Autoridades</span> 
              </a>
              
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Bitacoras</span> 
              </a>
              
            </li>
        <!--   @if(Auth::check() && Auth::user()->hasRole('docente')) -->
        <!--    @endif -->
        <!--     @if(Auth::check() && Auth::user()->can(['crear-materia']))-->
         <!--   @endif -->
            <li class="treeview">
              <a href="{{ url('admin/area') }}">
                <i class="fa fa-dashboard"></i> <span>Areas</span> 
              </a>
              </li>

         
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
