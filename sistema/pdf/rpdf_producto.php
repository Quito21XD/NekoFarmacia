<?php
	include 'plantilla4.php';
	require 'conexion1.php';
	
	$query = "SELECT codproducto,descripcion,precio,existencia FROM `producto`";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(30,6,'ID',1,0,'C',1);
	$pdf->Cell(30,6,'PRODUCTO',1,0,'C',1);
	$pdf->Cell(30,6,'PRECIO',1,0,'C',1);
    $pdf->Cell(30,6,'STOCK',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(30,6,utf8_decode($row['codproducto']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['descripcion']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['precio']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['existencia']),1,1,'C');
	}
	$pdf->Output();
?>