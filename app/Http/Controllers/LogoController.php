<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Logo;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $logos = Logo::all();
        defaultLog(Logo::class);
        return view('backEnd.admin.logos.index', compact('logos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        createLog(Logo::class);
        return view('backEnd.admin.logos.create');
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

        if (Logo::findOrFail($id))   {
            $logos = Logo::findOrFail($id);
            showLog(Logo::class,$id);
            return view('backEnd.admin.logos.show', compact('logos'));
        }

        session()->flash('error', ' l\'arcticle n\'existe pas !');
        showFailureLog(Logo::class,$id);
        return view('backEnd.admin.logos.show', compact('logos'));

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

        if (Logo::findOrFail($id))   {
            $logos = Logo::findOrFail($id);
            editLog(Logo::class,$id);
            return view('backEnd.admin.logos.edit', compact('logos'));
        }

        editFailureLog(Logo::class,$id);
        return view('backEnd.admin.logos.edit', compact('logos'));
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


        if (Logo::findOrFail($id)){
            $logos =  Logo::findOrFail($id);

            if ($logos->update($request->all())){
                session()->flash('success', 'Log mise à jours avec succès!');
                updateLog(Logo::class,$id);
                return redirect('logos');
            }
        }


        session()->flash('error', 'Echec mise à jours , l\'arcticle n\'existe pas !');
        updateFailureLog(Logo::class,$id);
        return redirect('logos');

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
        if (Logo::findOrFail($id))   {
            $logos = Logo::findOrFail($id);
            $logos->delete();
            session()->flash('success', 'mise à jours avec effectué avec succes!');
            deleteLog(Logo::class,$id);
            return redirect('logos');
        }

        session()->flash('error', 'Echec suppression , l\'arcticle n\'existe pas !');
        deleteFailureLog(Logo::class,$id);
        return redirect('logos');
    }

    public function selectImg(Request $request)
    {
        $id = $request->id;
        $logo = \App\Logo::findOrFail($id);
        $nom = $logo->nom;
        $logos = \App\Logo::orderBy('created_at', 'desc')->paginate(6);
        $request->session()->put('image', $nom);
        $request->session()->put('image_key',$id);
        createLog(Logo::class);
        return view('backEnd.admin.carousel.create', compact('logos'));
    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $format = file_manager()->extension('logo');
        $extention = [
            'png', 'PNG', 'JPEG', 'jpeg', 'jpg', 'JPG'
            //'audio'  => ['mp3','MP3','m4a','3gp','wav','bwf','aac'],
            //'video' => ['avi','mp4']
        ];

        if (!in_array($format, $extention)) {
            $token = name_generator('tmp', 10);
            $filename = file_manager()->filename('images/images/' . $token, 'logo');
            $data = [
                'nom' => $filename,
                'description' => Str::slug($filename, '-'),
                'alt' => $filename,
                'type' => $format,
                'owner' => 0
            ];
            if (Logo::create($data)) {
                file_manager()->store('images/images/' . $token, 'logo');
                session()->flash('success', 'image ajouté avec succès ');
                return redirect('logo');

            } else {
                session()->flash('error', 'Echec de téléchargement, recommencez ');
                return redirect('logo');
            }

        } else {
            session()->flash('error', 'le fichier choisie n\'est pas une image ');

            return redirect('logo');


        }


    }
}
