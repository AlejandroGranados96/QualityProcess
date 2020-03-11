<?php
include ("../model/funciones.php");

if(isset($_POST['insertar'])){
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$numempleado=$_POST['numempleado'];
$correo=$_POST['email'];
$contrasena=$_POST['contrasena'];
$rol=$_POST['rol'];
$insertar = new consul();
$registro =$insertar->registro_usuarios($nombre,$apellido,$numempleado,$correo,$contrasena,$rol);
}
if(isset($_POST['borrar'])){
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $numempleado=$_POST['numempleado'];
    $correo=$_POST['email'];
    $contrasena=$_POST['contrasena'];
    $rol=$_POST['rol'];
    $col=new consul();
    $cols=$col->del_usuario($nombre,$apellido,$numempleado,$correo,$contrasena,$rol);
    }

if(isset($_POST['add_usuario'])){
    $id_col=$_POST['id_usuario'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $numempleado=$_POST['numempleado'];
    $correo=$_POST['email'];
    $contrasena=$_POST['contrasena'];
    $rol=$_POST['rol'];
    $col = new consul();
    $cols =$col->edit_usuarios($id_col,$nombre,$apellido,$numempleado,$correo,$contrasena,$rol);
}

if(isset($_POST['add_demerito'])){
	$id_col=$_POST['id_demerito'];
    $mes = $_POST['mes'];
    $fecha = $_POST['fecha'];
    $No_carroceria = $_POST['No_carroceria'];
    $modelo = $_POST['modelo'];
    $segmento = $_POST['segmento'];
    $no_conformidad = $_POST['no_conformidad'];
	$componente = $_POST['componente'];
	$complemento = $_POST['complemento'];
    $col = new consul();
    $cols =$col->edit_demerito($id_col,$mes,$fecha,$No_carroceria,$modelo,$segmento,$no_conformidad,$componente,$complemento);
}

if(isset($_POST['borrar_DEM'])){
    $mes = $_POST['mes'];
    $fecha = $_POST['fecha'];
    $No_carroceria = $_POST['No_carroceria'];
    $modelo = $_POST['modelo'];
    $segmento = $_POST['segmento'];
    $no_conformidad = $_POST['no_conformidad'];
	$componente = $_POST['componente'];
	$complemento = $_POST['complemento'];
    $col=new consul();
    $cols=$col->del_DEMERITO($mes,$fecha,$No_carroceria,$modelo,$segmento,$no_conformidad,$componente,$complemento);
    }

?>