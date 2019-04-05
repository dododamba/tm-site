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
        defaultLog(CarouselCitation::class);
        return view('backEnd.admin.carouselcitation.index', compact('carouselcitation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        createLog(CarouselCitation::class);
        return view('backEnd.admin.carouselcitation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {


        if ( CarouselCitation::create($request->all())) {
            session()->flash('message', tableName(CarouselCitation::class).' ajouté avec succès, id = '.lastChild(CarouselCitation::class));
            storeLog(CarouselCitation::class);
            return redirect('carouselcitation');

        }
        createFailureLog(CarouselCitation::class);
        return redirect('carouselcitation');
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

        if (CarouselCitation::findOrFail($id))   {
            $carouselcitation = CarouselCitation::findOrFail($id);
            showLog(CarouselCitation::class,$id);
            return view('backEnd.admin.carouselcitation.show', compact('carouselcitation'));
        }

        session()->flash('error', ' l\'arcticle n\'existe pas !');
        showFailureLog(CarouselCitation::class,$id);
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

        if (CarouselCitation::findOrFail($id))   {
            $carouselcitation = CarouselCitation::findOrFail($id);
            editLog(CarouselCitation::class,$id);
            return view('backEnd.admin.carouselcitation.edit', compact('carouselcitation'));
        }

        editFailureLog(CarouselCitation::class,$id);
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


        if (CarouselCitation::findOrFail($id)){
            $apropo =  CarouselCitation::findOrFail($id);

            if ($apropo->update($request->all())){
                session()->flash('success', 'Carousel mise à jours avec succès!');
                updateLog(CarouselCitation::class,$id);
                return redirect('carouselcitation');
            }
        }


        session()->flash('error', 'Echec mise à jours , l\'arcticle n\'existe pas !');
        updateFailureLog(CarouselCitation::class,$id);
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
        if (CarouselCitation::findOrFail($id))   {
            $apropo = CarouselCitation::findOrFail($id);
            $apropo->delete();
            session()->flash('success', 'mise à jours avec effectué avec succes!');
            deleteLog(CarouselCitation::class,$id);
            return redirect('carousel');
        }

        session()->flash('error', 'Echec suppression , l\'arcticle n\'existe pas !');
        deleteFailureLog(CarouselCitation::class,$id);
        return redirect('carousel');
    }
}
