<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Optica Visión Control! | </title>
    
    {!! Html::style('vendors/seguce92/bootstrap/css/bootstrap.min.css') !!}
    {!! Html::style('vendors/seguce92/fullcalendar/fullcalendar.min.css') !!}
    {!! Html::style('vendors/seguce92/bootstrap-datetimepicker/css/bootstrap-material-datetimepicker.css') !!}
    {!! Html::style('vendors/seguce92/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') !!}
    <!-- Bootstrap -->
    {!!Html::style('vendors/bootstrap/dist/css/bootstrap.min.css')!!}
    <!-- Font Awesome -->
    {!!Html::style('vendors/font-awesome/css/font-awesome.min.css')!!}
    <!-- NProgress -->
     {!!Html::style('vendors/nprogress/nprogress.css')!!}
    <!-- iCheck -->
     {!!Html::style('vendors/iCheck/skins/flat/green.css')!!}
    <!-- bootstrap-progressbar -->
     {!!Html::style('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')!!}
    <!-- JQVMap -->
     {!!Html::style('vendors/jqvmap/dist/jqvmap.min.css')!!}
    <!-- bootstrap-daterangepicker -->
     {!!Html::style('vendors/bootstrap-daterangepicker/daterangepicker.css')!!}
    <!-- Custom Theme Style -->
     {!!Html::style('build/css/custom.min.css')!!}
     {!!Html::style('build/css/bootstrap-datetimepicker.css')!!}
     <!-- jQuery -->
     {!!Html::script('vendors/jquery/dist/jquery.min.js')!!}
     {!! Html::script('vendors/seguce92/fullcalendar/lib/moment.min.js') !!}
    {!! Html::script('vendors/seguce92/fullcalendar/fullcalendar.min.js') !!}
    {!! Html::script('vendors/seguce92/fullcalendar/locale/es.js') !!}
    {!! Html::script('vendors/seguce92/bootstrap-datetimepicker/js/bootstrap-material-datetimepicker.js') !!}
    {!! Html::script('vendors/seguce92/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') !!}
    {!!Html::script('build/js/Moment.js')!!}
    {!!Html::script('build/js/bootstrap-datetimepicker.js')!!}
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-eye"></i> <span>Optica Visión Control!</span></a>
            </div>
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="../images/metallica.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2>Ing. Daniel Becerra</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-address-card-o" aria-hidden="true"></i> Perfiles <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/Users/create">Agregar</a></li>
                      <li><a href="/Users">Listado de usuarios</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-tripadvisor" aria-hidden="true"></i> Productos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/Products/create">Agregar</a></li>
                      <li><a href="/Products">Listado de productos</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-flask" aria-hidden="true"></i> Laboratorios <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/Labs/create">Agregar</a></li>
                      <li><a href="/Labs">Listado de laboratorios</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-calculator" aria-hidden="true"></i> Contabilidad <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/Acountings/create">Agregar</a></li>
                      <li><a href="/Acountings">Listado de contabilidad</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Pacientes</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-user" aria-hidden="true"></i> Pacientes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/Clients/create">Agregar</a></li>
                      <li><a href="/Clients">Listado de pacientes</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Pedidos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/Orders/create">Agregar</a></li>
                      <li><a href="/Orders">Listado de pedidos</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-calendar" aria-hidden="true"></i> Citas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/Calendar">Agregar</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-history" aria-hidden="true"></i> Historia clinica <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/Medicalhistory/create">Agregar</a></li>
                      <li><a href="/Medicalhistory ">Listado de citas</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="../images/metallica.jpg" alt="">Daniel Becerra
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="../images/metallica.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/metallica.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/metallica.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/metallica.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          
          <!-- /top tiles -->
        @yield('content')
        </div>
        <!-- /page content -->
        
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            InterSoft - Desarrolladores de software <a href="https://Intersoft.com">InterSoft</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- Bootstrap -->

    {!!Html::script('vendors/bootstrap/dist/js/bootstrap.min.js')!!}

    <!-- FastClick -->

    {!!Html::script('vendors/fastclick/lib/fastclick.js')!!}

    <!-- NProgress -->

    {!!Html::script('vendors/nprogress/nprogress.js')!!}

    <!-- Chart.js -->

    {!!Html::script('vendors/Chart.js/dist/Chart.min.js')!!}

    <!-- gauge.js -->

    {!!Html::script('vendors/gauge.js/dist/gauge.min.js')!!}

    <!-- bootstrap-progressbar -->

    {!!Html::script('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')!!}

    <!-- iCheck -->

    {!!Html::script('vendors/iCheck/icheck.min.js')!!}

    <!-- Skycons -->

    {!!Html::script('vendors/skycons/skycons.js')!!}

    <!-- Flot -->

    {!!Html::script('vendors/Flot/jquery.flot.js')!!}

    {!!Html::script('vendors/Flot/jquery.flot.pie.js')!!}

    {!!Html::script('vendors/Flot/jquery.flot.time.js')!!}

    {!!Html::script('vendors/Flot/jquery.flot.stack.js')!!}

    {!!Html::script('vendors/Flot/jquery.flot.resize.js')!!}

    <!-- Flot plugins -->

    {!!Html::script('vendors/flot.orderbars/js/jquery.flot.orderBars.js')!!}

    {!!Html::script('vendors/flot-spline/js/jquery.flot.spline.min.js')!!}

    {!!Html::script('vendors/flot.curvedlines/curvedLines.js')!!}

    <!-- DateJS -->

    {!!Html::script('vendors/DateJS/build/date.js')!!}

    <!-- JQVMap -->

    {!!Html::script('vendors/jqvmap/dist/jquery.vmap.js')!!}

    {!!Html::script('vendors/jqvmap/dist/maps/jquery.vmap.world.js')!!}

    {!!Html::script('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')!!}

    <!-- bootstrap-daterangepicker -->

    {!!Html::script('vendors/moment/min/moment.min.js')!!}

    {!!Html::script('vendors/bootstrap-daterangepicker/daterangepicker.js')!!}

    <!-- Custom Theme Scripts -->

    {!!Html::script('build/js/custom.min.js')!!}

    <!-- Datatables -->    
  </body>
</html>
