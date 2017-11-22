<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\crew;
use Illuminate\Http\Request;

class crewController extends Controller
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
            $crew = crew::where('supir', 'LIKE', "%$keyword%")
                ->orWhere('pekerjaan', 'LIKE', "%$keyword%")
                ->orWhere('telepon', 'LIKE', "%$keyword%")
                ->orWhere('mulaiKerja', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $crew = crew::paginate($perPage);
        }

        return view('crew.index', compact('crew'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('crew.create');
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
        
        crew::create($requestData);

        return redirect('crew')->with('flash_message', 'crew added!');
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
        $crew = crew::findOrFail($id);

        return view('crew.show', compact('crew'));
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
        $crew = crew::findOrFail($id);

        return view('crew.edit', compact('crew'));
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
        
        $crew = crew::findOrFail($id);
        $crew->update($requestData);

        return redirect('crew')->with('flash_message', 'crew updated!');
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
        crew::destroy($id);

        return redirect('crew')->with('flash_message', 'crew deleted!');
    }
}
