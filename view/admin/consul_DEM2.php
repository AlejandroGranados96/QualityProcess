<?php 
require_once("../../model/funciones.php");
$col=new consul();
$cons_DEMERITOS = $col->cons_DEMERITOS();
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

  <title>Consulta Demeritos | Administrador</title>

 
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


  <link rel="stylesheet" type="text/css" href="view/admin/admin_demeritos/librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="view/admin/admin_demeritos/librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="view/admin/admin_demeritos/librerias/alertifyjs/css/themes/default.css">

	<script src="view/admin/admin_demeritos/librerias/jquery-3.2.1.min.js"></script>
  <script src="view/admin/admin_demeritos/js/funciones.js"></script>
	<script src="view/admin/admin_demeritos/librerias/bootstrap/js/bootstrap.js"></script>
	<script src="view/admin/admin_demeritos/librerias/alertifyjs/alertify.js"></script>

	
</head>

<body>

<header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="inicioAdmin" class="logo">Consulta <span class="lite">Demeritos</span></a>
      
      <!--logo end-->
      
    </header>
  

   
    
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
<div class="container">
		<div id="tabla"></div>
	</div>

	<!-- Modal para registros nuevos -->


<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega nuevo Demerito</h4>
      </div>
      <div class="modal-body">
        	<label>Mes</label>
        	<input type="text" name="" id="mes" class="form-control input-sm">
        	<label>Fecha</label>
        	<input type="date" name="" id="fecha" class="form-control input-sm">
        	<label>No Carroceria</label>
        	<input type="text" name="" id="No_carroceria" class="form-control input-sm">
        	<label>Modelo</label>
        	<input type="text" name="" id="modelo" class="form-control input-sm">
          <label>Segmento</label>
        	<input type="text" name="" id="segmento" class="form-control input-sm">
          <label>No Conformidad</label>
        	<input type="text" name="" id="no_conformidad" class="form-control input-sm">
          <label>Componente</label>
        	<input type="text" name="" id="componente" class="form-control input-sm">
          <label>Complemento</label>
        	<input type="text" name="" id="complemento" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
        Agregar
        </button>
       
      </div>
    </div>
  </div>
</div>

<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">
      <label>Mes</label>
        	<input type="text" name="" id="mes" class="form-control input-sm">
        	<label>Fecha</label>
        	<input type="date" name="" id="fecha" class="form-control input-sm">
        	<label>No Carroceria</label>
        	<input type="text" name="" id="No_carroceria" class="form-control input-sm">
        	<label>Modelo</label>
        	<input type="text" name="" id="modelo" class="form-control input-sm">
          <label>Segmento</label>
        	<input type="text" name="" id="segmento" class="form-control input-sm">
          <label>No Conformidad</label>
        	<input type="text" name="" id="no_conformidad" class="form-control input-sm">
          <label>Componente</label>
        	<input type="text" name="" id="componente" class="form-control input-sm">
          <label>Complemento</label>
        	<input type="text" name="" id="complemento" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>



</body>


<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('view/admin/admin_demeritos/componentes/tabla.php');
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
          mes=$('#mes').val();
          fecha=$('fecha').val();
          No_carroceria=$('#No_carroceria').val();
          modelo=$('#modelo').val();
          segmento=$('#segmento').val();
          no_conformidad=$('#no_conformidad').val();
          componente=$('#componente').val();
          complemento=$('#complemento').val();
            agregardatos(mes,fecha,No_carroceria,modelo,segmento,no_conformidad,componente,complemento);
        });



        $('#actualizadatos').click(function(){
          actualizaDatos();
        });

    });
</script>
</html>
