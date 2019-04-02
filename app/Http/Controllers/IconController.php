<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Icon;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class IconController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $icon = Icon::all();

        return view('backEnd.admin.icon.index', compact('icon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.icon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Icon::create($request->all());

        session()->flash('message', 'Icon added!');
        session()->flash('status', 'success');

        return redirect('icons');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $icon = Icon::findOrFail($id);

        return view('backEnd.admin.icon.show', compact('icon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $icon = Icon::findOrFail($id);

        return view('backEnd.admin.icon.edit', compact('icon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $icon = Icon::findOrFail($id);
        $icon->update($request->all());

        session()->flash('message', 'Icon updated!');
        session()->flash('status', 'success');

        return redirect('icons');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $icon = Icon::findOrFail($id);

        $icon->delete();

        session()->flash('message', 'Icon deleted!');
        session()->flash('status', 'success');

        return redirect('icons');
    }

}
