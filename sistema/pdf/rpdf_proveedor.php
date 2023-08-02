<?php
	include 'plantilla2.php';
	require 'conexion1.php';
	
	$query = "SELECT codproveedor,contacto,proveedor,telefono,direccion FROM `proveedor`";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(5,6,'ID',1,0,'C',1);
	$pdf->Cell(20,6,'RUC',1,0,'C',1);
	$pdf->Cell(30,6,'PROVEEDOR',1,0,'C',1);
    $pdf->Cell(30,6,'TELEFONO',1,0,'C',1);
	$pdf->Cell(70,6,'DIRECCION',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(5,6,utf8_decode($row['codproveedor']),1,0,'C');
		$pdf->Cell(20,6,utf8_decode($row['contacto']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['proveedor']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['telefono']),1,0,'C');
		$pdf->Cell(70,6,$row['direccion'],1,1,'C');
	}
	$pdf->Output();
?>