<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\replacementLounge;
use Illuminate\Http\Request;

class replacementLoungeController extends Controller
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
            $replacementlounge = replacementLounge::where('nama_student', 'LIKE', "%$keyword%")
                ->orWhere('studentID', 'LIKE', "%$keyword%")
                ->orWhere('intake', 'LIKE', "%$keyword%")
                ->orWhere('jadwal_jam_kuliah', 'LIKE', "%$keyword%")
                ->orWhere('alasan_melakukan_replacement_lounge', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $replacementlounge = replacementLounge::latest()->paginate($perPage);
        }

        return view('admin.replacement-lounge.index', compact('replacementlounge'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.replacement-lounge.create');
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
        
        replacementLounge::create($requestData);

        return redirect('admin/replacement-lounge')->with('flash_message', 'replacementLounge added!');
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
        $replacementlounge = replacementLounge::findOrFail($id);

        return view('admin.replacement-lounge.show', compact('replacementlounge'));
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
        $replacementlounge = replacementLounge::findOrFail($id);

        return view('admin.replacement-lounge.edit', compact('replacementlounge'));
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
        
        $replacementlounge = replacementLounge::findOrFail($id);
        $replacementlounge->update($requestData);

        return redirect('admin/replacement-lounge')->with('flash_message', 'replacementLounge updated!');
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
        replacementLounge::destroy($id);

        return redirect('admin/replacement-lounge')->with('flash_message', 'replacementLounge deleted!');
    }
}
