<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\location_time;
use Illuminate\Http\Request;

class location_timeController extends Controller
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
            $location_time = location_time::where('id_location_time', 'LIKE', "%$keyword%")
                ->orWhere('id_location', 'LIKE', "%$keyword%")
                ->orWhere('id_time', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $location_time = location_time::latest()->paginate($perPage);
        }

        return view('admin.location_time.index', compact('location_time'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.location_time.create');
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
        
        location_time::create($requestData);

        return redirect('admin/location_time')->with('flash_message', 'location_time added!');
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
        $location_time = location_time::findOrFail($id);

        return view('admin.location_time.show', compact('location_time'));
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
        $location_time = location_time::findOrFail($id);

        return view('admin.location_time.edit', compact('location_time'));
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
        
        $location_time = location_time::findOrFail($id);
        $location_time->update($requestData);

        return redirect('admin/location_time')->with('flash_message', 'location_time updated!');
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
        location_time::destroy($id);

        return redirect('admin/location_time')->with('flash_message', 'location_time deleted!');
    }
}
