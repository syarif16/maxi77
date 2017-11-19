<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pemesanan;
use App\Http\Controllers\Controller;
use session;
class pemesanan extends Controller
{
    //
	public function index(Request $Request) {

		$pemesanan = pemesanan::all();

		return view('pemesanan/index', ['pemesanan' => $pemesanan]);
	}

	public function create()
	{
		return view('pemesanan/create');

	}
	public function store(Request $request) {
		$pemesanan = new pemesanan;
		$pemesanan->namaPemesan = $request->nama;
		$pemesanan->alamatPemesan = $request->alamat;
		$pemesanan->telepon = $request->telepon;
		$pemesanan->tujuan = $request->tujuan;
		$pemesanan->tanggalBerangkat = $request->tanggalBerangkat;
		$pemesanan->tanggalPulang = $request->tanggalPulang;
		$pemesanan->status = $request->status;

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
		$pemesanan->tujuan = $request->tujuan;
		$pemesanan->tanggalBerangkat = $request->tanggalBerangkat;
		$pemesanan->tanggalPulang = $request->tanggalPulang;
		$pemesanan->status = $request->status;

		$pemesanan-> save();

		return redirect('pemesanan');
	}
	public function destroy($id) {
		$pemesanan = pemesanan::find($id);
		$pemesanan->delete();

		return redirect('pemesanan');
	}
}
