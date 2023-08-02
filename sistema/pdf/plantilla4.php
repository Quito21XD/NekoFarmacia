<?php
	
	require 'fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->SetLeftMargin(40);
			$this->Image('imagenes/logo.jpg', 5, 5, 30 );
			$this->SetFont('Arial','B',15);
			$this->Cell(40);
			$this->Cell(30,30, 'REPORTE PRODUCTOS',0,0,'C');
			$this->Ln(35);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
?>
