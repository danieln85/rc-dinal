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

        // Nombre del archivo de descarga
        $nombreArchivo = 'rc-' . $datos->numero_rc . '.pdf';

        // Generar el PDF
        $pdf = Pdf::setOption(['defaultPaperSize' => 'letter', 'defaultFont' => 'calibri'])
                  ->loadView('pdf.rc-pdf', ['datos' => $datos]);

        // Descargar el PDF con el nombre personalizado
        return $pdf->download($nombreArchivo);
    }
}
