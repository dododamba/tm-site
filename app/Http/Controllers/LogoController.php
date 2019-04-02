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
        $logo = Logo::all();

        return view('backEnd.admin.logo.index', compact('logo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.logo.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        $format = file_manager()->extension('logo');
        $extention = [
            'png', 'PNG', 'JPEG', 'jpeg', 'jpg', 'JPG'
    
        ];

        if (!in_array($format, $extention)) {
            $token = name_generator('tmp', 10);
            $filename = file_manager()->filename('images/images/' . $token, 'logo');
            $data = [
                'nom' => $filename,
                'alt' => \Illuminate\Support\Str::slug($filename, '-'),
                'media' => 0
            ];
            
            if (\App\Logo::create($data)) {
                file_manager()->store('images/images/' . $token, 'logo');

                $media = \App\Logo::all()->last();
                $nom = $media->nom;
                $id = $media->id;
             
                return redirect('logos');

            } else {
                session()->flash('error', 'Echec de téléchargement, recommencez ');
                return redirect('logos');
            }

        } else {
            session()->flash('error', 'le fichier choisie n\'est pas une image ');

            return redirect('logos');


        }
    
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
        $logo = Logo::findOrFail($id);

        return view('backEnd.admin.logo.show', compact('logo'));
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
        $logo = Logo::findOrFail($id);

        return view('backEnd.admin.logo.edit', compact('logo'));
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
        
        $logo = Logo::findOrFail($id);
        $logo->update($request->all());

        session()->flash('message', 'Logo updated!');
        session()->flash('status', 'success');

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
        $logo = Logo::findOrFail($id);

        $logo->delete();

        session()->flash('message', 'Logo deleted!');
        session()->flash('status', 'success');

        return redirect('logos');
    }

}
