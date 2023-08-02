<?php
	include 'plantilla1.php';
	require 'conexion1.php';
	
	$query = "SELECT u.idusuario, u.nombre, u.correo, u.usuario, r.rol FROM usuario u INNER JOIN rol r ON u.rol = r.idrol";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(5,6,'ID',1,0,'C',1);
	$pdf->Cell(35,6,'NOMBRE',1,0,'C',1);
	$pdf->Cell(40,6,'CORREO',1,0,'C',1);
    $pdf->Cell(30,6,'USUARIO',1,0,'C',1);
	$pdf->Cell(40,6,'DIRECCION',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(5,6,utf8_decode($row['idusuario']),1,0,'C');
		$pdf->Cell(35,6,utf8_decode($row['nombre']),1,0,'C');
		$pdf->Cell(40,6,utf8_decode($row['correo']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['usuario']),1,0,'C');
		$pdf->Cell(40,6,$row['rol'],1,1,'C');
	}
	$pdf->Output();
?>