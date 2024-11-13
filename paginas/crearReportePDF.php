<?php
require('../fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    //$this->Image('logo.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',13);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(50,10,'Reporte de productos Electronic Milenium SAS',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(45, 10, 'Nombre producto', 1, 0, 'C', 0,);
    $this->Cell(45, 10, 'Marca', 1, 0, 'C', 0,);
    $this->Cell(45, 10, 'Precio', 1, 0, 'C', 0,);
    $this->Cell(45, 10, 'Cantidad', 1, 1, 'C', 0,);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

require('../config/bdreporte.php');
$consulta = "SELECT * FROM tabla05";
$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

while($row = $resultado->fetch_assoc()){
$pdf->Cell(45, 10, $row['nomProd'], 1, 0, 'C', 0);
$pdf->Cell(45, 10, $row['marcProd'], 1, 0, 'C', 0);
$pdf->Cell(45, 10, $row['precProd'], 1, 0, 'C', 0);
$pdf->Cell(45, 10, $row['cantProd'], 1, 1, 'C', 0);
}

$pdf->Output();
?>