<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$n=$_POST['mes'];
	$a=$_POST['fecha'];
	$e=$_POST['No_carroceria'];
	$t=$_POST['modelo'];
	$t2=$_POST['segmento'];
	$t3=$_POST['no_conformidad'];
	$t4=$_POST['componente'];
	$t5=$_POST['complemento'];

	$sql="INSERT into demeritos (mes,fecha,No_carroceria,modelo,segmento,no_conformidad,componente,complemento)
								values ('$n','$a','$e','$t','$t2','$t3','$t4','$t5')";
	echo $result=mysqli_query($conexion,$sql);

 ?>