<?php

namespace App\Http\Controllers;


use App\Produit;

class ProduitController
{


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $produit = Produit::all();
        defaultLog(Produit::class);
        return view('backEnd.admin.produit.index', compact('produit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        createLog(Produit::class);
        return view('backEnd.admin.produit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {


        if ( Produit::create($request->all())) {
            session()->flash('message', tableName(Produit::class).' ajouté avec succès, id = '.lastChild(Produit::class));
            storeLog(Produit::class);
            return redirect('produit');

        }
        createFailureLog(Produit::class);
        return redirect('produit');
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

        if (Produit::findOrFail($id))   {
            $produit = Produit::findOrFail($id);
            showLog(Produit::class,$id);
            return view('backEnd.admin.produit.show', compact('produit'));
        }

        session()->flash('error', ' l\'arcticle n\'existe pas !');
        showFailureLog(Produit::class,$id);
        return view('backEnd.admin.produit.show', compact('produit'));

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

        if (Produit::findOrFail($id))   {
            $produit = Produit::findOrFail($id);
            editLog(Produit::class,$id);
            return view('backEnd.admin.produit.edit', compact('produit'));
        }

        editFailureLog(Produit::class,$id);
        return view('backEnd.admin.produit.edit', compact('produit'));
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


        if (Produit::findOrFail($id)){
            $produit =  Produit::findOrFail($id);

            if ($produit->update($request->all())){
                session()->flash('success', 'Produit mise à jours avec succès!');
                updateLog(Produit::class,$id);
                return redirect('produit');
            }
        }


        session()->flash('error', 'Echec mise à jours , l\'arcticle n\'existe pas !');
        updateFailureLog(Produit::class,$id);
        return redirect('produit');

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
        if (Produit::findOrFail($id))   {
            $produit = Produit::findOrFail($id);
            $produit->delete();
            session()->flash('success', 'mise à jours avec effectué avec succes!');
            deleteLog(Produit::class,$id);
            return redirect('produit');
        }

        session()->flash('error', 'Echec suppression , l\'arcticle n\'existe pas !');
        deleteFailureLog(Produit::class,$id);
        return redirect('produit');
    }
}