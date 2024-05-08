<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function rcPdf(){

        // $pdf = Pdf::loadView('pdf.rc-pdf');
        // return $pdf->download('recibo-de-caja.pdf');
        return view('pdf.rc-pdf');
    }
}
