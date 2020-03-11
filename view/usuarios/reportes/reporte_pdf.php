<?php
	include("reporte.php");
    require_once("conexion_reporte.php");
	
	$query = "SELECT fecha, modelo, segmento  FROM demeritos";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232,232);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(30,6,'FECHA',1,0,'C',1);
    $pdf->Cell(60,6,'MODELO',1,0,'C',1);
    $pdf->Cell(60,6,'SEGMENTO',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
        $pdf->Cell(30,6,utf8_decode($row['fecha']),1,0,'C');
		$pdf->Cell(60,6,$row['modelo'],1,0,'C');
        $pdf->Cell(60,6,utf8_decode($row['segmento']),1,1,'C');
	}
	$pdf->Output();
?>