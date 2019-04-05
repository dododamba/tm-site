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
        defaultLog(Coordonee::class);
        return view('backEnd.admin.coordonees.index', compact('coordonees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        createLog(Coordonee::class);
        return view('backEnd.admin.coordonees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {


        if ( Coordonee::create($request->all())) {
            session()->flash('message', tableName(Coordonee::class).' ajouté avec succès, id = '.lastChild(Coordonee::class));
            storeLog(Coordonee::class);
            return redirect('coordonees');

        }
        createFailureLog(Coordonee::class);
        return redirect('coordonees');
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

        if (Coordonee::findOrFail($id))   {
            $coordonees = Coordonee::findOrFail($id);
            showLog(Coordonee::class,$id);
            return view('backEnd.admin.coordonees.show', compact('coordonees'));
        }

        session()->flash('error', ' l\'arcticle n\'existe pas !');
        showFailureLog(Coordonee::class,$id);
        return view('backEnd.admin.coordonees.show', compact('coordonees'));

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

        if (Coordonee::findOrFail($id))   {
            $coordonees = Coordonee::findOrFail($id);
            editLog(Coordonee::class,$id);
            return view('backEnd.admin.coordonees.edit', compact('coordonees'));
        }

        editFailureLog(Coordonee::class,$id);
        return view('backEnd.admin.coordonees.edit', compact('coordonees'));
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


        if (Coordonee::findOrFail($id)){
            $coordonees =  Coordonee::findOrFail($id);

            if ($coordonees->update($request->all())){
                session()->flash('success', 'Coordonee mise à jours avec succès!');
                updateLog(Coordonee::class,$id);
                return redirect('coordonees');
            }
        }


        session()->flash('error', 'Echec mise à jours , l\'arcticle n\'existe pas !');
        updateFailureLog(Coordonee::class,$id);
        return redirect('coordonees');

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
        if (Coordonee::findOrFail($id))   {
            $coordonees = Coordonee::findOrFail($id);
            $coordonees->delete();
            session()->flash('success', 'mise à jours avec effectué avec succes!');
            deleteLog(Coordonee::class,$id);
            return redirect('coordonees');
        }

        session()->flash('error', 'Echec suppression , l\'arcticle n\'existe pas !');
        deleteFailureLog(Coordonee::class,$id);
        return redirect('coordonees');
    }

}
