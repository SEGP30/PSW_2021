<?php
require('../fpdf/fpdf.php');
require('config.php');

date_default_timezone_set("America/Bogota");


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Image('../imagenes/ordenador-personal.png',10,10,-150);
$pdf->Ln(20);
$pdf->Cell(90,20,'Fecha: '.date('d.m.Y.H.i.s').'',0);
$pdf->Ln(10);
$pdf->Cell(100,20,utf8_decode('REPORTE DE PRODUCTOS'));
$pdf->Ln(10);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,20,'CODIGO');
$pdf->Cell(40,20,'NOMBRE');
$pdf->Cell(25,20,'MARCA');
$pdf->Cell(20,20,'PRECIO');
$pdf->Cell(25,20,'CANTIDAD');

$pdf->Ln(10);

$pdf->SetFont('Arial','',8);


$query_select = 'SELECT * FROM tabla04';
$resultado = mysqli_query($conn, $query_select);

if (mysqli_num_rows($resultado) > 0) {
    // carga de salida de datos
    while($reg = mysqli_fetch_assoc($resultado)) {



$pdf->Cell(20,20, $reg['codigo'], 0);

$pdf->Cell(40,20, utf8_decode($reg['nombre']), 0);

$pdf->Cell(25,20, utf8_decode($reg['marca']), 0);

$pdf->Cell(20,20, utf8_decode($reg['precio']), 0);

$pdf->Cell(25,20, utf8_decode($reg['cantidad']), 0);

$pdf->Ln(10);

}
}

$pdf->Output();
mysqli_close($conn);
?>