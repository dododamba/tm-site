<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Service;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class ServiceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $service = Service::all();

        return view('backEnd.admin.service.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Service::create($request->all());

        Session::flash('message', 'Service added!');
        Session::flash('status', 'success');

        return redirect('service');
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
        $service = Service::findOrFail($id);

        return view('backEnd.admin.service.show', compact('service'));
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
        $service = Service::findOrFail($id);

        return view('backEnd.admin.service.edit', compact('service'));
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
        
        $service = Service::findOrFail($id);
        $service->update($request->all());

        Session::flash('message', 'Service updated!');
        Session::flash('status', 'success');

        return redirect('service');
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
        $service = Service::findOrFail($id);

        $service->delete();

        Session::flash('message', 'Service deleted!');
        Session::flash('status', 'success');

        return redirect('service');
    }

}
