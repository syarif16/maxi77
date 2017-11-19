<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\mitra;
use Illuminate\Http\Request;

class mitraController extends Controller
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
            $mitra = mitra::where('namaMitra', 'LIKE', "%$keyword%")
                ->orWhere('alamatMitra', 'LIKE', "%$keyword%")
                ->orWhere('telpMitra', 'LIKE', "%$keyword%")
                ->orWhere('idUser', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $mitra = mitra::paginate($perPage);
        }

        return view('mitra.index', compact('mitra'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('mitra.create');
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
        
        mitra::create($requestData);

        return redirect('mitra')->with('flash_message', 'mitra added!');
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
        $mitra = mitra::findOrFail($id);

        return view('mitra.show', compact('mitra'));
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
        $mitra = mitra::findOrFail($id);

        return view('mitra.edit', compact('mitra'));
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
        
        $mitra = mitra::findOrFail($id);
        $mitra->update($requestData);

        return redirect('mitra')->with('flash_message', 'mitra updated!');
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
        mitra::destroy($id);

        return redirect('mitra')->with('flash_message', 'mitra deleted!');
    }
}
