<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Tabla dinamica</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">

	<script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
</head>
<body>

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
        	<input type="text" name="" id="nombre" class="form-control input-sm">
        	<label>Fecha</label>
        	<input type="date" name="" id="apellido" class="form-control input-sm">
        	<label>No Carroceria</label>
        	<input type="text" name="" id="email" class="form-control input-sm">
        	<label>Modelo</label>
        	<input type="text" name="" id="telefono" class="form-control input-sm">
          <label>Segmento</label>
        	<input type="text" name="" id="telefono" class="form-control input-sm">
          <label>No Conformidad</label>
        	<input type="text" name="" id="telefono" class="form-control input-sm">
          <label>Componente</label>
        	<input type="text" name="" id="telefono" class="form-control input-sm">
          <label>Complemento</label>
        	<input type="text" name="" id="telefono" class="form-control input-sm">
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
        	<input type="text" name="" id="nombre" class="form-control input-sm">
        	<label>Fecha</label>
        	<input type="date" name="" id="apellido" class="form-control input-sm">
        	<label>No Carroceria</label>
        	<input type="text" name="" id="email" class="form-control input-sm">
        	<label>Modelo</label>
        	<input type="text" name="" id="telefono" class="form-control input-sm">
          <label>Segmento</label>
        	<input type="text" name="" id="telefono" class="form-control input-sm">
          <label>No Conformidad</label>
        	<input type="text" name="" id="telefono" class="form-control input-sm">
          <label>Componente</label>
        	<input type="text" name="" id="telefono" class="form-control input-sm">
          <label>Complemento</label>
        	<input type="text" name="" id="telefono" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla.php');
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
          nombre=$('#nombre').val();
          apellido=$('#apellido').val();
          email=$('#email').val();
          telefono=$('#telefono').val();
            agregardatos(nombre,apellido,email,telefono);
        });



        $('#actualizadatos').click(function(){
          actualizaDatos();
        });

    });
</script>