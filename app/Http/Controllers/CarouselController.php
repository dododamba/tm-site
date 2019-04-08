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

      if ($request->hasFile('media')) {
        $media = $request->file('media');

          $extention = [
              'image/png', 'image/PNG', 'image/JPEG', 'image/jpeg', 'image/jpg', 'image/JPG'
          ];

          $token = name_generator('tmp', 10);
          $filename = file_manager()->filename('images/images/' . $token, 'media');

          if (in_array($media->getMimeType(),$extention)) {
            $data = [
               'lien' => $request->lien,
               'texte' => $request->texte,
               'statut' => (integer)$request->statut,
               'media' => 0
            ];

            if ( Carousel::create($data)) {
              $owner = Carousel::orderBy('created_at','desc')->first();
              $data_media = [
                  'nom' => $filename,
                  'description' => \Illuminate\Support\Str::slug($filename, '-'),
                  'alt' => $filename,
                  'type' => $media->getMimeType(),
                  'owner' => $owner->id
              ];
              if (\App\Media::create($data_media)) {
                file_manager()->store('images/images/' . $token, 'media');
                self::setMedia($filename);
                session()->flash('success','Carousel ajouté avec succès ');
                storeLog(Carousel::class);
                return redirect('carousel');
              }
              storeFailureLog(Carousel::class);
              session()->flash('error','Erreur fichier image,réessayz !');
              return redirect('carousel');


              }
              storeFailureLog(Carousel::class);
              session()->flash('error','Erreur d\'enregistrement du carousel,réessayz !');
              return redirect('carousel');
          }
          storeFailureLog(Carousel::class);
          session()->flash('error','Vueillez choisir un fichier de type image !');
          return redirect('carousel');

      }

        createFailureLog(Carousel::class);
        session()->flash('error','Vueillez choisir un fichier de type image !');
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


    public static function setMedia($name)
    {
      $media = \App\Media::where('nom','=',$name)->first();

      $carousel = Carousel::where('id','=',$media->id)->first();
      $data = [
        'lien' => $carousel->lien,
        'texte' => $carousel->texte,
        'statut' => $carousel->statut,
        'media' => $media->id
      ];

      $carousel->update($data);

    }
}
