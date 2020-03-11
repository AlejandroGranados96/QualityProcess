<?php 
include("../../model/sesiones.php");
require_once("../../model/funciones.php");
$col=new consul();
$cons_usuarios = $col->cons_usuarios();
//session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Agregar Usuarios | Administrador</title>

  <!-- Bootstrap CSS -->
  <link href="view/admin/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="view/admin/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="view/admin/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="view/admin/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="view/admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="view/admin/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="view/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="view/admin/css/owl.carousel.css" type="text/css">
  <link href="view/admin/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="view/admin/css/fullcalendar.css">
  <link href="view/admin/css/widgets.css" rel="stylesheet">
  <link href="view/admin/css/style.css" rel="stylesheet">
  <link href="view/admin/css/style-responsive.css" rel="stylesheet" />
  <link href="view/admin/css/xcharts.min.css" rel=" stylesheet">
  <link href="view/admin/css/jquery-ui-1.10.4.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>

<header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="inicioAdmin" class="logo">Agregar <span class="lite">Usuarios</span></a>
      <!--logo end-->


      
    </header>
     <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="inicioAdmin">
                          <i class="icon_house_alt"></i>
                          <span>Inicio</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Usuarios</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="consul_admin">Consultar Usuarios</a></li>
              <li><a class="" href="insertar">Agregar Usuarios</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Documentos</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
            <li><a class="" href="AltaPDF">Subir PDF</a></li>
              <li><a class="" href="ConsultaPDF">Consultas PDF</a></li>
            </ul>
          </li>
         
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Demeritos</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="consul_DEM">Consulta Demeritos</a></li>
              <li><a class="" href="insertar_DEM">Cargar Demeritos</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Cerrar Sesion</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="cerrar">Salir</a></li>
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Polomex s.a. de c.v.</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="inicioAdmin">Home</a></li>
              <li><i class="fa fa-file-text-o"></i>Tabla Usuarios</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Registrar un Nuevo Usuario
              </header>
              
            </section>
            
          </div>
        </div>

<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->

<div id="iniciar-sesion">
                <form action="insertar_funcion" method="post">
                    <div class="contenedor-input">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
                    </div>

                    <div class="contenedor-input">
                        <label>
                            <span class="req"></span>
                        </label>
                        <input type="text" class="form-control" name="apellido" placeholder="Apellido" required>
                    </div>

                    <div class="contenedor-input">
                        <label>
                             <span class="req"></span>
                        </label>
                        <input type="number" class="form-control" name="numempleado" placeholder="Numero Empleado" required>
                    </div>

                    <div class="contenedor-input">
                        <label>
                             <span class="req"></span>
                        </label>
                        <input type="email" class="form-control" name="email" placeholder="Correo" required>
                    </div>

                    <div class="contenedor-input">
                        <label>
                             <span class="req"></span>
                        </label>
                        <input type="password" class="form-control" name="contrasena" id="password" placeholder="Contraseña" required>
                    </div>
                    <br>
                    <div class="contenedor-input">
                        <select name="rol"> 
                                <option values="1"> ADMINISTRADOR </option>
                                <option values="0"> EMPLEADO </option>
                        </select>
						</div>
                        <br>

                    <input type="submit" name="insertar" class="button button-block" value="Guardar Datos">
                </form>
                
            </div>


<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
        
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
   
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="view/admin/js/jquery.js"></script>
  <script src="view/admin/js/jquery-ui-1.10.4.min.js"></script>
  <script src="view/admin/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="view/admin/js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="view/admin/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="view/admin/js/jquery.scrollTo.min.js"></script>
  <script src="view/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="view/admin/assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="view/admin/js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="view/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="view/admin/js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="view/admin/js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="view/admin/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="view/admin/js/calendar-custom.js"></script>
    <script src="view/admin/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="view/admin/js/jquery.customSelect.min.js"></script>
    <script src="view/admin/assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="view/admin/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="view/admin/js/sparkline-chart.js"></script>
    <script src="view/admin/js/easy-pie-chart.js"></script>
    <script src="view/admin/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="view/admin/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="view/admin/js/xcharts.min.js"></script>
    <script src="view/admin/js/jquery.autosize.min.js"></script>
    <script src="view/admin/js/jquery.placeholder.min.js"></script>
    <script src="view/admin/js/gdp-data.js"></script>
    <script src="view/admin/js/morris.min.js"></script>
    <script src="view/admin/js/sparklines.js"></script>
    <script src="view/admin/js/charts.js"></script>
    <script src="view/admin/js/jquery.slimscroll.min.js"></script>
    <script>


</body>

</html>
