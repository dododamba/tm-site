<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\MessageBienvenu;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class MessageBienvenuController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $messagebienvenu = MessageBienvenu::all();

        return view('backEnd.admin.messagebienvenu.index', compact('messagebienvenu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.messagebienvenu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        MessageBienvenu::create($request->all());

        Session::flash('message', 'MessageBienvenu added!');
        Session::flash('status', 'success');

        return redirect('messagebienvenu');
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
        $messagebienvenu = MessageBienvenu::findOrFail($id);

        return view('backEnd.admin.messagebienvenu.show', compact('messagebienvenu'));
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
        $messagebienvenu = MessageBienvenu::findOrFail($id);

        return view('backEnd.admin.messagebienvenu.edit', compact('messagebienvenu'));
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
        
        $messagebienvenu = MessageBienvenu::findOrFail($id);
        $messagebienvenu->update($request->all());

        Session::flash('message', 'MessageBienvenu updated!');
        Session::flash('status', 'success');

        return redirect('messagebienvenu');
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
        $messagebienvenu = MessageBienvenu::findOrFail($id);

        $messagebienvenu->delete();

        Session::flash('message', 'MessageBienvenu deleted!');
        Session::flash('status', 'success');

        return redirect('messagebienvenu');
    }

}
