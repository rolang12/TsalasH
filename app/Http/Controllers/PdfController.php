<?php

namespace App\Http\Controllers;


use Barryvdh\DomPDF\Facade\Pdf as PDF;

class PdfController extends Controller
{
    public function download(){

        
        $pdf = PDF::loadView('orders.factura_download');

        return $pdf->download('Factura de Venta.pdf');

    }
}
