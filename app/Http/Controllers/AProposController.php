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
        defaultLog(APropo::class);
        return view('backEnd.admin.apropos.index', compact('apropos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        createLog(APropo::class);
        return view('backEnd.admin.apropos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {


       if ( APropo::create($request->all())) {
           session()->flash('message', tableName(APropo::class).' ajouté avec succès, id = '.lastChild(APropo::class));
           storeLog(APropo::class);
           return redirect('apropos');

       }
        createFailureLog(APropo::class);
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

        if (APropo::findOrFail($id))   {
            $apropos = APropo::findOrFail($id);
            showLog(APropo::class,$id);
            return view('backEnd.admin.apropos.show', compact('apropos'));
        }

        session()->flash('error', ' l\'arcticle n\'existe pas !');
        showFailureLog(APropo::class,$id);
        return view('backEnd.admin.apropos.show', compact('apropos'));

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

        if (APropo::findOrFail($id))   {
            $apropos = APropo::findOrFail($id);
            editLog(APropo::class,$id);
            return view('backEnd.admin.apropos.edit', compact('apropos'));
        }

         editFailureLog(APropo::class,$id);
        return view('backEnd.admin.apropos.edit', compact('apropos'));
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


       if (APropo::findOrFail($id)){
           $apropo =  APropo::findOrFail($id);

           if ($apropo->update($request->all())){
               session()->flash('success', 'Carousel mise à jours avec succès!');
               updateLog(APropo::class,$id);
               return redirect('apropos');
           }
       }


        session()->flash('error', 'Echec mise à jours , l\'arcticle n\'existe pas !');
        updateFailureLog(APropo::class,$id);
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
        if (APropo::findOrFail($id))   {
            $apropo = APropo::findOrFail($id);
            $apropo->delete();
            session()->flash('success', 'mise à jours avec effectué avec succes!');
            deleteLog(APropo::class,$id);
            return redirect('carousel');
        }

        session()->flash('error', 'Echec suppression , l\'arcticle n\'existe pas !');
           deleteFailureLog(APropo::class,$id);
        return redirect('carousel');
    }

}
