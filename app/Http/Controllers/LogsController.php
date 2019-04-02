<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Log;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class LogsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $logs = Log::orderBy('created_at','desc')->get();

        return view('backEnd.admin.logs.index', compact('logs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.logs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Log::create($request->all());

        Session::flash('message', 'Log added!');
        Session::flash('status', 'success');

        return redirect('logs');
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
        $log = Log::findOrFail($id);

        return view('backEnd.admin.logs.show', compact('log'));
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
        $log = Log::findOrFail($id);

        return view('backEnd.admin.logs.edit', compact('log'));
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
        
        $log = Log::findOrFail($id);
        $log->update($request->all());

        Session::flash('message', 'Log updated!');
        Session::flash('status', 'success');

        return redirect('logs');
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
        $log = Log::findOrFail($id);

        $log->delete();

        Session::flash('message', 'Log deleted!');
        Session::flash('status', 'success');

        return redirect('logs');
    }

}
