<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Technologie;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class TechnologieController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $technologie = Technologie::all();

        return view('backEnd.admin.technologie.index', compact('technologie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.technologie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Technologie::create($request->all());

        Session::flash('message', 'Technologie added!');
        Session::flash('status', 'success');

        return redirect('technologie');
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
        $technologie = Technologie::findOrFail($id);

        return view('backEnd.admin.technologie.show', compact('technologie'));
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
        $technologie = Technologie::findOrFail($id);

        return view('backEnd.admin.technologie.edit', compact('technologie'));
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
        
        $technologie = Technologie::findOrFail($id);
        $technologie->update($request->all());

        Session::flash('message', 'Technologie updated!');
        Session::flash('status', 'success');

        return redirect('technologie');
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
        $technologie = Technologie::findOrFail($id);

        $technologie->delete();

        Session::flash('message', 'Technologie deleted!');
        Session::flash('status', 'success');

        return redirect('technologie');
    }

}
