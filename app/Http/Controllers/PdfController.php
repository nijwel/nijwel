<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class PdfController extends Controller
{
    public function generatePDF()
    {
        $data = ['title' => 'Welcome to Nazrul portfolio'];
        $pdf = PDF::loadView('myPDF', $data);
  
        return $pdf->download('Nazrul Islam.pdf');
    }
}
