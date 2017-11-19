<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\bus;
use Illuminate\Http\Request;

class busController extends Controller
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
            $bus = bus::where('namaBus', 'LIKE', "%$keyword%")
                ->orWhere('nopol', 'LIKE', "%$keyword%")
                ->orWhere('tipeBus', 'LIKE', "%$keyword%")
                ->orWhere('seat', 'LIKE', "%$keyword%")
                ->orWhere('jumlahKursi', 'LIKE', "%$keyword%")
                ->orWhere('hargaSewa', 'LIKE', "%$keyword%")
                ->orWhere('fasilitas', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $bus = bus::paginate($perPage);
        }

        return view('bus.index', compact('bus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('bus.create');
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
        
        bus::create($requestData);

        return redirect('bus')->with('flash_message', 'bus added!');
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
        $bus = bus::findOrFail($id);

        return view('bus.show', compact('bus'));
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
        $bus = bus::findOrFail($id);

        return view('bus.edit', compact('bus'));
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
        
        $bus = bus::findOrFail($id);
        $bus->update($requestData);

        return redirect('bus')->with('flash_message', 'bus updated!');
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
        bus::destroy($id);

        return redirect('bus')->with('flash_message', 'bus deleted!');
    }
}
