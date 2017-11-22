<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\pemesanan;
use App\transaksi;
use DB;
use Illuminate\Http\Request;

class transaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $transaksi = transaksi::where('tanggalTransaksi', 'LIKE', "%$keyword%")
                ->orWhere('totalPembayaran', 'LIKE', "%$keyword%")
                ->orWhere('idPemesanan', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $transaksi = DB::table('transaksis')
            ->join('pemesanans','pemesanans.id','=','transaksis.idPemesanan')
            ->select('namaPemesan','transaksis.*')
            ->get();
            
        }
        return view('transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $pemesanan=pemesanan::all();

        return view('transaksi.create',['pemesanan'=>$pemesanan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        transaksi::create($requestData);

        return redirect('transaksi')->with('flash_message', 'transaksi added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $transaksi = transaksi::findOrFail($id);

        return view('transaksi.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $transaksi = transaksi::findOrFail($id);

        return view('transaksi.edit', compact('transaksi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $transaksi = transaksi::findOrFail($id);
        $transaksi->update($requestData);

        return redirect('transaksi')->with('flash_message', 'transaksi updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        transaksi::destroy($id);

        return redirect('transaksi')->with('flash_message', 'transaksi deleted!');
    }
}
