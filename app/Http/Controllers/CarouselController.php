<?php

namespace App\Http\Controllers;

use App\Carousel;
use App\Http\Requests;
use App\Media;
use App\MediaObject;
use Illuminate\Http\Request;
use Session;

class CarouselController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $carousel = Carousel::all();
        defaultLog(Carousel::class);
        return view('backEnd.admin.carousel.index', compact('carousel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        createLog(Carousel::class);
        return view('backEnd.admin.carousel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {


        if ( Carousel::create($request->all())) {
            session()->flash('message', tableName(Carousel::class).' ajouté avec succès, id = '.lastChild(Carousel::class));
            storeLog(Carousel::class);
            return redirect('carousel');

        }
        createFailureLog(Carousel::class);
        return redirect('carousel');
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

        if (Carousel::findOrFail($id))   {
            $carousel = Carousel::findOrFail($id);
            showLog(Carousel::class,$id);
            return view('backEnd.admin.carousel.show', compact('carousel'));
        }

        session()->flash('error', ' l\'arcticle n\'existe pas !');
        showFailureLog(Carousel::class,$id);
        return view('backEnd.admin.carousel.show', compact('carousel'));

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

        if (Carousel::findOrFail($id))   {
            $carousel = Carousel::findOrFail($id);
            editLog(Carousel::class,$id);
            return view('backEnd.admin.carousel.edit', compact('carousel'));
        }

        editFailureLog(Carousel::class,$id);
        return view('backEnd.admin.carousel.edit', compact('carousel'));
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


        if (Carousel::findOrFail($id)){
            $carousel =  Carousel::findOrFail($id);

            if ($carousel->update($request->all())){
                session()->flash('success', 'Carousel mise à jours avec succès!');
                updateLog(Carousel::class,$id);
                return redirect('carousel');
            }
        }


        session()->flash('error', 'Echec mise à jours , l\'arcticle n\'existe pas !');
        updateFailureLog(Carousel::class,$id);
        return redirect('carousel');

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
        if (Carousel::findOrFail($id))   {
            $carousel = Carousel::findOrFail($id);
            $carousel->delete();
            session()->flash('success', 'mise à jours avec effectué avec succes!');
            deleteLog(Carousel::class,$id);
            return redirect('carousel');
        }

        session()->flash('error', 'Echec suppression , l\'arcticle n\'existe pas !');
        deleteFailureLog(Carousel::class,$id);
        return redirect('carousel');
    }
}
