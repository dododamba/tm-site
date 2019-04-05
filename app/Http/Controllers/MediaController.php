<?php

namespace App\Http\Controllers;

use App\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $medias = Media::all();
        defaultLog(Media::class);
        return view('backEnd.admin.medias.index', compact('medias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        createLog(Media::class);
        return view('backEnd.admin.medias.create');
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

        if (Media::findOrFail($id))   {
            $medias = Media::findOrFail($id);
            showLog(Media::class,$id);
            return view('backEnd.admin.medias.show', compact('medias'));
        }

        session()->flash('error', ' l\'arcticle n\'existe pas !');
        showFailureLog(Media::class,$id);
        return view('backEnd.admin.medias.show', compact('medias'));

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

        if (Media::findOrFail($id))   {
            $medias = Media::findOrFail($id);
            editLog(Media::class,$id);
            return view('backEnd.admin.medias.edit', compact('medias'));
        }

        editFailureLog(Media::class,$id);
        return view('backEnd.admin.medias.edit', compact('medias'));
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


        if (Media::findOrFail($id)){
            $medias =  Media::findOrFail($id);

            if ($medias->update($request->all())){
                session()->flash('success', 'Log mise à jours avec succès!');
                updateLog(Media::class,$id);
                return redirect('medias');
            }
        }


        session()->flash('error', 'Echec mise à jours , l\'arcticle n\'existe pas !');
        updateFailureLog(Media::class,$id);
        return redirect('medias');

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
        if (Media::findOrFail($id))   {
            $medias = Media::findOrFail($id);
            $medias->delete();
            session()->flash('success', 'mise à jours avec effectué avec succes!');
            deleteLog(Media::class,$id);
            return redirect('medias');
        }

        session()->flash('error', 'Echec suppression , l\'arcticle n\'existe pas !');
        deleteFailureLog(Media::class,$id);
        return redirect('medias');
    }

    public function selectImg(Request $request)
    {
        $id = $request->id;
        $media = \App\Media::findOrFail($id);
        $nom = $media->nom;
        $medias = \App\Media::orderBy('created_at', 'desc')->paginate(6);
        $request->session()->put('image', $nom);
        $request->session()->put('image_key',$id);
        return view('backEnd.admin.carousel.create', compact('medias'));
    }


    public function stroreFromRequest(Request $request)
    {
        $format = file_manager()->extension('media');
        $extention = [
            'png', 'PNG', 'JPEG', 'jpeg', 'jpg', 'JPG'
            //'audio'  => ['mp3','MP3','m4a','3gp','wav','bwf','aac'],
            //'video' => ['avi','mp4']
        ];

        if (!in_array($format, $extention)) {
            $token = name_generator('tmp', 10);
            $filename = file_manager()->filename('images/images/' . $token, 'media');
            $data = [
                'nom' => $filename,
                'description' => \Illuminate\Support\Str::slug($filename, '-'),
                'alt' => $filename,
                'type' => $format,
                'owner' => 0
            ];
            if (\App\Media::create($data)) {
                file_manager()->store('images/images/' . $token, 'media');

                $media = \App\Media::all()->last();
                $nom = $media->nom;
                $id = $media->id;
                $request->session()->put('image', $nom);
                $request->session()->put('image_key',$id);
                return view('backEnd.admin.carousel.create', compact('media'));

            } else {
                session()->flash('error', 'Echec de téléchargement, recommencez ');
                return view('backEnd.admin.carousel.create', compact('medias'));
            }

        } else {
            session()->flash('error', 'le fichier choisie n\'est pas une image ');

            return view('backEnd.admin.carousel.create', compact('medias'));


        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $format = file_manager()->extension('media');
        $extention = [
            'png', 'PNG', 'JPEG', 'jpeg', 'jpg', 'JPG'
            //'audio'  => ['mp3','MP3','m4a','3gp','wav','bwf','aac'],
            //'video' => ['avi','mp4']
        ];

        if (!in_array($format, $extention)) {
            $token = name_generator('tmp', 10);
            $filename = file_manager()->filename('images/images/' . $token, 'media');
            $data = [
                'nom' => $filename,
                'description' => Str::slug($filename, '-'),
                'alt' => $filename,
                'type' => $format,
                'owner' => 0
            ];
            if (Media::create($data)) {
                file_manager()->store('images/images/' . $token, 'media');
                session()->flash('success', 'image ajouté avec succès ');
                return redirect('gallery');

            } else {
                session()->flash('error', 'Echec de téléchargement, recommencez ');
                return redirect('gallery');
            }

        } else {
            session()->flash('error', 'le fichier choisie n\'est pas une image ');

            return redirect('gallery');


        }


    }
}
