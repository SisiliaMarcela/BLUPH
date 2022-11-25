<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\disabled_time;
use Illuminate\Http\Request;

class disabled_timeController extends Controller
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
            $disabled_time = disabled_time::where('id_location_time', 'LIKE', "%$keyword%")
                ->orWhere('date', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $disabled_time = disabled_time::latest()->paginate($perPage);
        }

        return view('admin.disabled_time.index', compact('disabled_time'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.disabled_time.create');
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
        
        disabled_time::create($requestData);

        return redirect('admin/disabled_time')->with('flash_message', 'disabled_time added!');
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
        $disabled_time = disabled_time::findOrFail($id);

        return view('admin.disabled_time.show', compact('disabled_time'));
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
        $disabled_time = disabled_time::findOrFail($id);

        return view('admin.disabled_time.edit', compact('disabled_time'));
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
        
        $disabled_time = disabled_time::findOrFail($id);
        $disabled_time->update($requestData);

        return redirect('admin/disabled_time')->with('flash_message', 'disabled_time updated!');
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
        disabled_time::destroy($id);

        return redirect('admin/disabled_time')->with('flash_message', 'disabled_time deleted!');
    }
}
