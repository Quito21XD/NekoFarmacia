<?php
	include 'plantilla3.php';
	require 'conexion1.php';
	
	$query = "SELECT * FROM cliente";
	$resultado = $mysqli->query($query);
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(5,6,'ID',1,0,'C',1);
	$pdf->Cell(25,6,'CI',1,0,'C',1);
	$pdf->Cell(25,6,'NOMBRE',1,0,'C',1);
	$pdf->Cell(25,6,'TELEFONO',1,0,'C',1);
    $pdf->Cell(72,6,'DIRECCION',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(5,6,utf8_decode($row['idcliente']),1,0,'C');
		$pdf->Cell(25,6,utf8_decode($row['dni']),1,0,'C');
		$pdf->Cell(25,6,utf8_decode($row['nombre']),1,0,'C');
		$pdf->Cell(25,6,utf8_decode($row['telefono']),1,0,'C');
		$pdf->Cell(72,6,utf8_decode($row['direccion']),1,1,'C');
	}
	$pdf->Output();
?>