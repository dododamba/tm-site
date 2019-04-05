<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\MessageBienvenu;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class MessageBienvenuController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $messagebienvenu = MessageBienvenu::all();
        defaultLog(MessageBienvenu::class);
        return view('backEnd.admin.messagebienvenu.index', compact('messagebienvenu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        createLog(MessageBienvenu::class);
        return view('backEnd.admin.messagebienvenu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {


        if ( MessageBienvenu::create($request->all())) {
            session()->flash('message', tableName(MessageBienvenu::class).' ajouté avec succès, id = '.lastChild(MessageBienvenu::class));
            storeLog(MessageBienvenu::class);
            return redirect('messagebienvenu');

        }
        createFailureLog(MessageBienvenu::class);
        return redirect('messagebienvenu');
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

        if (MessageBienvenu::findOrFail($id))   {
            $messagebienvenu = MessageBienvenu::findOrFail($id);
            showLog(MessageBienvenu::class,$id);
            return view('backEnd.admin.messagebienvenu.show', compact('messagebienvenu'));
        }

        session()->flash('error', ' l\'arcticle n\'existe pas !');
        showFailureLog(MessageBienvenu::class,$id);
        return view('backEnd.admin.messagebienvenu.show', compact('messagebienvenu'));

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

        if (MessageBienvenu::findOrFail($id))   {
            $messagebienvenu = MessageBienvenu::findOrFail($id);
            editLog(MessageBienvenu::class,$id);
            return view('backEnd.admin.messagebienvenu.edit', compact('messagebienvenu'));
        }

        editFailureLog(MessageBienvenu::class,$id);
        return view('backEnd.admin.messagebienvenu.edit', compact('messagebienvenu'));
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


        if (MessageBienvenu::findOrFail($id)){
            $messagebienvenu =  MessageBienvenu::findOrFail($id);

            if ($messagebienvenu->update($request->all())){
                session()->flash('success', 'Log mise à jours avec succès!');
                updateLog(MessageBienvenu::class,$id);
                return redirect('messagebienvenu');
            }
        }


        session()->flash('error', 'Echec mise à jours , l\'arcticle n\'existe pas !');
        updateFailureLog(MessageBienvenu::class,$id);
        return redirect('messagebienvenu');

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
        if (MessageBienvenu::findOrFail($id))   {
            $messagebienvenu = MessageBienvenu::findOrFail($id);
            $messagebienvenu->delete();
            session()->flash('success', 'mise à jours avec effectué avec succes!');
            deleteLog(MessageBienvenu::class,$id);
            return redirect('messagebienvenu');
        }

        session()->flash('error', 'Echec suppression , l\'arcticle n\'existe pas !');
        deleteFailureLog(MessageBienvenu::class,$id);
        return redirect('messagebienvenu');
    }
}
