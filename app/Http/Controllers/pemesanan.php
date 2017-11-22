<?php

namespace App\Http\Controllers;
use App\bus;
use App\cari;
use Illuminate\Http\Request;
use App\pemesanan;
use App\Http\Controllers\Controller;
use session;
use DB;
class pemesanan extends Controller
{
    //
	public function index(Request $Request) {
		 // $pemesanan=pemesanan::all();
		$pemesanan=DB::table('pemesanans')
		->join('buses','buses.id','=','pemesanans.idBus')
		->join('cari','cari.id','=','.idCari')
		->select('tipe','tanggalBerangkat','tanggalkembali','pemesanans.*')
		->get();
		// dd($pemesanan);
		return view('pemesanan/index', ['pemesanan' => $pemesanan]);
	}

	public function create()
	{	$bus=bus::all();
		$cari=cari::all();
		return view('pemesanan/create',['bus'=>$bus], ['cari'=>$cari]);

	}
	public function store(Request $request) {
		$pemesanan = new pemesanan;
		$pemesanan->namaPemesan = $request->nama;
		$pemesanan->alamatPemesan = $request->alamat;
		$pemesanan->telepon = $request->telepon;
		$pemesanan->status = $request->status;
		$pemesanan->tujuan = $request->tujuan;
		$pemesanan->jumlah = $request->jumlah;
		$pemesanan->idBus = $request->idBus;
		$pemesanan->idCari = $request->idCari;
		$pemesanan-> save();

		return redirect('pemesanan');

	}

	public function edit($id) {
		$pemesanan = pemesanan::find($id);

		if(!$pemesanan)
			abort(404);
		return view('pemesanan/edit', ['pemesanan' => $pemesanan]);
	}

	public function update($id , Request $request) {
		$pemesanan = pemesanan::find($id);
		$pemesanan->namaPemesan = $request->nama;
		$pemesanan->alamatPemesan = $request->alamat;
		$pemesanan->telepon = $request->telepon;
		$pemesanan->status = $request->status;
		$pemesanan->idBus = $request->idBus; 
		$pemesanan-> save();

		return redirect('pemesanan');
	}
	public function destroy($id) {
		$pemesanan = pemesanan::find($id);
		$pemesanan->delete();

		return redirect('pemesanan');
	}
}