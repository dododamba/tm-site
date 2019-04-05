<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Service;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class ServiceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $service = Service::all();
        defaultLog(Service::class);
        return view('backEnd.admin.service.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        createLog(Service::class);
        return view('backEnd.admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {


        if ( Service::create($request->all())) {
            session()->flash('message', tableName(Service::class).' ajouté avec succès, id = '.lastChild(Service::class));
            storeLog(Service::class);
            return redirect('service');

        }
        createFailureLog(Service::class);
        return redirect('service');
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

        if (Service::findOrFail($id))   {
            $service = Service::findOrFail($id);
            showLog(Service::class,$id);
            return view('backEnd.admin.service.show', compact('service'));
        }

        session()->flash('error', ' l\'arcticle n\'existe pas !');
        showFailureLog(Service::class,$id);
        return view('backEnd.admin.service.show', compact('service'));

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

        if (Service::findOrFail($id))   {
            $service = Service::findOrFail($id);
            editLog(Service::class,$id);
            return view('backEnd.admin.service.edit', compact('service'));
        }

        editFailureLog(Service::class,$id);
        return view('backEnd.admin.service.edit', compact('service'));
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


        if (Service::findOrFail($id)){
            $service =  Service::findOrFail($id);

            if ($service->update($request->all())){
                session()->flash('success', 'Log mise à jours avec succès!');
                updateLog(Service::class,$id);
                return redirect('service');
            }
        }


        session()->flash('error', 'Echec mise à jours , l\'arcticle n\'existe pas !');
        updateFailureLog(Service::class,$id);
        return redirect('service');

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
        if (Service::findOrFail($id))   {
            $service = Service::findOrFail($id);
            $service->delete();
            session()->flash('success', 'mise à jours avec effectué avec succes!');
            deleteLog(Service::class,$id);
            return redirect('service');
        }

        session()->flash('error', 'Echec suppression , l\'arcticle n\'existe pas !');
        deleteFailureLog(Service::class,$id);
        return redirect('service');
    }

}
