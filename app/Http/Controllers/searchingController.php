<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bus;
use App\cari;
use DB;

class searchingController extends Controller
{
	
	public function index()
	{
		return view('searching.searching');
	}

	public function search(Request $request)
	{
		$tanggalBerangkat = $request->get('tanggalBerangkat');
		$tanggalPulang = $request->get('tanggalPulang');
		$jumlahKursi = $request->get('jumlahKursi');

		$sementara;
		if ($jumlahKursi == 1) {
			$sementara = '<';	
		} else {
			$sementara = '>';
		}

		$bus=DB::table('buses')
		->join('detailBuses','detailBuses.idBus','=','buses.id')
		->join('jadwal','detailBuses.idJadwal','=','jadwal.idJadwal')
		->select('buses.*')
		// ->WhereDate('tanggalBerangkat', $tanggalBerangkat)
		// ->Where('jumlahKursi',$sementara, '50')
		// ->Where('tujuan','=',$tujuan)
		->Where('tanggalBerangkat','<', $tanggalBerangkat)
		->Where('tanggalPulang','>', $tanggalBerangkat)
		// ->Where('tanggalPulang','=',0000-00-00)
		->get();

		$cari = new cari;
		$cari->tanggalBerangkat = $request->tanggalBerangkat;
		$cari->tanggalkembali = $request->tanggalPulang;
		$cari->tipe = $request->tipe;		
		$cari->save();
 		
 		// dd($jumlahKursi);

		return view('searching.hasilSearch', compact('bus'));
	}
}

