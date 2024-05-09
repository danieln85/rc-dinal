<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\CobroFac;

class PdfController extends Controller
{
    public function rcPdf(Request $request){
        $id = $request->id_recibo;
        // Obtener los datos del modelo
        $datos = CobroFac::find($id);

        $pdf = Pdf::setOption(['defaultPaperSize' => 'letter', 'defaultFont' => 'arial'])->loadView('pdf.rc-pdf', ['datos' => $datos]);
        return $pdf->download('recibo-de-caja.pdf');
        // return view('pdf.rc-pdf', ['datos' => $datos]);
    }
}
