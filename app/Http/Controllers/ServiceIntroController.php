<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ServiceIntro;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class ServiceIntroController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $serviceintro = ServiceIntro::all();

        return view('backEnd.admin.serviceintro.index', compact('serviceintro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.serviceintro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        ServiceIntro::create($request->all());

        Session::flash('message', 'ServiceIntro added!');
        Session::flash('status', 'success');

        return redirect('serviceintro');
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
        $serviceintro = ServiceIntro::findOrFail($id);

        return view('backEnd.admin.serviceintro.show', compact('serviceintro'));
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
        $serviceintro = ServiceIntro::findOrFail($id);

        return view('backEnd.admin.serviceintro.edit', compact('serviceintro'));
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
        
        $serviceintro = ServiceIntro::findOrFail($id);
        $serviceintro->update($request->all());

        Session::flash('message', 'ServiceIntro updated!');
        Session::flash('status', 'success');

        return redirect('serviceintro');
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
        $serviceintro = ServiceIntro::findOrFail($id);

        $serviceintro->delete();

        Session::flash('message', 'ServiceIntro deleted!');
        Session::flash('status', 'success');

        return redirect('serviceintro');
    }

}
