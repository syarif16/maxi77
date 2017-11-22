<?php

namespace App\Http\Controllers;
use App\transaksi;
use Illuminate\Http\Request;
use DB;
class laporanController extends Controller
{
    public function index(Request $request){
    	$tanggalAwal = $request->get('tanggalAwal');
    	$tanggalAkhir = $request->get('tanggalAkhir');
    	$transaksi= transaksi::all();
    	if($tanggalAwal!=null){
    	$transaksi = DB::table('transaksis')
    	->whereBetween('tanggalTransaksi',[$tanggalAwal ,$tanggalAkhir])
    	->get();
}
    	return view('laporan.index' , compact('transaksi'));
    	}
}
