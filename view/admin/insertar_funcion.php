<?php
    if(isset($_POST['insertar'])) {

    //get the name and comment entered by user
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $numempleado = $_POST['numempleado'];
    $correo = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $rol = $_POST['rol'];

    //connect to the database
    $dbc = mysqli_connect('localhost', 'root', '', 'qualityprocess') or die('Error connecting to MySQL server');
    $check=mysqli_query($dbc,"select * from usuario where email='$correo' and numero_empleado='$numempleado'");
    $checkrows=mysqli_num_rows($check);

   if($checkrows>0) {
    echo '<script type="text/javascript">'; 
    echo 'alert("Usuario ya registrado en la plataforma");'; 
    echo 'window.location.href = "consul_admin";';
    echo '</script>';
   } else {  
    //insert results from the form input
      $query = "INSERT IGNORE INTO usuario (nombre,apellido,numero_empleado,email,contrasena,rol)VALUES ('$nombre','$apellido','$numempleado','$correo','$contrasena','$rol')";

      $result = mysqli_query($dbc, $query) or die('Error querying database.');

      mysqli_close($dbc);
    }
    echo '<script type="text/javascript">'; 
    echo 'alert("Usuario  registrado exitosamente");'; 
    echo 'window.location.href = "consul_admin";';
    echo '</script>';
    };
  ?>