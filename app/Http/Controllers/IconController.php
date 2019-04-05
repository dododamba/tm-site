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
        defaultLog(Icon::class);
        return view('backEnd.admin.icon.index', compact('icon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        createLog(Icon::class);
        return view('backEnd.admin.icon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {


        if ( Icon::create($request->all())) {
            session()->flash('message', tableName(Icon::class).' ajouté avec succès, id = '.lastChild(Icon::class));
            storeLog(Icon::class);
            return redirect('icon');

        }
        createFailureLog(Icon::class);
        return redirect('icon');
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

        if (Icon::findOrFail($id))   {
            $icon = Icon::findOrFail($id);
            showLog(Icon::class,$id);
            return view('backEnd.admin.icon.show', compact('icon'));
        }

        session()->flash('error', ' l\'arcticle n\'existe pas !');
        showFailureLog(Icon::class,$id);
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

        if (Icon::findOrFail($id))   {
            $icon = Icon::findOrFail($id);
            editLog(Icon::class,$id);
            return view('backEnd.admin.icon.edit', compact('icon'));
        }

        editFailureLog(Icon::class,$id);
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


        if (Icon::findOrFail($id)){
            $icon =  Icon::findOrFail($id);

            if ($icon->update($request->all())){
                session()->flash('success', 'Icon mise à jours avec succès!');
                updateLog(Icon::class,$id);
                return redirect('icon');
            }
        }


        session()->flash('error', 'Echec mise à jours , l\'arcticle n\'existe pas !');
        updateFailureLog(Icon::class,$id);
        return redirect('icon');

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
        if (Icon::findOrFail($id))   {
            $icon = Icon::findOrFail($id);
            $icon->delete();
            session()->flash('success', 'mise à jours avec effectué avec succes!');
            deleteLog(Icon::class,$id);
            return redirect('icon');
        }

        session()->flash('error', 'Echec suppression , l\'arcticle n\'existe pas !');
        deleteFailureLog(Icon::class,$id);
        return redirect('icon');
    }

}
