<?php
// Test script to verify FPDF installation
if (!file_exists(__DIR__ . '/fpdf186/fpdf.php')) {
    die("FPDF library not found. Please download FPDF from https://www.fpdf.org/ and extract the contents so that 'fpdf.php' is at 'fpdf186/fpdf.php'.\n");
}
require __DIR__ . '/fpdf186/fpdf.php';

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(40, 10, 'FPDF OK');
$pdf->Output();
