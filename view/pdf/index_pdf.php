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

  <title>Insertar PDF | Administrador</title>

  <!-- Bootstrap CSS -->
  <link href="view/admin/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="view/admin/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="view/admin/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="view/admin/css/font-awesome.min.css" rel="stylesheet" />
  <link href="view/admin/css/daterangepicker.css" rel="stylesheet" />
  <link href="view/admin/css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="view/admin/css/bootstrap-colorpicker.css" rel="stylesheet" />
  <!-- date picker -->

  <!-- color picker -->

  <!-- Custom styles -->
  <link href="view/admin/css/style.css" rel="stylesheet">
  <link href="view/admin/css/style-responsive.css" rel="stylesheet" />

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
      <a href="inicioAdmin" class="logo">Insertar <span class="lite">PDF</span></a>
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
              <li><i class="fa fa-home"></i><a href="index_admin.php">Home</a></li>
              <li><i class="fa fa-file-text-o"></i>Insertar PDF</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Formulario para guardar documento PDF
              </header>
              
            </section>
            
          </div>
        </div>

        <div class="span12">

<div class="caption">

<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->

<?php
include_once 'config.inc.php';
if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
            $titulo= $_POST['titulo'];
            $descri= $_POST['descripcion'];
            $categoria= $_POST['categoria'];
            $db=new Conect_MySql();
            $sql = "INSERT INTO tbl_documentos(titulo,descripcion,tamanio,tipo,nombre_archivo,categoria) VALUES('$titulo','$descri','$tamanio','$tipo','$nombre','$categoria')";
            $query = $db->execute($sql);
            if($query){
              echo '<script type="text/javascript">'; 
              echo 'alert("Documento Insertado Correctamente");'; 
              echo 'window.location.href = "ConsultaPDF";';
              echo '</script>';
            }
        } else {
            echo "Error";
        }
    }
}
?>

<div>
            <form method="post" action="" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><label>Titulo</label></td>
                        <td><input type="text" name="titulo" required></td>
                    </tr>
                    <tr>
                        <td><label>Descripcion</label></td>
                        <td><textarea name="descripcion" required></textarea></td>
                    </tr>
                    <tr>
                    <div class="contenedor-input">
                    <td><label>Categoria</label></td>
                    <td>    <select name="categoria" required> 
                                <option values="1"> AYUDAS VISUALES </option>
                                <option values="2"> ALERTAS DE CALIDAD </option>
                                <option values="3"> ESTANDARES DE CALIDAD </option>
                                <option values="4"> INSTRUCTIVOS DE TRABAJO </option>
                                <option values="4"> RECLAMOS DE CLIENTES </option>
                        </select> </td>
                     </tr>
                     <tr></tr>
                     <tr>
                     <td colspan="2"><input type="file" name="archivo"></td>
                    
                        <td><input type="submit" value="subir" name="subir"></td>
                        </tr>
                </table>
						</div>
            </form>        
            

<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
        
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
   
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="view/admin/js/jquery.js"></script>
  <script src="view/admin/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="view/admin/js/jquery.scrollTo.min.js"></script>
  <script src="view/admin/js/jquery.nicescroll.js" type="text/javascript"></script>

  <!-- jquery ui -->
  <script src="view/admin/js/jquery-ui-1.9.2.custom.min.js"></script>

  <!--custom checkbox & radio-->
  <script type="text/javascript" src="js/ga.js"></script>
  <!--custom switch-->
  <script src="view/admin/js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="view/admin/js/jquery.tagsinput.js"></script>

  <!-- colorpicker -->

  <!-- bootstrap-wysiwyg -->
  <script src="view/admin/js/jquery.hotkeys.js"></script>
  <script src="view/admin/js/bootstrap-wysiwyg.js"></script>
  <script src="view/admin/js/bootstrap-wysiwyg-custom.js"></script>
  <script src="view/admin/js/moment.js"></script>
  <script src="view/admin/js/bootstrap-colorpicker.js"></script>
  <script src="view/admin/js/daterangepicker.js"></script>
  <script src="view/admin/js/bootstrap-datepicker.js"></script>
  <!-- ck editor -->
  <script type="text/javascript" src="view/admin/assets/ckeditor/ckeditor.js"></script>
  <!-- custom form component script for this page-->
  <script src="view/admin/js/form-component.js"></script>
  <!-- custome script for all page -->
  <script src="view/admin/js/scripts.js"></script>


</body>

</html>
