<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RecognitionApply;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function pdf($id)
    {

        $data = RecognitionApply::where('id', $id)->first();
        $pdf = Pdf::loadView('backend.pdf.invoice',compact('data'));
        return $pdf->download('gatepass.pdf');
    }
}
