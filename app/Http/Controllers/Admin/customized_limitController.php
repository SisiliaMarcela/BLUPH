<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\customized_limit;
use Illuminate\Http\Request;

class customized_limitController extends Controller
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
            $customized_limit = customized_limit::where('date', 'LIKE', "%$keyword%")
                ->orWhere('limit', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $customized_limit = customized_limit::latest()->paginate($perPage);
        }

        return view('admin.customized_limit.index', compact('customized_limit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.customized_limit.create');
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
        
        customized_limit::create($requestData);

        return redirect('admin/customized_limit')->with('flash_message', 'customized_limit added!');
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
        $customized_limit = customized_limit::findOrFail($id);

        return view('admin.customized_limit.show', compact('customized_limit'));
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
        $customized_limit = customized_limit::findOrFail($id);

        return view('admin.customized_limit.edit', compact('customized_limit'));
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
        
        $customized_limit = customized_limit::findOrFail($id);
        $customized_limit->update($requestData);

        return redirect('admin/customized_limit')->with('flash_message', 'customized_limit updated!');
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
        customized_limit::destroy($id);

        return redirect('admin/customized_limit')->with('flash_message', 'customized_limit deleted!');
    }
}
