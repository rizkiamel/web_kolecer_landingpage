<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use PDF;

class CetakController extends Controller
{
    public function generatePdf(){
        $data = Page::all();

        $pdf = PDF::loadView('admin.cetak', ['data' => $data]);
        return $pdf->stream();
    }
}
