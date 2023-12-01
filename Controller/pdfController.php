<?php

namespace Controller;
//use Model\CursoModel;
require('vendor/autoload.php'); //Composer
//require 'vendor/autoload.php';
use Fpdf\Fpdf;
use Controller\InscripcionController;




class PDF extends FPDF
{
    // Page header
    function Header()
    {
        // Logo
        $this->Image('Assets/intecap.png', 10, 6, 30);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(60, 10, 'Reporte inscripcion', 1, 0, 'C');
        // Line break
        $this->Ln(20);
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

class PdfController
{

    public function generate()
    {


        $inscripciones = new InscripcionController;
        $listado = $inscripciones->mostrar();

        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times', '', 12);

        foreach ($listado as $row => $item) {
            $pdf->Cell(50, 15, $item['nombres'], 1,0,'q');
            $pdf->Cell(60,15, $item['curso'],1,0,'q');
            $pdf->Ln();
        }

        

        ob_end_clean(); //Limpiar las etiquetas del header
        $pdf->Output();
    }
}
