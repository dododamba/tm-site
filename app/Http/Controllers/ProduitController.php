<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Produit;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class ProduitController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $produit = Produit::all();

        return view('backEnd.admin.produit.index', compact('produit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.produit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Produit::create($request->all());

        Session::flash('message', 'Produit added!');
        Session::flash('status', 'success');

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
        $produit = Produit::findOrFail($id);

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
        $produit = Produit::findOrFail($id);

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
        
        $produit = Produit::findOrFail($id);
        $produit->update($request->all());

        Session::flash('message', 'Produit updated!');
        Session::flash('status', 'success');

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
        $produit = Produit::findOrFail($id);

        $produit->delete();

        Session::flash('message', 'Produit deleted!');
        Session::flash('status', 'success');

        return redirect('produit');
    }

}
