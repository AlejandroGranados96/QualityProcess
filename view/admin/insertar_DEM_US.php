<?php 
include("../../model/sesiones.php");
require_once("../../model/funciones.php");
$col=new consul();
$cons_DEMERITOS = $col->cons_DEMERITOS();
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

  <title>Cargar Dmeritos</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/daterangepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-colorpicker.css" rel="stylesheet" />
  <!-- date picker -->

  <!-- color picker -->

  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

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
      <a href="../usuario/index_usuario" class="logo">Cargar <span class="lite">Demeritos</span></a>
      <!--logo end-->


      
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="../usuario/index_usuario">
                          <i class="icon_house_alt"></i>
                          <span>Inicio</span>
                      </a>
          </li>
      <!--    <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Usuarios</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="consul_admin.php">Consultar Usuarios</a></li>
              <li><a class="" href="form_validation.html">Agregar Usuarios</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Documentos PDF</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="../pdf/index_pdf.php">Subir PDF</a></li>
              <li><a class="" href="../pdf/lista_pdf.php">Consultas PDF</a></li>
              
            </ul>
          </li>
         
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Demeritos</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
               <li><a class="" href="consul_DEM.php">Consulta Demeritos</a></li>
              <li><a class="" href="insertar_DEM.php">Cargar Demeritos</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Cerrar Sesion</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="../../model/cerrar.php">Salir</a></li>
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
              <li><i class="fa fa-home"></i><a href="#">Home</a></li>
              <li><i class="fa fa-file-text-o"></i>Tabla Demeritos</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Cargar Nuevos Demeritos
              </header>
              
            </section>
            
          </div>
        </div>

<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->

<div id="iniciar-sesion">
                <form action="insertar_funcion_DEM.php" method="post">
                    <div class="contenedor-input">
                        <input type="text" class="form-control" name="mes" placeholder="MES" required>
                    </div>

                    <div class="contenedor-input">
                        <label>
                            <span class="req"></span>
                        </label>
                        <input type="text" class="form-control" name="fecha" placeholder="FECHA" required>
                    </div>

                    <div class="contenedor-input">
                        <label>
                             <span class="req"></span>
                        </label>
                        <input type="text" class="form-control" name="No_carroceria" placeholder="NO CARROCERIA" required>
                    </div>

                    <div class="contenedor-input">
                        <label>
                             <span class="req"></span>
                        </label>
                        <input type="text" class="form-control" name="modelo" placeholder="MODELO" required>
                    </div>
					
					<div class="contenedor-input">
                        <label>
                             <span class="req"></span>
                        </label>
                        <input type="text" class="form-control" name="segmento" placeholder="SEGMENTO" required>
                    </div>
					
					<div class="contenedor-input">
                        <label>
                             <span class="req"></span>
                        </label>
                        <input type="text" class="form-control" name="no_conformidad" placeholder="NO CONFORMIDAD" required>
                    </div>
					
					<div class="contenedor-input">
                        <label>
                             <span class="req"></span>
                        </label>
                        <input type="text" class="form-control" name="componente" placeholder="COMPONENTE" required>
                    </div>
					
					<div class="contenedor-input">
                        <label>
                             <span class="req"></span>
                        </label>
                        <input type="text" class="form-control" name="complemento" placeholder="COMPLEMENTO" required>
                    </div>

                        <br>

                    <input type="submit" name="insertar" class="button button-block" value="Guardar Datos">
                </form>
                <a href="../demeritos/index"><input type="button" value="Cancelar"></a>
            </div>


<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
        
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
   
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

  <!-- jquery ui -->
  <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

  <!--custom checkbox & radio-->
  <script type="text/javascript" src="js/ga.js"></script>
  <!--custom switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>

  <!-- colorpicker -->

  <!-- bootstrap-wysiwyg -->
  <script src="js/jquery.hotkeys.js"></script>
  <script src="js/bootstrap-wysiwyg.js"></script>
  <script src="js/bootstrap-wysiwyg-custom.js"></script>
  <script src="js/moment.js"></script>
  <script src="js/bootstrap-colorpicker.js"></script>
  <script src="js/daterangepicker.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- ck editor -->
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
  <!-- custom form component script for this page-->
  <script src="js/form-component.js"></script>
  <!-- custome script for all page -->
  <script src="js/scripts.js"></script>


</body>

</html>
