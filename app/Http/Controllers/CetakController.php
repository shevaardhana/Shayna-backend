<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use PDF;

class CetakController extends Controller
{
    public function cetak_pdf()
    {
    	$items = Transaction::all();

        $pdf = PDF::loadview('pages.laporan',['items' => $items]);
	    return $pdf->stream('laporan-pesanan-pdf.pdf');
    }
}
