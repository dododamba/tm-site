<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Coordonee;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class CoordoneesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $coordonees = Coordonee::all();

        return view('backEnd.admin.coordonees.index', compact('coordonees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.coordonees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Coordonee::create($request->all());

        Session::flash('message', 'Coordonee added!');
        Session::flash('status', 'success');

        return redirect('coordonee');
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
        $coordonee = Coordonee::findOrFail($id);

        return view('backEnd.admin.coordonees.show', compact('coordonee'));
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
        $coordonee = Coordonee::findOrFail($id);

        return view('backEnd.admin.coordonees.edit', compact('coordonee'));
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
        
        $coordonee = Coordonee::findOrFail($id);
        $coordonee->update($request->all());

        Session::flash('message', 'Coordonee updated!');
        Session::flash('status', 'success');

        return redirect('coordonee');
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
        $coordonee = Coordonee::findOrFail($id);

        $coordonee->delete();

        Session::flash('message', 'Coordonee deleted!');
        Session::flash('status', 'success');

        return redirect('coordonees');
    }

}
