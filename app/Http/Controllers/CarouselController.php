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
    public function index(Request $request)
    {
        $carousel = Carousel::all();
        $medias = Media::orderBy('created_at', 'desc')->get();


        if ($request->session()->has('image')) {
            session()->remove('image');
            session()->remove('image_key');
            return view('backEnd.admin.carousel.index', compact('carousel', 'medias'));
        }
        return view('backEnd.admin.carousel.index', compact('carousel', 'medias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $medias = Media::orderBy('created_at', 'desc')->paginate(6);
        return view('backEnd.admin.carousel.create', compact('medias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {


        $image_key = (integer)$request->image;

        $media = Media::findOrFail($image_key);

        $data = [
            'texte' => $request->texte,
            'lien' => $request->lien,
            'statut' => (integer)$request->statut,
            'media' =>$image_key
        ];

         if (Carousel::create($data)) {

                  if ($request->session()->has('image')) {
                      session()->remove('image');
                      session()->remove('image_key');
                      session()->flash('message', 'Element de carousel ajouté avec succès');
                      return redirect('carousel');
                  }
                  session()->flash('message', 'Element de carousel ajouté avec succès');
                  return redirect('carousel');


          }




          Session::flash('message', 'Carousel added!');
          Session::flash('status', 'success');

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
        $carousel = Carousel::findOrFail($id);

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
        $carousel = Carousel::findOrFail($id);

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
        
        $carousel = Carousel::findOrFail($id);
        $carousel->update($request->all());

        session()->flash('message', 'Carousel updated!');
        session()->flash('status', 'success');

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
        $carousel = Carousel::findOrFail($id);

        $carousel->delete();

        session()->flash('message', 'Carousel deleted!');
        session()->flash('status', 'success');

        return redirect('carousel');
    }

}
