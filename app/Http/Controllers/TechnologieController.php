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
        defaultLog(Technologie::class);
        return view('backEnd.admin.technologie.index', compact('technologie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        createLog(Technologie::class);
        return view('backEnd.admin.technologie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {


        if ( Technologie::create($request->all())) {
            session()->flash('message', tableName(Technologie::class).' ajouté avec succès, id = '.lastChild(Technologie::class));
            storeLog(Technologie::class);
            return redirect('technologie');

        }
        createFailureLog(Technologie::class);
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

        if (Technologie::findOrFail($id))   {
            $technologie = Technologie::findOrFail($id);
            showLog(Technologie::class,$id);
            return view('backEnd.admin.technologie.show', compact('technologie'));
        }

        session()->flash('error', ' l\'arcticle n\'existe pas !');
        showFailureLog(Technologie::class,$id);
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

        if (Technologie::findOrFail($id))   {
            $technologie = Technologie::findOrFail($id);
            editLog(Technologie::class,$id);
            return view('backEnd.admin.technologie.edit', compact('technologie'));
        }

        editFailureLog(Technologie::class,$id);
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


        if (Technologie::findOrFail($id)){
            $technologie =  Technologie::findOrFail($id);

            if ($technologie->update($request->all())){
                session()->flash('success', 'Log mise à jours avec succès!');
                updateLog(Technologie::class,$id);
                return redirect('technologie');
            }
        }


        session()->flash('error', 'Echec mise à jours , l\'arcticle n\'existe pas !');
        updateFailureLog(Technologie::class,$id);
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
        if (Technologie::findOrFail($id))   {
            $technologie = Technologie::findOrFail($id);
            $technologie->delete();
            session()->flash('success', 'mise à jours avec effectué avec succes!');
            deleteLog(Technologie::class,$id);
            return redirect('technologie');
        }

        session()->flash('error', 'Echec suppression , l\'arcticle n\'existe pas !');
        deleteFailureLog(Technologie::class,$id);
        return redirect('technologie');
    }
}
