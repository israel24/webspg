<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        <li><a href="#control-sidebar-settings-tab1" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Informacion de Usuario</h3>

            <p>
                
                Información  de roles <br>
                 permisos <br>


            </p>
            
        </div><!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Configuraciones</div><!-- /.tab-pane -->
        <!-- Settings tab content -->


        <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
                <h3 class="control-sidebar-heading">Temas <br>  Configuraciones de Logos</h3>
                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Panel
                        
                    </label>
                    <p>
                        <li class="treeview">
                      <a href="{{ url('/temas') }}">
                        <i class="fa fa-dashboard"></i> <span>Temas</span> 
                      </a>
                      
                        </li>
                          <li class="treeview">
                     
                       <a href="{{ url('admin/configuracion') }}">
                        <i class="fa fa-dashboard"></i> <span>Configuraciones de logos</span> 
                      </a>
                      
                      
                        </li>
                       <li class="treeview">
                     
                       <a href="{{ url('/wil') }}">
                        <i class="fa fa-dashboard"></i> <span>subir Imagenes</span> 
                      </a>
                      
                       </li> 


                        <li class="treeview">
                      <a href="{{ url('/admin/image') }}">
                        <i class="fa fa-dashboard"></i> <span>Imagenes</span> 
                      </a>
                      
                       </li>  
                    </p>
                </div><!-- /.form-group -->
            </form>
        </div><!-- /.tab-pane -->


        <div class="tab-pane" id="control-sidebar-settings-tab1">
            <form method="post">
                <h3 class="control-sidebar-heading">Configuracion de Nombres</h3>
                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        panel
                        
                    </label>
                    
                       <li class="treeview">
                                  <a href="{{ url('/admin/sistemapg') }}">
                                    <i class="fa fa-dashboard"></i> <span>Editor: Nombre  de Sistema</span> 
                                  </a>
                      
                        </li> 



                      
            

                        
                </div><!-- /.form-group -->
            </form>
        </div><!-- /.tab-pane -->



    </div>
</aside><!-- /.control-sidebar -->

<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
<div class='control-sidebar-bg'></div>