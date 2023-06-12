<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function showPdf($id) {
        $proyecto = Proyecto::find($id);
        $pdf = \PDF::loadview('pdf', compact('proyecto'));

        return $pdf->stream('reporte.pdf');
    }
}