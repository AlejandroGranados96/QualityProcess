<?php 
include ("../../model/funciones.php");
$id = $_GET['id'];
echo $id;
$tipo_moneda=new consul();
$act_mon=$tipo_moneda->del_usuario($id);
?>