<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class PdfController extends Controller
{
    public function download(){

        
        $pdf = PDF::loadView('orders.factura_download');

        return $pdf->download('Factura de Venta.pdf');

    }
}
