<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ServiceIntro;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class ServiceIntroController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $serviceintro = ServiceIntro::all();
        defaultLog(ServiceIntro::class);
        return view('backEnd.admin.serviceintro.index', compact('serviceintro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        createLog(ServiceIntro::class);
        return view('backEnd.admin.serviceintro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {


        if ( ServiceIntro::create($request->all())) {
            session()->flash('message', tableName(ServiceIntro::class).' ajouté avec succès, id = '.lastChild(ServiceIntro::class));
            storeLog(ServiceIntro::class);
            return redirect('serviceintro');

        }
        createFailureLog(ServiceIntro::class);
        return redirect('serviceintro');
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

        if (ServiceIntro::findOrFail($id))   {
            $serviceintro = ServiceIntro::findOrFail($id);
            showLog(ServiceIntro::class,$id);
            return view('backEnd.admin.serviceintro.show', compact('serviceintro'));
        }

        session()->flash('error', ' l\'arcticle n\'existe pas !');
        showFailureLog(ServiceIntro::class,$id);
        return view('backEnd.admin.serviceintro.show', compact('serviceintro'));

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

        if (ServiceIntro::findOrFail($id))   {
            $serviceintro = ServiceIntro::findOrFail($id);
            editLog(ServiceIntro::class,$id);
            return view('backEnd.admin.serviceintro.edit', compact('serviceintro'));
        }

        editFailureLog(ServiceIntro::class,$id);
        return view('backEnd.admin.serviceintro.edit', compact('serviceintro'));
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


        if (ServiceIntro::findOrFail($id)){
            $serviceintro =  ServiceIntro::findOrFail($id);

            if ($serviceintro->update($request->all())){
                session()->flash('success', 'Log mise à jours avec succès!');
                updateLog(ServiceIntro::class,$id);
                return redirect('serviceintro');
            }
        }


        session()->flash('error', 'Echec mise à jours , l\'arcticle n\'existe pas !');
        updateFailureLog(ServiceIntro::class,$id);
        return redirect('serviceintro');

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
        if (ServiceIntro::findOrFail($id))   {
            $serviceintro = ServiceIntro::findOrFail($id);
            $serviceintro->delete();
            session()->flash('success', 'mise à jours avec effectué avec succes!');
            deleteLog(ServiceIntro::class,$id);
            return redirect('serviceintro');
        }

        session()->flash('error', 'Echec suppression , l\'arcticle n\'existe pas !');
        deleteFailureLog(ServiceIntro::class,$id);
        return redirect('serviceintro');
    }

}
