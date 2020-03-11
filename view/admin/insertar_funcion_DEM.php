<?php
    if(isset($_POST['insertar'])) {

    //get the name and comment entered by user
    $mes = $_POST['mes'];
    $fecha = $_POST['fecha'];
    $No_carroceria = $_POST['No_carroceria'];
    $modelo = $_POST['modelo'];
    $segmento = $_POST['segmento'];
    $no_conformidad = $_POST['no_conformidad'];
	$componente = $_POST['componente'];
	$complemento = $_POST['complemento'];

    //connect to the database
    $dbc = mysqli_connect('localhost', 'root', '', 'qualityprocess') or die('Error connecting to MySQL server');
  

   if($checkrows>0) {
    echo '<script type="text/javascript">'; 
    echo 'alert("Usuario ya registrado en la plataforma");'; 
    echo 'window.location.href = "consul_admin.php";';
    echo '</script>';
   } else {  
    //insert results from the form input
      $query = "INSERT IGNORE INTO demeritos (mes,fecha,No_carroceria,modelo,segmento,no_conformidad,componente,complemento)VALUES ('$mes','$fecha','$No_carroceria','$modelo','$segmento','$no_conformidad','$componente','$complemento')";

      $result = mysqli_query($dbc, $query) or die('Error querying database.');

      mysqli_close($dbc);
    }
    echo '<script type="text/javascript">'; 
    echo 'alert("Carga exitosa");'; 
    echo 'window.location.href = "consul_DEM";';
    echo '</script>';
    };

  ?>

<?php
    if(isset($_POST['insertarr'])) {

    //get the name and comment entered by user
    $mes = $_POST['mes'];
    $fecha = $_POST['fecha'];
    $No_carroceria = $_POST['No_carroceria'];
    $modelo = $_POST['modelo'];
    $segmento = $_POST['segmento'];
    $no_conformidad = $_POST['no_conformidad'];
	$componente = $_POST['componente'];
	$complemento = $_POST['complemento'];

    //connect to the database
    $dbc = mysqli_connect('localhost', 'root', '', 'qualityprocess') or die('Error connecting to MySQL server');
  

   if($checkrows>0) {
    echo '<script type="text/javascript">'; 
    echo 'alert("Usuario ya registrado en la plataforma");'; 
    echo 'window.location.href = "consul_admin.php";';
    echo '</script>';
   } else {  
    //insert results from the form input
      $query = "INSERT IGNORE INTO demeritos (mes,fecha,No_carroceria,modelo,segmento,no_conformidad,componente,complemento)VALUES ('$mes','$fecha','$No_carroceria','$modelo','$segmento','$no_conformidad','$componente','$complemento')";

      $result = mysqli_query($dbc, $query) or die('Error querying database.');

      mysqli_close($dbc);
    }
    echo '<script type="text/javascript">'; 
    echo 'alert("Carga exitosa");'; 
    echo 'window.location.href = "ListaDemeritos";';
    echo '</script>';
    };

  ?>