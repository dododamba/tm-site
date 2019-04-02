<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\CarouselCitation;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class CarouselCitationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $carouselcitation = CarouselCitation::all();
        createLog('Consultation','Ouverture de la liste des citations');

        return view('backEnd.admin.carouselcitation.index', compact('carouselcitation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        createLog('Creation','Ouverture de la page de creation des citations');

        return view('backEnd.admin.carouselcitation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        CarouselCitation::create($request->all());

        session()->flash('success', 'citation ajouté avec succès !');
        

        $last_citation = CarouselCitation::orderBy('created_at','desc')->first();

        createLog('Enregistrent','Création de la citation id = '.$last_citation->id);

        return redirect('citations');
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
        $carouselcitation = CarouselCitation::findOrFail($id);

        return view('backEnd.admin.carouselcitation.show', compact('carouselcitation'));
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
        $carouselcitation = CarouselCitation::findOrFail($id);

        return view('backEnd.admin.carouselcitation.edit', compact('carouselcitation'));
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
        
        $carouselcitation = CarouselCitation::findOrFail($id);
        $carouselcitation->update($request->all());

        session()->flash('success', 'CarouselCitation updated!');
        

        return redirect('carouselcitation');
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
        $carouselcitation = CarouselCitation::findOrFail($id);

        $carouselcitation->delete();

        session()->flash('success', 'CarouselCitation deleted!');
        

        return redirect('carouselcitation');
    }

}
