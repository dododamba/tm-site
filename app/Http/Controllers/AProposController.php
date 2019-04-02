<?php

namespace App\Http\Controllers;

use App\APropo;
use App\Http\Requests;
use Illuminate\Http\Request;
use Session;

class AProposController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $apropos = APropo::all();
        createLog('Consultation', 'Ouverture de la list de apropos');
        return view('backEnd.admin.apropos.index', compact('apropos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        createLog('Consultation', 'Ouverture de la de creation a propos');
        return view('backEnd.admin.apropos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        APropo::create($request->all());
        createLog('Creation', 'creation de apropos');
        return redirect('apropos');
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
        $apropo = APropo::findOrFail($id);
        createLog('Consultation', 'accès ressource specifique apropo ' . $apropo->id);
        return view('backEnd.admin.apropos.show', compact('apropo'));
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
        $apropo = APropo::findOrFail($id);
        createLog('Modification', 'Ouverture de la page de modification de a propos id = ' . $apropo->id);
        return view('backEnd.admin.apropos.edit', compact('apropo'));
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
        $apropo = APropo::findOrFail($id);
        $apropo->update($request->all());
        createLog('Modification', 'modification de  a propos id= ' . $apropo->id);

        return redirect('apropos');
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
        $apropo = APropo::findOrFail($id);
        $id = $apropo->id;
        $apropo->delete();
        createLog('Suppression', 'Suppression de  a propos id= ' . $id);

        return redirect('apropos');
    }

}
